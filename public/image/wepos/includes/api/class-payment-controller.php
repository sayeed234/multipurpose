<?php
namespace WePOS\api;

/**
* Payment API Controller
*/
class Payment extends \WC_REST_Orders_Controller {

    /**
     * Endpoint namespace
     *
     * @var string
     */
    protected $namespace = 'wepos/v1';

    /**
     * Route name
     *
     * @var string
     */
    protected $base = 'payment';

    /**
     * Register all routes releated with stores
     *
     * @return void
     */
    public function register_routes() {
        register_rest_route( $this->namespace, '/' . $this->base . '/gateways', array(
            array(
                'methods'  => \WP_REST_Server::READABLE,
                'callback' => array( $this, 'get_avaible_gateways' ),
                'args'     => $this->get_collection_params()
            ),
        ) );

        register_rest_route( $this->namespace, '/' . $this->base . '/process', array(
            array(
                'methods'             => \WP_REST_Server::CREATABLE,
                'callback'            => array( $this, 'process_payment' ),
                'permission_callback' => array( $this, 'payment_permissions_check' ),
                'args'                => $this->get_collection_params()
            ),
        ) );
    }

    /**
     * Process payment permission callback
     *
     * @since 1.0.2
     *
     * @return void
     */
    public function payment_permissions_check() {
        $hasPermission = true;

        if ( ! current_user_can( 'publish_shop_orders' ) ) {
            $hasPermission = false;
        }

        if ( ! apply_filters( "wepos_rest_{$this->base}_check_permissions", $hasPermission ) ) {
            return new WP_Error( 'wepos_rest_cannot_create', __( 'Sorry, you cannot access this resources.', 'wepos' ), array( 'status' => rest_authorization_required_code() ) );
        }

        return true;
    }

    /**
     * Get available gateways
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function get_avaible_gateways( $request ) {
        $available_gateways = \We_POS::init()->available_gateway();
        $gateways = [];

        foreach ( $available_gateways as $class => $path ) {
            $gateways[] = new $class;
        }

        return rest_ensure_response( $gateways );
    }

    /**
     * Return calculate order data
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function process_payment( $request ) {
        $available_gateways = \We_POS::init()->available_gateway();
        $chosen_gateway = '';

        if ( empty( $request['id'] ) ) {
            return new \WP_Error( 'no-order-id', __( 'No order found', 'wepos' ), [ 'status' => 401 ] );
        }

        foreach ( $available_gateways as $class => $path ) {
            $gateway = new $class;

            if ( $gateway->id == $request['payment_method'] ) {
                $chosen_gateway = $gateway;
            }
        }

        if ( empty( $chosen_gateway->id ) ) {
            return new \WP_Error( 'no-payment-gateway', __( 'No payment gateway found for processing this payment', 'wepos' ), [ 'status' => 401 ] );
        }

        $process_payment = $chosen_gateway->process_payment( $request['id'] );
        return rest_ensure_response( $process_payment );
    }

}
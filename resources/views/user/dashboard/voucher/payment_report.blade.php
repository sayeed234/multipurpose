@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
                <div class="container text-center">
                                <h1>Company Name</h1>
                                <h4>Adresss</h4>
                                <h4>Phone: &nbsp Email:</h4>
                                <p>Payment Voucher</p>
                                
                                
                                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Payment Voucher Number</strong>  &nbsp {{$paydetails->pv_number}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Date</strong>  &nbsp {{$paydetails->p_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>
                                                <td>
                                                    <div><p><strong>Supplier Name</strong>  &nbsp {{$paydetails->s_name}}</p></div>
                                                </td>

                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Payment Type</strong>  &nbsp {{$paydetails->p_type}}</p></div>
                                                </td>
                                                <td>
                                                <div><p><strong>Previous Due</strong>  &nbsp {{$paydetails->pre_due}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Payment Description</strong>  &nbsp {{$paydetails->p_des}}</p></div>
                                                </td>
                                 
                                              
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter User</strong>  &nbsp {{$paydetails->pre_due}}</p></div>
                                                                </td>
                                              
                                               
                                                
                                   </tr>
                                </tbody>
                            </table>
                

</div>

    
@endsection

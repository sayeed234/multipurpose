@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
                <div class="container text-center">
                                <h1>Company Name</h1>
                                <h4>Adresss</h4>
                                <h4>Phone: &nbsp Email:</h4>
                                <p>Transection Voucher</p>
                                
                                
                                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Transection Voucher Number</strong>  &nbsp {{$tradetails->t_voucher}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Date</strong>  &nbsp {{$tradetails->t_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>
                                                <td>
                                                    <div><p><strong>Debit Head</strong>  &nbsp {{$tradetails->t_debit_head}}</p></div>
                                                </td>
                                                <td>
                                                        <div><p><strong>Debit Head Balance</strong>  &nbsp {{$tradetails->t_debit_belence}}</p></div>
                                                    </td>

                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Credit Head</strong>  &nbsp {{$tradetails->t_credit_head}}</p></div>
                                                </td>
                                                <td>
                                                <div><p><strong>Credit Head Balance</strong>  &nbsp {{$tradetails->t_credit_belence}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Transeciton Description</strong>  &nbsp {{$tradetails->t_des}}</p></div>
                                                </td>
                                                <td>
                                                        <div><p><strong>Transeciton Amount</strong>  &nbsp {{$tradetails->t_amount}}</p></div>
                                                    </td>
                                 
                                              
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter User</strong>  &nbsp {{$tradetails->user_id}}</p></div>
                                                                </td>
                                              
                                               
                                                
                                   </tr>
                                </tbody>
                            </table>
                

</div>

    
@endsection

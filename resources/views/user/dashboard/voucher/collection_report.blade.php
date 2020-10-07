@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
                <div class="container text-center">
                                <h1>Company Name</h1>
                                <h4>Adresss</h4>
                                <h4>Phone: &nbsp Email:</h4>
                                <p>Collection Voucher</p>
                                
                                
                                </div>
                <table class="table table-striped no-margin no-border table-invoice">

                                <tbody>
                                    <tr>
                                        <td>
                                            <div><p><strong>Collection Voucher Number:</strong>  &nbsp {{$colldetails->c_voucher}}</p></div>
                                        </td>
                                        <td>
                                        <div><p><strong>Date:</strong>  &nbsp {{$colldetails->c_date}}</p></div>
                                        </td>
                                       
                                        
                                    </tr>
                                    
                                    <tr>
                                                <td>
                                                    <div><p><strong>Company Name:</strong>  &nbsp {{$colldetails->c_name}}</p></div>
                                                </td>
                                                <td>
                                                        <div><p><strong>Previous Due:</strong>  &nbsp {{$colldetails->c_pre_due}}</p></div>
                                                    </td>

                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Payment Type:</strong>  &nbsp {{$colldetails->c_ptype}}</p></div>
                                                </td>
                                                <td>
                                                <div><p><strong>Collection Description:</strong>  &nbsp {{$colldetails->c_des}}</p></div>
                                                </td>
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                    <div><p><strong>Collection Amount:</strong>  &nbsp {{$colldetails->c_amount}}</p></div>
                                                </td>

                                 
                                              
                                               
                                                
                                   </tr>
                                   <tr>
                                                <td>
                                                                <div><p><strong>Enter User:</strong>  &nbsp {{$colldetails->user_id}}</p></div>
                                                                </td>
                                              
                                               
                                                
                                   </tr>
                                </tbody>
                            </table>
                

</div>

    
@endsection

@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="addpayment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">  Add New  Payment </h5>
                        
                    </div>
                    <form method="POST" action="{{url('/payment-add')}}">
                        {{csrf_field()}}
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                            <?php

                                            $date=date('dmY');
        
                                            ?>
                                     
                                    <div class="form-group">
                                     <label for="code">Voucher Number</label>
                                     <input type="text" value="PV{{$date.$lastid++}}"class="form-control " id="" name="pv_number" readonly>
                                     
                                   </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Date</label>
                                 <input type="date" class="form-control " id="" name="p_date" >
                                 
                               </div>
                        </div>
                                       
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                                 <label for="name">Supplier Name:</span></label>
                                                                 <select name="s_name" id="" class="form-control">
                                                                        <option value="">---Select Supplier Name---</option>

                                                                        @foreach ($supplierdetails as $item)
                                                                 <option  value="{{$item->supplier_name}}">{{$item->supplier_name}}</option>
                                                                 @endforeach
                                                                     
                                                                 </select>
                                                </div>
                                        </div> 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                             <label for="code">Previous Dues</label>
                                             <input type="text" class="form-control " id="" name="pre_due" placeholder="Amount">
                                             
                                           </div>
                                    </div>   
                                             
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                             <label for="name">Purcehes Number:</span></label>
                                                             <select name="parches_n" id="" class="form-control">
                                                                 <option value="Previous Dues">Previous Dues</option>

                                                                 
                                                             </select>
                                            </div>
                                        </div>
                                   
                                
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Description</label>
                                                 <input type="text" class="form-control " id="" name="p_des" placeholder="Descrioption">
                                                 
                                               </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                             <label for="name">Payment Type</span></label>
                                                             <select name="p_type" id="" class="form-control">
                                                                    <option value="Cash">Cash</option>
                                                                    <option value="Bkash">Bkash</option>
                                                                    <option value="Bank">Bank</option>


                                                                 
                                                             </select>
                                            </div>
                                    </div> 
                                                      
                                        
                                          
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                     <label for="code">Amount</label>
                                                     <input type="text" class="form-control " id="" name="p_amount" placeholder="Amount">
                                                     
                                                   </div>
                                            </div> 
                                                  
                                </div>
                                       
                        </div>
                                    
                                    <!--  <input type="hidden" value="1" name="status">-->
                  
                                    <div class="modal-footer">
                                            <button type="reset" class="btn btn-default" >Clear</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>         
                                          
                        </div>

                        
                    </form>
                </div>
            </div>
{{-- Edit Company Modal --}}
<div class="modal fade" id="editpayment" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">  Edit  Payment </h5>
                        
                    </div>
                    <form method="POST" action="{{url('/payment_update')}}">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                         
                                <div class="form-group">
                                <label for="code">Voucher Number</label>
                                <input type="text" class="form-control pv_number" id="" name="pv_number"value="" readonly>
                                
                                </div>
                            </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Date</label>
                             <input type="date" class="form-control p_date" id="" name="p_date" >
                             
                           </div>
                    </div>
                                   
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                             <label for="name">Supplier Name:</span></label>
                                                             <select name="s_name"id="s_name"  class="form-control s_name">
                                                                    <option value="">---Select Supplier Name---</option>

                                                                    @foreach ($supplierdetails as $item)
                                                             <option  value="{{$item->supplier_name}}">{{$item->supplier_name}}</option>
                                                             @endforeach
                                                                 
                                                             </select>
                                            </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label for="code">Previous Dues</label>
                                         <input type="text" class="form-control pre_due"  name="pre_due" placeholder="Amount">
                                         <input type="hidden" class="cId" id="" name="id" >
                                       </div>
                                    </div>   
                                         
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                                         <label for="name">Purcehes Number:</span></label>
                                                         <select name="parches_n" id="" class="form-control parches_n">
                                                             <option value="Previous Dues">Previous Dues</option>

                                                             
                                                         </select>
                                        </div>
                                    </div>
                               
                            
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                             <label for="code">Description</label>
                                             <input type="text" class="form-control p_des" id="" name="p_des" placeholder="Descrioption">
                                             
                                           </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                                         <label for="name">Payment Type</span></label>
                                                         <select name="p_type" id="" class="form-control p_type">
                                                                <option value="Cash">Cash</option>
                                                                <option value="Bkash">Bkash</option>
                                                                <option value="Bank">Bank</option>


                                                             
                                                         </select>
                                        </div>
                                </div> 
                                        
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                 <label for="code">Amount</label>
                                                 <input type="text" class="form-control p_amount" id="" name="p_amount" placeholder="Amount">
                                                 
                                               </div>
                                        </div> 
                                              
                            </div>
                                   
                    </div>
                                    
                                    <!--  <input type="hidden" value="1" name="status">-->
                  
                                    <div class="modal-footer">
                                            <button type="reset" class="btn btn-default" >Clear</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                    </div>         
                                          
                        </div>

                        
                    </form>
                </div>
            </div>
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Payment List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addpayment"
                            style="margin-right: 60px;">
                        Add New Payment 
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        <th>Supplier Name</th>
                                        <th>Payment Type</th>
                                        <th>Description</th>
                                        <th>Account</th>
                                        <th>Action</th>
                                </tr>
                        </thead>
                      
                        <tbody>
                       

                                <?php $i=1 ?>
                      
                           
                      @foreach ($paydetails as $item)
                          
                     
                            <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->p_date}}</td>
                            <td>{{$item->pv_number}}</td>
                            <td>{{$item->s_name}}</td>
                            <td>{{$item->p_type}}</td>
                            <td>{{$item->p_des}}</td>
                            <td>{{$item->p_amount}}</td>
                         
                              
                             
                                <td>
                                   
        
        
                                                <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#editpayment" class="btn btn-success" > 
                                                        <span class="fa fa-pencil font-14"></span>
                                                    </button>   
                                                <a href="{{url('/payment-report',$item->id)}}" class="btn btn-info" title="Report">
                                                        <span class="fa fa-file font-14"></span>
                                      
                                                    </a>
                                                <a href="{{url('/payment-delete',$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
                                                        <span class="fa fa-trash font-14"></span>
                                  
                                                    </a>
        
                                </td>
                            </tr>
                     
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>

<script>
               function edit(id) {
                   var x =id;
                   
                   $.ajax({
                       type:'GET',
                       url:"{{url('/pay-edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.pv_number').val(response.pv_number);
                           $('.p_date').val(response.p_date);
                           $('.s_name').val(response.s_name);
                           $('.pre_due').val(response.pre_due);
                           $('.parches_n').val(response.parches_n);
                           $('.p_des').val(response.p_des);
                           $('.p_type').val(response.p_type);
                           $('.cId').val(response.id);
                           $('.p_amount').val(response.p_amount);
  
                          
                           
           
                       },
                       error:function(xhr,status,error){
                           console.log(error);
                           
                       }
           
                 });
               }
           
           
           $(document).ready(function(){
              
           
           });   
           
           </script>
@endsection

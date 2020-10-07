@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="collection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add  Collection </h5>
            
        </div>
        <form method="POST" action="{{url('/collection-add')}}">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                            <?php
                            $data = DB::table('collectionvouchers')->count();
                            $i = $data + 1;
                            $date=date('dmY');

                            ?>
                                    <div class="form-group">
                                    <label for="code">Voucher Number</label>
                                    <input type="text" class="form-control " id="" name="c_voucher" value="CV<?php  echo'' .$date. $i; ?>" readonly>
                                    
                                    </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                            <label for="code">Date</label>
                            <input type="date" class="form-control " id="" name="c_date" >
                            
                        </div>
                    </div>
                       
                    <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Customer Name:</span></label>
                                                 <select name="c_name" id="" class="form-control">
                                                        <option value="">---Select Customer Name---</option>

                                                        @foreach ($customerdetails as $item)
                                                 <option  value="{{$item->customer_name}}">{{$item->customer_name}}</option>
                                                 @endforeach
                                                     
                                                 </select>
                                </div>
                    </div> 
                    <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Previous Dues</label>
                             <input type="text" class="form-control " id="" name="c_pre_due" placeholder="Amount">
                             
                           </div>
                    </div>   
                             
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Purcehes Number:</span></label>
                                             <select name="c_purnum" id="" class="form-control">
                                                 <option value="Previous Dues">Previous Dues</option>
                                                
                                             </select>
                            </div>
                    </div>
                   
                
                    <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Description</label>
                                 <input type="text" class="form-control " id="" name="c_des" placeholder="Descrioption">
                                 
                               </div>
                    </div>
                        
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Payment Type</span></label>
                                             <select name="c_ptype" id="" class="form-control">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Bkash">Bkash</option>
                                                    <option value="Bank">Bank</option>


                                                 
                                             </select>
                            </div>
                    </div> 
                                      
                        
                          
                    <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Amount</label>
                                     <input type="text" class="form-control " id="" name="c_amount" placeholder="Amount">
                                     
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
<div class="modal fade" id="editcollection" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">  Add  Collection </h5>
            
        </div>
        <form method="POST" action="{{url('/collection-update')}}">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">

                                    <div class="form-group">
                                    <label for="code">Voucher Number</label>
                                    <input type="text" class="form-control c_voucher" id="" name="c_voucher" value="" readonly>
                                    <input type="hidden" class="cId"  name="id">

                                    
                                    </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                            <label for="code">Date</label>
                            <input type="date" class="form-control c_date" id="" name="c_date" >
                            
                        </div>
                    </div>
                       
                    <div class="col-sm-6">
                                <div class="form-group">
                                                 <label for="name">Customer Name:</span></label>
                                                 <select name="c_name" id="" class="form-control c_name">
                                                        <option value="">---Select Customer Name---</option>

                                                        @foreach ($customerdetails as $item)
                                                 <option  value="{{$item->customer_name}}">{{$item->customer_name}}</option>
                                                 @endforeach
                                                     
                                                 </select>
                                </div>
                    </div> 
                    <div class="col-sm-6">
                            <div class="form-group">
                             <label for="code">Previous Dues</label>
                             <input type="text" class="form-control c_pre_due" id="" name="c_pre_due" placeholder="Amount">
                             
                           </div>
                    </div>   
                             
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Purcehes Number:</span></label>
                                             <select name="c_purnum" id="" class="form-control c_purnum">
                                                 <option value="">Previous Dues</option>
                                                
                                             </select>
                            </div>
                    </div>
                   
                
                    <div class="col-sm-6">
                                <div class="form-group">
                                 <label for="code">Description</label>
                                 <input type="text" class="form-control c_des" id="" name="c_des" placeholder="Descrioption">
                                 
                               </div>
                    </div>
                        
                    <div class="col-sm-6">
                            <div class="form-group">
                                             <label for="name">Payment Type</span></label>
                                             <select name="c_ptype" id="" class="form-control c_ptype">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Bkash">Bkash</option>
                                                    <option value="Bank">Bank</option>


                                                 
                                             </select>
                            </div>
                    </div> 
                                      
                        
                          
                    <div class="col-sm-6">
                                    <div class="form-group">
                                     <label for="code">Amount</label>
                                     <input type="text" class="form-control c_amount" id="" name="c_amount" placeholder="Amount">
                                     
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
                    <div class="ibox-title">Collection List</div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#collection"
                            style="margin-right: 60px;">
                        Add New Collection
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Voucher Number</th>
                                        <th>Customer Name</th>
                                        <th>Payment Type</th>
                                        <th>Account</th>
                                        <th>Action</th>
                                </tr> 
                        </thead>
                      
                        <tbody>
                       

                                <?php $i=1 ?>
                      
                           @foreach ($collectiondetails as $item)
                               
                        
                      
                            <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$item->c_date}}</td>
                            <td>{{$item->c_voucher}}</td>
                            <td>{{$item->c_name}}</td>
                            <td>{{$item->c_ptype}}</td>
                            <td>{{$item->c_amount}}</td>
                            <td>
                                   
            <button onclick='edit({{$item->id}})' data-toggle="modal" id="edit" data-target="#editcollection" class="btn btn-success" >
                                                <span class="fa fa-pencil font-14"></span>
                                            </button>   
                                        <a href="{{url('collection-report/'.$item->id)}}" class="btn btn-info" title="Report">
                                                    <span class="fa fa-file font-14"></span>
                                  
                                                </a>
                                            <a href="{{url('/collection-delete'.$item->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?'); ">
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
                       url:"{{url('/coll-edit')}}/"+x,
                       success:function(response){
                           console.log(response);
                           $('.c_voucher').val(response.c_voucher);
                           $('.c_date').val(response.c_date);
                           $('.c_name').val(response.c_name);
                           $('.c_pre_due').val(response.c_pre_due);
                           $('.c_purnum').val(response.c_purnum);
                           $('.cId').val(response.id);
                           $('.c_des').val(response.c_des);
                           $('.c_ptype').val(response.c_ptype);
                           $('.c_amount').val(response.c_amount);
                          
                           
           
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

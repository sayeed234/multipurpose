@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Stock Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">My Daily Expense</h5>            
        </div>
        <form method="POST" action="{{url('/daily_expense/store')}}">
           @csrf
            <div class="modal-body">
                    <div class="row">

                       <div class="col-sm-6 form-group">
                     <label>Expense Type</label>
                        <select name="expense_type" class="form-control">
                         <option class="form-control" value="Today All Expense">Today All Expense</option>
                         <option class="form-control" value="Family Member">Family Member</option>
                         <option class="form-control" value="Electriticy Bill">Electriticy Bill</option>
                         <option class="form-control" value="Gas Bill">Gas Bill</option>
                         <option class="form-control" value="Groceries">Groceries</option>
                         <option class="form-control" value="Cable bill">Cable bill</option>
                         <option class="form-control" value="Clothing">Clothing</option>
                         <option class="form-control" value="Delivery">Delivery</option>
                         <option class="form-control" value="Rent">Rent</option>
                         <option class="form-control" value="Salaries">Salaries</option>
                         <option class="form-control" value="Doctor Appointment">Doctor Appointment</option>
                         <option class="form-control" value="Medicine">Medicine</option>
                         <option class="form-control" value="Others">Others</option>
                        </select>
                        </div>
                          <div class="col-sm-6 form-group">
                            <label>Purpose</label>
                            <input class="form-control"  required type="text"  name="purpose">
                        </div>
                         <div class="col-sm-6 form-group">
                            <label>Date</label>
                            <input class="form-control"  required type="date"  name="date" >
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Total Amount</label>
                            <input class="form-control" required  type="number"  name="total_amount">
                        </div> 
                         <div class="col-sm-12 form-group">
                            <label>Expense Details</label>
                    <textarea class="form-control" type="text" name="details" ></textarea>
                        </div>                                              
                      </div>
                </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default" >Clear</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
{{-- Edit Stock Modal --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Expense Update </h5>
                    
                </div>
                <form method="POST" action="{{url('/daily_expense/update')}}">
                 @csrf
                    <div class="modal-body">     
                     <div class="row">

                       <div class="col-sm-6 form-group">
                     <label>Expense Type</label>
                        <select name="expense_type" class="form-control expense_type">
                         <option class="form-control" value="Today All Expense">Today All Expense</option>
                         <option class="form-control" value="Family Member">Family Member</option>
                         <option class="form-control" value="Electriticy Bill">Electriticy Bill</option>
                         <option class="form-control" value="Gas Bill">Gas Bill</option>
                         <option class="form-control" value="Groceries">Groceries</option>
                         <option class="form-control" value="Cable bill">Cable bill</option>
                         <option class="form-control" value="Clothing">Clothing</option>
                         <option class="form-control" value="Delivery">Delivery</option>
                         <option class="form-control" value="Rent">Rent</option>
                         <option class="form-control" value="Salaries">Salaries</option>
                         <option class="form-control" value="Doctor Appointment">Doctor Appointment</option>
                         <option class="form-control" value="Medicine">Medicine</option>
                         <option class="form-control" value="Others">Others</option>
                        </select>
                           <input type="hidden" name="id" class="cId">
                        </div>
                          <div class="col-sm-6 form-group">
                            <label>Purpose</label>
                            <input class="form-control purpose"  required type="text"  name="purpose">
                        </div>
                         <div class="col-sm-6 form-group">
                            <label>Date</label>
                            <input class="form-control date"  required type="date"  name="date" >
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Total Amount</label>
                            <input class="form-control total_amount" required  type="number"  name="total_amount">
                        </div> 
                         <div class="col-sm-12 form-group">
                            <label>Expense Details</label>
                    <textarea class="form-control details" type="text" name="details" ></textarea>
                        </div>                                              
                      </div>
                </div>
                    <div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Expense List</div>
                      @if (session('delete'))
                        <div class="alert alert-dismissible alert-danger">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Delete Successfully</strong>
                        </div>
                    @endif

                        @if (session('add'))
                        <div class="alert alert-dismissible alert-success">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Successfully Added</strong>
                        </div>
                    @endif
                    @if (session('update'))
                        <div class="alert alert-dismissible alert-info">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Successfully Updated</strong>
                        </div>
                    @endif

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                       Today Expense
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Purpose</th>
                                        <th>Total </th>
                                        <th>Details</th>
                                        <th>Action</th>
                
                                </tr>
                        </thead>
                      
                        <tbody>
                               <?php $i=1; ?>
                            @foreach($expense as $expense)
                            <tr>
                                <th>{{$i++}}</th>
                                <td>{{$expense->date}}</td>
                                <td>{{$expense->expense_type}}</td>
                                <td>{{$expense->purpose}}</td>  
                                <td>{{$expense->total_amount}} </td>
                                <td>{{$expense->details}} </td>

                                 <td> <button onclick='edit({{$expense->id}})' data-toggle="modal" id="edit" data-target="#edit" class="btn btn-success" ><span class="fa fa-pencil font-14"></span></button>   
        
                                    <a href="{{  url('/daily_expense/delete/'.$expense->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                                        <span class="fa fa-trash font-14  "></span>
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
                    url:"{{url('/daily_expense/edit')}}/"+x,
                    success:function(response){
                        console.log(response);
                        $('.expense_type').val(response.expense_type);
                        $('.purpose').val(response.purpose); 
                        $('.cId').val(response.id);
                        $('.date').val(response.date);
                        $('.total_amount').val(response.total_amount);
                        $('.details').val(response.details);
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

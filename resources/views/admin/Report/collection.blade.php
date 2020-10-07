@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">    
<div class="container text-center">
        @foreach ($company as $item)
    <h4>{{$item->company_name}}</h4>
    <h6>{{$item->company_address}}</h6>
    <h6>{{$item->company_mobile1}}, &nbsp {{$item->company_mobile2}}</h6>
    <h6>{{$item->company_email}}</h6>
        @endforeach
<br>
<h5> <u>Collection Statement</u> </h5>                               
</div>
    </blockquote>
  </div>
</div>
    
 <div class="ibox"style="margin-top: 5px;">            
            <div class="ibox-head">
                    <div class="card-body">                                           
                    <form action="{{url('/collection_report')}}" method="get"> 
                        @csrf
                                <div class="row">
                                <div class="col-md-2 ">
                                        <div class="row">

                                            <div class="col-md-12" style="float: right;">
                                                <select class="form-control" name="admin" >
                                                <option class="form-control" value="01">Select Admin</option>
                                                @foreach($admin as $admin)
                                                 <option  class="form-control" value="{{$admin->id}}">{{$admin->first_name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                      </div>
                                   </div>
                                    <div class="col-md-4 ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label style="float: right;">From:</label>
                                            </div>
                                            <div class="col-md-8" style="float: right;">
                                                <input type="date" required name="fromDate" value="" class="form-control fromDate"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-1"><label>To:</label></div>
                                            <div class="col-md-5 "><input type="date" value="<?php echo date('Y-m-d'); ?>"class="form-control toDate" name="toDate"
                                                /></div>
                                            <div class="col-md-2 "><input type="submit" class="btn btn-success" value="Load"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                  </div>
            {{--Table Start--}}
            <br><br>
            <div class="ibox-body">

            <div class="row">
              <div class="col-lg-4 col-md-6">
                        
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <div class="m-b-5"><b>Total Collection</b></div>
                                <h2 class="m-b-5 font-strong">{{$incomestate->total}}   Tk.</h2>                               
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        
                    </div>
                    </div> 

                        <br><br><br> <br><br>                                                       
                </div>
        </div>
        
</div>


@endsection

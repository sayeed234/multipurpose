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
    <h6>{{$item->company_mobile1}} &nbsp;&nbsp; {{$item->company_mobile2}}</h6>
    <h6>{{$item->company_email}}</h6>
        @endforeach
<br>                              
</div>
    </blockquote>
  </div>
</div>
    
 <div class="ibox"style="margin-top: 5px;">            
            <div class="ibox-head">
                    <div class="card-body">                                           
                        <h3>All Member Statement</h3>
                        </div>
                  </div>
            {{--Table Start--}}
            <br><br>
            <div class="ibox-body">

            <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                          <form action="{{url('/monthly_report')}}" method="get"> 
                        @csrf
                                <div class="row">
                                <div class="col-md-3 ">
                                        <div class="row">
                                            <div class="col-md-12" style="float: right;">
                                                <select class="form-control"  name="sayeed" >
                                                <option class="form-control" value="1">Collection</option>
                                               <option class="form-control" value="2">Kisti</option>
                                                </select>
                                            </div>
                                      </div>
                                   </div>
                                    <div class="col-md-4 ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label style="float: right;">From:</label>
                                            </div>
                                            <div class="col-md-8" style="float: right;">
                                                <input type="date" required name="fromDate" value="" class="form-control fromDate"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="row">
                                            <div class="col-md-2"><label>To:</label></div>
                                            <div class="col-md-6 "><input type="date" value="<?php echo date('Y-m-d'); ?>"class="form-control toDate" name="toDate"
                                                /></div>
                                            <div class="col-md-4 "><input type="submit" class="btn btn-danger" value="Load"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                                            
                            </div>
                        </div>
                    </div>
                    </div> 

                        <br><br><br> <br><br>                                                       
                </div>
        </div>
        
</div>


@endsection

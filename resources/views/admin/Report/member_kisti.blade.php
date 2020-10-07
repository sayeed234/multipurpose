@extends('admin.master')
@section('content')
<div class="page-content fade-in-up">  
 <div class="ibox"style="margin-top: 5px;">            
            <div class="ibox-head">
                    <div class="card-body">                                           
                    <form action="{{url('/member_kisti_report')}}" method="get"> 
                        @csrf
                                <div class="row">
                                <div class="col-md-3 ">
                                        <div class="row">

                                            <div class="col-md-12" style="float: right;">
                                                <select class="form-control"  name="members" >
                                                <option class="form-control" value="01">Select Member</option>
                                                @foreach($members as $member)
                                                 <option  class="form-control" value="{{$member->id}}">
                                                 {{$member->memberno}} = {{$member->name}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                      </div>
                                   </div>
                                    <div class="col-md-3 ">
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
                  </div>
                  
            {{--Table Start--}}
            <br><br> <br><br>
            <div class="ibox-body">
              <div class="row">
                     <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Amount</th>
                                </tr>
                        </thead>
                        <tbody>
                        @php $i=1;  @endphp
                        @foreach($states as $state)
                         <tr>
                          <td>{{$i++}}</td>
                          <td>{{$state->date}}</td>
                          <td>{{$state->amount}}</td>
                         </tr>
                         
                         @endforeach
                        </tbody>
                    </div>
            @if(session()->has('memberss')==0)

                 @else
          <a href="{{ url('member_kisti_report/invoice/'.Session::get('memberss')) }}"  class="btn btn-info" title="Report" style="margin-left:500px;"> Print This Statement</a>
                 
                 @endif                                                       
                </div>
         </div>
           
</div>
@endsection

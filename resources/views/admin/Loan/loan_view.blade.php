@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title"><h2></h2></div>
            <a href="{{url('/loan')}}" class="btn btn-info" title="View"> 
                         Loan List
                    </a>
                </div>
            <div class="ibox-body">
                    <div class="row">
                     <div  class="col-md-12">
                      <h5><b>Summary</b></h5>
                      <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Loan Amount</th>
                        <th scope="col">Loan %</th>
                        <th scope="col">Payble Total</th>
                        <th scope="col">Total Fee</th>
                        <th scope="col">Due</th>                     
                        </tr>
                        <tr>
                        <td>{{$loan->amount}}</td>
                        <td>{{$loan->loanper}}</td>
                        <td>{{$loan->total}}</td>
                        <td>{{($loan->status)}}</td>
                        <td>@if($loan->type==1) {{($loan->status)}} @else Kisti Paid @endif</td>
                       
                        </tr>
                    </thead>
                    </table>
                      </div> 
                      <div  class="col-md-6">
                      <br>
                      <h5><b>Member Information</b></h5>
                        <table class="table table-bordered">
                    <thead>
                        <tr>
                        <td scope="col">Name</td>
                        <td scope="col">{{$details->name}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Mobile</td>
                        <td scope="col">{{$details->mobile}}</td>
                        </tr>
                        <tr>
                        <td scope="col">NID</td>
                        <td scope="col">{{$details->nid}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Age</td>
                        <td scope="col">{{$details->age}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Father / Husband</td>
                        <td scope="col">{{$details->fhname}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Village</td>
                        <td scope="col">{{$details->village}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Post Office</td>
                        <td scope="col">{{$details->post}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Upazila</td>
                        <td scope="col">{{$details->upazila}}</td>
                        </tr>
                        <tr>
                        <td scope="col">District</td>
                        <td scope="col">{{$details->district}}</td>
                        </tr>
                    </thead>
                    </table>
                      
                      </div> 
                         <div  class="col-md-6">
                         <br>
                      <h5><b>Loan Information</b></h5>
                      <table class="table table-bordered">
                    <thead>
                        <tr>
                        <td scope="col">Created By</td>
                        <td scope="col">{{$admin->first_name}} {{$admin->last_name}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Date</td>
                        <td scope="col">{{$loan->date}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Loan Amount</td>
                        <td scope="col">{{$loan->amount}}</td>
                        </tr>
                         <tr>
                        <td scope="col">From Fee</td>
                        <td scope="col">{{$loan->from_free}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Admission Fee</td>
                        <td scope="col">{{$loan->admit}}</td>
                        </tr>
                         <tr>
                        <td scope="col">MSP</td>
                        <td scope="col">{{$loan->msp}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Process Fee  ( {{$loan->processper}}  % )</td>
                        <td scope="col">{{$loan->proces}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Book Fee</td>
                        <td scope="col">{{$loan->book}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Share ( {{$loan->processper}} % )</td>
                        <td scope="col">{{$loan->share}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Pay Total </td>
                        <td scope="col"><b>{{$loan->total}}</b></td>
                        </tr>
                    </thead>
                    </table>
                      </div>
                                                        
                    </div>
                </div>
        </div>       
</div>



@endsection

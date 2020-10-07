@extends('admin.master')

@section('content')
    <style>
        @media print{
            .header{
                display: none;
            }
            .page-sidebar{
                display: none;
            }
            .page-content{
                margin: 0px;
                padding: 0px;
            }
            .content-wrapper{
                margin: 0px;
                padding: 0px;
            }
            .page-footer{
                display: none;
            }

        }
    </style>
   
    <div class="container"  >
        <div class="page-content">
            <div class="ibox invoice">
                <div class="invoice-header" >
                    <div class="row">
                        <div class="col-12 text-center" style="font-size: 17px;">
                                  @foreach($company as $company)
                                <div class="m-b-5 font-bold">{{$company->company_name}}</div>
                                <h6>{{$company->company_address}}</h6>
                                <h6>{{$company->company_mobile1}} {{$company->company_mobile2}} </h6>
                                <h6>{{$company->company_email}}</h6>
                                <h6>{{$company->company_website}}</h6>
                                
                                
                                <hr>
 
                                 @endforeach
                        </div>
                        <div class="col-6">
                            <h6>

                     <div>Name:  {{$member->name}}</div>
                     <div>Phone: {{$member->mobile}}</div>
                     <div>Address: {{$member->village}} , {{$member->post}} , {{$member->upazila}} </div><hr>
                        </div>
                        <div class="col-6 text-right">
                            <div>
                                      <toppadding><strong>Date: {{$loan->date}}</strong> &nbsp;
                                    </toppadding>
                    <br><strong>Member No: {{$member->memberno}}</strong>&nbsp;</h6><hr>                 
                         </div>
                        </div>
                    </div>
                </div>
               <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
<div class = "panel panel-default">    
              <div class = "panel-body">
         </div>
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
         <table class = "table table-bordered">
                        <tr>
                        <td scope="col">Date</td>
                        <td scope="col">{{$loan->date}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Loan Amount</td>
                        <td scope="col">{{$loan->amount}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">From Fee</td>
                        <td scope="col">{{$loan->from_free}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">Admission Fee</td>
                        <td scope="col">{{$loan->admit}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">MSP</td>
                        <td scope="col">{{$loan->msp}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">Processing Fee ( {{$loan->processper}}  % )</td>
                        <td scope="col">{{$loan->proces}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">Book Fee</td>
                        <td scope="col">{{$loan->book}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">Share ( {{$loan->shareper}}  % )</td>
                        <td scope="col">{{$loan->share}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col">Collection ( {{$loan->loanper}}   % )</td>
                        <td scope="col">{{$loan->profit}} Tk.</td>
                        </tr>
                         <tr>
                        <td scope="col"><b>Loan Paid Total</b> </td>
                        <td scope="col"><b>{{$loan->total}} Tk.</b></td>
                        </tr>

         </table>
      </div> 
                <br><br><br><br>
                <div class="text-right">
                    <a class="btn btn-info printPage" type="button"  style="margin-bottom: 50px;"><i
                                class="fa fa-print" ></i> Print
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6"> 
                         <label><hr>Customer Signature</label><br>
                        {{--  <input type="" style="height: 40px;" name=""> --}} 
                    </div>
                      <div class="col-md-6" style="margin-left: 450px; margin-top: -55px;">  
                         <label><hr>Authorized Signature</label><br>
                    </div>
                    <br> <br> <br>
                    <p style="font-size:10px;"> <?php

                 echo "Issue Date:" . date("Y-m-d");
                  ?></p>
              


                </div>
                
     </div>

            </div>
        </div>
    <div class="col-md-2"></div>

        <style>
            .invoice {
                padding: 10px
            }
            .table-invoice tr td:last-child {
                text-align: right;
            }
        </style>
    </div>
    <script>
        $(document).ready(function () {
            $('.printPage').on('click',function () {
                $(this).hide();
                window.print();
                window.history.back();
            });
        });
    </script>
    </body
@endsection
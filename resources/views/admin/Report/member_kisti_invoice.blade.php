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

                     <div>Name: {{$member->name}}</div>
                     <div>Phone: {{$member->mobile}}</div>
                     <div>Address: {{$member->village}} , {{$member->post}} , {{$member->upazila}}</div><hr>
                        </div>
                        <div class="col-6 text-right">
                            <div>
                                      <toppadding><strong>Date: </strong><?php

                 echo date("Y-m-d");
                  ?> &nbsp;
                                    </toppadding>
                    <br><strong>Member No: </strong>{{$member->memberno}} &nbsp;</h6><hr>                 
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
         <table class = "table table-bordered">
            <tr>
               <th>Sl</th>
               <th>Date</th>
               <th>Amount</th>
            </tr>
            @php $q=1; $sum=0; @endphp
            @foreach($result as $result)
            <tr>
            <td>{{$q++}}</td>
            <td>{{$result->date}}</td>
            <td>{{$result->amount}}</td>
            </tr>
            <?php $sum=$sum+$result->amount ?>
            @endforeach
             <tr>
                <td colspan="2"><b>Total</b></td>
                <td ><b>{{$sum}}</b></td>
             </tr>
         </table>
      </div> 
                <br><br><br><br>
                <div class="text-right">
                    <a class="btn btn-primary printPage" type="button"  style="margin-bottom: 50px;"><i
                                class="fa fa-print" ></i> Print
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6"> 
                         <label><hr>Member Signature</label><br>
                        {{--  <input type="" style="height: 40px;" name=""> --}} 
                    </div>
                      <div class="col-md-6" style="margin-left: 450px; margin-top: -55px;">  
                         <label><hr>Authorized Signature</label><br>
                    </div>
                    <br>
                   
              


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
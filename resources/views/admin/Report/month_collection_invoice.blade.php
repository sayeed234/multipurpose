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
                        <th>SL</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Amount</th>
                        </tr>
                        @php $a=1; @endphp
                        @foreach($month as $month)
                        <tr>
                        <td>{{$a++}}</td>
                         <td>{{$month->memberno}}</td>
                        <td>{{$month->name}}</td>
                        <td>{{$month->village}}, {{$month->post}} , {{$month->upazila}}</td>
                          <td>{{$month->total}}</td>
                        </tr>
                        @endforeach
                    </thead>
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
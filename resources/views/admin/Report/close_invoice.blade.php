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
          <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Total Collection</th>
                        <th>@if($collection==null) 00 Tk. @else{{$collection->total}} Tk. @endif</th>
                        </tr>
                        <tr>
                        <th>Total Kisti</th>
                        <th>@if($kisti==null) 00 Tk. @else {{$kisti->total}} Tk. @endif</th>
                        </tr> <tr>
                        <th>Total MSP</th>
                        <th>@if($msp==null) 00 Tk. @else{{$msp->total}} Tk. @endif</th>
                        </tr> <tr>
                        <th>Total Share</th>
                        <th> @if($share==null) 00 Tk. @else {{$share->total}} Tk.@endif</th>
                        </tr> <tr>
                        <th>Total Loan</th>
                        <th> @if($loan==null) 00 Tk. @else{{$loan->total}} Tk.@endif</th>
                        </tr>
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
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
 
    <div class="col-md-12">
<div class = "panel panel-default">    
              <div class = "panel-body">
         </div>
          <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>SL</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Total Loan</th>
                        <th>Total Collection</th>
                        <th>Total Kisti </th>
                        <th>Balance</th>

                        </tr>
                        @php $a=1; @endphp
                        @foreach($data as $data)
                        <tr>
                        <td>{{$a++}}</td>
                         <td>{{$data->memberno}}</td>
                         <td>{{$data->name}}</td>
                         <td>{{$data->mobile}}</td>
                         <td>{{$data->village}}</td>
                          @php 
                    $loan=DB::table('loans')
                         ->where('loans.member',$data->id)
                         ->select('loans.member',DB::raw('SUM(total) as total')) 
                         ->groupBy('loans.member')
                         ->first();
                        
                          @endphp
                          <td>{{$ll=($loan? $loan->total:'00')}}</td>
                 @php 
                    $daily=DB::table('collections')
                         ->where('collections.collection_member',$data->id)
                         ->select('collections.collection_member',DB::raw('SUM(amount) as totalss')) 
                         ->groupBy('collections.collection_member')
                         ->first();
                        
                          @endphp
                          <td>{{$l=($daily? $daily->totalss:'00')}}</td>
                     @php 
                    $kisti=DB::table('kistis')
                         ->where('kistis.member_id',$data->id)
                         ->select('kistis.member_id',DB::raw('SUM(amount) as totals')) 
                         ->groupBy('kistis.member_id')
                         ->first();
                        //dd($kisti);
                          @endphp
                          <td>{{$k=($kisti ? $kisti->totals:'00')}}</td>
                             <td> {{($k+$l)-$ll}}</td>
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
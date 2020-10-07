@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">


{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title"></div>
                    <button onclick="myFunction()" id="printPage" class="btn btn-info  text-right printPage" type="button"  style="margin-bottom: 0px;"style="margin-right: 60px;">
                            <i class="fa fa-print" ></i>Print
                    </button>
                </div>
                <div class="col-12 text-center" style="font-size: 17px;">
                       
                        <div class="m-b-5 font-bold"></div>
                        @foreach($cdata as $data)
                        <h2>{{$data->company_name}}</h2>
                        <h6>Address: {{$data->company_address}}</h6>
                        <h6></h6>
                        
                     
                        <h6><p>Email:{{$data->company_email}} &nbsp;&nbsp; Mobile: {{$data->company_mobile}}</p></h6>
                        <h6>Website: {{$data->company_website}}</h6>
                        
                        <hr>
                        
                  @endforeach
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover"  cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th class="text-center">Opening Date</th>
                                        <th class="text-center">Account Head Name</th>
                                        <th class="text-center">Balance Type</th>
                                    
                                        <th class="text-right">Opening Balance</th>
                                    </tr>
                        </thead>
                      
                        <tbody>
                                @foreach($acheaddetail as $data)
                                <tr>
                                        <td class="text-center">{{$data->ah_date}}</td>
                                        <td class="text-center">{{$data->ac_head_name}}</td>
                                        <td class="text-center">{{$data->acc_type_name}}</td>
                                        <td class="text-right">{{$data->ah_balance}}</td>
                                </tr>
                                 @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        
</div>


<script>
        function myFunction() {
            printPage.style.visibility = 'hidden';
            sidebar.style.visibility = 'hidden';
            header.style.visibility = 'hidden';
            $(this).hide();

          window.print();
        }
</script>



@endsection

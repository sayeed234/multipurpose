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
    <h6>{{$item->company_website}}</h6>
        @endforeach
<br>                              
   </div>
    </blockquote>
  </div>
</div>
    
 <div class="ibox"style="margin-top: 5px;">            
            <div class="ibox-head">
                    <div class="card-body">                                           
                        <h3 style="float: center;"> Member Close Statement </h3>
                        </div>
                  </div>
            {{--Table Start--}}
            <br><br>
            <div class="ibox-body">

            <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                          <form action="{{url('/close_report')}}" method="get"> 
                        @csrf
                                <div class="row">
                                <div class="col-md-9 ">
                                        <div class="row">
                                          <div class="col-md-4">
                                                <label style="float: right;"> <b>All Member</b></label>
                                            </div>
                                            <div class="col-md-8" style="float: right;">
                                                <select class="form-control"  name="member">
                                                @foreach($member as $member)
                                                <option class="form-control" value="{{$member->id}}">{{$member->memberno}} - {{$member->name}}</option>
                                               @endforeach
                                                </select>
                                            </div>
                                      </div>
                                   </div>
                                    <div class="col-md-3 ">
                                        <div class="row">
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

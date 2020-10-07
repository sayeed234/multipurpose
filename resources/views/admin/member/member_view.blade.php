@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title"><h2>{{$details->memberno}} . {{$details->name}}</h2> 
                    
                    </div>
            <a href="{{url('/member')}}" class="btn btn-info" title="View"> 
                         Member List
                    </a>
                </div>
            <div class="ibox-body">
                    <div class="row">
                    <div  class="col-md-12">
                    <table class="table table-bordered">
                    <thead>
                     <tr>
                        <td scope="col">Unit No. {{$details->unitno}}</td>
                        <td scope="col"> Unit Name. {{$details->unitname}}</td>
                     </tr>
                    </thead>
                    </table>
                    </div>
                      <div  class="col-md-6">
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
                      <h5><b>Nomini Information</b></h5>
                      <table class="table table-bordered">
                    <thead>
                        <tr>
                        <td scope="col">Name</td>
                        <td scope="col">{{$details->subname}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Relation</td>
                        <td scope="col">{{$details->relation}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Village</td>
                        <td scope="col">{{$details->subvillage}}</td>
                        </tr>
                         <tr>
                        <td scope="col">Post Office</td>
                        <td scope="col">{{$details->subpost}}</td>
                        </tr>
                        <tr>
                        <td scope="col">Upazila</td>
                        <td scope="col">{{$details->subupazila}}</td>
                        </tr>
                        <tr>
                        <td scope="col">District</td>
                        <td scope="col">{{$details->subdistrict}}</td>
                        </tr>
                    </thead>
                    </table>
                      <img src="{{ asset($details->image) }}" alt="{{ $details->company_name }}" height="250" width="250" >
                      </div>                  
                    </div>
                </div>
        </div>       
</div>



@endsection

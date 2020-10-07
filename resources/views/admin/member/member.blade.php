@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Membership</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/member/store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-3 form-group">
                        <label>Date</label>
                        <input class="form-control" required type="date" name="date">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Member No</label>
                        <input class="form-control" required type="number" min="1" name="memberno">
                    </div>
                     <div class="col-sm-3 form-group">
                        <label>Unit Name</label>
                        <input class="form-control" type="text" name="unitname">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Unit No</label>
                        <input class="form-control" type="number" min="1" name="unitno">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Name</label>
                        <input class="form-control" required type="text" name="name">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Mobile</label>
                        <input class="form-control"  type="text" name="mobile">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>NID</label>
                        <input class="form-control"  type="text" name="nid">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Age</label>
                        <input class="form-control" type="number" min="1" name="age">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="country">Father / Husband Name</label>
                        <input class="form-control" type="text"  name="fhname">
                    </div>
                      <div class="col-sm-3 form-group">
                        <label for="country">Profession</label>
                        <input class="form-control" type="text"  name="profession">
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="country">Village</label>
                        <input class="form-control" required type="text"  name="village">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label for="country">Post Office</label>
                        <input class="form-control" type="text"  name="post">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label for="country">Upazila</label>
                         <select class="form-control" name="upazila">
                            <option class="form-control" value="Manda">Manda</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Bagmara">Bagmara</option>
                            <option class="form-control" value="Atrai">Atrai</option>
                            <option class="form-control" value="Badalgachhi">Badalgachhi</option>
                            <option class="form-control" value="Dhamoirhat">Dhamoirhat</option>
                            <option class="form-control" value="Mohadevpur">Mohadevpur</option>
                            <option class="form-control" value="Naogaon">Naogaon Sadar</option>
                            <option class="form-control" value="Niamatpur">Niamatpur</option>
                            <option class="form-control" value="Patnitala">Patnitala </option>
                            <option class="form-control" value="Porsha">Porsha</option>
                            <option class="form-control" value="Raninagar">Raninagar</option>
                            <option class="form-control" value="Sapahar">Sapahar</option>
                        </select>
                    </div>
                     <div class="col-sm-4 form-group">
                        <label for="country">District</label>
                        <select class="form-control" name="district">
                            <option class="form-control" value="Naogaon">Naogaon</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Joypurhat">Joypurhat</option>
                            <option class="form-control" value="Natore">Natore</option>
                            <option class="form-control" value="Pabna">Pabna</option>
                            <option class="form-control" value="Naogaon">Chapainawabganj</option>
                            <option class="form-control" value="Chapainawabganj">Bagmara</option>
                            <option class="form-control" value="Bogra">Bogra</option>
                        </select>
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Name</label>
                        <input class="form-control" placeholder="Nomini Name" required type="text" name="subname">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Relation</label>
                        <input class="form-control" required type="text" name="relation">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Village</label>
                        <input class="form-control" required type="text" name="subvillage">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="country">Post Office</label>
                        <input class="form-control" type="text"  name="subpost">
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="country">Upazila</label>
                         <select class="form-control" name="subupazila">
                            <option class="form-control" value="Manda">Manda</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Bagmara">Bagmara</option>
                            <option class="form-control" value="Atrai">Atrai</option>
                            <option class="form-control" value="Badalgachhi">Badalgachhi</option>
                            <option class="form-control" value="Dhamoirhat">Dhamoirhat</option>
                            <option class="form-control" value="Mohadevpur">Mohadevpur</option>
                            <option class="form-control" value="Naogaon">Naogaon Sadar</option>
                            <option class="form-control" value="Niamatpur">Niamatpur</option>
                            <option class="form-control" value="Patnitala">Patnitala </option>
                            <option class="form-control" value="Porsha">Porsha</option>
                            <option class="form-control" value="Raninagar">Raninagar</option>
                            <option class="form-control" value="Sapahar">Sapahar</option>
                        </select>
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="country">District</label>
                        <select class="form-control" name="subdistrict">
                            <option class="form-control" value="Naogaon">Naogaon</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Joypurhat">Joypurhat</option>
                            <option class="form-control" value="Natore">Natore</option>
                            <option class="form-control" value="Pabna">Pabna</option>
                            <option class="form-control" value="Naogaon">Chapainawabganj</option>
                            <option class="form-control" value="Chapainawabganj">Bagmara</option>
                            <option class="form-control" value="Bogra">Bogra</option>
                        </select>
                    </div>
                <div class="col-sm-3 form-group">
                  <label>Member Photo</label>
                  <input class="form-control" required type="file" name="image">
              </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-default" >Clear</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
{{-- Edit Company Modal --}}
<div class="modal fade" class="editbtn"id="editbtn" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Company Info </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('member/update')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-3 form-group">
                        <label>Date</label>
                        <input class="form-control date" required type="date" name="date">
                        <input type="hidden" class="cId" id="id" name="id">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Member No</label>
                        <input class="form-control memberno" required type="number" min="1" name="memberno">
                    </div>
                     <div class="col-sm-3 form-group">
                        <label>Unit Name</label>
                        <input class="form-control unitname" type="text" name="unitname">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Unit No</label>
                        <input class="form-control unitno" type="number" min="1" name="unitno">
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Name</label>
                        <input class="form-control name" required type="text" name="name">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Mobile</label>
                        <input class="form-control mobile"  type="text" name="mobile">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>NID</label>
                        <input class="form-control nid"  type="text" name="nid">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Age</label>
                        <input class="form-control age" type="number" min="1" name="age">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="country">Father / Husband Name</label>
                        <input class="form-control fhname" type="text"  name="fhname">
                    </div>
                      <div class="col-sm-3 form-group">
                        <label for="country">Profession</label>
                        <input class="form-control profession" type="text"  name="profession">
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="country">Village</label>
                        <input class="form-control village" required type="text"  name="village">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label for="country">Post Office</label>
                        <input class="form-control post" type="text"  name="post">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label for="country">Upazila</label>
                         <select class="form-control upazila" name="upazila">
                            <option class="form-control" value="Manda">Manda</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Bagmara">Bagmara</option>
                            <option class="form-control" value="Atrai">Atrai</option>
                            <option class="form-control" value="Badalgachhi">Badalgachhi</option>
                            <option class="form-control" value="Dhamoirhat">Dhamoirhat</option>
                            <option class="form-control" value="Mohadevpur">Mohadevpur</option>
                            <option class="form-control" value="Naogaon">Naogaon Sadar</option>
                            <option class="form-control" value="Niamatpur">Niamatpur</option>
                            <option class="form-control" value="Patnitala">Patnitala </option>
                            <option class="form-control" value="Porsha">Porsha</option>
                            <option class="form-control" value="Raninagar">Raninagar</option>
                            <option class="form-control" value="Sapahar">Sapahar</option>
                        </select>
                    </div>
                     <div class="col-sm-4 form-group">
                        <label for="country">District</label>
                        <select class="form-control district" name="district">
                            <option class="form-control" value="Naogaon">Naogaon</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Joypurhat">Joypurhat</option>
                            <option class="form-control" value="Natore">Natore</option>
                            <option class="form-control" value="Pabna">Pabna</option>
                            <option class="form-control" value="Naogaon">Chapainawabganj</option>
                            <option class="form-control" value="Chapainawabganj">Bagmara</option>
                            <option class="form-control" value="Bogra">Bogra</option>
                        </select>
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Name</label>
                        <input class="form-control subname" placeholder="Nomini Name" required type="text" name="subname">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Relation</label>
                        <input class="form-control relation" required type="text" name="relation">
                    </div>
                     <div class="col-sm-4 form-group">
                        <label>Village</label>
                        <input class="form-control subvillage" required type="text" name="subvillage">
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="country">Post Office</label>
                        <input class="form-control subpost" type="text"  name="subpost">
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="country">Upazila</label>
                         <select class="form-control subupazila" name="subupazila">
                            <option class="form-control" value="Manda">Manda</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Bagmara">Bagmara</option>
                            <option class="form-control" value="Atrai">Atrai</option>
                            <option class="form-control" value="Badalgachhi">Badalgachhi</option>
                            <option class="form-control" value="Dhamoirhat">Dhamoirhat</option>
                            <option class="form-control" value="Mohadevpur">Mohadevpur</option>
                            <option class="form-control" value="Naogaon">Naogaon Sadar</option>
                            <option class="form-control" value="Niamatpur">Niamatpur</option>
                            <option class="form-control" value="Patnitala">Patnitala </option>
                            <option class="form-control" value="Porsha">Porsha</option>
                            <option class="form-control" value="Raninagar">Raninagar</option>
                            <option class="form-control" value="Sapahar">Sapahar</option>
                        </select>
                    </div>
                     <div class="col-sm-3 form-group">
                        <label for="country">District</label>
                        <select class="form-control subdistrict" name="subdistrict">
                            <option class="form-control" value="Naogaon">Naogaon</option>
                            <option class="form-control" value="Rajshahi">Rajshahi</option>
                            <option class="form-control" value="Joypurhat">Joypurhat</option>
                            <option class="form-control" value="Natore">Natore</option>
                            <option class="form-control" value="Pabna">Pabna</option>
                            <option class="form-control" value="Naogaon">Chapainawabganj</option>
                            <option class="form-control" value="Chapainawabganj">Bagmara</option>
                            <option class="form-control" value="Bogra">Bogra</option>
                        </select>
                    </div>
                <div class="col-sm-3 form-group">
                  <label>Member Photo</label>
                  <input class="form-control image"  type="file" name="image">
              </div>
                </div>
            </div>
            <div class="modal-footer">
              
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
{{--Table Start--}}
    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">Member List</div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                       Add Member
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>ID</th>
                                <th>Mobile</th>
                                <th>Village</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            <?php $i=1; ?>
                            @foreach($member as $company)
                            <tr>
                            <td>{{$i++}}</td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->memberno}}</td>
                                <td>{{$company->mobile}}</td>
                                <td>{{$company->village}}</td>
                            <td><img src="{{ asset($company->image) }}" alt="{{ $company->company_name }}" height="50" width="50" >
                            </td>
        
        
                                <td>
                                    
                                 <button onclick='edit({{$company->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit" class="btn btn-success" ><i class="fa fa-pencil font-14"></i></button> 

                        <a href="{{url('/member/delete',$company->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')"> 
                         <span class="fa fa-trash font-14 "></span>
                                        </a>
                    <a href="{{url('/member/view',$company->id)}}" class="btn btn-info" title="View"> 
                         <span class="fa fa-eye font-14 "></span>
                                        </a>
                                </td>
                            </tr>
        
                            @endforeach
        
                        </tbody>
                    </table>
                </div>
        </div>       
</div>
<script>
        function edit(id) {
            var x =id;
            
            $.ajax({
                type:'GET',
                url:"{{url('/member/edit')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.date').val(response.date);
                    $('.cId').val(response.id);
                    $('.memberno').val(response.memberno);
                    $('.unitname').val(response.unitname);
                    $('.unitno').val(response.unitno);
                    $('.name').val(response.name);
                    $('.mobile').val(response.mobile);
                    $('.nid').val(response.age);
                    $('.age').val(response.age);
                    $('.fhname').val(response.fhname);
                    $('.profession').val(response.profession);
                    $('.village').val(response.village);
                    $('.post').val(response.post);
                    $('.upazila').val(response.upazila);
                    $('.district').val(response.district);
                    $('.subname').val(response.subname);
                    $('.relation').val(response.relation);
                    $('.subvillage').val(response.subvillage);
                    $('.subpost').val(response.subpost);
                    $('.subupazila').val(response.subupazila);
                    $('.subdistrict').val(response.subdistrict);

    
                },
                error:function(xhr,status,error){
                    console.log(error);
                    
                }
    
          });
        }
    
    
    $(document).ready(function(){
       
    
    });   
    
    </script>


@endsection

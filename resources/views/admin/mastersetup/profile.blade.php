@extends('admin.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}


button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color:green;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Company </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
         @csrf
            <div class="modal-body">
                <div class="row">

                 
                    <div class="col-sm-6 form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Designation</label>
                        <input class="form-control" type="text" name="designation">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Mobile-1</label>
                        <input class="form-control" type="text" name="mobile1">
                    </div>
                     <div class="col-sm-6 form-group">
                        <label>Mobile-2</label>
                        <input class="form-control" type="text" name="mobile2">
                    </div>
                     <div class="col-sm-6 form-group">
                        <label>Address</label>
                        <input class="form-control" type="text" name="address">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="col-sm-8 form-group">
                        <label>Description</label>
                        <textarea class="form-control" type="text" name="description"> </textarea>
                    </div>
                     <div class="col-sm-4 form-group">
                  <label>Photo</label>
                  <input class="form-control" type="file" name="image">
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
        <form method="POST" action="{{route('update')}}" enctype="multipart/form-data">
           @csrf
            <div class="modal-body">
                <div class="row">

                      <div class="col-sm-6 form-group">
                        <label>Name</label>
                        <input class="form-control name" type="text" name="name">
                        <input type="hidden" name="id" class="cId">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Designation</label>
                        <input class="form-control designation" type="text" name="designation">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Mobile-1</label>
                        <input class="form-control mobile1" type="text" name="mobile1">
                    </div>
                     <div class="col-sm-6 form-group">
                        <label>Mobile-2</label>
                        <input class="form-control mobile2" type="text" name="mobile2">
                    </div>
                     <div class="col-sm-6 form-group">
                        <label>Address</label>
                        <input class="form-control address" type="text" name="address">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Email</label>
                        <input class="form-control email" type="email" name="email">
                    </div>
                    <div class="col-sm-8 form-group">
                        <label>Description</label>
                        <textarea class="form-control description" type="text" name="description"></textarea>
                    </div>
                     <div class="col-sm-4 form-group">
                  <label>Photo</label>
                  <input class="form-control image" type="file" name="image">
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
</div></div>
{{--Table Start--}}
    <div class="ibox"><br><br>
            <div class="row">
            @foreach($profile as $pro)
             <div class="col-md-6">
             <div class="card">
  <img src="{{ asset($pro->image) }}" alt="{{ $pro->name }}"   ><hr>
  <h1>{{$pro->name}}</h1>
  <p class="title">{{$pro->designation}}</p>
  <p>{{$pro->mobile1}} <span>{{$pro->mobile2}}</span></p>
  <p>{{$pro->email}}</p>
  <p>{{$pro->address}} </p>
  <p text-align-justify>{{$pro->description}} </p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-youtube"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button onclick='edit({{$pro->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit">Update</button></p>


            </div> 
         </div>
         @endforeach
       
       </div>
         <br><br><br>  <br><br><br>
</div>

<script>
        function edit(id) {
            var x =id;
            
            $.ajax({
                type:'GET',
                url:"{{url('/profile/edit')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.name').val(response.name);
                    $('.cId').val(response.id);
                    $('.designation').val(response.designation);
                    $('.mobile1').val(response.mobile1);
                    $('.mobile2').val(response.mobile2);
                    $('.address').val(response.address);
                    $('.email').val(response.email);
                    $('.description').val(response.description);
    
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

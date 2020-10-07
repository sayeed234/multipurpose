@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
{{-- Add Company Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog   modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Share</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/msp/store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Date</label>
                        <input class="form-control" required type="date" name="date">
                     </div>
                     <div class="col-sm-6 form-group">
                        <label>Member Name</label>
                       <select name="collection_member" class="form-control" >
                       @foreach($list as $list)
                       <option class="form-control" value="{{$list->id}}">{{$list->memberno}} = {{$list->name}}</option>
                       @endforeach
                       </select>
                     </div>
                     <div class="col-sm-6 form-group">
                        <label> MSP Amount</label>
                        <input class="form-control" required type="text" name="amount">
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
<div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Update Share</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{url('/msp/update')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Date</label>
                        <input class="form-control date" required type="date" name="date">
                        <input type="hidden" class="cId" id="id" name="id">
                     </div>
                      <div class="col-sm-6 form-group">
                        <label>Member Name</label>
                       <select  class="form-control collection_member" name="collection_member">
                       @foreach($lists as $list)
                       <option class="form-control" value="{{$list->id}}">{{$list->memberno}} = {{$list->name}}</option>
                       @endforeach
                       </select>
                     </div>
                     <div class="col-sm-6 form-group">
                        <label> MSP Amount</label>
                        <input class="form-control amount" required type="text" name="amount">
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
                    <div class="ibox-title">MSP List</div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"
                            style="margin-right: 60px;">
                       Add MSP
                    </button>
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>M.ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                       @php  $i=1;   @endphp 
                           @foreach($msp as $collection)
                            <tr>
                              <td>{{$i++}}</td>
                                <td>{{$collection->name}}</td>
                                <td>{{$collection->memberno}}</td>
                                <td>{{$collection->date}}</td>
                                <td>{{$collection->tk}}</td>
        
        
                                <td>
                                    
                        <button onclick='edit({{$collection->id}})' data-toggle="modal" id="editcompany" data-target="#editbtn"title="Edit" class="btn btn-success" ><i class="fa fa-pencil font-14"></i></button> 

                        <a href="{{url('/msp/delete',$collection->id)}}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')"> 
                         <span class="fa fa-trash font-14 "></span>
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
                url:"{{url('/msp/edit')}}/"+x,
                success:function(response){
                    console.log(response);
                    $('.date').val(response.date);
                    $('.cId').val(response.id);
                    $('.collection_member').val(response.member);
                    $('.amount').val(response.tk);
    
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

@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">
    <div class="ibox">
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Admin</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>ID</th>                               
                                <th>Amount</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                        <?php $i=1; ?>
                          @foreach($collection as $collection)
                            <tr>
                              <td>{{$i++}}</td>
                                <td>{{$collection->first_name}}</td>
                                <td>{{$collection->date}}</td>
                                <td>{{$collection->name}}</td>
                                <td>{{$collection->memberno}}</td>
                                <td>{{$collection->amount}}</td>
                                <td><img src="{{ asset($collection->image) }}" alt="{{ $collection->name }}" height="50" width="50" ></td>
                           
                      
                        </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
        </div>       
</div>


@endsection

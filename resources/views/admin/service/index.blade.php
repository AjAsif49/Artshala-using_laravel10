@extends('admin.index') 
 
@section('content')

<div class="py-12">
    <div class="container">
        <div class="row m-2">
            <h4>Services</h4>
            <a href="{{ route('add.service') }}"><button class="btn btn-info ml-2">Add New Service</button></a>

            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-header"> All Services </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" width="20%">Title</th>
                                <th scope="col" width="30%">Description</th>
                                <th scope="col" width="25%">Image</th>
                                <th scope="col" width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $service -> title }}</td>
                                <td>{{ $service -> description }}</td>
                                <td> <img src="{{ asset($service->image) }}" style="height:40px; width:70px;" alt=""> </td>
                                <td><a href="{{ url('service/edit/'.$service->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('service/delete/'.$service->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('admin.index') 
 
@section('content')

<div class="py-12">
    <div class="container">
        <div class="row m-2">
            <h4>Home About</h4>
            <a href="{{ route('add.about') }}"><button class="btn btn-info ml-2">Add About</button></a>

            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                    <div class="card-header"> All Abouts </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" width="10%">Title</th>
                                <th scope="col" width="20%">Short Description</th>
                                <th scope="col" width="40%">Long Description</th>
                                <th scope="col" width="15%">Created At</th>
                                <th scope="col" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abouts as $about)
                            <tr>
                                <td>{{ $about -> title }}</td>
                                <td>{{ $about -> short_des }}</td>
                                <td>{{ $about -> long_des }}</td>
                                <td>{{ $about -> created_at -> diffForHumans() }}</td>
                                
                                <td>
                                    <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
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

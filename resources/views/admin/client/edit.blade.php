@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Client</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('client/update/'.$client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_image" value="{{ $client->image }}">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Service Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" value="{{ $client->title }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Edit Client Image</label>
                    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">

                    <div class="form-group">
                        <img src="{{ asset($client->image) }}" style="width: 400px; height:200px;">
                    </div>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

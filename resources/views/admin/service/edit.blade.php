@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Service</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('service/update/'.$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_image" value="{{ $service->image }}">

                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Service Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" value="{{ $service->title }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Service Description</label>
                    <input type="text" name='description' class="form-control" id="exampleFormControlInput1" value="{{ $service->title }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Edit Service Image</label>
                    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">

                    <div class="form-group">
                        <img src="{{ asset($service->image) }}" style="width: 400px; height:200px;">
                    </div>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

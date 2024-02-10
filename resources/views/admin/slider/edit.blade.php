@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Slider</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('slider/update/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Slider Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" value="{{ $slider->title }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Slider Description</label>
                    <input type="text" name='description' class="form-control" id="exampleFormControlInput1" value="{{ $slider->description }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Update Slider Image</label>
                    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">

                    <div class="form-group">
                        <img src="{{ asset($slider->image) }}" style="width: 400px; height:200px;">
                    </div>
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

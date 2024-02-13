@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit About</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('about/update/'.$about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">About Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" value="{{ $about -> title }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Short Description</label>
                    <input type="text" name='short_des' class="form-control" id="exampleFormControlInput1" value="{{ $about -> short_des }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Long Description</label>
                    <input type="text" name='long_des' class="form-control" id="exampleFormControlInput1" value="{{ $about -> long_des }}">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>



@endsection

@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Client</h2>
        </div>
        <div class="card-body">
        <form action="{{ route('store.client') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Client Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Client Image</label>
                    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>

@endsection

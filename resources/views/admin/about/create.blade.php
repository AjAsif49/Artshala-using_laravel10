@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create About</h2>
        </div>
        <div class="card-body">
        <form action="{{ route('store.about') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">About Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Short Description</label>
                    <input type="text" name='short_des' class="form-control" id="exampleFormControlInput1" placeholder="Enter Short Description">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Long Description</label>
                    <input type="text" name='long_des' class="form-control" id="exampleFormControlInput1" placeholder="Enter Long Description">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>



@endsection

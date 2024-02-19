@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Contact</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('contact/update/'.$contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Company Name</label>
                    <input type="text" name='company_name' class="form-control" id="exampleFormControlInput1" value="{{ $contact->company_name }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Address</label>
                    <input type="text" name='address' class="form-control" id="exampleFormControlInput1" value="{{ $contact->address }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Phone</label>
                    <input type="text" name='phone' class="form-control" id="exampleFormControlInput1" value="{{ $contact->phone }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Edit Email</label>
                    <input type="email" name='email' class="form-control" id="exampleFormControlInput1" value="{{ $contact->email }}">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

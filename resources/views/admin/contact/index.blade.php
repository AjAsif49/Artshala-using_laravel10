@extends('admin.index') 
 
@section('content')

<div class="py-12">
    <div class="container">
        <div class="row m-2">
            <h4>Contact</h4>
            <a href="{{ route('add.contact') }}"><button class="btn btn-info ml-2">Add Contact</button></a>

            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card-header"> All Contact </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" width="20%">Company Name</th>
                                <th scope="col" width="25%">Address</th>
                                <th scope="col" width="20%">Phone</th>
                                <th scope="col" width="20%">Email</th>
                                <th scope="col" width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact -> company_name }}</td>
                                <td>{{ $contact -> address }}</td>
                                <td>{{ $contact -> phone }}</td>
                                <td>{{ $contact -> email }}</td>
                                
                                <td><a href="{{ url('contact/edit/'.$contact->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('contact/delete/'.$contact->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
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

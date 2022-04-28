@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4">Edit Company</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            @include('layout.messages')
            <div class="card my-2">
                <div class="card-header">
                    <h3>Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('companies.update', $company->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" class="form-control" placeholder="Enter Company Name" value="{{$company->name}}">
                        <input type="email" name="email" class="form-control my-3" placeholder="Enter Company Email" value="{{$company->email}}">
                        <textarea name="address" rows="3" class="form-control" placeholder="Enter Company Address">{{$company->address}}</textarea>
                        <div class="mt-3 d-flex align-items-center">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{route('companies.show', $company->id)}}" class="btn btn-danger ms-2">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
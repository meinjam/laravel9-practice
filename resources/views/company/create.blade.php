@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4">Add New Company</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            @include('layout.messages')
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Add Company</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('companies.store')}}" method="post">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Enter Company Name">
                        <input type="email" name="email" class="form-control my-3" placeholder="Enter Company Email">
                        <textarea name="address" rows="3" class="form-control" placeholder="Enter Company Address"></textarea>
                        <div class="mt-4 d-flex align-items-center">
                            <button type="submit" class="btn btn-success">Add</button>
                            <a href="/companies" class="btn btn-danger ms-2">Go Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layout.layout')
@section('content')

    <h1 class="text-center display-4">Company Details Page</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-2">
                <div class="card-header">
                    <h3>Details</h3>
                </div>
                <div class="card-body">
                    <p class="lead">Company Name: <strong>{{$company->name}}</strong></p>
                    <p>Company Email: {{$company->email}}</p>
                    <p>Company Address: {{$company->address}}</p>
                    <small>Added date & time: <strong>{{$company->created_at}}</strong></small>
                </div>
            </div>
            <div class="buttons"> 
                <form style="display: inline;" action="{{route('companies.destroy', $company->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/companies/{{$company->id}}/edit" class="btn btn-info mx-1">Edit</a> 
                <a href="/companies" class="btn btn-success">Go Back</a> 
            </div>
        </div>
    </div>

@endsection
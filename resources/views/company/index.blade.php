@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4">Company Page</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            @include('layout.messages')
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Companies</h3>
                </div>
                <div class="card-body">
                    @if (count($companies) > 0)
                        @foreach ($companies as $company)
                            <div class="single-card">
                                <p class="mb-0">{{$company->name}}</p>
                                <span class="float-right"> 
                                    <a href="{{route('companies.show', $company->id)}}" class="btn btn-primary btn-sm">View</a> 
                                    <form style="display: inline;" action="{{route('companies.destroy', $company->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </span> 
                            </div>
                        @endforeach
                    @else
                        <h5 class="lead">No companies found.</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissable fade show">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissable fade show">
        {{session('error')}}
    </div>
@endif
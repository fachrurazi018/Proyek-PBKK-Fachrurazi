@extends('app')
@section('content')
<div class="container">
    <h1>Login <br> Iwear Store</h1>
    <div class="row">
        @if(session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
        @endif
        @if($errors->any())
        @foreach ($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <div class="cpl-md-6">
            <form method="POST" action="{{ route('login.action') }}">
                @csrf
                <div class="mb-3">
                    <label>Username<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="username" value="{{ old('username')}}">
                </div>
                <div class="mb-3">
                    <label>Password<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <a href="{{route('home')}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('app')
@section('content')
<div class="container">
    <h1>Ubah Password <br>Iwear Store</h1>
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
            <form method="POST" action="{{ route('password.action') }}">
                @csrf
                <div class="mb-3">
                    <label>Password Lama<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="old_password">
                </div>
                <div class="mb-3">
                    <label>Password Baru<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password">
                </div>
                <div class="mb-3">
                    <label>Konfirmasi Password Baru<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password_confirmation">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Ubah</button>
                    <a href="{{route('home')}}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
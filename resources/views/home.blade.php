{{-- Penggunaan extend yang disesuaikan dengan blade app agar tampilan seterusnya dapat dibuat lebih efisien --}}
@extends('app')
{{-- section content pada halaman home --}}
@section('content')
    @auth
    <div class="nav-container">
        <div class="navbar">
            <a href="#">Dashboard</a>
            <a href="{{ route('produk') }}">Produk</a>
            <a href="{{ route('kategori') }}">Kategori</a>
            <div class="dropdown">
                <button class="dropbtn">Profil</button>
                <div class="dropdown-content">
                    <a href="{{route('password')}}">Ubah Password</a>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="home-container">
        <p>"Selamat Datang di IWear Store <br><br>Welcome, <b>{{ Auth::user()->name }}" </p>
        <img src="{{url('assets/aparel.png')}}" alt="foto">
        <div class="konten-grid">
            <div class="konten">
                <img src="{{ url('assets/jaket.png') }}" alt="Foto 1">
            </div>
            <div class="konten">
                <img src="{{ url('assets/chinos.png')}}" alt="Foto 2">
            </div>
            <div class="konten">
                <img src="{{ url('assets/kemeja.png') }}" alt="Foto 3">
            </div>
            <div class="konten">
                <img src="{{ url('assets/jeans.png') }}" alt="Foto 4">
            </div>
        </div>
    </div>
    @endauth

    @guest
    <div class="home-container-2">
        <h1>Welcome, <br>Iwear Store</h1>
        <nav>
            <a href="{{route('login')}}" class="login">Login</a>
            <a href="{{route('register')}}" class="register">Register</a>
        </nav>
    </div>
    @endguest
@endsection

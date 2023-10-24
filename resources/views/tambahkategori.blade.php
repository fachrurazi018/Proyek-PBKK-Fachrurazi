@extends('app')
@section('content')
    @auth
    <div class="nav-container">
        <div class="navbar">
            <a href="{{ route('home')}}">Dashboard</a>
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
    <div class="table-container">
        {{-- berisi tag h1 untuk menampilkan kalimat tambah data produk --}}
      <h1>Tambah Data Kategori</h1>
      {{-- berisi tag div dengan class row --}}
      <div class="row">
        <form action="/insertkategori" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="nama">Nama Kategori:</label>
          <input type="text" id="kategori" name="kategori" required>
          <br><br>
            {{-- Tag input submit --}}
          <input type="submit" value="Submit">
      </form>
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

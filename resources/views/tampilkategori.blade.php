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
        {{-- berisi tag h1 untuk menampilkan kalimat edit data produk --}}
      <h1>Edit Data Produk</h1>
      <div class="row">
        {{-- berisi form yang sama dengan tambah data, namun diberikan action yang mengarahkan
            ke route updatekategori dengan mengambil variabel id dengan methode POST dan enctype multipart/form-data --}}
        <form action="/updatekategori/{{ $data->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="nama">Nama Kategori:</label>
          <input type="text" id="kategori" name="kategori" value="{{ $data->Kategori }}"required>
          <br><br>
  
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

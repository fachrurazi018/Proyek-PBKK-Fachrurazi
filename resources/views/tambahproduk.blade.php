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
      <h1>Tambah Data Produk</h1>
      {{-- berisi tag div dengan class row --}}
      <div class="row">
        {{-- beiri tag form untuk membuat form pengisian data ketika ingin menambahkan data
            , lalu terdapat action yang mengarahkan ke route insertdata dan method yang digunakan
            adalah POST dengan enctype multipart/form-data --}}
        <form action="/insertdata" method="POST" enctype="multipart/form-data">
            {{-- fungsi csrf untuk menyisipkan token CSRF dalam formulir HTML --}}
          @csrf
          {{-- form nama produk dengan label nama produk dan inputan berdasarkan type, id, dan name yang
            disesuaikan dengan nama form --}}
          <label for="nama">Nama Produk:</label>
          <input type="text" id="nama" name="nama" required>
          <br><br>
          {{-- form jenis produk dengan label jenis produk dan inputan berdasarkan type, id, dan name yang
            disesuaikan dengan nama form. Form ini menggunakan select dengan 3 data yakni Jaket, Kemeja, dan Celana --}}
          <label for="kategori_id">Kategori Produk:</label>
          <select id="kategori_id" name="kategori_id" required>
            @foreach ($data as $row)
              <option value="{{ $row->id }}">{{ $row->Kategori }}</option>
            @endforeach
          </select>
          <br><br>
  
          {{-- form harga produk dengan label harga produk dan inputan berdasarkan type, id, dan name yang
            disesuaikan dengan nama form --}}
          <label for="harga">Harga Produk:</label>
          <input type="number" id="harga" name="harga" required>
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

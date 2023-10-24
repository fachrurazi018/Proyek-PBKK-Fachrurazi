@extends('app')
@section('content')
    @auth
    {{-- Berisi container untuk navbar dengan nama nav-container --}}
    <div class="nav-container">
        <div class="navbar">
            {{-- berisi a navbar yang terdiri dari home, produk, pemesanan, dan profil  --}}
            {{-- pada dashboard ketika diklik akan diarahkan ke halaman home --}}
            <a href="{{ route('home')}}">Dashboard</a>
            {{-- pada bar produk ketika diklik akan diarahkan ke halaman produk --}}
            <a href="{{ route('produk') }}">Produk</a>
            <a href="{{ route('kategori') }}">Kategori</a>
            {{-- dropdown pada profil --}}
            <div class="dropdown">
                <button class="dropbtn">Profil</button>
                <div class="dropdown-content">
                  {{-- berisi a href untuk ubah password dan logout --}}
                    <a href="{{route('password')}}">Ubah Password</a>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    {{-- berisi container tabel --}}
    <div class="table-container">
      <div class="row">
        {{-- berisi tag h1 untuk menampilkan kalimat Data Produk --}}
        <h1>Data Produk</h1>
        {{-- berisi container button --}}
        <div class="button-container">
          {{-- berisi button tambah produk yang mana ketika diklik akan
          mengarahkan ke halaman tambah produk --}}
          <a href="{{ route('tambahproduk') }}" class="tambah"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        {{-- berisi fungsi if untuk mengelola pesan ketika method pada controller dihasilkan sukses,
          pesan yang dihasilkan berisi peringatan sukses  --}}
        @if ($message = Session::get('success'))
          <div class="alert" role="alert">
              {{ $message }}
          </div>
        @endif
        {{-- berisi tag table --}}
        <table>
          {{-- berisi tag colgroup untuk mengatur lebar kolom  --}}
          <colgroup>
            <col style="width: 10%;"> <!-- Atur lebar kolom Kode Produk -->
            <col style="width: 30%;"> <!-- Atur lebar kolom Nama Produk -->
            <col style="width: 25%;"> <!-- Atur lebar kolom Jenis Produk -->
            <col style="width: 20%;"> <!-- Atur lebar kolom Harga -->
            <col style="width: 15%;"> <!-- Atur lebar kolom Aksi -->
        </colgroup>
        {{-- berisi table head --}}
          <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Kategori Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
          {{-- berisi fungsi php untuk mendefinisikan variabel nomor --}}
          @php
              $no = 1;
          @endphp
          {{-- berisi fungsi foreach agar data yang ditampilkan pada tabel
            dapat ditampilkan secara berulang-ulang --}}
          @foreach ($data as $row)
          <tr>
            <td>{{ $no++}}</td> {{-- memasukkan veriabel nomor secara increment pada kolom kode produk --}}
            <td>{{ $row->nama }}</td> {{-- memasukkan data nama yang diambil dari variabel row alias data pada kolom nama produk --}}
            <td>{{ $row->Kategori}}</td> {{-- memasukkan data jenis yang diambil dari variabel row alias data pada kolom jenis produk --}}
            <td>Rp. {{ $row->harga }}</td> {{-- memasukkan data harga yang diambil dari variabel row alias data pada kolom harga produk --}}
            <td>
              {{-- berisi a href edit dengan icon fa fa-edit dan ketika diklik akan memproses ke halaman tampilkan data
                dengan mengambil variabel id --}}
              <a href="/tampilkandata/{{ $row->id }}" class="edit"><i class="fa fa-edit"></i>Edit</a> 
              {{-- berisi a href hapus dengan icon fa fa-trash dan ketika diklik akan memproses ke route delete
                dengan mengambil variabel id --}}
              <a href="/delete/{{ $row->id }}" class="hapus"><i class="fa fa-trash"></i>Hapus</a>
            </td>
          </tr>
          {{-- sesi akhir dari foreach --}}
          @endforeach
        </table>
      </div>
    </div>
    @endauth

    {{-- fungsi guest untuk mengarahkan ke halaman awal --}}
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

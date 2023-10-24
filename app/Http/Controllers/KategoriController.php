<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // berisi method dari kategori untuk menampilkan data kategori dalam bentuk
    // tabel pada halaman kategori
    public function kategori(){ 
        // membuat variabel data yang diambil dari semua data kategori
        $data = Kategori::all();
        // mengembalikan nilai ke halaman kategori, lalu digunakan fungsi compact untuk
        // mengirim variabel data
        return view('kategori', compact('data'));
    }

    // berisi method tambah kategori yang akan mengarahkan ke halaman tambah kategori
    public function tambahkategori(){
        // mengembalikan nilai ke halaman tambah kategori
        return view('tambahkategori');
    }

    // beirisi method untuk menampilkan data kategori yang ditambahkan ke tabel
    public function insertkategori(Request $request){
        Kategori::create($request->all());
        // mengembalikan nilai ke halaman kategori dan menampilkan peringatan bahwa
        // data berhasil ditambahkan
        return redirect()->route('kategori')->with('success','Data berhasil ditambahkan');
    }

    // berisi method untuk menampilkan kembali data yang sudah ditambahkan
    public function tampilkankategori($id){
        // membuat variabel data yang diambil dari semua data kategori untuk mencari berdasarakan id
        $data = Kategori::find($id);
        // mengembalikan nilai ke halaman tampil kategori, lalu digunakan fungsi compact untuk
        // mengirim variabel data
        return view('tampilkategori', compact('data'));
    }

    // berisi method untuk mengupdate data baru
    public function updatekategori(Request $request, $id){
        // membuat variabel data yang diambil dari semua data kategori untuk mencari berdasarakan id
        $data = Kategori::find($id);
        $data->update($request->all());
        // mengembalikan nilai ke halaman kategori dan menampilkan peringatan bahwa 
        // data berhasil diupdate
        return redirect()->route('kategori')->with('success', 'Data berhasil diperbarui');
    }

    public function deletekategori($id){
        // membuat variabel data yang diambil dari semua data kategori untuk mencari berdasarakan id
        $data = Kategori::find($id);
        $data->delete();
        // mengembalikan nilai ke halaman produk dan menampilkan peringatan bahwa 
        // data berhasil dihapus
        return redirect()->route('kategori')->with('success', 'Data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // berisi method dari index untuk menampilkan data produk dalam bentuk
    // tabel pada halaman produk
    public function index(){ 
        // membuat variabel data yang diambil dari semua data produk
        $data = produk::join('kategoris', 'produks.kategori_id', '=', 'kategoris.id')->select('produks.*', 'kategoris.Kategori')
        ->get();
        // mengembalikan nilai ke halaman produk, lalu digunakan fungsi compact untuk
        // mengirim variabel data
        return view('produk', compact('data'));
    }

    // berisi method tambah produk yang akan mengarahkan ke halaman tambah produk
    public function tambahproduk(){
        // mengembalikan nilai ke halaman tambah produk
        $data = Kategori::all();
        return view('tambahproduk', compact('data'));
    }

    // beirisi method untuk menampilkan data produk yang ditambahkan ke tabel
    public function insertdata(Request $request){
        produk::create($request->all());
        // mengembalikan nilai ke halaman produk dan menampilkan peringatan bahwa
        // data berhasil ditambahkan
        return redirect()->route('produk')->with('success','Data berhasil ditambahkan');

    }

    // berisi method untuk menampilkan kembali data yang sudah ditambahkan
    public function tampilkandata($id){
        // membuat variabel data yang diambil dari semua data produk untuk mencari berdasarakan id
        $data = produk::find($id);
        $item = Kategori::all();
        // mengembalikan nilai ke halaman tampil data, lalu digunakan fungsi compact untuk
        // mengirim variabel data
        return view('tampildata', compact('data','item'));
    }

    // berisi method untuk mengupdate data baru
    public function updatedata(Request $request, $id){
        // membuat variabel data yang diambil dari semua data produk untuk mencari berdasarakan id
        $data = produk::find($id);
        $data->update($request->all());
        // mengembalikan nilai ke halaman produk dan menampilkan peringatan bahwa 
        // data berhasil diupdate
        return redirect()->route('produk')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id){
        // membuat variabel data yang diambil dari semua data produk untuk mencari berdasarakan id
        $data = produk::find($id);
        $data->delete();
        // mengembalikan nilai ke halaman produk dan menampilkan peringatan bahwa 
        // data berhasil dihapus
        return redirect()->route('produk')->with('success', 'Data berhasil dihapus');
    }
}


<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route dengan method get untuk menampilkan halaman home dengan title welcom dan penamaan route home
Route::get('/', function () {
    return view('home', ['title'=>'Welcome,']);
})->name('home');
// route dengan methode get dengan nama register dari UserController dan nama method register pada controller dan penamaan route register
Route::get('register', [UserController::class , 'register'])->name('register');
// route dengan methode post dengan nama register dari UserController dan nama method register_action pada controller dan penamaan route register.action
Route::post('register', [UserController::class , 'register_action'])->name('register.action');
// route dengan methode get dengan nama login dari UserController dan nama method login pada controller dan penamaan route login
Route::get('login', [UserController::class , 'login'])->name('login');
// route dengan methode post dengan nama login dari UserController dan nama method login_action pada controller dan penamaan route login.action
Route::post('login', [UserController::class , 'login_action'])->name('login.action');
// route dengan methode get dengan nama password dari UserController dan nama method password pada controller dan penamaan route password
Route::get('password', [UserController::class , 'password'])->name('password');
// route dengan methode post dengan nama password dari UserController dan nama method password_action pada controller dan penamaan route password.action
Route::post('password', [UserController::class , 'password_action'])->name('password.action');
// route dengan methode get dengan nama logout dari UserController dan nama method logout pada controller dan penamaan route logout
Route::get('logout', [UserController::class , 'logout'])->name('logout');

// route dengan methode get dengan nama produk dari ProdukController dan nama method index pada controller dan penamaan route produk
Route::get('/produk',[ProdukController::class, 'index'])->name('produk');
// route dengan methode get dengan nama tambahproduk dari ProdukController dan nama method tambahproduk pada controller dan penamaan route tambahproduk
Route::get('/tambahproduk',[ProdukController::class, 'tambahproduk'])->name('tambahproduk');
// route dengan methode post dengan nama insertdata dari ProdukController dan nama method insertdata pada controller dan penamaan route insertdata
Route::post('/insertdata',[ProdukController::class, 'insertdata'])->name('insertdata');
// route dengan methode get dengan nama tampilkandata dengan mengambil variabel id dari ProdukController dan nama method tampilkandata pada controller dan penamaan route tampilkandata
Route::get('/tampilkandata/{id}',[ProdukController::class, 'tampilkandata'])->name('tampilkandata');
// route dengan methode post dengan nama updatedata dengan mengambil variabel id dari ProdukController dan nama method updatedata pada controller dan penamaan route updatedata
Route::post('/updatedata/{id}',[ProdukController::class, 'updatedata'])->name('updatedata');
// route dengan methode get dengan nama delete dengan mengambil variabel id dari ProdukController dan nama method delete pada controller dan penamaan route delete
Route::get('/delete/{id}',[ProdukController::class, 'delete'])->name('delete');

// route CRUD Kategori
Route::get('/kategori',[KategoriController::class, 'kategori'])->name('kategori');
Route::get('/tambahkategori',[KategoriController::class, 'tambahkategori'])->name('tambahkategori');
Route::post('/insertkategori',[KategoriController::class, 'insertkategori'])->name('insertkategori');
Route::get('/tampilkankategori/{id}',[KategoriController::class, 'tampilkankategori'])->name('tampilkankategori');
Route::post('/updatekategori/{id}',[KategoriController::class, 'updatekategori'])->name('updatekategori');
Route::get('/deletekategori/{id}',[KategoriController::class, 'deletekategori'])->name('deletekategori');
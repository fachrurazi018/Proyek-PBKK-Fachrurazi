<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // method public register
    public function register()
    {
        // mengambil data title 
        $data['title'] = 'Register';
        // mengembalikan nilai ke tampilan user register dengan variabel data title
        return view('user/register', $data);
    }

    public function register_action(Request $request)
    {
        // method request validasi nama, username, password, dan password confirmation
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        // method new user dari name, username, dan password
        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->username),
        ]);
        // data dari user disimpan
        $user->save();
        // nilai dikembalikan ke route login dengan tampilan registrasi berhasil dan perintah login
        return redirect()->route('login')->with('success','Registrasi berhasil. Silakan Login!');
    }
    // method login
    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    // method login_action dengan parameter request
    public function login_action(Request $request)
    {
        // method request untuk memvalidasi username dan password
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // fungsi if jika username dan password dimasukkan benar
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            // mengembalikan ke halaman home
            return redirect()->intended('/');
        }
        // jika salah akan dikelola pesan username dan password salah
        return back()->withErrors('password','Username atau password Anda Salah!');
    }
    // public method password
    public function password()
    {
        $data['title'] = 'Change Password';
        return view('user/password', $data);
    }
    public function password_action(Request $request)
    {
        // method request untuk memvalidasi password baru dan password lama
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        // menyimpan password baru
        $user->save();
        $request->session()->regenerate();
        // menampilkan pesan password diubah
        return back()->with('success','Password diubah!');
    }
    // method public logout dengan parameter request
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // mengembalikan ke halaman awal
        return redirect('/');
    }


}

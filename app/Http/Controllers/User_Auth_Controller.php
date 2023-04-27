<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class User_Auth_Controller extends Controller
{
     public function index()
     {
          return view('users.orangtua_login', [
               "halaman" => "Login OrangTua"
          ]);
     }

     protected function guard()
     {
          return Auth::guard('admin_orangtua');
     }

     public function login(Request $request)
     {
          Session::flash('nik_ibu', $request->nik_ibu);
          $request->validate([
               'nik_ibu' => 'required|numeric',
               'password' => 'required'
          ], [
               'nik_ibu.required' => 'NIK tidak boleh kosong',
               'nik_ibu.numeric' => 'NIK tidak boleh mengandung huruf',
               'password.required' => 'Password tidak boleh kosong'
          ]);

          $info_login = [
               'nik_ibu' => $request->nik_ibu,
               'password' => $request->password
          ];

          if (Auth::attempt($info_login)) {
               return redirect('/')->with('success_orangtua', 'Selamat Datang, "' . Auth::user()->nama_ibu . '" di Halaman KMS Online');
          } else {
               return redirect('session_users')->with('error_nik', 'Login gagal, NIK yang anda masukkan salah.');
          }
     }
}

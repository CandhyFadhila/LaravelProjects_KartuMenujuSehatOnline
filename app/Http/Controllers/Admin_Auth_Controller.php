<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Admin_Auth_Controller extends Controller
{
     public function index()
     {
          return view('halaman_login_admin', [
               "halaman" => "Login Admin"
          ]);
     }

     // ! LOGIN
     public function login(Request $request)
     {
          Session::flash('email', $request->email);
          $request->validate([
               'email' => 'required',
               'password' => 'required'
          ], [
               'email.required' => 'Email tidak boleh kosong',
               'password.required' => 'Silahkan masukkan Password anda'
          ]);

          $info_login = [
               'email' => $request->email,
               'password' => $request->password
          ];

          if (Auth::attempt($info_login)) {
               return redirect('admin/dashboard')->with('success', 'Selamat Datang, "' . Auth::user()->name . '" di Halaman Admin KMS');
          } else {
               return redirect('session_admin')->with('error_password', 'Login gagal, Password atau Email yang anda masukkan salah.');
          }
     }

     // ! LOGOUT
     function logout()
     {
          Auth::logout();
          return redirect('/session_admin')->with('success', 'Anda berhasil Log Out');
     }

     // ! REGISTER
     public function register()
     {
          return view('halaman_regis_admin', [
               "halaman" => "Register Admin"
          ]);
     }

     function create(Request $request)
     {
          Session::flash('name', $request->name);
          Session::flash('email', $request->email);
          $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:users',
               'password' => 'required|min:5'
          ], [
               'name.required' => 'Nama tidak boleh kosong',

               'email.required' => 'Email tidak boleh kosong',
               'email.email' => 'Silahkan masukkan Email yang benar',
               'email.unique' => 'Email tersebut sudah digunakan',

               'password.required' => 'Silahkan masukkan Password anda',
               'password.min' => 'Minimum password yang diperbolehkan 5 karakter'
          ]);

          $data_register = [
               'name' => $request->name,
               'email' => $request->email,
               'password' => Hash::make($request->password)
          ];
          User::create($data_register);

          $info_login = [
               'email' => $request->email,
               'password' => $request->password
          ];

          if (Auth::attempt($info_login)) {
               return redirect('admin/dashboard')->with('success', 'Selamat Datang, "' . Auth::user()->name . '" di Halaman Admin KMS');
          } else {
               return redirect('session_admin')->with('error', 'Login gagal, Password atau Email yang anda masukkan salah.');
          }
     }
}

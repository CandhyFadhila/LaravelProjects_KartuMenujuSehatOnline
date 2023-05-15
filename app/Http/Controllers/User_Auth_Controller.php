<?php

namespace App\Http\Controllers;

use App\Models\AdminOrangtua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
          // ! DIFERENT WAY
          $nik_ibu = $request->input('nik_ibu');

          $orangtua = AdminOrangtua::where('nik_ibu', $nik_ibu)->first();

          if ($orangtua) {
               // user found, log them in
               // ! create variable to store data in toastr
               $nama_ibu = $orangtua->nama_ibu;
               $id_orangtua = $orangtua->id_orangtua;

               // ! Create session to store data in dashboard
               session([
                    'nama_ibu' => $nama_ibu,
                    'id_orangtua' => $id_orangtua,
               ]);

               // TODO | Then Login in
               Auth::loginUsingId($orangtua->id_orangtua);
               return redirect('/')->with('success_orangtua', 'Selamat Datang, Ibu "' . $nama_ibu . '" di Halaman KMS Online');
          } else {
               // user not found, redirect back to login page
               return redirect('session_users')->with('error_nik', 'Login gagal, NIK yang anda masukkan salah.');
          }
     }
}

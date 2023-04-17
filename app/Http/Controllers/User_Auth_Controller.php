<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_Auth_Controller extends Controller
{
     public function index()
     {
          return view('users.orangtua_login', [
               "halaman" => "Login OrangTua"
          ]);
     }

     public function user_main()
     {
          return view('users.orangtua_home', [
               "halaman" => "Halaman OrangTua"
          ]);
     }
}

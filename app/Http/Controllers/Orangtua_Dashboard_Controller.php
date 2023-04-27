<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Orangtua_Dashboard_Controller extends Controller
{
     public function index()
     {
          return view('users.orangtua_home', [
               "halaman" => "Halaman OrangTua"
          ]);
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_Thumbnails_Controller extends Controller
{
    public function index()
    {
        return view('users.home_thumbnails', [
            "halaman" => "Kartu Menuju Sehat Online",
        ]);
    }
}

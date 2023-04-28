<?php

namespace App\Http\Controllers;

use App\Models\AdminBalita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Orangtua_Dashboard_Controller extends Controller
{
     public function index()
     {
          $nama_ibu = session('nama_ibu');
          $orangtua_id = session('id_orangtua');

          $balita = AdminBalita::with('adminkms')
               ->where('orangtua_id', $orangtua_id)
               ->get();

          return view('users.orangtua_dashboard', [
               "halaman" => "Halaman OrangTua",
               "nama_ibu" => $nama_ibu,
               "balita" => $balita
          ]);
     }

     public function getBalita($id = 0)
     {
          $get_Balita = AdminBalita::firstWhere('id_balita', $id);

          echo json_encode($get_Balita);
     }
}

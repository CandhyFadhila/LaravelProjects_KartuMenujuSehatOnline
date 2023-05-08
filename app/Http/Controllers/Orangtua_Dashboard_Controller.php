<?php

namespace App\Http\Controllers;

use App\Models\AdminKMS;
use App\Models\AdminBalita;
use Illuminate\Http\Request;

class Orangtua_Dashboard_Controller extends Controller
{
     public function index()
     {
          $nama_ibu = session('nama_ibu');
          $orangtua_id = session('id_orangtua');

          $balita_kms = AdminBalita::where('orangtua_id', $orangtua_id)
               ->get();
          

          return view('users.orangtua_dashboard', [
               "halaman" => "Halaman OrangTua",
               "nama_ibu" => $nama_ibu,
               "balita_kms" => $balita_kms
          ]);
     }

     public function getBalitaOrtu($id = 0)
     {
          $get_Balita = AdminBalita::firstWhere('id_balita', $id);

          echo json_encode($get_Balita);
     }

     public function getBalitaImun($id = 0)
     {
          $get_Balita_imun = AdminKMS::where('balita_id', $id)->first();

          echo json_encode($get_Balita_imun);
     }

     public function getBalitaDetail($id = 0)
     {
          $get_Balita_detail = AdminKMS::where('balita_id', $id)->get();

          echo json_encode($get_Balita_detail);
     }
}

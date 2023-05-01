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

          $balita_kms = AdminBalita::with(['adminkms' => function ($query) {
               $query->select(['balita_id', 'umur_sekarang', 'sd_bb_u', 'sd_pb_u', 'sd_bb_pb', 'tgl_timbang'])
                    ->orderBy('created_at', 'asc')
                    ->latest('tgl_vaksin_1');
          }])
               ->where('orangtua_id', $orangtua_id)
               ->get();

          return view('users.orangtua_dashboard', [
               "halaman" => "Halaman OrangTua",
               "nama_ibu" => $nama_ibu,
               "balita" => $balita_kms
          ]);
     }

     public function getBalita($id = 0)
     {
          $get_Balita = AdminBalita::firstWhere('id_balita', $id);

          echo json_encode($get_Balita);
     }
}

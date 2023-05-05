<?php

namespace App\Http\Controllers;

use App\Models\AdminBalita;
use App\Models\AdminKMS;

class Orangtua_Dashboard_Controller extends Controller
{
     public function index()
     {
          $nama_ibu = session('nama_ibu');
          $orangtua_id = session('id_orangtua');

          $balita_kms = AdminBalita::with(['adminkms' => function ($query) {
               $query->select(['balita_id', 'umur_sekarang', 'sd_bb_u', 'sd_pb_u', 'sd_bb_pb', 'tgl_timbang', 'tgl_vaksin_1', 'tgl_vaksin_2', 'tgl_vaksin_3', 'tgl_vaksin_4', 'tgl_vaksin_5', 'tgl_vaksin_6', 'tgl_vaksin_7', 'tgl_vaksin_8', 'tgl_vaksin_9', 'tgl_vaksin_10', 'tgl_vaksin_11', 'tgl_vaksin_12', 'tgl_vaksin_13', 'tgl_vaksin_14', 'tgl_vaksin_15', 'tgl_vaksin_16', 'tgl_vaksin_17', 'tgl_vaksin_18', 'tgl_vaksin_19', 'tgl_vaksin_20', 'tgl_vaksin_21'])
                    ->orderBy('created_at', 'asc')
                    ->latest('tgl_vaksin_1');
          }])
               ->where('orangtua_id', $orangtua_id)
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
          $get_Balita_imun = AdminKMS::firstWhere('balita_id', $id);

          echo json_encode($get_Balita_imun);
     }
}

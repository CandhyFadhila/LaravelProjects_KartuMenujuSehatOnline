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

          $balita_kms = AdminBalita::where('orangtua_id', $orangtua_id)->get();

          return view('master.user.user_page.orangtua_dashboard', [
               "halaman" => "Halaman KMS Orangtua " . $nama_ibu,
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
          $get_Balita_detail = AdminKMS::where('balita_id', $id)->select(
               'keterangan_penimbangan',
               'bb_sekarang',
               'pb_sekarang',
               'tgl_timbang',
               'sd_bb_u',
               'sd_pb_u',
               'sd_bb_pb',
               'umur_sekarang',
               'kategori_bb_u',
               'kategori_pb_u',
               'kategori_bb_pb'
          )->get();

          echo json_encode($get_Balita_detail);
     }
}

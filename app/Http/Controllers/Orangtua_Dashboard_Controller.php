<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Orangtua_Dashboard_Controller extends Controller
{
     public function index()
     {
          $nama_ibu = session('nama_ibu');
          $orangtua_id = session('id_orangtua');

          $balita = DB::table('admin_balita')
               ->where('orangtua_id', $orangtua_id)
               ->get();

          return view('users.orangtua_dashboard', [
               "halaman" => "Halaman OrangTua",
               "nama_ibu" => $nama_ibu,
               "balita" => $balita
          ]);

          // if ($balita->isEmpty()) {
          //      // No balita associated with the logged-in user
          //      return view('users.orangtua_dashboard', [
          //           "halaman" => "Halaman OrangTua",
          //           "nama_ibu" => $nama_ibu,
          //      ]);
          // }
          // if ($balita->count() == 1) {
          //      // Only one balita associated with the logged-in user
          //      $balita = $balita->first();
          //      $kms = DB::table('admin_kms')
          //           ->where('balita_id', $balita->id_balita)
          //           ->first();
          //      return view('users.orangtua_dashboard', [
          //           "halaman" => "Halaman OrangTua",
          //           "nama_ibu" => $nama_ibu,
          //           "kms" => $kms,
          //      ]);
          // } else {
          //      // Multiple balita associated with the logged-in user
          //      return view('users.orangtua_dashboard', compact('balita'), [
          //           "halaman" => "Halaman OrangTua"
          //      ]);
          // }



          // if ($balita) {
          //      $kms = DB::table('admin_kms')
          //           ->where('balita_id', $balita->id_balita)
          //           ->first();

          //      return view('users.orangtua_dashboard', [
          //           "halaman" => "Halaman OrangTua",
          //           "nama_ibu" => $nama_ibu,
          //           "kms" => $kms,
          //      ]);
          // } else {
          //      return view('users.orangtua_dashboard', [
          //           "halaman" => "Halaman OrangTua"
          //      ]);
          // }
     }
}

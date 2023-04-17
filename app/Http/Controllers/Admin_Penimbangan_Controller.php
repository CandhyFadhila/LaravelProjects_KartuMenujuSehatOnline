<?php

namespace App\Http\Controllers;

use App\Models\AdminBalita;
use App\Models\AdminKMS;
use App\Models\User;
use Illuminate\Http\Request;

class Admin_Penimbangan_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
          $pilih_Balita = AdminBalita::all();

          return view('halaman_penimbangan', [
               "halaman" => "Form Penimbangan Anak",
               "active" => "timbang_balita",

               "pilih_Balita" => $pilih_Balita
          ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
          //
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
          //
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
          //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
          //
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
          // AdminBalita::create([
          //      'balita_id' => $request->balita_id,
          //      'bb_sekarang' => $request->bb_sekarang,
          //      'pb_sekarang' => $request->pb_sekarang
          // ]);
     }

     public function storePenimbangan(Request $request)
     {
          $request->validate([
               'umur_sekarang' => 'required|numeric',
               'bb_sekarang' => 'required|numeric',
               'pb_sekarang' => 'required|numeric',
               'jenis_kelamin' => ['required', 'in:perempuan,laki_laki'],
               'hasil_bb_u' => 'required',
               'tgl_timbang' => 'required'
          ], [
               'umur_sekarang' => 'Untuk melakukan perhitungan, Umur tidak boleh kosong',
               'umur_sekarang.numeric' => 'Umur Balita tidak boleh mengandung huruf',

               'bb_sekarang' => 'Untuk melakukan perhitungan, BB Balita tidak boleh kosong',
               'bb_sekarang.numeric' => 'BB Balita tidak boleh mengandung huruf',

               'pb_sekarang' => 'Untuk melakukan perhitungan, PB Balita tidak boleh kosong',
               'pb_sekarang.numeric' => 'PB Balita tidak boleh mengandung huruf',

               'jenis_kelamin' => 'Untuk melakukan perhitungan, Silahkan pilih Jenis Kelamin terlebih dahulu',

               'tgl_timbang' => 'Tanggal Penimbangan wajib diisi terlebih dahulu'
          ]);

          AdminKMS::create([
               'balita_id' => $request->balita_id,

               'bb_sekarang' => $request->bb_sekarang,
               'pb_sekarang' => $request->pb_sekarang,

               // ! BB/U
               'sd_bb_u' => $request->hasil_bb_u,
               'kategori_bb_u' => $request->hasil_kategori_bb_u,
               // ! PB/U
               'sd_pb_u' => $request->hasil_pb_u,
               'kategori_pb_u' => $request->hasil_kategori_pb_u,
               // ! BB/PB
               'sd_bb_pb' => $request->hasil_bb_pb,
               'kategori_bb_pb' => $request->hasil_kategori_bb_pb,

               'tgl_timbang' => $request->tgl_timbang
          ]);
          
          return back()->with('success_penimbangan', 'Data Berhasil Disimpan');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
          //
     }

     // ! AMBIL DATA DROPDOWN
     public function getBalita($id = 0)
     {
          $get_Balita = AdminBalita::firstWhere('id_balita', $id);

          echo json_encode($get_Balita);
     }
}

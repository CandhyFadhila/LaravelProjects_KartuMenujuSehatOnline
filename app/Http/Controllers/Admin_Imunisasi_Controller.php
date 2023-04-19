<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AdminKMS;
use App\Models\AdminBalita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Imunisasi_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
          $pilih_Balita = AdminKMS::all();

          return view('halaman_imunisasi', [
               "halaman" => "From Imunisasi Anak",
               "active" => "imunisasi_anak",

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
          //
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

     // ! AMBIL DATA BALITA
     public function getBalita($id = 0)
     {
          $get_Balita = AdminBalita::firstWhere('id_balita', $id);

          echo json_encode($get_Balita);
     }

     // ! STORE BALITA
     public function storeImunisasi(Request $request)
     {
          $request->validate([
               'vaksinValue' => 'nullable|string',

               'tgl_imunisasi' => 'required'
          ], [
               'tgl_imunisasi.required' => 'Tanggal vaksin vitamin tidak boleh kosong'
          ]);
          $balita_id = $request->input('balita_id');
          $vaksin = $request->input('vaksin_imunisasi');
          $tgl_vaksin = $request->input('tgl_imunisasi');

          if ($vaksin === 'Hepatitis B (< 24 Jam)') {
               $column = 'vaksin_1';
               $tgl_column = 'tgl_vaksin_1';
          } else if ($vaksin === 'BCG Pertama') {
               $column = 'vaksin_2';
               $tgl_column = 'tgl_vaksin_2';
          } else if ($vaksin === 'BCG Pertama') {
               $column = 'vaksin_3';
               $tgl_column = 'tgl_vaksin_3';
          } else if ($vaksin === '* Polio Tetes 1 Pertama') {
               $column = 'vaksin_4';
               $tgl_column = 'tgl_vaksin_4';
          } else if ($vaksin === 'BCG Kedua') {
               $column = 'vaksin_5';
               $tgl_column = 'tgl_vaksin_5';
          } else if ($vaksin === '* Polio Tetes 1 Kedua') {
               $column = 'vaksin_6';
               $tgl_column = 'tgl_vaksin_6';
          } else if ($vaksin === '* DPT-HB-Hib 1') {
               $column = 'vaksin_7';
               $tgl_column = 'tgl_vaksin_7';
          } else if ($vaksin === '* Polio Tetes 2') {
               $column = 'vaksin_8';
               $tgl_column = 'tgl_vaksin_8';
          } else if ($vaksin === '** PCV 1') {
               $column = 'vaksin_9';
               $tgl_column = 'tgl_vaksin_9';
          } else if ($vaksin === '* DPT-HB-Hib 2') {
               $column = 'vaksin_10';
               $tgl_column = 'tgl_vaksin_10';
          } else if ($vaksin === '* Polio Tetes 3') {
               $column = 'vaksin_11';
               $tgl_column = 'tgl_vaksin_11';
          } else if ($vaksin === '** PCV 2') {
               $column = 'vaksin_12';
               $tgl_column = 'tgl_vaksin_12';
          } else if ($vaksin === '* DPT-HB-Hib 3') {
               $column = 'vaksin_13';
               $tgl_column = 'tgl_vaksin_13';
          } else if ($vaksin === '* Polio Tetes 4') {
               $column = 'vaksin_14';
               $tgl_column = 'tgl_vaksin_14';
          } else if ($vaksin === 'Polio Suntik (IPV)') {
               $column = 'vaksin_15';
               $tgl_column = 'tgl_vaksin_15';
          } else if ($vaksin === 'Campak-Rubella') {
               $column = 'vaksin_16';
               $tgl_column = 'tgl_vaksin_16';
          } else if ($vaksin === '** JE') {
               $column = 'vaksin_17';
               $tgl_column = 'tgl_vaksin_17';
          } else if ($vaksin === '** PCV 3') {
               $column = 'vaksin_18';
               $tgl_column = 'tgl_vaksin_18';
          } else if ($vaksin === '**** DPT-HB-Hib (lanjutan)') {
               $column = 'vaksin_19';
               $tgl_column = 'tgl_vaksin_19';
          } else if ($vaksin === '**** Campak-Rubella (lanjutan)') {
               $column = 'vaksin_20';
               $tgl_column = 'tgl_vaksin_20';
          }
          // else if ($vaksin === 'BCG Pertama') {
          //      $column = 'vaksin_21';
          //      $tgl_column = 'tgl_vaksin_21';
          // } else if ($vaksin === 'BCG Pertama') {
          //      $column = 'vaksin_22';
          //      $tgl_column = 'tgl_vaksin_22';
          // }

          //! Check if the selected column already has a value
          //! Check if the vaksin column already has a value
          $existingVaksin = DB::table('admin_kms')->where('balita_id', $balita_id)->value($column);

          if (!empty($existingVaksin)) {
               return back()->with('error_column_imunisasi', 'Sudah Pernah Vaksin');
          }

          //! Check if the tgl_vaksin_1 column already has a value
          $existingTglVaksin = DB::table('admin_kms')->where('balita_id', $balita_id)->value($tgl_column);

          if (!empty($existingTglVaksin)) {
               return back()->with('error_column_tgl_imunisasi', 'Sudah Pernah Vaksin');
          }

          DB::table('admin_kms')
               ->where('balita_id', $balita_id)
               ->update([$column => $vaksin, $tgl_column => $tgl_vaksin]);

          return back()->with('success_imunisasi', 'Vaksin updated successfully!');
     }
}

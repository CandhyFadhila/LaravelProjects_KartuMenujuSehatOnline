<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AdminKMS;
use App\Models\AdminBalita;
use App\Models\AdminVitamin;
use Illuminate\Http\Request;

class Admin_Vitamin_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
          $pilih_Vitamin = AdminVitamin::all();
          $pilih_Balita = AdminKMS::all();

          return view('halaman_vitamin', [
               "halaman" => "From Vitamin Anak",
               "active" => "vitamin_anak",

               "pilih_Vitamin" => $pilih_Vitamin,
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

     public function getBalita($id = 0)
     {
          $get_Balita = AdminBalita::firstWhere('id_balita', $id);

          echo json_encode($get_Balita);
     }

     // ! STORE BALITA
     public function storeVitamin(User $user, Request $request)
     {
          $request->validate([
               'tgl_vaksin' => 'required'
          ], [
               'tgl_vaksin' => 'Tanggal Imunisasi wajib diisi terlebih dahulu'
          ]);

          if (AdminKMS::where('balita_id', $user->id)->exists()) {
               AdminKMS::where('balita_id', $user->id)->update([
                    'balita_id' => $request->balita_id,
                    'vitamin_id' => $request->vitamin_id,

                    'tgl_vaksin' => $request->tgl_vaksin
               ]);
          } else {
               AdminKMS::create([
                    'balita_id' => $request->balita_id,
                    'vitamin_id' => $request->vitamin_id,

                    'tgl_vaksin' => $request->tgl_vaksin
               ]);
          }
          return back()->with('success_vitamin', 'Data Berhasil Disimpan');
     }
}

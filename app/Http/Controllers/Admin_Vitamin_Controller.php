<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AdminKMS;
use App\Models\AdminBalita;
use App\Models\AdminVitamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Vitamin_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
          $pilih_Balita = AdminKMS::all();

          return view('halaman_vitamin', [
               "halaman" => "From Vitamin Anak",
               "active" => "vitamin_anak",

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
     public function storeVitamin(Request $request)
     {
          $request->validate([
               'vaksinValue' => 'nullable|string'
          ]);

          $balita_id = $request->input('balita_id');
          $vaksin = $request->input('vaksin_vitamin');

          if ($vaksin === 'Vitamin A - Biru') {
               $column = 'vaksin_23';
          } else if ($vaksin === 'Vitamin A - Merah') {
               $column = 'vaksin_24';
          }

          //! Check if the selected column already has a value
          $existingVaksin = DB::table('admin_kms')->where('balita_id', $balita_id)->value($column);

          if (!empty($existingVaksin)) {
               return back()->with('error_vitamin', 'Sudah Pernah Vaksin');
          }

          DB::table('admin_kms')->where('balita_id', $balita_id)->update([$column => $vaksin]);

          return back()->with('success_vitamin', 'Vaksin updated successfully!');
     }
}

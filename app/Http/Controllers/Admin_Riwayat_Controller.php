<?php

namespace App\Http\Controllers;

use App\Models\AdminBalita;
use App\Models\AdminKMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Riwayat_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
          $paginate = 10;
          $cariBalita = $request->search;
          if (strlen($cariBalita)) {
               $data_Balita = AdminBalita::where('nama_balita', 'LIKE', "%$cariBalita%")
                    ->orWhere('nik_balita', 'LIKE', "%$cariBalita%")
                    ->orderBy('nama_balita', 'ASC')
                    ->paginate(5);
          } else {
               $data_Balita = AdminBalita::orderBy('created_at', 'asc')->paginate($paginate);
          }

          return view('halaman_rekap_riwayat_balita', [
               "halaman" => "Data Riwayat Balita dan Anak",
               "active" => "rekap_riwayat_balita",

               "data_Balita" => $data_Balita
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
     public function show($id_balita)
     {
          $admin_Balita = AdminBalita::findOrFail($id_balita);
          $admin_KMS = AdminKMS::where('balita_id', $id_balita)->paginate(10);

          $get_tgl_vaksin = AdminKms::where('balita_id', $id_balita)
               ->latest('tgl_vaksin_1')
               ->first();

          return view('halaman_rekap_detail_riwayat', compact('admin_Balita', 'admin_KMS', 'get_tgl_vaksin'), [
               "halaman" => "Detail Balita " . $admin_Balita->nama_balita,
               "active" => "rekap_riwayat_balita"
          ]);
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
}

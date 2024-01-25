<?php

namespace App\Http\Controllers;

use App\Models\AdminRole;
use App\Models\AdminPetugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin_Petugas_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
          $paginate = 10;
          $cariPetugas = $request->search;
          if (strlen($cariPetugas)) {
               $data_Petugas = AdminPetugas::where('nama_petugas', 'LIKE', "%$cariPetugas%")
                    ->orWhere('alamat', 'LIKE', "%$cariPetugas%")
                    ->orderBy('nama_petugas', 'ASC')
                    ->paginate(5);
          } else {
               // ! GET DATA DARI DB
               $data_Petugas = AdminPetugas::orderBy('created_at', 'desc')->paginate($paginate);
          }

          return view('master.main.main_page.halaman_petugas', [
               "halaman" => "Tabel Petugas Aktif Posyandu",
               "active" => "petugas",

               "data_Petugas" => $data_Petugas
          ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
          $pilih_role = AdminRole::all();
          return view('master.main.main_form.form_tambah_petugas', compact('pilih_role'), [
               "halaman" => "Form Tambah Data Balita dan Anak",
               "active" => "petugas"
          ]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
          // ! VALIDASI DATA
          $request->validate([
               'nama_petugas' => 'required',
               'alamat' => 'required',
               'role_id' => 'required'
          ], [
               'nama_petugas' => 'Nama Petugas tidak boleh kosong',
               'alamat' => 'Alamat tidak boleh kosong',
               'role_id' => 'Silahkan pilih Role Anda terlebih dahulu'
          ]);

          AdminPetugas::create([
               'nama_petugas' => $request->nama_petugas,
               'alamat' => $request->alamat,
               'role_id' => $request->role_id
          ]);

          Session::flash('success', 'Data Petugas berhasil ditambahkan');
          return redirect('admin/petugas');
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
          // ! AMBIL DATA DARI DB DAN TAMPILKAN YG DIAMBIL SESUAI LINK BUTTON HREF
          // ? $edit_Petugas = AdminPetugas::where("Diambil dari DB link yang dipake", "parameter edit")->first();
          $edit_Petugas = AdminPetugas::where('id_petugas', $id)->first();
          return view('master.main.main_form.form_edit_petugas', [
               "halaman" => "Form Edit Data Petugas",
               "active" => "petugas",

               "edit_Petugas" => $edit_Petugas
          ]);
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
          // ! VALIDASI DATA
          $request->validate([
               'nama_petugas' => 'required',
               'alamat' => 'required'
          ], [
               'nama_petugas' => 'Nama Petugas tidak boleh kosong',
               'alamat' => 'Alamat tidak boleh kosong'
          ]);

          AdminPetugas::where('id_petugas', $id)->update([
               'nama_petugas' => $request->nama_petugas,
               'alamat' => $request->alamat
          ]);

          Session::flash('success_update', 'Data petugas berhasil terupdate');
          return redirect('admin/petugas');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
          AdminPetugas::where('id_petugas', $id)->delete();
          return redirect('admin/petugas');
     }
}

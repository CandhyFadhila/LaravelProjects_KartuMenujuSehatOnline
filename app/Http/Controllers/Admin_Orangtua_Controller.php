<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminOrangtua;
use Illuminate\Support\Facades\Session;

class Admin_Orangtua_Controller extends Controller
{
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index(Request $request)
     {
          $paginate = 10;
          $cariOrangtua = $request->search;
          if (strlen($cariOrangtua)) {
               $data_Orangtua = AdminOrangtua::where('nama_ibu', 'LIKE', "%$cariOrangtua%")
                    ->orWhere('nik_ibu', 'LIKE', "%$cariOrangtua%")
                    ->orWhere('alamat', 'LIKE', "%$cariOrangtua%")
                    ->orWhere('pekerjaan', 'LIKE', "%$cariOrangtua%")
                    ->orderBy('nama_ibu', 'ASC')
                    ->paginate(5);
          } else {
               $data_Orangtua = AdminOrangtua::orderBy('created_at', 'desc')->paginate($paginate);
          }

          return view('halaman_orangtua', [
               "halaman" => "Tabel Orang Tua",
               "active" => "orangtua",

               "data_Orangtua" => $data_Orangtua
          ]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
          return view('form.form_tambah_orangtua', [
               "halaman" => "Form Tambah Data Orang Tua",
               "active" => "orangtua"
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
          $request->validate([
               'nama_ibu' => 'required',
               'nik_ibu' => 'required|numeric|unique:admin_orangtua,nik_ibu',
               'alamat' => 'required',
               'tgl_lahir' => 'required',
               'pekerjaan' => 'required',
          ], [
               'nama_ibu' => 'Nama Ibu tidak boleh kosong',
               'nik_ibu' => 'NIK tidak boleh kosong',
               'nik_ibu.numeric' => 'NIK tidak boleh mengandung huruf',
               'nik_ibu.unique' => 'NIK tersebut sudah tersedia pada sistem',
               'alamat' => 'Alamat tidak boleh kosong',
               'tgl_lahir' => 'Tanggal Lahir tidak boleh kosong',
               'pekerjaan' => 'Pekerjaan Ibu tidak boleh kosong'
          ]);

          AdminOrangtua::create([
               'nama_ibu' => $request->nama_ibu,
               'nik_ibu' => $request->nik_ibu,
               'alamat' => $request->alamat,
               'tgl_lahir' => $request->tgl_lahir,
               'pekerjaan' => $request->pekerjaan
          ]);

          Session::flash('success', 'Data Orangtua berhasil ditambahkan');
          return redirect('admin/orangtua');
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
          $edit_Orangtua = AdminOrangtua::where('id_orangtua', $id)->first();
          return view('form.form_edit_orangtua', [
               "halaman" => "Form Edit Data Ibu",
               "active" => "orangtua",

               "edit_Orangtua" => $edit_Orangtua
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
          $request->validate([
               'nama_ibu' => 'required',
               'alamat' => 'required',
               'pekerjaan' => 'required'
          ], [
               'nama_ibu' => 'Nama Ibu tidak boleh kosong',
               'alamat' => 'Alamat tidak boleh kosong',
               'pekerjaan' => 'Pekerjaan Ibu tidak boleh kosong'
          ]);

          AdminOrangtua::where('id_orangtua', $id)->update([
               'nama_ibu' => $request->nama_ibu,
               'alamat' => $request->alamat,
               'pekerjaan' => $request->pekerjaan
          ]);

          Session::flash('success', 'Data Orangtua berhasil terupdate');
          return redirect('admin/orangtua');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
          AdminOrangtua::where('id_orangtua', $id)->delete();
          return redirect('admin/orangtua');
     }
}

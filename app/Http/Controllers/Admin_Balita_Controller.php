<?php

namespace App\Http\Controllers;

use App\Models\AdminBalita;
use Illuminate\Http\Request;
use App\Models\AdminOrangtua;
use Illuminate\Support\Facades\Session;

class Admin_Balita_Controller extends Controller
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
                    ->orWhere('tgl_lahir', 'LIKE', "%$cariBalita%")
                    ->orderBy('nama_balita', 'ASC')
                    ->paginate(5);
          } else {
               $data_Balita = AdminBalita::orderBy('created_at', 'desc')->paginate($paginate);
          }

          return view('master.main.main_page.halaman_balita', [
               "halaman" => "Tabel Balita dan Anak",
               "active" => "balita",

               "data_Balita" => $data_Balita
          ]);
     }
     

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     // ! TAMPIL FORM
     public function create()
     {
          $pilih_ibu = AdminOrangtua::all();

          return view('master.main.main_form.form_tambah_balita', compact('pilih_ibu'), [
               "halaman" => "Form Tambah Data Balita dan Anak",
               "active" => "balita"
          ]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     // ! MASUKKAN DATA KE DB
     public function store(Request $request)
     {
          // ! VALIDASI DATA
          $request->validate([
               'nama_balita' => 'required',
               'nik_balita' => 'required|numeric|unique:admin_balita,nik_balita',
               'tgl_lahir' => 'required',
               'orangtua_id' => 'required',
               'jenis_kelamin' => ['required', 'in:P,L']
          ], [
               'nama_balita' => 'Nama Balita tidak boleh kosong',

               'nik_balita' => 'NIK tidak boleh kosong',
               'nik_balita.numeric' => 'NIK tidak boleh mengandung huruf',
               'nik_balita.unique' => 'NIK tersebut sudah tersedia pada sistem',

               'tgl_lahir' => 'Tanggal Lahir tidak boleh kosong',
               'orangtua_id' => 'Silahkan pilih Nama Ibu terlebih dahulu',
               'jenis_kelamin' => 'Silahkan pilih Jenis Kelamin terlebih dahulu'
          ]);

          // TODO | KIRI DARI TABEL - KANAN DARI INPUTAN
          AdminBalita::create([
               'nama_balita' => $request->nama_balita,
               'nik_balita' => $request->nik_balita,
               'tgl_lahir' => $request->tgl_lahir,
               'orangtua_id' => $request->orangtua_id,
               'jenis_kelamin' => $request->jenis_kelamin,
               'bb_lahir' => $request->bb_lahir,
               'pb_lahir' => $request->pb_lahir
          ]);

          Session::flash('success', 'Data Balita berhasil ditambahkan');
          return redirect('admin/balita');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     // ! TAMPIL DETAIL DATA
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
     // ! TAMPIL FORM EDIT
     public function edit($id)
     {
          // ! AMBIL DATA DARI DB DAN TAMPILKAN YG DIAMBIL SESUAI LINK BUTTON HREF
          // ? $edit_Petugas = AdminPetugas::where("Diambil dari DB link yang dipake", "parameter edit")->first();
          $edit_Balita = AdminBalita::where('id_balita', $id)->first();
          return view('master.main.main_form.form_edit_balita', [
               "halaman" => "Form Edit Data Balita dan Anak",
               "active" => "balita",

               "edit_Balita" => $edit_Balita
          ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     // ! SIMPAN DATA KE DB
     public function update(Request $request, $id)
     {
          // ! VALIDASI DATA
          $request->validate([
               'nama_balita' => 'required'
          ], [
               'nama_balita' => 'Nama Balita tidak boleh kosong'
          ]);

          // TODO | KIRI DARI TABEL - KANAN DARI INPUTAN
          AdminBalita::where('id_balita', $id)->update([
               'nama_balita' => $request->nama_balita,
               'bb_lahir' => $request->bb_lahir,
               'pb_lahir' => $request->pb_lahir
          ]);

          Session::flash('success_update', 'Data balita berhasil terupdate');
          return redirect('admin/balita');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     // ! DELETE DATA
     public function destroy($id)
     {
          AdminBalita::where('id_balita', $id)->delete();
          return redirect('admin/balita');
     }
}

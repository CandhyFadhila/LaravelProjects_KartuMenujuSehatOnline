@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" method="POST" action="{{ url('admin/orangtua/' . $edit_Orangtua->id_orangtua) }}"
                         class="form-horizontal" novalidate="novalidate">
                         @csrf
                         @method('PUT')
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Edit Data OrangTua | Ibu <strong
                                             class="font-weight-bold"><u>{{ $edit_Orangtua->nama_ibu }}</u></strong></h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama OrangTua</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" name="nama_ibu" id="nama_ibu"
                                                       required="true" value="{{ $edit_Orangtua->nama_ibu }}" />
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Nama Orangtua dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" number="true"
                                                       name="nik_ibu" id="nik_ibu" required="true"
                                                       value="{{ $edit_Orangtua->nik_ibu }}" disabled />
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>NIK Ibu "Tidak Dapat" di Edit</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" name="alamat" id="alamat"
                                                       required="true" value="{{ $edit_Orangtua->alamat }}" />
                                             </div>
                                        </div>

                                        <div class="col-sm-4 label-on-right">
                                             <code>Alamat Orangtua dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Lahir
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text"
                                                       name="tgl_lahir" id="tgl_lahir" required="true"
                                                       value="{{ $edit_Orangtua->tgl_lahir }}" disabled />
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Tanggal Lahir Ibu "Tidak Dapat" di Edit</code>
                                        </div>

                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" name="pekerjaan" id="pekerjaan"
                                                       required="true" value="{{ $edit_Orangtua->pekerjaan }}" />
                                             </div>
                                        </div>

                                        <div class="col-sm-4 label-on-right">
                                             <code>Pekerjaan Ibu dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>

                                   </div>
                              </div>
                              <div class="card-footer ml-auto">
                                   <a href="/admin/orangtua" class="btn" type="reset">
                                        <span class="btn-label">
                                             <i class="material-icons">arrow_back</i>
                                        </span>
                                        Kembali
                                   </a>

                                   <a href="#">
                                        <button type="submit" class="btn btn-rose">
                                             <span class="btn-label">
                                                  <i class="material-icons">check</i>
                                             </span>
                                             Simpan
                                        </button>
                                   </a>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
@endsection

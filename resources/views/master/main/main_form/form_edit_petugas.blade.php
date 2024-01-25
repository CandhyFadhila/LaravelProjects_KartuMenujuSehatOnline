@extends('master.main.main_layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" method="POST" action="{{ url('admin/petugas/'.$edit_Petugas->id_petugas) }}" class="form-horizontal"
                         novalidate="novalidate">
                         @csrf
                         @method('PUT')
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Edit Data Petugas | <strong class="font-weight-bold"><u>{{ $edit_Petugas->nama_petugas }}</u></strong></h4>
                              </div>
                              <div class="card-body">

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Petugas</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" name="nama_petugas"
                                                       id="nama_petugas" required="true"
                                                       value="{{ $edit_Petugas->nama_petugas }}" />
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Nama Petugas dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" name="alamat" id="alamat" required="true"
                                                       value="{{ $edit_Petugas->alamat }}" />
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Alamat Petugas dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" name="role_id" id="role_id" required="true"
                                                       value="{{ $edit_Petugas->adminrole->role }}" disabled />
                                                  </select>
                                             </div>
                                        </div>

                                        <div class="col-sm-4 label-on-right">
                                             <code>Role Petugas "Tidak Dapat" di Edit</code>
                                        </div>

                                   </div>

                              </div>

                              <div class="card-footer ml-auto">
                                   <a href="/admin/petugas" class="btn" type="reset">
                                        <span class="btn-label">
                                             <i class="material-icons">arrow_back</i>
                                        </span>
                                        Kembali
                                   </a>

                                   <a href="">
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


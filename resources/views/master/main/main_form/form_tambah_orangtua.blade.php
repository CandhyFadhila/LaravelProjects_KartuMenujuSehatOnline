@extends('master.main.main_layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" method="POST" action="{{ url('admin/orangtua') }}" class="form-horizontal"
                         novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Tambah Data OrangTua</h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama OrangTua</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('nama_ibu') is-invalid @enderror"
                                                       type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu"
                                                       required="true" value="{{ old('nama_ibu') }}" />

                                                  @error('nama_ibu')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Nama Dari Ibu"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('nik_ibu') is-invalid @enderror"
                                                       type="text" number="true" name="nik_ibu" id="nik_ibu"
                                                       placeholder="NIK Ibu" required="true" value="{{ old('nik_ibu') }}" />

                                                  @error('nik_ibu')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "NIK Dari OrangTua"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('alamat') is-invalid @enderror"
                                                       type="text" name="alamat" id="alamat"
                                                       placeholder="Alamat Orangtua" required="true"
                                                       value="{{ old('alamat') }}" />

                                                  @error('alamat')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Alamat Tinggal Saat Ini"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Lahir
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input
                                                       class="form-control @error('tgl_lahir') is-invalid @enderror datepicker"
                                                       type="text" name="tgl_lahir" id="tgl_lahir"
                                                       placeholder="Tanggal Lahir" required="true"
                                                       value="{{ old('tgl_lahir') }}" />

                                                  @error('tgl_lahir')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Tanggal Lahir OrangTua"</code>
                                        </div>

                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('pekerjaan') is-invalid @enderror"
                                                       type="text" name="pekerjaan" id="pekerjaan"
                                                       placeholder="Pekerjaan Ibu" required="true"
                                                       value="{{ old('pekerjaan') }}" />

                                                  @error('pekerjaan')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Pekerjaan OrangTua"</code>
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

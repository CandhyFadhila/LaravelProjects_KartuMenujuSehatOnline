@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" method="POST" action="{{ url('admin/balita/' . $edit_Balita->id_balita) }}"
                         class="form-horizontal" novalidate="novalidate">
                         @csrf
                         @method('PUT')
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Edit Data Balita dan Anak |
                                        <strong class="font-weight-bold">
                                             <u>{{ $edit_Balita->nama_balita }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Balita</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" name="nama_balita"
                                                       id="nama_balita" required="true"
                                                       value="{{ $edit_Balita->nama_balita }}" />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Nama Balita dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" number="true"
                                                       name="nik_balita" id="nik_balita" required="true"
                                                       value="{{ $edit_Balita->nik_balita }}" disabled />
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>NIK Balita "Tidak Dapat" di Edit</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Lahir
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input class="form-control font-weight-bold" type="text"
                                                       name="tgl_lahir" id="tgl_lahir" required="true"
                                                       value="{{ $edit_Balita->tgl_lahir }}" disabled />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Tanggal Lahir Balita "Tidak Dapat" di Edit</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Orangtua</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text"
                                                       name="orangtua_id" id="nama_ibu" required="true"
                                                       value="{{ $edit_Balita->adminorangtua->nama_ibu }}" disabled />

                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Nama Orangtua Balita "Tidak Dapat" di Edit</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-6">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="perempuan" value="P"
                                                            {{ $edit_Balita->jenis_kelamin == 'P' ? 'checked' : '' }}
                                                            @disabled(true) />
                                                       Perempuan

                                                       <span class="circle">
                                                            <span class="check"></span>
                                                       </span>
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="laki" value="L"
                                                            {{ $edit_Balita->jenis_kelamin == 'L' ? 'checked' : '' }}
                                                            @disabled(true) />
                                                       Laki-laki

                                                       <span class="circle">
                                                            <span class="check"></span>
                                                       </span>
                                                  </label>
                                             </div>

                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Jenis Kelamin Balita "Tidak Dapat" di Edit</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Berat Badan Lahir</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" number="true" name="bb_lahir"
                                                       id="bb_lahir" required="true" value="{{ $edit_Balita->bb_lahir }}" />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>BB Lahir Balita dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Panjang Badan Lahir</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" type="text" number="true" name="pb_lahir"
                                                       id="pb_lahir" required="true"
                                                       value="{{ $edit_Balita->pb_lahir }}" />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>BB Lahir Balita dapat di edit jika "Terdapat Kesalahan"</code>
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer ml-auto">
                                   <a href="{{ url('admin/balita') }}" class="btn" type="reset">
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

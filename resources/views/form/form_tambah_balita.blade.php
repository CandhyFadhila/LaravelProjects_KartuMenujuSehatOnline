@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" method="POST" action="{{ url('admin/balita') }}" class="form-horizontal"
                         novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Tambah Data Balita dan Anak</h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Balita</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('nama_balita') is-invalid @enderror"
                                                       type="text" name="nama_balita" id="nama_balita"
                                                       placeholder="Nama Balita" required="true"
                                                       value="{{ old('nama_balita') }}" />

                                                  @error('nama_balita')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Nama Dari Balita"</code>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('nik_balita') is-invalid @enderror"
                                                       type="text" number="true" name="nik_balita" id="nik_balita"
                                                       placeholder="NIK Balita" required="true"
                                                       value="{{ old('nik_balita') }}" />

                                                  @error('nik_balita')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "NIK Dari Balita"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Lahir
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
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
                                             <code>Diisi Dengan "Tanggal Lahir Balita"</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Orangtua</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <select id="nama_ibu"
                                                       class="js-example-basic-single form-control"
                                                       name="orangtua_id">
                                                       <option value="option_select" disabled selected>Pilih Nama Ibu
                                                       </option>

                                                       @foreach ($pilih_ibu as $nama_ibu)
                                                            {{-- ! TAMBAH IF ELSE VALIDASI --}}
                                                            <option value="{{ $nama_ibu->id_orangtua }}"
                                                                 {{ old('orangtua_id') == $nama_ibu->id_orangtua ? 'selected' : '' }}>
                                                                 Ibu {{ $nama_ibu->nama_ibu }} - NIK
                                                                 {{ $nama_ibu->nik_ibu }}
                                                            </option>
                                                       @endforeach

                                                  </select>

                                                  @error('orangtua_id')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Pilih "Nama Orangtua Dari Balita"</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-6">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="perempuan"
                                                            value="P" {{ old('jenis_kelamin') == "P" ? 'checked' : '' }} />
                                                       Perempuan

                                                       <span class="circle">
                                                            <span class="check"></span>
                                                       </span>
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="laki" value="L"  {{ old('jenis_kelamin') == "L" ? 'checked' : '' }}/>
                                                       Laki-laki

                                                       <span class="circle">
                                                            <span class="check"></span>
                                                       </span>
                                                  </label>
                                             </div>

                                             @error('jenis_kelamin')
                                                  <small class="text-danger">
                                                       {{ $message }}
                                                  </small>
                                             @enderror

                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Memilih Salah Satu"</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Berat Badan Lahir</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('bb_lahir') is-invalid @enderror"
                                                       type="text" number="true" name="bb_lahir" id="bb_lahir"
                                                       placeholder="BB Saat Lahir" required="true"
                                                       value="{{ old('bb_lahir') }}" />

                                                  @error('bb_lahir')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Angka BB Saat Lahir (gram)"</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Panjang Badan Lahir</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('pb_lahir') is-invalid @enderror"
                                                       type="text" number="true" name="pb_lahir" id="pb_lahir"
                                                       placeholder="PB Saat Lahir" required="true"
                                                       value="{{ old('pb_lahir') }}" />

                                                  @error('pb_lahir')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Angka PB Saat Lahir (Cm)"</code>
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer ml-auto">
                                   <a href="/admin/balita" class="btn" type="reset">
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

@section('script_select2')
     <script>
          $(document).ready(function() {
               $('.js-example-basic-single').select2();
          });
     </script>
@endsection

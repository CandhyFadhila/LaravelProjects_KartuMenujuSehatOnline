@extends('master.main.main_layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" method="POST" action="{{ url('admin/petugas') }}" class="form-horizontal"
                         novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Tambah Data Petugas</h4>
                              </div>
                              <div class="card-body">

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Petugas</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('nama_petugas') is-invalid @enderror"
                                                       type="text" name="nama_petugas" id="nama_petugas"
                                                       placeholder="Nama Petugas" required="true"
                                                       value="{{ old('nama_petugas') }}" />

                                                  @error('nama_petugas')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Nama Dari Petugas Aktif Posyandu"</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('alamat') is-invalid @enderror"
                                                       type="text" name="alamat" id="alamat"
                                                       placeholder="Domisili Petugas" required="true"
                                                       value="{{ old('alamat') }}" />

                                                  @error('alamat')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Alamat Dari Petugas Aktif"</code>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <select id="role_petugas" class="js-example-basic-single form-control" name="role_id">
                                                       <option value="option_select" disabled selected>Pilih Role</option>

                                                       @foreach ($pilih_role as $role)
                                                            {{-- ! TAMBAH IF ELSE VALIDASI --}}
                                                            <option value="{{ $role->id_role }}"
                                                                 {{ old('role_id') == $role->id_role ? 'selected' : '' }}>
                                                                 {{ $role->role }}
                                                            </option>
                                                       @endforeach

                                                  </select>

                                                  @error('role_id')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>

                                        <div class="col-sm-4 label-on-right">
                                             <code>Pilih "Role Dari Petugas Aktif"</code>
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

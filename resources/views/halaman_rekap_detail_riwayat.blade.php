@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-primary card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Detail Riwayat Balita dan Anak dari | <strong
                                             class="font-weight-bold">
                                             <u>{{ $admin_Balita->nama_balita }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Balita</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text"
                                                       name="nama_balita" id="nama_balita"
                                                       value="{{ $admin_Balita->nama_balita }}" disabled />
                                             </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" number="true"
                                                       name="nik_balita" id="nik_balita"
                                                       value="{{ $admin_Balita->nik_balita }}" disabled />
                                             </div>
                                        </div>

                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Lahir
                                        </label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input class="form-control font-weight-bold" type="text"
                                                       name="tgl_lahir" id="tgl_lahir" value="{{ $admin_Balita->tgl_lahir }}"
                                                       disabled />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Orangtua</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text"
                                                       name="orangtua_id" id="nama_ibu"
                                                       value="{{ $admin_Balita->adminorangtua->nama_ibu }}" disabled />

                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="perempuan" value="P"
                                                            {{ $admin_Balita->jenis_kelamin == 'P' ? 'checked' : '' }}
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
                                                            {{ $admin_Balita->jenis_kelamin == 'L' ? 'checked' : '' }}
                                                            @disabled(true) />
                                                       Laki-laki

                                                       <span class="circle">
                                                            <span class="check"></span>
                                                       </span>
                                                  </label>
                                             </div>

                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Berat Badan Lahir</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" number="true"
                                                       name="bb_lahir" id="bb_lahir" value="{{ $admin_Balita->bb_lahir }}"
                                                       disabled />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Panjang Badan Lahir</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" number="true"
                                                       name="pb_lahir" id="pb_lahir" value="{{ $admin_Balita->pb_lahir }}"
                                                       disabled />
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="ImunisasiBalita" class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-primary">
                                   <h4 class="card-title font-weight-bold">KMS</h4>
                                   <p class="card-category font-weight-bold">
                                        KMS Balita dan Anak <strong class="font-weight-bold">
                                             {{ $admin_Balita->nama_balita }}
                                        </strong>
                                   </p>
                              </div>
                              <div class="card-body">

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Berat Badan Saat Timbang</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  @foreach ($admin_KMS as $kms)
                                                       <input class="form-control font-weight-bold"
                                                            value="{{ $kms->bb_sekarang }} Kilogram" disabled />
                                                  @endforeach

                                             </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Panjang Badan Saat Pengukuran
                                        </label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group is-filled">
                                                  @foreach ($admin_KMS as $kms)
                                                       @if (!empty($kms))
                                                            <input class="form-control font-weight-bold"
                                                                 value="{{ $kms->pb_sekarang ?? '-' }} Cm" disabled />
                                                       @endif
                                                  @endforeach

                                             </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Standart Deviasi BB/U</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control" disabled />
                                             </div>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Imunisasi
                                        </label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input id="tgl_imun_sebelum" type="text" class="form-control"
                                                       placeholder="Tanggal Imunisasi Sebelumnya" disabled />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Imunisasi Saat Ini
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input
                                                       class="form-control @error('tgl_vaksin') is-invalid @enderror datepicker"
                                                       type="text" name="tgl_vaksin" id="tgl_vaksin"
                                                       placeholder="Tanggal Imunisasi" required="true"
                                                       value="{{ old('tgl_vaksin') }}" />

                                                  @error('tgl_vaksin')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Tanggal Imunisasi Saat Ini"</code>
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer ml-auto">
                                   <a href="{{ url('admin/rekap_riwayat_balita') }}" class="btn" type="reset">
                                        <span class="btn-label">
                                             <i class="material-icons">arrow_back</i>
                                        </span>
                                        Kembali
                                   </a>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>



     <h2>Detail Balita</h2>
     <table>
          <tr>
               <td>Nama Balita</td>
               <td>{{ $admin_Balita->nama_balita }}</td>
          </tr>
          <tr>
               <td>Tanggal Lahir</td>
               <td>{{ $admin_Balita->tgl_lahir }}</td>
          </tr>
          <!-- tambahkan informasi lainnya sesuai kebutuhan -->
     </table>

     <h2>Data KMS</h2>
     <table>
          <thead>
               <tr>
                    <th>Tanggal KMS</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <!-- tambahkan kolom lainnya sesuai kebutuhan -->
               </tr>
          </thead>
          <tbody>
               @foreach ($admin_KMS as $data)
                    <tr>
                         <td>{{ $data->tgl_timbang }}</td>
                         <td>{{ $data->bb_sekarang }}</td>
                         <td>{{ $data->pb_sekarang }}</td>
                         <!-- tambahkan informasi lainnya sesuai kebutuhan -->
                    </tr>
               @endforeach
          </tbody>
     </table>
@endsection

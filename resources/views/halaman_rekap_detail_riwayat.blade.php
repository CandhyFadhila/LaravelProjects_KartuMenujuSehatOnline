@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataBalita" class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-rose card-header-icon">
                                   <div class="card-icon">
                                        <i class="material-icons">post_add</i>
                                   </div>
                                   <h4 class="card-title">Detail Riwayat Balita dan Anak |  <strong
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
                                                       name="bb_lahir" id="bb_lahir"
                                                       value="{{ $admin_Balita->bb_lahir ?? '~ Belum Diketahui ~ ' }} Kilogram" disabled />
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Panjang Badan Lahir</label>
                                        <div class="col-sm-9">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control font-weight-bold" type="text" number="true"
                                                       name="pb_lahir" id="pb_lahir"
                                                       value="{{ $admin_Balita->pb_lahir ?? '-- Belum Diketahui -- ' }} Cm" disabled />
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     {{-- ! KMS PENIMBANGAN --}}
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="ImunisasiBalita" class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-rose">
                                   <h4 class="card-title">KMS Penimbangan - <strong class="font-weight-bold">Anak
                                             {{ $admin_Balita->nama_balita }}
                                        </strong></h4>
                              </div>

                              <div class="card-body">
                                   <div class="material-datatables">
                                        <div class="dataTables_wrapper dt-bootstrap4">
                                             <div class="row">
                                                  <div class="col-sm-12 table-responsive text-nowrap">
                                                       <table class="table table-hover">
                                                            <thead>
                                                                 <tr role="row" class="table-danger">
                                                                      <th scope="col" class="font-weight-bold">
                                                                           Keterangan
                                                                      </th>
                                                                      <th scope="col" class="font-weight-bold">
                                                                           BB Timbang
                                                                      </th>
                                                                      <th scope="col" class="font-weight-bold">
                                                                           PB Ukur
                                                                      </th>
                                                                      <th scope="col" class="font-weight-bold">
                                                                           SD BB/U
                                                                      </th>
                                                                      <th scope="col" class="font-weight-bold">
                                                                           Kategori BB/U
                                                                      </th>
                                                                      <th scope="col" class="font-weight-bold">
                                                                           SD PB/U
                                                                      </th>
                                                                      <th scope="col"
                                                                           class="text-center font-weight-bold">
                                                                           Kategori PB/U
                                                                      </th>
                                                                      <th scope="col"
                                                                           class="text-center font-weight-bold">
                                                                           SD BB/PB
                                                                      </th>
                                                                      <th scope="col"
                                                                           class="text-center font-weight-bold">
                                                                           Kategori BB/PB
                                                                      </th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 @foreach ($admin_KMS as $kms)
                                                                      <tr role="row">
                                                                           <td scope="row">
                                                                                {{ $kms->keterangan_penimbangan }} pada
                                                                                {{ $kms->tgl_timbang }}</td>
                                                                           <td>{{ $kms->bb_sekarang }} Kg</td>
                                                                           <td>{{ $kms->pb_sekarang }} Cm</td>
                                                                           <td>{{ $kms->sd_bb_u }}</td>
                                                                           <td>{{ $kms->kategori_bb_u }}</td>
                                                                           <td>{{ $kms->sd_pb_u }}</td>
                                                                           <td>{{ $kms->kategori_pb_u }}</td>
                                                                           <td>{{ $kms->sd_bb_pb }}</td>
                                                                           <td>{{ $kms->kategori_bb_pb }}</td>
                                                                      </tr>
                                                                 @endforeach

                                                            </tbody>
                                                       </table>
                                                       {{ $admin_KMS->withQueryString()->links() }}
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     {{-- ! KMS VAKSIN --}}
     <section>
          <style>
               /* ! Add css div_table_vitamin */
               .tabel_vitamin {
                    margin-right: 11px;
                    margin-left: 11px;
                    width: 3000px;
                    height: auto;
                    overflow: auto;
                    position: relative;
                    border: 1px solid #5e5e5e;
               }

               .tabel_vitamin table {
                    border-spacing: 0;
                    white-space: nowrap;
                    table-layout: relative;
               }

               .tabel_vitamin thead,
               tr>th {
                    background: #A6D0DD;
               }

               .tabel_vitamin thead {
                    top: 0;
                    z-index: 2;
               }

               .tabel_vitamin tr>th {
                    left: 0;
                    z-index: 1;
               }

               .tabel_vitamin thead tr>th:first-child {
                    z-index: 3;
               }

               .tabel_vitamin th,
               td {
                    height: 50px;
                    border: 1px solid #5e5e5e;
                    border-width: 0 0 1px 1px;
                    text-align: left;
                    padding: 10px;
                    font-family: sans-serif;
               }

               .tabel_vitamin td {
                    background: #fff;
               }

               .tabel_vitamin th:first-child {
                    border-right-width: 1px;
                    border-left: 0;
               }

               .tabel_vitamin th+td,
               th:first-child+th {
                    border-left: 0;
               }

               .tabel_vitamin tbody tr:last-child>* {
                    border-bottom: 0;
               }

               .tabel_vitamin tr>*:last-child {
                    border-right: 0;
               }

               /* ! End css div_table_vitamin */

               /* CSS for tabel_vitamin_lanjut */
               .tabel_vitamin_lanjut {
                    margin-top: 45px;
                    margin-right: 11px;
                    margin-left: 11px;
                    width: 3000px;
                    height: auto;
                    overflow: auto;
                    position: relative;
                    border: 1px solid #5e5e5e;
               }

               .tabel_vitamin_lanjut table {
                    border-spacing: 0;
                    white-space: nowrap;
                    table-layout: relative;
               }

               .tabel_vitamin_lanjut .umur {
                    width: 100px;
               }

               .tabel_vitamin_lanjut thead,
               tr>th {
                    position: sticky;
                    background: #A6D0DD;
               }

               .tabel_vitamin_lanjut thead {
                    top: 0;
                    z-index: 2;
               }

               .tabel_vitamin_lanjut tr>th {
                    left: 0;
                    z-index: 1;
               }

               .tabel_vitamin_lanjut thead tr>th:first-child {
                    z-index: 3;
               }

               .tabel_vitamin_lanjut th,
               td {
                    height: 50px;
                    border: 1px solid #5e5e5e;
                    border-width: 0 0 1px 1px;
                    text-align: left;
                    padding: 10px;
                    font-family: sans-serif;
               }

               .tabel_vitamin_lanjut td {
                    background: #fff;
               }

               .tabel_vitamin_lanjut th:first-child {
                    border-right-width: 1px;
                    border-left: 0;
               }

               .tabel_vitamin_lanjut th+td,
               th:first-child+th {
                    border-left: 0;
               }

               .tabel_vitamin_lanjut tbody tr:last-child>* {
                    border-bottom: 0;
               }

               .tabel_vitamin_lanjut tr>*:last-child {
                    border-right: 0;
               }
          </style>
     </section>
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="ImunisasiBalita" class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-info">
                                   <h4 class="card-title">KMS Vaksin - <strong class="font-weight-bold">Anak
                                             {{ $admin_Balita->nama_balita }}
                                        </strong></h4>
                              </div>

                              <div class="card-body">
                                   <div class="material-datatables">
                                        <div class="dataTables_wrapper dt-bootstrap4">
                                             <div class="row">
                                                  <div class="tabel_vitamin">
                                                       <table>
                                                            <thead>
                                                                 <tr class="table-success">
                                                                      <th>
                                                                           <div style="width: 210px">Umur (Bulan)
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">0
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">1
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">2
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">3
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">4
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">5
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">6
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">7
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">8
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">9
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">10
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">11
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 100px">12+***
                                                                      </th>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>Vaksin</th>
                                                                      <th colspan="13" class="text-center">Tanggal
                                                                           Pemberian Vaksin</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr>
                                                                      <th>Hepatitis B (< 24 Jam)</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_1 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>BCG</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_2 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_3 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* Polio Tetes 1</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_4 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_5 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* DPT-HB-Hib 1</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_6 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* Polio Tetes 2</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_7 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>** PCV 1</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_8 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* DPT-HB-Hib 2</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_9 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* Polio Tetes 3</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_10 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>** PCV 2</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_11 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* DPT-HB-Hib 3</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_12 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>* Polio Tetes 4</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_13 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>Polio Suntik (IPV)</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_14 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>Campak-Rubella</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_15 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>** JE</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_16 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                      <td class="bg-danger text-white"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>** PCV 3</th>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="bg-dark text-white"></td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_17 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>

                                             <div class="row">
                                                  <div class="tabel_vitamin_lanjut">
                                                       <table>
                                                            <thead>
                                                                 <tr class="table-success">
                                                                      <th class="umur">
                                                                           <div style="width: 210px">Umur (Bulan)
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 370px">18
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 370px">24
                                                                      </th>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>Vaksin</th>
                                                                      <th colspan="3" class="text-center">Tanggal
                                                                           Pemberian Vaksin</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr>
                                                                      <th>**** DPT-HB-Hib (lanjutan)</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_18 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>**** Campak-Rubella (lanjutan)</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_19 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="bg-warning"></td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     {{-- ! KMS VITAMIN TGL 23 - 26 --}}
     <section>
          <style>
               /* CSS for tabel_vitamin_a */
               .tabel_vitamin_a {
                    margin-right: 11px;
                    margin-left: 11px;
                    width: 3000px;
                    height: auto;
                    overflow: auto;
                    position: relative;
                    border: 1px solid #5e5e5e;
               }

               .tabel_vitamin_a table {
                    border-spacing: 0;
                    white-space: nowrap;
                    table-layout: relative;
               }

               .tabel_vitamin_a .umur {
                    width: 100px;
               }

               .tabel_vitamin_a thead,
               tr>th {
                    position: sticky;
                    background: #A6D0DD;
               }

               .tabel_vitamin_a thead {
                    top: 0;
                    z-index: 2;
               }

               .tabel_vitamin_a tr>th {
                    left: 0;
                    z-index: 1;
               }

               .tabel_vitamin_a thead tr>th:first-child {
                    z-index: 3;
               }

               .tabel_vitamin_a th,
               td {
                    height: 50px;
                    border: 1px solid #5e5e5e;
                    border-width: 0 0 1px 1px;
                    text-align: left;
                    padding: 10px;
                    font-family: sans-serif;
               }

               .tabel_vitamin_a td {
                    background: #fff;
               }

               .tabel_vitamin_a th:first-child {
                    border-right-width: 1px;
                    border-left: 0;
               }

               .tabel_vitamin_a th+td,
               th:first-child+th {
                    border-left: 0;
               }

               .tabel_vitamin_a tbody tr:last-child>* {
                    border-bottom: 0;
               }

               .tabel_vitamin_a tr>*:last-child {
                    border-right: 0;
               }
          </style>
     </section>
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="ImunisasiBalita" class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-success">
                                   <h4 class="card-title">KMS Vitamin A - <strong class="font-weight-bold">Anak
                                             {{ $admin_Balita->nama_balita }}
                                        </strong></h4>
                              </div>

                              <div class="card-body">
                                   <div class="material-datatables">
                                        <div class="dataTables_wrapper dt-bootstrap4">
                                             <div class="row">
                                                  <div class="tabel_vitamin_a">
                                                       <table>
                                                            <thead>
                                                                 <tr class="table-success">
                                                                      <th class="umur">
                                                                           <div style="width: 210px">Bulan
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 370px">Oktober
                                                                      </th>
                                                                      <th class="text-center">
                                                                           <div style="width: 370px">November
                                                                      </th>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>Vaksin</th>
                                                                      <th colspan="3" class="text-center">Tanggal
                                                                           Pemberian Vitamin</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr>
                                                                      <th>Vitamin A (Merah)</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_23 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_24 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>Vitamin A (Biru)</th>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_25 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                      <td class="text-center">
                                                                           {{ $get_tgl_vaksin->tgl_vaksin_26 ?? 'Belum Vaksin' }}
                                                                      </td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
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
@endsection

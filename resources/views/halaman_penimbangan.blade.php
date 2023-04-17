@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="TambahDataPenimbangan" method="POST" action="{{ url('admin/penimbangan_anak/store') }}"
                         class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-info">
                                   <h4 class="card-title font-weight-bold">Penimbangan</h4>
                                   <p class="card-category font-weight-bold">
                                        Penimbangan Balita dan Anak
                                   </p>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Nama Balita</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <select id="balita_id" class="js-example-basic-single form-control"
                                                       name="balita_id">
                                                       <option value="option_select" disabled selected>Pilih Nama Balita
                                                       </option>

                                                       @foreach ($pilih_Balita as $balita)
                                                            {{-- ! TAMBAH IF ELSE VALIDASI --}}
                                                            <option value="{{ $balita->id_balita }}"
                                                                 {{ old('balita_id') == $balita->id_balita ? 'selected' : '' }}>
                                                                 {{ $balita->nama_balita }} - NIK
                                                                 {{ $balita->nik_balita }}
                                                            </option>
                                                       @endforeach

                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Pilih Nama Balita"</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             NIK Anak
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input id="nik_anak" type="text" class="form-control"
                                                       placeholder="NIK Balita" disabled />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Lahir
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input id="tgl_lahir_anak" type="text" class="form-control"
                                                       placeholder="Tanggal Lahir Balita" disabled />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Jenis Kelamin
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="kelamin_perempuan" value="perempuan"
                                                            {{ old('jenis_kelamin') == 'perempuan' ? 'checked' : '' }} />
                                                       Perempuan

                                                       <span class="circle">
                                                            <span class="check"></span>
                                                       </span>
                                                  </label>
                                             </div>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                            id="kelamin_laki_laki" value="laki_laki"
                                                            {{ old('jenis_kelamin') == 'laki_laki' ? 'checked' : '' }} />
                                                       Laki - laki

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
                                        <div class="col-sm-3 label-on-right">
                                             <code>Pilih Jenis Kelamin Balita</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Umur Saat Ini</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('umur_sekarang') is-invalid @enderror"
                                                       type="text" name="umur_sekarang" id="umur_sekarang" number="true"
                                                       placeholder="Umur Saat Ini" aria-required="true" required="true"
                                                       oninput="hitungbb();" value="{{ old('umur_sekarang') }}" />

                                                  @error('umur_sekarang')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Umur (Bulan)"</code>
                                        </div>
                                   </div>


                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Berat Badan Saat ini</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('bb_sekarang') is-invalid @enderror"
                                                       type="text" name="bb_sekarang" id="bb_sekarang" number="true"
                                                       placeholder="Berat Badan Saat Ini" aria-required="true"
                                                       required="true" oninput="hitungbb();"
                                                       value="{{ old('bb_sekarang') }}" />

                                                  @error('bb_sekarang')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "BB Balita Saat Ini"</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Panjang Badan Saat Ini</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control @error('pb_sekarang') is-invalid @enderror"
                                                       type="text" name="pb_sekarang" id="pb_sekarang" number="true"
                                                       placeholder="Panjang Badan Saat Ini" aria-required="true"
                                                       oninput="hitungbb();" required="true"
                                                       value="{{ old('pb_sekarang') }}" />

                                                  @error('pb_sekarang')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "PB Balita Saat Ini"</code>
                                        </div>
                                   </div>

                                   {{-- ! STANDART DEVIASI --}}
                                   {{-- ? BB/U --}}
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label text-success font-weight-bold">Standar Deviasi
                                             BB/U</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control text-dark font-weight-bold" type="text"
                                                       id="hasil_bb_u" name="hasil_bb_u" placeholder="-1,2 SD"
                                                       oninput="hitungbb();" value="{{ old('hasil_bb_u') }}" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terhitung</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label text-success font-weight-bold">Kategori
                                             BB/U</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control text-dark font-weight-bold"
                                                       id="hasil_kategori_bb_u" oninput="hitungbb();"
                                                       placeholder="BB Sangat Kurang | Kurang | Normal | Lebih"
                                                       name="hasil_kategori_bb_u" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>

                                   {{-- ? PB/U --}}
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label text-warning font-weight-bold">Standar Deviasi
                                             PB/U</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control text-dark font-weight-bold" type="text"
                                                       id="hasil_pb_u" name="hasil_pb_u" placeholder="-1,2 SD"
                                                       oninput="hitungbb();" value="{{ old('hasil_pb_u') }}" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terhitung</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label text-warning font-weight-bold">Kategori
                                             PB/U</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control text-dark font-weight-bold"
                                                       id="hasil_kategori_pb_u" name="hasil_kategori_pb_u"
                                                       oninput="hitungbb();"
                                                       placeholder="PB Sangat Pendek | Pendek | Normal | Tinggi" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <label class="col-sm-2 col-form-label text-danger font-weight-bold">Standar Deviasi
                                             BB/PB</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control text-dark font-weight-bold" type="text"
                                                       id="hasil_bb_pb" name="hasil_bb_pb" placeholder="-1,2 SD"
                                                       oninput="hitungbb();" value="{{ old('hasil_bb_pb') }}" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terhitung</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label text-danger font-weight-bold">Kategori
                                             BB/PB</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input class="form-control text-dark font-weight-bold"
                                                       id="hasil_kategori_bb_pb" name="hasil_kategori_bb_pb"
                                                       oninput="hitungbb();"
                                                       placeholder="Gizi Buruk | Gizi Kurang | Gizi Baik | Resiko Gizi Lebih | Gizi Lebih | Obesitas"
                                                       value="{{ old('hasil_kategori_bb_pb') }}" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Penimbangan
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input
                                                       class="form-control @error('tgl_timbang') is-invalid @enderror datepicker"
                                                       type="text" name="tgl_timbang" id="tgl_timbang"
                                                       placeholder="Tanggal Penimbangan" required="true"
                                                       value="{{ old('tgl_timbang') }}" />

                                                  @error('tgl_timbang')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Tanggal Timbang Balita"</code>
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer ml-auto mr-auto">
                                   <a href="#">
                                        <button type="submit" class="btn btn-info">
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

@section('select_auto')
     <script>
          $(document).ready(function() {
               $('#balita_id').change(function() {
                    var id = $(this).val();
                    var url = '{{ route('getBalita_timbang', ':id') }}';
                    url = url.replace(':id', id);

                    $.ajax({
                         url: url,
                         type: 'GET',
                         dataType: 'json',
                         success: function(data) {
                              if (data !== null) {
                                   $('#nik_anak').val('');
                                   $('#nik_anak').val(data.nik_balita);
                                   $('#tgl_lahir_anak').val(data.tgl_lahir);
                              }
                         }
                    })
               });
          })
     </script>
@endsection


@section('script_select2')
     <script>
          $(document).ready(function() {
               $('#balita_id').select2();

               @if (Session::has('success_penimbangan'))
                    Swal.fire({
                         icon: 'success',
                         title: '<strong>Data Berhasil Tersimpan</strong>',
                         html: 'Data yang anda inputkan telah <b>Berhasil</b> tersimpan',
                         showConfirmButton: false,
                         timer: 2200,
                         timerProgressBar: true
                    });
               @endif
          });
     </script>
@endsection


<script>
     function hitungbb() {
          {{-- ! BB/U --}}
          var umur = parseInt(document.getElementById('umur_sekarang').value);
          var bb = document.getElementById('bb_sekarang').value;

          const jenis_kelamin = document.querySelectorAll('input[name="jenis_kelamin"]');

          if (umur == 0) {
               {{-- ! LAKI SECTION --}}
               var laki_bb_min_1 = 2.9;
               var laki_bb_median = 3.3;
               var laki_bb_plus_1 = 3.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 2.8;
               var perempuan_bb_median = 3.2;
               var perempuan_bb_plus_1 = 3.7;
          } else if (umur == 1) {
               var laki_bb_min_1 = 3.9;
               var laki_bb_median = 4.5;
               var laki_bb_plus_1 = 5.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 3.6;
               var perempuan_bb_median = 4.2;
               var perempuan_bb_plus_1 = 4.8;
          } else if (umur == 2) {
               var laki_bb_min_1 = 4.9;
               var laki_bb_median = 5.6;
               var laki_bb_plus_1 = 6.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 4.5;
               var perempuan_bb_median = 5.1;
               var perempuan_bb_plus_1 = 5.8;
          } else if (umur == 3) {
               var laki_bb_min_1 = 5.7;
               var laki_bb_median = 6.4;
               var laki_bb_plus_1 = 7.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 5.2;
               var perempuan_bb_median = 5.8;
               var perempuan_bb_plus_1 = 6.6;
          } else if (umur == 4) {
               var laki_bb_min_1 = 6.2;
               var laki_bb_median = 7.0;
               var laki_bb_plus_1 = 7.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 5.7;
               var perempuan_bb_median = 6.4;
               var perempuan_bb_plus_1 = 7.3;
          } else if (umur == 5) {
               var laki_bb_min_1 = 6.7;
               var laki_bb_median = 7.5;
               var laki_bb_plus_1 = 8.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 6.1;
               var perempuan_bb_median = 6.9;
               var perempuan_bb_plus_1 = 7.8;
          } else if (umur == 6) {
               var laki_bb_min_1 = 7.1;
               var laki_bb_median = 7.9;
               var laki_bb_plus_1 = 8.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 6.5;
               var perempuan_bb_median = 7.3;
               var perempuan_bb_plus_1 = 8.2;
          } else if (umur == 7) {
               var laki_bb_min_1 = 7.4;
               var laki_bb_median = 8.3;
               var laki_bb_plus_1 = 9.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 6.8;
               var perempuan_bb_median = 7.6;
               var perempuan_bb_plus_1 = 8.6;
          } else if (umur == 8) {
               var laki_bb_min_1 = 7.7;
               var laki_bb_median = 8.6;
               var laki_bb_plus_1 = 9.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 7.0;
               var perempuan_bb_median = 7.9;
               var perempuan_bb_plus_1 = 9.0;
          } else if (umur == 9) {
               var laki_bb_min_1 = 8.0;
               var laki_bb_median = 8.9;
               var laki_bb_plus_1 = 9.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 7.3;
               var perempuan_bb_median = 8.2;
               var perempuan_bb_plus_1 = 9.3;
          } else if (umur == 10) {
               var laki_bb_min_1 = 8.2;
               var laki_bb_median = 9.2;
               var laki_bb_plus_1 = 10.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 7.5;
               var perempuan_bb_median = 8.5;
               var perempuan_bb_plus_1 = 9.6;
          } else if (umur == 11) {
               var laki_bb_min_1 = 8.4;
               var laki_bb_median = 9.4;
               var laki_bb_plus_1 = 10.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 7.7;
               var perempuan_bb_median = 8.7;
               var perempuan_bb_plus_1 = 9.9;
          } else if (umur == 12) {
               var laki_bb_min_1 = 8.6;
               var laki_bb_median = 9.6;
               var laki_bb_plus_1 = 10.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 7.9;
               var perempuan_bb_median = 8.9;
               var perempuan_bb_plus_1 = 10.1;
          } else if (umur == 13) {
               var laki_bb_min_1 = 8.8;
               var laki_bb_median = 9.9;
               var laki_bb_plus_1 = 11.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 8.1;
               var perempuan_bb_median = 9.2;
               var perempuan_bb_plus_1 = 10.4;
          } else if (umur == 14) {
               var laki_bb_min_1 = 9.0;
               var laki_bb_median = 10.1;
               var laki_bb_plus_1 = 11.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 8.3;
               var perempuan_bb_median = 9.4;
               var perempuan_bb_plus_1 = 10.6;
          } else if (umur == 15) {
               var laki_bb_min_1 = 9.2;
               var laki_bb_median = 10.3;
               var laki_bb_plus_1 = 11.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 8.5;
               var perempuan_bb_median = 9.6;
               var perempuan_bb_plus_1 = 10.9;
          } else if (umur == 16) {
               var laki_bb_min_1 = 9.4;
               var laki_bb_median = 10.5;
               var laki_bb_plus_1 = 11.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 8.7;
               var perempuan_bb_median = 9.8;
               var perempuan_bb_plus_1 = 11.1;
          } else if (umur == 17) {
               var laki_bb_min_1 = 9.6;
               var laki_bb_median = 10.7;
               var laki_bb_plus_1 = 12.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 8.9;
               var perempuan_bb_median = 10.0;
               var perempuan_bb_plus_1 = 11.4;
          } else if (umur == 18) {
               var laki_bb_min_1 = 9.8;
               var laki_bb_median = 10.9;
               var laki_bb_plus_1 = 12.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 9.1;
               var perempuan_bb_median = 10.2;
               var perempuan_bb_plus_1 = 11.6;
          } else if (umur == 19) {
               var laki_bb_min_1 = 10.0;
               var laki_bb_median = 11.1;
               var laki_bb_plus_1 = 12.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 9.2;
               var perempuan_bb_median = 10.4;
               var perempuan_bb_plus_1 = 11.8;
          } else if (umur == 20) {
               var laki_bb_min_1 = 10.1;
               var laki_bb_median = 11.3;
               var laki_bb_plus_1 = 12.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 9.4;
               var perempuan_bb_median = 10.6;
               var perempuan_bb_plus_1 = 12.1;
          } else if (umur == 21) {
               var laki_bb_min_1 = 10.3;
               var laki_bb_median = 11.5;
               var laki_bb_plus_1 = 12.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 9.6;
               var perempuan_bb_median = 10.9;
               var perempuan_bb_plus_1 = 12.3;
          } else if (umur == 22) {
               var laki_bb_min_1 = 10.5;
               var laki_bb_median = 11.8;
               var laki_bb_plus_1 = 13.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 9.8;
               var perempuan_bb_median = 11.1;
               var perempuan_bb_plus_1 = 12.5;
          } else if (umur == 23) {
               var laki_bb_min_1 = 10.7;
               var laki_bb_median = 12.0;
               var laki_bb_plus_1 = 13.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 10.0;
               var perempuan_bb_median = 11.3;
               var perempuan_bb_plus_1 = 12.8;
          } else if (umur == 24) {
               var laki_bb_min_1 = 10.8;
               var laki_bb_median = 12.2;
               var laki_bb_plus_1 = 13.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 10.2;
               var perempuan_bb_median = 11.5;
               var perempuan_bb_plus_1 = 13.0;
          } else if (umur == 25) {
               var laki_bb_min_1 = 11.0;
               var laki_bb_median = 12.4;
               var laki_bb_plus_1 = 13.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 10.3;
               var perempuan_bb_median = 11.7;
               var perempuan_bb_plus_1 = 13.3;
          } else if (umur == 26) {
               var laki_bb_min_1 = 11.2;
               var laki_bb_median = 12.5;
               var laki_bb_plus_1 = 14.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 10.5;
               var perempuan_bb_median = 11.9;
               var perempuan_bb_plus_1 = 13.5;
          } else if (umur == 27) {
               var laki_bb_min_1 = 11.3;
               var laki_bb_median = 12.7;
               var laki_bb_plus_1 = 14.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 10.7;
               var perempuan_bb_median = 12.1;
               var perempuan_bb_plus_1 = 13.7;
          } else if (umur == 28) {
               var laki_bb_min_1 = 11.5;
               var laki_bb_median = 12.9;
               var laki_bb_plus_1 = 14.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 10.9;
               var perempuan_bb_median = 12.3;
               var perempuan_bb_plus_1 = 14.0;
          } else if (umur == 29) {
               var laki_bb_min_1 = 11.7;
               var laki_bb_median = 13.1;
               var laki_bb_plus_1 = 14.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 11.1;
               var perempuan_bb_median = 12.5;
               var perempuan_bb_plus_1 = 14.2;
          } else if (umur == 30) {
               var laki_bb_min_1 = 11.8;
               var laki_bb_median = 13.3;
               var laki_bb_plus_1 = 15.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 11.2;
               var perempuan_bb_median = 12.7;
               var perempuan_bb_plus_1 = 14.4;
          } else if (umur == 31) {
               var laki_bb_min_1 = 12.0;
               var laki_bb_median = 13.5;
               var laki_bb_plus_1 = 15.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 11.4;
               var perempuan_bb_median = 12.9;
               var perempuan_bb_plus_1 = 14.7;
          } else if (umur == 32) {
               var laki_bb_min_1 = 12.1;
               var laki_bb_median = 13.7;
               var laki_bb_plus_1 = 15.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 11.6;
               var perempuan_bb_median = 13.1;
               var perempuan_bb_plus_1 = 14.9;
          } else if (umur == 33) {
               var laki_bb_min_1 = 12.3;
               var laki_bb_median = 13.8;
               var laki_bb_plus_1 = 15.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 11.7;
               var perempuan_bb_median = 13.3;
               var perempuan_bb_plus_1 = 15.1;
          } else if (umur == 34) {
               var laki_bb_min_1 = 12.4;
               var laki_bb_median = 14.0;
               var laki_bb_plus_1 = 15.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 11.9;
               var perempuan_bb_median = 13.5;
               var perempuan_bb_plus_1 = 15.4;
          } else if (umur == 35) {
               var laki_bb_min_1 = 12.6;
               var laki_bb_median = 14.2;
               var laki_bb_plus_1 = 16.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 12.0;
               var perempuan_bb_median = 13.7;
               var perempuan_bb_plus_1 = 15.6;
          } else if (umur == 36) {
               var laki_bb_min_1 = 12.7;
               var laki_bb_median = 14.3;
               var laki_bb_plus_1 = 16.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 12.2;
               var perempuan_bb_median = 13.9;
               var perempuan_bb_plus_1 = 15.8;
          } else if (umur == 37) {
               var laki_bb_min_1 = 12.9;
               var laki_bb_median = 14.5;
               var laki_bb_plus_1 = 16.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 12.4;
               var perempuan_bb_median = 14.0;
               var perempuan_bb_plus_1 = 16.0;
          } else if (umur == 38) {
               var laki_bb_min_1 = 13.0;
               var laki_bb_median = 14.7;
               var laki_bb_plus_1 = 16.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 12.5;
               var perempuan_bb_median = 14.2;
               var perempuan_bb_plus_1 = 16.3;
          } else if (umur == 39) {
               var laki_bb_min_1 = 13.1;
               var laki_bb_median = 14.8;
               var laki_bb_plus_1 = 16.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 12.7;
               var perempuan_bb_median = 14.4;
               var perempuan_bb_plus_1 = 16.5;
          } else if (umur == 40) {
               var laki_bb_min_1 = 13.3;
               var laki_bb_median = 15.0;
               var laki_bb_plus_1 = 17.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 12.8;
               var perempuan_bb_median = 14.6;
               var perempuan_bb_plus_1 = 16.7;
          } else if (umur == 41) {
               var laki_bb_min_1 = 13.4;
               var laki_bb_median = 15.2;
               var laki_bb_plus_1 = 17.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.0;
               var perempuan_bb_median = 14.8;
               var perempuan_bb_plus_1 = 16.9;
          } else if (umur == 42) {
               var laki_bb_min_1 = 13.6;
               var laki_bb_median = 15.3;
               var laki_bb_plus_1 = 17.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.1;
               var perempuan_bb_median = 15.0;
               var perempuan_bb_plus_1 = 17.2;
          } else if (umur == 43) {
               var laki_bb_min_1 = 13.7;
               var laki_bb_median = 15.5;
               var laki_bb_plus_1 = 17.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.3;
               var perempuan_bb_median = 15.2;
               var perempuan_bb_plus_1 = 17.4;
          } else if (umur == 44) {
               var laki_bb_min_1 = 13.8;
               var laki_bb_median = 15.7;
               var laki_bb_plus_1 = 17.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.4;
               var perempuan_bb_median = 15.3;
               var perempuan_bb_plus_1 = 17.6;
          } else if (umur == 45) {
               var laki_bb_min_1 = 14.0;
               var laki_bb_median = 15.8;
               var laki_bb_plus_1 = 18.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.6;
               var perempuan_bb_median = 15.5;
               var perempuan_bb_plus_1 = 17.8;
          } else if (umur == 46) {
               var laki_bb_min_1 = 14.1;
               var laki_bb_median = 16.0;
               var laki_bb_plus_1 = 18.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.7;
               var perempuan_bb_median = 15.7;
               var perempuan_bb_plus_1 = 18.1;
          } else if (umur == 47) {
               var laki_bb_min_1 = 14.3;
               var laki_bb_median = 16.2;
               var laki_bb_plus_1 = 18.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 13.9;
               var perempuan_bb_median = 15.9;
               var perempuan_bb_plus_1 = 18.3;
          } else if (umur == 48) {
               var laki_bb_min_1 = 14.4;
               var laki_bb_median = 16.3;
               var laki_bb_plus_1 = 18.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.0;
               var perempuan_bb_median = 16.1;
               var perempuan_bb_plus_1 = 18.5;
          } else if (umur == 49) {
               var laki_bb_min_1 = 14.5;
               var laki_bb_median = 16.5;
               var laki_bb_plus_1 = 18.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.2;
               var perempuan_bb_median = 16.3;
               var perempuan_bb_plus_1 = 18.8;
          } else if (umur == 50) {
               var laki_bb_min_1 = 14.7;
               var laki_bb_median = 16.7;
               var laki_bb_plus_1 = 19.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.3;
               var perempuan_bb_median = 16.4;
               var perempuan_bb_plus_1 = 19.0;
          } else if (umur == 51) {
               var laki_bb_min_1 = 14.8;
               var laki_bb_median = 16.8;
               var laki_bb_plus_1 = 19.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.5;
               var perempuan_bb_median = 16.6;
               var perempuan_bb_plus_1 = 19.2;
          } else if (umur == 52) {
               var laki_bb_min_1 = 15.0;
               var laki_bb_median = 17.0;
               var laki_bb_plus_1 = 19.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.6;
               var perempuan_bb_median = 16.8;
               var perempuan_bb_plus_1 = 19.4;
          } else if (umur == 53) {
               var laki_bb_min_1 = 15.1;
               var laki_bb_median = 17.2;
               var laki_bb_plus_1 = 19.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.8;
               var perempuan_bb_median = 17.0;
               var perempuan_bb_plus_1 = 19.7;
          } else if (umur == 54) {
               var laki_bb_min_1 = 15.2;
               var laki_bb_median = 17.3;
               var laki_bb_plus_1 = 19.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 14.9;
               var perempuan_bb_median = 17.2;
               var perempuan_bb_plus_1 = 19.9;
          } else if (umur == 55) {
               var laki_bb_min_1 = 15.4;
               var laki_bb_median = 17.5;
               var laki_bb_plus_1 = 20.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 15.1;
               var perempuan_bb_median = 17.3;
               var perempuan_bb_plus_1 = 20.1;
          } else if (umur == 56) {
               var laki_bb_min_1 = 15.5;
               var laki_bb_median = 17.7;
               var laki_bb_plus_1 = 20.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 15.2;
               var perempuan_bb_median = 17.5;
               var perempuan_bb_plus_1 = 20.3;
          } else if (umur == 57) {
               var laki_bb_min_1 = 15.6;
               var laki_bb_median = 17.8;
               var laki_bb_plus_1 = 20.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 15.3;
               var perempuan_bb_median = 17.7;
               var perempuan_bb_plus_1 = 20.6;
          } else if (umur == 58) {
               var laki_bb_min_1 = 15.8;
               var laki_bb_median = 18.0;
               var laki_bb_plus_1 = 20.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 15.5;
               var perempuan_bb_median = 17.9;
               var perempuan_bb_plus_1 = 20.8;
          } else if (umur == 59) {
               var laki_bb_min_1 = 15.9;
               var laki_bb_median = 18.2;
               var laki_bb_plus_1 = 20.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 15.6;
               var perempuan_bb_median = 18.0;
               var perempuan_bb_plus_1 = 21.0;
          } else if (umur == 60) {
               var laki_bb_min_1 = 16.0;
               var laki_bb_median = 18.3;
               var laki_bb_plus_1 = 21.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_bb_min_1 = 15.8;
               var perempuan_bb_median = 18.2;
               var perempuan_bb_plus_1 = 21.2;
          };

          jenis_kelamin.forEach(radio => {
               if (radio.checked) {
                    const genderValue = radio.value;
                    console.log(genderValue, 'BB/U');

                    if (genderValue === 'laki_laki') {
                         if (bb < laki_bb_median) {
                              {{-- ! BB < Median --}}
                              var a = parseFloat(bb) - parseFloat(laki_bb_median);
                              var b = parseFloat(laki_bb_median) - parseFloat(laki_bb_min_1);
                              var bb_u_rumus_satu = a / b;
                              document.getElementById('hasil_bb_u').value = bb_u_rumus_satu.toFixed(1);
                              if (bb_u_rumus_satu < -3) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Sangat Kurang';
                              } else if (bb_u_rumus_satu >= -3 && bb_u_rumus_satu < -2) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Kurang';
                              } else if (bb_u_rumus_satu >= -2 && bb_u_rumus_satu <= 1) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_bb_u').value = 'Resiko BB Lebih';
                              };

                         } else if (bb > laki_bb_median) {
                              {{-- ! BB > Median --}}
                              var c = parseFloat(bb) - parseFloat(laki_bb_median);
                              var d = parseFloat(laki_bb_plus_1) - parseFloat(laki_bb_median);
                              var bb_u_rumus_dua = c / d;
                              document.getElementById('hasil_bb_u').value = bb_u_rumus_dua.toFixed(1);
                              if (bb_u_rumus_dua < -3) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Sangat Kurang';
                              } else if (bb_u_rumus_dua >= -3 && bb_u_rumus_dua < -2) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Kurang';
                              } else if (bb_u_rumus_dua >= -2 && bb_u_rumus_dua <= 1) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_bb_u').value = 'Resiko BB Lebih';
                              };
                         }
                    }

                    if (genderValue === 'perempuan') {
                         if (bb < perempuan_bb_median) {
                              {{-- ! BB < Median --}}
                              var a = parseFloat(bb) - parseFloat(perempuan_bb_median);
                              var b = parseFloat(perempuan_bb_median) - parseFloat(perempuan_bb_min_1);
                              var bb_u_rumus_satu = a / b;
                              document.getElementById('hasil_bb_u').value = bb_u_rumus_satu.toFixed(1);
                              if (bb_u_rumus_satu < -3) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Sangat Kurang';
                              } else if (bb_u_rumus_satu >= -3 && bb_u_rumus_satu < -2) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Kurang';
                              } else if (bb_u_rumus_satu >= -2 && bb_u_rumus_satu <= 1) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_bb_u').value = 'Resiko BB Lebih';
                              };

                         } else if (bb > perempuan_bb_median) {
                              {{-- ! BB > Median --}}
                              var c = parseFloat(bb) - parseFloat(perempuan_bb_median);
                              var d = parseFloat(perempuan_bb_plus_1) - parseFloat(perempuan_bb_median);
                              var bb_u_rumus_dua = c / d;
                              document.getElementById('hasil_bb_u').value = bb_u_rumus_dua.toFixed(1);
                              if (bb_u_rumus_dua < -3) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Sangat Kurang';
                              } else if (bb_u_rumus_dua >= -3 && bb_u_rumus_dua < -2) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Kurang';
                              } else if (bb_u_rumus_dua >= -2 && bb_u_rumus_dua <= 1) {
                                   document.getElementById('hasil_kategori_bb_u').value = 'BB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_bb_u').value = 'Resiko BB Lebih';
                              };
                         }
                    }
               }
          })

          {{-- ! BB/U END --}}


          {{-- ! PB/U --}}
          var pb = document.getElementById('pb_sekarang').value;

          if (umur == 0) {
               var laki_pb_min_1 = 48.0;
               var laki_pb_median = 49.9;
               var laki_pb_plus_1 = 51.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 47.3;
               var perempuan_pb_median = 49.1;
               var perempuan_pb_plus_1 = 51.0;
          } else if (umur == 1) {
               var laki_pb_min_1 = 52.8;
               var laki_pb_median = 54.7;
               var laki_pb_plus_1 = 56.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 51.7;
               var perempuan_pb_median = 53.7;
               var perempuan_pb_plus_1 = 55.6;
          } else if (umur == 2) {
               var laki_pb_min_1 = 56.4;
               var laki_pb_median = 58.4;
               var laki_pb_plus_1 = 60.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 55.0;
               var perempuan_pb_median = 57.1;
               var perempuan_pb_plus_1 = 59.1;
          } else if (umur == 3) {
               var laki_pb_min_1 = 59.4;
               var laki_pb_median = 61.4;
               var laki_pb_plus_1 = 63.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 57.7;
               var perempuan_pb_median = 59.8;
               var perempuan_pb_plus_1 = 61.9;
          } else if (umur == 4) {
               var laki_pb_min_1 = 61.8;
               var laki_pb_median = 63.9;
               var laki_pb_plus_1 = 66.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 59.9;
               var perempuan_pb_median = 62.1;
               var perempuan_pb_plus_1 = 64.3;
          } else if (umur == 5) {
               var laki_pb_min_1 = 63.8;
               var laki_pb_median = 65.9;
               var laki_pb_plus_1 = 68.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 61.8;
               var perempuan_pb_median = 64.0;
               var perempuan_pb_plus_1 = 66.2;
          } else if (umur == 6) {
               var laki_pb_min_1 = 65.5;
               var laki_pb_median = 67.6;
               var laki_pb_plus_1 = 69.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 63.5;
               var perempuan_pb_median = 63.5;
               var perempuan_pb_plus_1 = 68.0;
          } else if (umur == 7) {
               var laki_pb_min_1 = 67.0;
               var laki_pb_median = 69.2;
               var laki_pb_plus_1 = 71.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 65.0;
               var perempuan_pb_median = 67.3;
               var perempuan_pb_plus_1 = 69.6;
          } else if (umur == 8) {
               var laki_pb_min_1 = 68.4;
               var laki_pb_median = 70.6;
               var laki_pb_plus_1 = 72.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 66.4;
               var perempuan_pb_median = 68.7;
               var perempuan_pb_plus_1 = 71.1;
          } else if (umur == 9) {
               var laki_pb_min_1 = 69.7;
               var laki_pb_median = 72.0;
               var laki_pb_plus_1 = 74.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 67.7;
               var perempuan_pb_median = 70.1;
               var perempuan_pb_plus_1 = 72.6;
          } else if (umur == 10) {
               var laki_pb_min_1 = 71.0;
               var laki_pb_median = 73.3;
               var laki_pb_plus_1 = 75.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 69.0;
               var perempuan_pb_median = 71.5;
               var perempuan_pb_plus_1 = 73.9;
          } else if (umur == 11) {
               var laki_pb_min_1 = 72.2;
               var laki_pb_median = 74.5;
               var laki_pb_plus_1 = 76.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 70.3;
               var perempuan_pb_median = 72.8;
               var perempuan_pb_plus_1 = 75.3;
          } else if (umur == 12) {
               var laki_pb_min_1 = 73.4;
               var laki_pb_median = 75.7;
               var laki_pb_plus_1 = 78.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 71.4;
               var perempuan_pb_median = 74.0;
               var perempuan_pb_plus_1 = 76.6;
          } else if (umur == 13) {
               var laki_pb_min_1 = 74.5;
               var laki_pb_median = 76.9;
               var laki_pb_plus_1 = 79.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 72.6;
               var perempuan_pb_median = 75.2;
               var perempuan_pb_plus_1 = 77.8;
          } else if (umur == 14) {
               var laki_pb_min_1 = 75.6;
               var laki_pb_median = 78.0;
               var laki_pb_plus_1 = 80.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 73.7;
               var perempuan_pb_median = 76.4;
               var perempuan_pb_plus_1 = 79.1;
          } else if (umur == 15) {
               var laki_pb_min_1 = 76.6;
               var laki_pb_median = 79.1;
               var laki_pb_plus_1 = 81.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 74.8;
               var perempuan_pb_median = 77.5;
               var perempuan_pb_plus_1 = 80.2;
          } else if (umur == 16) {
               var laki_pb_min_1 = 77.6;
               var laki_pb_median = 80.2;
               var laki_pb_plus_1 = 82.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 75.8;
               var perempuan_pb_median = 78.6;
               var perempuan_pb_plus_1 = 81.4;
          } else if (umur == 17) {
               var laki_pb_min_1 = 78.6;
               var laki_pb_median = 81.2;
               var laki_pb_plus_1 = 83.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 76.8;
               var perempuan_pb_median = 79.7;
               var perempuan_pb_plus_1 = 82.5;
          } else if (umur == 18) {
               var laki_pb_min_1 = 79.6;
               var laki_pb_median = 82.3;
               var laki_pb_plus_1 = 85.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 77.8;
               var perempuan_pb_median = 80.7;
               var perempuan_pb_plus_1 = 83.6;
          } else if (umur == 19) {
               var laki_pb_min_1 = 80.5;
               var laki_pb_median = 83.2;
               var laki_pb_plus_1 = 86.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 78.8;
               var perempuan_pb_median = 81.7;
               var perempuan_pb_plus_1 = 84.7;
          } else if (umur == 20) {
               var laki_pb_min_1 = 81.4;
               var laki_pb_median = 84.2;
               var laki_pb_plus_1 = 87.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 79.7;
               var perempuan_pb_median = 82.7;
               var perempuan_pb_plus_1 = 85.7;
          } else if (umur == 21) {
               var laki_pb_min_1 = 82.3;
               var laki_pb_median = 85.1;
               var laki_pb_plus_1 = 88.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 80.6;
               var perempuan_pb_median = 83.7;
               var perempuan_pb_plus_1 = 86.7;
          } else if (umur == 22) {
               var laki_pb_min_1 = 83.1;
               var laki_pb_median = 86.0;
               var laki_pb_plus_1 = 89.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 81.5;
               var perempuan_pb_median = 84.6;
               var perempuan_pb_plus_1 = 87.7;
          } else if (umur == 23) {
               var laki_pb_min_1 = 83.9;
               var laki_pb_median = 86.9;
               var laki_pb_plus_1 = 89.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 82.3;
               var perempuan_pb_median = 85.5;
               var perempuan_pb_plus_1 = 88.7;
          } else if (umur == 24) {
               var laki_pb_min_1 = 84.1;
               var laki_pb_median = 87.1;
               var laki_pb_plus_1 = 90.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 82.5;
               var perempuan_pb_median = 85.7;
               var perempuan_pb_plus_1 = 88.9;
          } else if (umur == 25) {
               var laki_pb_min_1 = 84.9;
               var laki_pb_median = 88.0;
               var laki_pb_plus_1 = 91.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 83.3;
               var perempuan_pb_median = 86.6;
               var perempuan_pb_plus_1 = 89.9;
          } else if (umur == 26) {
               var laki_pb_min_1 = 85.6;
               var laki_pb_median = 88.8;
               var laki_pb_plus_1 = 92.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 84.1;
               var perempuan_pb_median = 87.4;
               var perempuan_pb_plus_1 = 90.8;
          } else if (umur == 27) {
               var laki_pb_min_1 = 86.4;
               var laki_pb_median = 89.6;
               var laki_pb_plus_1 = 92.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 84.9;
               var perempuan_pb_median = 88.3;
               var perempuan_pb_plus_1 = 91.7;
          } else if (umur == 28) {
               var laki_pb_min_1 = 87.1;
               var laki_pb_median = 90.4;
               var laki_pb_plus_1 = 93.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 85.7;
               var perempuan_pb_median = 89.1;
               var perempuan_pb_plus_1 = 92.5;
          } else if (umur == 29) {
               var laki_pb_min_1 = 87.8;
               var laki_pb_median = 91.2;
               var laki_pb_plus_1 = 94.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 86.4;
               var perempuan_pb_median = 89.9;
               var perempuan_pb_plus_1 = 93.4;
          } else if (umur == 30) {
               var laki_pb_min_1 = 88.5;
               var laki_pb_median = 91.9;
               var laki_pb_plus_1 = 95.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 87.1;
               var perempuan_pb_median = 90.7;
               var perempuan_pb_plus_1 = 94.2;
          } else if (umur == 31) {
               var laki_pb_min_1 = 89.2;
               var laki_pb_median = 92.7;
               var laki_pb_plus_1 = 96.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 87.9;
               var perempuan_pb_median = 91.4;
               var perempuan_pb_plus_1 = 95.0;
          } else if (umur == 32) {
               var laki_pb_min_1 = 89.9;
               var laki_pb_median = 93.4;
               var laki_pb_plus_1 = 96.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 88.6;
               var perempuan_pb_median = 92.2;
               var perempuan_pb_plus_1 = 95.8;
          } else if (umur == 33) {
               var laki_pb_min_1 = 90.5;
               var laki_pb_median = 94.1;
               var laki_pb_plus_1 = 97.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 89.3;
               var perempuan_pb_median = 92.9;
               var perempuan_pb_plus_1 = 96.6;
          } else if (umur == 34) {
               var laki_pb_min_1 = 91.1;
               var laki_pb_median = 94.8;
               var laki_pb_plus_1 = 98.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 89.9;
               var perempuan_pb_median = 93.6;
               var perempuan_pb_plus_1 = 97.4;
          } else if (umur == 35) {
               var laki_pb_min_1 = 91.8;
               var laki_pb_median = 95.4;
               var laki_pb_plus_1 = 99.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 90.6;
               var perempuan_pb_median = 94.4;
               var perempuan_pb_plus_1 = 98.1;
          } else if (umur == 36) {
               var laki_pb_min_1 = 92.4;
               var laki_pb_median = 96.1;
               var laki_pb_plus_1 = 99.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 91.2;
               var perempuan_pb_median = 95.1;
               var perempuan_pb_plus_1 = 98.9;
          } else if (umur == 37) {
               var laki_pb_min_1 = 93.0;
               var laki_pb_median = 96.7;
               var laki_pb_plus_1 = 100.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 91.9;
               var perempuan_pb_median = 95.7;
               var perempuan_pb_plus_1 = 99.6;
          } else if (umur == 38) {
               var laki_pb_min_1 = 93.6;
               var laki_pb_median = 97.4;
               var laki_pb_plus_1 = 101.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 92.5;
               var perempuan_pb_median = 96.4;
               var perempuan_pb_plus_1 = 100.3;
          } else if (umur == 39) {
               var laki_pb_min_1 = 94.2;
               var laki_pb_median = 98.0;
               var laki_pb_plus_1 = 101.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 93.1;
               var perempuan_pb_median = 97.1;
               var perempuan_pb_plus_1 = 101.0;
          } else if (umur == 40) {
               var laki_pb_min_1 = 94.7;
               var laki_pb_median = 98.6;
               var laki_pb_plus_1 = 102.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 93.8;
               var perempuan_pb_median = 97.7;
               var perempuan_pb_plus_1 = 101.7;
          } else if (umur == 41) {
               var laki_pb_min_1 = 95.3;
               var laki_pb_median = 99.2;
               var laki_pb_plus_1 = 103.2;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 94.4;
               var perempuan_pb_median = 98.4;
               var perempuan_pb_plus_1 = 102.4;
          } else if (umur == 42) {
               var laki_pb_min_1 = 95.9;
               var laki_pb_median = 99.9;
               var laki_pb_plus_1 = 103.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 95.0;
               var perempuan_pb_median = 99.0;
               var perempuan_pb_plus_1 = 103.1;
          } else if (umur == 43) {
               var laki_pb_min_1 = 96.4;
               var laki_pb_median = 100.4;
               var laki_pb_plus_1 = 104.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 95.6;
               var perempuan_pb_median = 99.7;
               var perempuan_pb_plus_1 = 103.8;
          } else if (umur == 44) {
               var laki_pb_min_1 = 97.0;
               var laki_pb_median = 101.0;
               var laki_pb_plus_1 = 105.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 96.2;
               var perempuan_pb_median = 100.3;
               var perempuan_pb_plus_1 = 104.5;
          } else if (umur == 45) {
               var laki_pb_min_1 = 97.5;
               var laki_pb_median = 101.6;
               var laki_pb_plus_1 = 105.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 96.7;
               var perempuan_pb_median = 100.9;
               var perempuan_pb_plus_1 = 105.1;
          } else if (umur == 46) {
               var laki_pb_min_1 = 98.1;
               var laki_pb_median = 102.2;
               var laki_pb_plus_1 = 106.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 97.3;
               var perempuan_pb_median = 101.5;
               var perempuan_pb_plus_1 = 105.8;
          } else if (umur == 47) {
               var laki_pb_min_1 = 98.6;
               var laki_pb_median = 102.8;
               var laki_pb_plus_1 = 106.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 97.9;
               var perempuan_pb_median = 102.1;
               var perempuan_pb_plus_1 = 106.4;
          } else if (umur == 48) {
               var laki_pb_min_1 = 99.1;
               var laki_pb_median = 103.3;
               var laki_pb_plus_1 = 107.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 98.4;
               var perempuan_pb_median = 102.7;
               var perempuan_pb_plus_1 = 107.0;
          } else if (umur == 49) {
               var laki_pb_min_1 = 99.7;
               var laki_pb_median = 103.9;
               var laki_pb_plus_1 = 108.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 99.0;
               var perempuan_pb_median = 103.3;
               var perempuan_pb_plus_1 = 107.7;
          } else if (umur == 50) {
               var laki_pb_min_1 = 100.2;
               var laki_pb_median = 104.4;
               var laki_pb_plus_1 = 108.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 99.5;
               var perempuan_pb_median = 103.9;
               var perempuan_pb_plus_1 = 108.3;
          } else if (umur == 51) {
               var laki_pb_min_1 = 100.7;
               var laki_pb_median = 105.0;
               var laki_pb_plus_1 = 109.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 100.1;
               var perempuan_pb_median = 104.5;
               var perempuan_pb_plus_1 = 108.9;
          } else if (umur == 52) {
               var laki_pb_min_1 = 101.2;
               var laki_pb_median = 105.6;
               var laki_pb_plus_1 = 109.9;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 100.6;
               var perempuan_pb_median = 105.0;
               var perempuan_pb_plus_1 = 109.5;
          } else if (umur == 53) {
               var laki_pb_min_1 = 101.7;
               var laki_pb_median = 106.1;
               var laki_pb_plus_1 = 110.5;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 101.1;
               var perempuan_pb_median = 105.6;
               var perempuan_pb_plus_1 = 110.1;
          } else if (umur == 54) {
               var laki_pb_min_1 = 102.3;
               var laki_pb_median = 106.7;
               var laki_pb_plus_1 = 111.1;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 101.6;
               var perempuan_pb_median = 106.2;
               var perempuan_pb_plus_1 = 110.7;
          } else if (umur == 55) {
               var laki_pb_min_1 = 102.8;
               var laki_pb_median = 107.2;
               var laki_pb_plus_1 = 111.7;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 102.2;
               var perempuan_pb_median = 106.7;
               var perempuan_pb_plus_1 = 111.3;
          } else if (umur == 56) {
               var laki_pb_min_1 = 103.3;
               var laki_pb_median = 107.8;
               var laki_pb_plus_1 = 112.3;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 102.7;
               var perempuan_pb_median = 107.3;
               var perempuan_pb_plus_1 = 111.9;
          } else if (umur == 57) {
               var laki_pb_min_1 = 103.8;
               var laki_pb_median = 108.3;
               var laki_pb_plus_1 = 112.8;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 103.2;
               var perempuan_pb_median = 107.8;
               var perempuan_pb_plus_1 = 112.5;
          } else if (umur == 58) {
               var laki_pb_min_1 = 104.3;
               var laki_pb_median = 108.9;
               var laki_pb_plus_1 = 113.4;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 103.7;
               var perempuan_pb_median = 108.4;
               var perempuan_pb_plus_1 = 113.0;
          } else if (umur == 59) {
               var laki_pb_min_1 = 104.8;
               var laki_pb_median = 109.4;
               var laki_pb_plus_1 = 114.0;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 104.2;
               var perempuan_pb_median = 108.9;
               var perempuan_pb_plus_1 = 113.6;
          } else if (umur == 60) {
               var laki_pb_min_1 = 105.3;
               var laki_pb_median = 110.0;
               var laki_pb_plus_1 = 114.6;
               {{-- ! PEREMPUAN SECTION --}}
               var perempuan_pb_min_1 = 104.7;
               var perempuan_pb_median = 109.4;
               var perempuan_pb_plus_1 = 114.2;
          };

          jenis_kelamin.forEach(radio => {
               if (radio.checked) {
                    const genderValue = radio.value;
                    console.log(genderValue, "PB/U");

                    if (genderValue === 'laki_laki') {
                         if (pb < laki_pb_median) {
                              {{-- ! PB < Median --}}
                              var a = parseFloat(pb) - parseFloat(laki_pb_median);
                              var b = parseFloat(laki_pb_median) - parseFloat(laki_pb_min_1);
                              var pb_u_rumus_satu = a / b;
                              document.getElementById('hasil_pb_u').value = pb_u_rumus_satu.toFixed(1);
                              if (pb_u_rumus_satu < -3) {
                                   document.getElementById('hasil_kategori_pb_u').value =
                                        'PB atau TB Sangat Pendek';
                              } else if (pb_u_rumus_satu >= -3 && pb_u_rumus_satu < -2) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Pendek';
                              } else if (pb_u_rumus_satu >= -2 && pb_u_rumus_satu <= 3) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Tinggi';
                              };

                         } else if (pb > laki_pb_median) {
                              {{-- ! PB > Median --}}
                              var c = parseFloat(pb) - parseFloat(laki_pb_median);
                              var d = parseFloat(laki_pb_plus_1) - parseFloat(laki_pb_median);
                              var pb_u_rumus_dua = c / d;
                              document.getElementById('hasil_pb_u').value = pb_u_rumus_dua.toFixed(1);
                              if (pb_u_rumus_dua < -3) {
                                   document.getElementById('hasil_kategori_pb_u').value =
                                        'PB atau TB Sangat Pendek';
                              } else if (pb_u_rumus_dua >= -3 && pb_u_rumus_dua < -2) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Pendek';
                              } else if (pb_u_rumus_dua >= -2 && pb_u_rumus_dua <= 3) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Tinggi';
                              };
                         }
                    }

                    if (genderValue === 'perempuan') {
                         if (pb < perempuan_pb_median) {
                              {{-- ! PB < Median --}}
                              var a = parseFloat(pb) - parseFloat(perempuan_pb_median);
                              var b = parseFloat(perempuan_pb_median) - parseFloat(perempuan_pb_min_1);
                              var pb_u_rumus_satu = a / b;
                              document.getElementById('hasil_pb_u').value = pb_u_rumus_satu.toFixed(1);
                              if (pb_u_rumus_satu < -3) {
                                   document.getElementById('hasil_kategori_pb_u').value =
                                        'PB atau TB Sangat Pendek';
                              } else if (pb_u_rumus_satu >= -3 && pb_u_rumus_satu < -2) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Pendek';
                              } else if (pb_u_rumus_satu >= -2 && pb_u_rumus_satu <= 3) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Tinggi';
                              };

                         } else if (pb > perempuan_pb_median) {
                              {{-- ! PB > Median --}}
                              var c = parseFloat(pb) - parseFloat(perempuan_pb_median);
                              var d = parseFloat(perempuan_pb_plus_1) - parseFloat(perempuan_pb_median);
                              var pb_u_rumus_dua = c / d;
                              document.getElementById('hasil_pb_u').value = pb_u_rumus_dua.toFixed(1);
                              if (pb_u_rumus_dua < -3) {
                                   document.getElementById('hasil_kategori_pb_u').value =
                                        'PB atau TB Sangat Pendek';
                              } else if (pb_u_rumus_dua >= -3 && pb_u_rumus_dua < -2) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Pendek';
                              } else if (pb_u_rumus_dua >= -2 && pb_u_rumus_dua <= 3) {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Normal';
                              } else {
                                   document.getElementById('hasil_kategori_pb_u').value = 'PB atau TB Tinggi';
                              };
                         }
                    }
               }
          })

          {{-- ! END PB/U --}}

          {{-- ! BB_PB --}}

          if (umur >= 0 && umur <= 24) {
               if (pb <= 45.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.2;
                    var bb_pb_laki_median = 2.4;
                    var bb_pb_laki_plus_1 = 2.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.3;
                    var bb_pb_perempuan_median = 2.5;
                    var bb_pb_perempuan_plus_1 = 2.7;
               } else if (pb <= 45.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.3;
                    var bb_pb_laki_median = 2.5;
                    var bb_pb_laki_plus_1 = 2.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.3;
                    var bb_pb_perempuan_median = 2.5;
                    var bb_pb_perempuan_plus_1 = 2.8;
               } else if (pb <= 46.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.4;
                    var bb_pb_laki_median = 2.6;
                    var bb_pb_laki_plus_1 = 2.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.4;
                    var bb_pb_perempuan_median = 2.6;
                    var bb_pb_perempuan_plus_1 = 2.9;
               } else if (pb <= 46.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.5;
                    var bb_pb_laki_median = 2.7;
                    var bb_pb_laki_plus_1 = 3.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.5;
                    var bb_pb_perempuan_median = 2.7;
                    var bb_pb_perempuan_plus_1 = 3.0;
               } else if (pb <= 47.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.5;
                    var bb_pb_laki_median = 2.8;
                    var bb_pb_laki_plus_1 = 3.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.6;
                    var bb_pb_perempuan_median = 2.8;
                    var bb_pb_perempuan_plus_1 = 3.1;
               } else if (pb <= 47.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.6;
                    var bb_pb_laki_median = 2.9;
                    var bb_pb_laki_plus_1 = 3.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.6;
                    var bb_pb_perempuan_median = 2.9;
                    var bb_pb_perempuan_plus_1 = 3.2;
               } else if (pb <= 48.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.7;
                    var bb_pb_laki_median = 2.9;
                    var bb_pb_laki_plus_1 = 3.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.7;
                    var bb_pb_perempuan_median = 3.0;
                    var bb_pb_perempuan_plus_1 = 3.3;
               } else if (pb <= 48.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.8;
                    var bb_pb_laki_median = 3.0;
                    var bb_pb_laki_plus_1 = 3.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.8;
                    var bb_pb_perempuan_median = 3.1;
                    var bb_pb_perempuan_plus_1 = 3.4;
               } else if (pb <= 49.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 2.9;
                    var bb_pb_laki_median = 3.1;
                    var bb_pb_laki_plus_1 = 3.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 2.9;
                    var bb_pb_perempuan_median = 3.2;
                    var bb_pb_perempuan_plus_1 = 3.2;
               } else if (pb <= 49.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.0;
                    var bb_pb_laki_median = 3.2;
                    var bb_pb_laki_plus_1 = 3.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.0;
                    var bb_pb_perempuan_median = 3.3;
                    var bb_pb_perempuan_plus_1 = 3.6;
               } else if (pb <= 50.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.0;
                    var bb_pb_laki_median = 3.3;
                    var bb_pb_laki_plus_1 = 3.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.1;
                    var bb_pb_perempuan_median = 3.4;
                    var bb_pb_perempuan_plus_1 = 3.7;
               } else if (pb <= 50.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.1;
                    var bb_pb_laki_median = 3.4;
                    var bb_pb_laki_plus_1 = 3.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.2;
                    var bb_pb_perempuan_median = 3.5;
                    var bb_pb_perempuan_plus_1 = 3.8;
               } else if (pb <= 51.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.2;
                    var bb_pb_laki_median = 3.5;
                    var bb_pb_laki_plus_1 = 3.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.3;
                    var bb_pb_perempuan_median = 3.6;
                    var bb_pb_perempuan_plus_1 = 3.9;
               } else if (pb <= 51.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.3;
                    var bb_pb_laki_median = 3.6;
                    var bb_pb_laki_plus_1 = 4.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.4;
                    var bb_pb_perempuan_median = 3.7;
                    var bb_pb_perempuan_plus_1 = 4.0;
               } else if (pb <= 52.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.5;
                    var bb_pb_laki_median = 3.8;
                    var bb_pb_laki_plus_1 = 4.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.5;
                    var bb_pb_perempuan_median = 3.8;
                    var bb_pb_perempuan_plus_1 = 4.2;
               } else if (pb <= 52.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.6;
                    var bb_pb_laki_median = 3.9;
                    var bb_pb_laki_plus_1 = 4.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.6;
                    var bb_pb_perempuan_median = 3.9;
                    var bb_pb_perempuan_plus_1 = 3.9;
               } else if (pb <= 53.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.7;
                    var bb_pb_laki_median = 4.0;
                    var bb_pb_laki_plus_1 = 4.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.7;
                    var bb_pb_perempuan_median = 4.0;
                    var bb_pb_perempuan_plus_1 = 4.0;
               } else if (pb <= 53.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.8;
                    var bb_pb_laki_median = 4.1;
                    var bb_pb_laki_plus_1 = 4.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.8;
                    var bb_pb_perempuan_median = 4.2;
                    var bb_pb_perempuan_plus_1 = 4.6;
               } else if (pb <= 54.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 3.9;
                    var bb_pb_laki_median = 4.3;
                    var bb_pb_laki_plus_1 = 4.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 3.9;
                    var bb_pb_perempuan_median = 4.3;
                    var bb_pb_perempuan_plus_1 = 4.7;
               } else if (pb <= 54.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.0;
                    var bb_pb_laki_median = 4.4;
                    var bb_pb_laki_plus_1 = 4.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.0;
                    var bb_pb_perempuan_median = 4.4;
                    var bb_pb_perempuan_plus_1 = 4.8;
               } else if (pb <= 55.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.2;
                    var bb_pb_laki_median = 4.5;
                    var bb_pb_laki_plus_1 = 5.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.2;
                    var bb_pb_perempuan_median = 4.5;
                    var bb_pb_perempuan_plus_1 = 5.0;
               } else if (pb <= 55.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.3;
                    var bb_pb_laki_median = 4.7;
                    var bb_pb_laki_plus_1 = 5.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.3;
                    var bb_pb_perempuan_median = 4.7;
                    var bb_pb_perempuan_plus_1 = 5.1;
               } else if (pb <= 56.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.4;
                    var bb_pb_laki_median = 4.8;
                    var bb_pb_laki_plus_1 = 5.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.4;
                    var bb_pb_perempuan_median = 4.8;
                    var bb_pb_perempuan_plus_1 = 5.3;
               } else if (pb <= 56.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.6;
                    var bb_pb_laki_median = 5.0;
                    var bb_pb_laki_plus_1 = 5.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.5;
                    var bb_pb_perempuan_median = 5.0;
                    var bb_pb_perempuan_plus_1 = 5.4;
               } else if (pb <= 57.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.7;
                    var bb_pb_laki_median = 5.1;
                    var bb_pb_laki_plus_1 = 5.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.6;
                    var bb_pb_perempuan_median = 5.1;
                    var bb_pb_perempuan_plus_1 = 5.6;
               } else if (pb <= 57.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 4.9;
                    var bb_pb_laki_median = 5.3;
                    var bb_pb_laki_plus_1 = 5.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.8;
                    var bb_pb_perempuan_median = 5.2;
                    var bb_pb_perempuan_plus_1 = 5.7;
               } else if (pb <= 58.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.0;
                    var bb_pb_laki_median = 5.4;
                    var bb_pb_laki_plus_1 = 5.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 4.9;
                    var bb_pb_perempuan_median = 5.4;
                    var bb_pb_perempuan_plus_1 = 5.9;
               } else if (pb <= 58.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.1;
                    var bb_pb_laki_median = 5.6;
                    var bb_pb_laki_plus_1 = 6.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.0;
                    var bb_pb_perempuan_median = 5.5;
                    var bb_pb_perempuan_plus_1 = 6.0;
               } else if (pb <= 59.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.3;
                    var bb_pb_laki_median = 5.7;
                    var bb_pb_laki_plus_1 = 6.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.1;
                    var bb_pb_perempuan_median = 5.6;
                    var bb_pb_perempuan_plus_1 = 6.2;
               } else if (pb <= 59.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.4;
                    var bb_pb_laki_median = 5.9;
                    var bb_pb_laki_plus_1 = 6.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.3;
                    var bb_pb_perempuan_median = 5.7;
                    var bb_pb_perempuan_plus_1 = 6.3;
               } else if (pb <= 60.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.5;
                    var bb_pb_laki_median = 6.0;
                    var bb_pb_laki_plus_1 = 6.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.4;
                    var bb_pb_perempuan_median = 5.9;
                    var bb_pb_perempuan_plus_1 = 6.4;
               } else if (pb <= 60.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.6;
                    var bb_pb_laki_median = 6.1;
                    var bb_pb_laki_plus_1 = 6.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.5;
                    var bb_pb_perempuan_median = 6.0;
                    var bb_pb_perempuan_plus_1 = 6.6;
               } else if (pb <= 61.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.8;
                    var bb_pb_laki_median = 6.3;
                    var bb_pb_laki_plus_1 = 6.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.6;
                    var bb_pb_perempuan_median = 6.1;
                    var bb_pb_perempuan_plus_1 = 6.7;
               } else if (pb <= 61.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 5.9;
                    var bb_pb_laki_median = 6.4;
                    var bb_pb_laki_plus_1 = 7.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.7;
                    var bb_pb_perempuan_median = 6.3;
                    var bb_pb_perempuan_plus_1 = 6.9;
               } else if (pb <= 62.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.0;
                    var bb_pb_laki_median = 6.5;
                    var bb_pb_laki_plus_1 = 7.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.8;
                    var bb_pb_perempuan_median = 6.4;
                    var bb_pb_perempuan_plus_1 = 7.0;
               } else if (pb <= 62.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.1;
                    var bb_pb_laki_median = 6.7;
                    var bb_pb_laki_plus_1 = 7.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 5.9;
                    var bb_pb_perempuan_median = 6.5;
                    var bb_pb_perempuan_plus_1 = 7.1;
               } else if (pb <= 63.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.2;
                    var bb_pb_laki_median = 6.8;
                    var bb_pb_laki_plus_1 = 7.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.0;
                    var bb_pb_perempuan_median = 6.6;
                    var bb_pb_perempuan_plus_1 = 7.3;
               } else if (pb <= 63.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.4;
                    var bb_pb_laki_median = 6.9;
                    var bb_pb_laki_plus_1 = 7.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.2;
                    var bb_pb_perempuan_median = 6.7;
                    var bb_pb_perempuan_plus_1 = 7.4;
               } else if (pb <= 64.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.5;
                    var bb_pb_laki_median = 7.0;
                    var bb_pb_laki_plus_1 = 7.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.3;
                    var bb_pb_perempuan_median = 6.9;
                    var bb_pb_perempuan_plus_1 = 7.5;
               } else if (pb <= 64.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.6;
                    var bb_pb_laki_median = 7.1;
                    var bb_pb_laki_plus_1 = 7.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.4;
                    var bb_pb_perempuan_median = 7.0;
                    var bb_pb_perempuan_plus_1 = 7.6;
               } else if (pb <= 65.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.7;
                    var bb_pb_laki_median = 7.3;
                    var bb_pb_laki_plus_1 = 7.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.5;
                    var bb_pb_perempuan_median = 7.1;
                    var bb_pb_perempuan_plus_1 = 7.8;
               } else if (pb <= 65.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.8;
                    var bb_pb_laki_median = 7.4;
                    var bb_pb_laki_plus_1 = 8.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.6;
                    var bb_pb_perempuan_median = 7.2;
                    var bb_pb_perempuan_plus_1 = 7.9;
               } else if (pb <= 66.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.9;
                    var bb_pb_laki_median = 7.5;
                    var bb_pb_laki_plus_1 = 8.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.7;
                    var bb_pb_perempuan_median = 7.3;
                    var bb_pb_perempuan_plus_1 = 8.0;
               } else if (pb <= 66.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.0;
                    var bb_pb_laki_median = 7.6;
                    var bb_pb_laki_plus_1 = 8.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.8;
                    var bb_pb_perempuan_median = 7.4;
                    var bb_pb_perempuan_plus_1 = 8.1;
               } else if (pb <= 67.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.1;
                    var bb_pb_laki_median = 7.7;
                    var bb_pb_laki_plus_1 = 8.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.9;
                    var bb_pb_perempuan_median = 7.5;
                    var bb_pb_perempuan_plus_1 = 8.3;
               } else if (pb <= 67.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.2;
                    var bb_pb_laki_median = 7.9;
                    var bb_pb_laki_plus_1 = 8.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.0;
                    var bb_pb_perempuan_median = 7.6;
                    var bb_pb_perempuan_plus_1 = 8.4;
               } else if (pb <= 68.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.3;
                    var bb_pb_laki_median = 8.0;
                    var bb_pb_laki_plus_1 = 8.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.1;
                    var bb_pb_perempuan_median = 7.7;
                    var bb_pb_perempuan_plus_1 = 8.5;
               } else if (pb <= 68.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.5;
                    var bb_pb_laki_median = 8.1;
                    var bb_pb_laki_plus_1 = 8.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.2;
                    var bb_pb_perempuan_median = 7.9;
                    var bb_pb_perempuan_plus_1 = 8.6;
               } else if (pb <= 69.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.6;
                    var bb_pb_laki_median = 8.2;
                    var bb_pb_laki_plus_1 = 8.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.3;
                    var bb_pb_perempuan_median = 8.0;
                    var bb_pb_perempuan_plus_1 = 8.7;
               } else if (pb <= 69.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.7;
                    var bb_pb_laki_median = 8.3;
                    var bb_pb_laki_plus_1 = 9.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.4;
                    var bb_pb_perempuan_median = 8.1;
                    var bb_pb_perempuan_plus_1 = 8.8;
               } else if (pb <= 70.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.8;
                    var bb_pb_laki_median = 8.4;
                    var bb_pb_laki_plus_1 = 9.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.5;
                    var bb_pb_perempuan_median = 8.2;
                    var bb_pb_perempuan_plus_1 = 9.0;
               } else if (pb <= 70.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.9;
                    var bb_pb_laki_median = 8.5;
                    var bb_pb_laki_plus_1 = 9.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.6;
                    var bb_pb_perempuan_median = 8.3;
                    var bb_pb_perempuan_plus_1 = 9.1;
               } else if (pb <= 71.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.0;
                    var bb_pb_laki_median = 8.6;
                    var bb_pb_laki_plus_1 = 9.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.7;
                    var bb_pb_perempuan_median = 8.4;
                    var bb_pb_perempuan_plus_1 = 9.2;
               } else if (pb <= 71.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.1;
                    var bb_pb_laki_median = 8.8;
                    var bb_pb_laki_plus_1 = 9.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.7;
                    var bb_pb_perempuan_median = 8.5;
                    var bb_pb_perempuan_plus_1 = 9.3;
               } else if (pb <= 72.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.2;
                    var bb_pb_laki_median = 8.9;
                    var bb_pb_laki_plus_1 = 9.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.8;
                    var bb_pb_perempuan_median = 8.6;
                    var bb_pb_perempuan_plus_1 = 9.4;
               } else if (pb <= 72.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.3;
                    var bb_pb_laki_median = 9.0;
                    var bb_pb_laki_plus_1 = 9.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.9;
                    var bb_pb_perempuan_median = 8.7;
                    var bb_pb_perempuan_plus_1 = 9.5;
               } else if (pb <= 73.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.4;
                    var bb_pb_laki_median = 9.1;
                    var bb_pb_laki_plus_1 = 9.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.0;
                    var bb_pb_perempuan_median = 8.8;
                    var bb_pb_perempuan_plus_1 = 9.6;
               } else if (pb <= 73.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.5;
                    var bb_pb_laki_median = 9.2;
                    var bb_pb_laki_plus_1 = 10.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.1;
                    var bb_pb_perempuan_median = 8.9;
                    var bb_pb_perempuan_plus_1 = 9.7;
               } else if (pb <= 74.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.6;
                    var bb_pb_laki_median = 9.3;
                    var bb_pb_laki_plus_1 = 10.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.2;
                    var bb_pb_perempuan_median = 9.0;
                    var bb_pb_perempuan_plus_1 = 9.8;
               } else if (pb <= 74.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.7;
                    var bb_pb_laki_median = 9.4;
                    var bb_pb_laki_plus_1 = 10.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.3;
                    var bb_pb_perempuan_median = 9.1;
                    var bb_pb_perempuan_plus_1 = 9.9;
               } else if (pb <= 75.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.8;
                    var bb_pb_laki_median = 9.5;
                    var bb_pb_laki_plus_1 = 10.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.4;
                    var bb_pb_perempuan_median = 9.1;
                    var bb_pb_perempuan_plus_1 = 10.0;
               } else if (pb <= 75.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.8;
                    var bb_pb_laki_median = 9.6;
                    var bb_pb_laki_plus_1 = 10.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.5;
                    var bb_pb_perempuan_median = 9.2;
                    var bb_pb_perempuan_plus_1 = 10.1;
               } else if (pb <= 76.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.9;
                    var bb_pb_laki_median = 9.7;
                    var bb_pb_laki_plus_1 = 10.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.5;
                    var bb_pb_perempuan_median = 9.3;
                    var bb_pb_perempuan_plus_1 = 10.2;
               } else if (pb <= 76.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.0;
                    var bb_pb_laki_median = 9.8;
                    var bb_pb_laki_plus_1 = 10.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.6;
                    var bb_pb_perempuan_median = 9.4;
                    var bb_pb_perempuan_plus_1 = 10.3;
               } else if (pb <= 77.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.1;
                    var bb_pb_laki_median = 9.9;
                    var bb_pb_laki_plus_1 = 10.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.7;
                    var bb_pb_perempuan_median = 9.5;
                    var bb_pb_perempuan_plus_1 = 10.4;
               } else if (pb <= 77.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.2;
                    var bb_pb_laki_median = 10.0;
                    var bb_pb_laki_plus_1 = 10.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.8;
                    var bb_pb_perempuan_median = 9.6;
                    var bb_pb_perempuan_plus_1 = 10.5;
               } else if (pb <= 78.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.3;
                    var bb_pb_laki_median = 10.1;
                    var bb_pb_laki_plus_1 = 11.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.9;
                    var bb_pb_perempuan_median = 9.7;
                    var bb_pb_perempuan_plus_1 = 10.6;
               } else if (pb <= 78.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.4;
                    var bb_pb_laki_median = 10.2;
                    var bb_pb_laki_plus_1 = 11.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.0;
                    var bb_pb_perempuan_median = 9.8;
                    var bb_pb_perempuan_plus_1 = 10.7;
               } else if (pb <= 79.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.5;
                    var bb_pb_laki_median = 10.3;
                    var bb_pb_laki_plus_1 = 11.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.1;
                    var bb_pb_perempuan_median = 9.9;
                    var bb_pb_perempuan_plus_1 = 10.8;
               } else if (pb <= 79.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.5;
                    var bb_pb_laki_median = 10.4;
                    var bb_pb_laki_plus_1 = 11.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.1;
                    var bb_pb_perempuan_median = 10.0;
                    var bb_pb_perempuan_plus_1 = 10.9;
               } else if (pb <= 80.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.6;
                    var bb_pb_laki_median = 10.4;
                    var bb_pb_laki_plus_1 = 11.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.2;
                    var bb_pb_perempuan_median = 10.1;
                    var bb_pb_perempuan_plus_1 = 11.0;
               } else if (pb <= 80.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.7;
                    var bb_pb_laki_median = 10.5;
                    var bb_pb_laki_plus_1 = 11.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.3;
                    var bb_pb_perempuan_median = 10.2;
                    var bb_pb_perempuan_plus_1 = 11.2;
               } else if (pb <= 81.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.8;
                    var bb_pb_laki_median = 10.6;
                    var bb_pb_laki_plus_1 = 11.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.4;
                    var bb_pb_perempuan_median = 10.3;
                    var bb_pb_perempuan_plus_1 = 11.3;
               } else if (pb <= 81.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.9;
                    var bb_pb_laki_median = 10.7;
                    var bb_pb_laki_plus_1 = 11.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.5;
                    var bb_pb_perempuan_median = 10.4;
                    var bb_pb_perempuan_plus_1 = 11.4;
               } else if (pb <= 82.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.0;
                    var bb_pb_laki_median = 10.8;
                    var bb_pb_laki_plus_1 = 11.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.6;
                    var bb_pb_perempuan_median = 10.5;
                    var bb_pb_perempuan_plus_1 = 11.5;
               } else if (pb <= 82.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.1;
                    var bb_pb_laki_median = 10.9;
                    var bb_pb_laki_plus_1 = 11.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.7;
                    var bb_pb_perempuan_median = 10.6;
                    var bb_pb_perempuan_plus_1 = 11.6;
               } else if (pb <= 83.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.2;
                    var bb_pb_laki_median = 11.0;
                    var bb_pb_laki_plus_1 = 12.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.8;
                    var bb_pb_perempuan_median = 10.7;
                    var bb_pb_perempuan_plus_1 = 11.8;
               } else if (pb <= 83.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.3;
                    var bb_pb_laki_median = 11.2;
                    var bb_pb_laki_plus_1 = 12.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.9;
                    var bb_pb_perempuan_median = 10.9;
                    var bb_pb_perempuan_plus_1 = 11.9;
               } else if (pb <= 84.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.4;
                    var bb_pb_laki_median = 11.3;
                    var bb_pb_laki_plus_1 = 12.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.1;
                    var bb_pb_perempuan_median = 11.0;
                    var bb_pb_perempuan_plus_1 = 12.0;
               } else if (pb <= 84.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.5;
                    var bb_pb_laki_median = 11.4;
                    var bb_pb_laki_plus_1 = 12.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.2;
                    var bb_pb_perempuan_median = 11.1;
                    var bb_pb_perempuan_plus_1 = 12.1;
               } else if (pb <= 85.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.6;
                    var bb_pb_laki_median = 11.5;
                    var bb_pb_laki_plus_1 = 12.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.3;
                    var bb_pb_perempuan_median = 11.2;
                    var bb_pb_perempuan_plus_1 = 12.3;
               } else if (pb <= 85.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.7;
                    var bb_pb_laki_median = 11.6;
                    var bb_pb_laki_plus_1 = 12.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.4;
                    var bb_pb_perempuan_median = 11.3;
                    var bb_pb_perempuan_plus_1 = 12.4;
               } else if (pb <= 86.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.8;
                    var bb_pb_laki_median = 11.7;
                    var bb_pb_laki_plus_1 = 12.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.5;
                    var bb_pb_perempuan_median = 11.5;
                    var bb_pb_perempuan_plus_1 = 12.6;
               } else if (pb <= 86.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.0;
                    var bb_pb_laki_median = 11.9;
                    var bb_pb_laki_plus_1 = 12.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.6;
                    var bb_pb_perempuan_median = 11.6;
                    var bb_pb_perempuan_plus_1 = 12.7;
               } else if (pb <= 87.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.1;
                    var bb_pb_laki_median = 12.0;
                    var bb_pb_laki_plus_1 = 13.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.7;
                    var bb_pb_perempuan_median = 11.7;
                    var bb_pb_perempuan_plus_1 = 12.8;
               } else if (pb <= 87.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.2;
                    var bb_pb_laki_median = 12.1;
                    var bb_pb_laki_plus_1 = 13.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.9;
                    var bb_pb_perempuan_median = 11.8;
                    var bb_pb_perempuan_plus_1 = 13.0;
               } else if (pb <= 88.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.3;
                    var bb_pb_laki_median = 12.2;
                    var bb_pb_laki_plus_1 = 13.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.0;
                    var bb_pb_perempuan_median = 12.0;
                    var bb_pb_perempuan_plus_1 = 13.1;
               } else if (pb <= 88.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.4;
                    var bb_pb_laki_median = 12.4;
                    var bb_pb_laki_plus_1 = 13.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.1;
                    var bb_pb_perempuan_median = 12.1;
                    var bb_pb_perempuan_plus_1 = 13.2;
               } else if (pb <= 89.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.5;
                    var bb_pb_laki_median = 12.5;
                    var bb_pb_laki_plus_1 = 13.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.2;
                    var bb_pb_perempuan_median = 12.2;
                    var bb_pb_perempuan_plus_1 = 13.4;
               } else if (pb <= 89.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.6;
                    var bb_pb_laki_median = 12.6;
                    var bb_pb_laki_plus_1 = 13.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.3;
                    var bb_pb_perempuan_median = 12.3;
                    var bb_pb_perempuan_plus_1 = 13.5;
               } else if (pb <= 90.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.8;
                    var bb_pb_laki_median = 12.7;
                    var bb_pb_laki_plus_1 = 13.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.4;
                    var bb_pb_perempuan_median = 12.5;
                    var bb_pb_perempuan_plus_1 = 13.7;
               } else if (pb <= 90.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.9;
                    var bb_pb_laki_median = 12.8;
                    var bb_pb_laki_plus_1 = 13.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.5;
                    var bb_pb_perempuan_median = 12.6;
                    var bb_pb_perempuan_plus_1 = 13.8;
               } else if (pb <= 91.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.0;
                    var bb_pb_laki_median = 13.0;
                    var bb_pb_laki_plus_1 = 14.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.7;
                    var bb_pb_perempuan_median = 12.7;
                    var bb_pb_perempuan_plus_1 = 13.9;
               } else if (pb <= 91.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.1;
                    var bb_pb_laki_median = 13.1;
                    var bb_pb_laki_plus_1 = 14.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.8;
                    var bb_pb_perempuan_median = 12.8;
                    var bb_pb_perempuan_plus_1 = 14.1;
               } else if (pb <= 92.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.2;
                    var bb_pb_laki_median = 13.2;
                    var bb_pb_laki_plus_1 = 14.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.9;
                    var bb_pb_perempuan_median = 13.0;
                    var bb_pb_perempuan_plus_1 = 14.2;
               } else if (pb <= 92.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.3;
                    var bb_pb_laki_median = 13.3;
                    var bb_pb_laki_plus_1 = 14.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.0;
                    var bb_pb_perempuan_median = 13.1;
                    var bb_pb_perempuan_plus_1 = 14.3;
               } else if (pb <= 93.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.4;
                    var bb_pb_laki_median = 13.4;
                    var bb_pb_laki_plus_1 = 14.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.1;
                    var bb_pb_perempuan_median = 13.2;
                    var bb_pb_perempuan_plus_1 = 14.5;
               } else if (pb <= 93.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.5;
                    var bb_pb_laki_median = 13.5;
                    var bb_pb_laki_plus_1 = 14.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.2;
                    var bb_pb_perempuan_median = 13.3;
                    var bb_pb_perempuan_plus_1 = 14.6;
               } else if (pb <= 94.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.6;
                    var bb_pb_laki_median = 13.7;
                    var bb_pb_laki_plus_1 = 14.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.3;
                    var bb_pb_perempuan_median = 13.5;
                    var bb_pb_perempuan_plus_1 = 14.7;
               } else if (pb <= 94.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.7;
                    var bb_pb_laki_median = 13.8;
                    var bb_pb_laki_plus_1 = 14.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.4;
                    var bb_pb_perempuan_median = 13.6;
                    var bb_pb_perempuan_plus_1 = 14.9;
               } else if (pb <= 95.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.8;
                    var bb_pb_laki_median = 13.9;
                    var bb_pb_laki_plus_1 = 15.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.6;
                    var bb_pb_perempuan_median = 13.7;
                    var bb_pb_perempuan_plus_1 = 15.0;
               } else if (pb <= 95.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.9;
                    var bb_pb_laki_median = 14.0;
                    var bb_pb_laki_plus_1 = 15.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.7;
                    var bb_pb_perempuan_median = 13.8;
                    var bb_pb_perempuan_plus_1 = 15.2;
               } else if (pb <= 96.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.1;
                    var bb_pb_laki_median = 14.1;
                    var bb_pb_laki_plus_1 = 15.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.8;
                    var bb_pb_perempuan_median = 14.0;
                    var bb_pb_perempuan_plus_1 = 15.3;
               } else if (pb <= 96.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.2;
                    var bb_pb_laki_median = 14.3;
                    var bb_pb_laki_plus_1 = 15.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.9;
                    var bb_pb_perempuan_median = 14.1;
                    var bb_pb_perempuan_plus_1 = 15.4;
               } else if (pb <= 97.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.3;
                    var bb_pb_laki_median = 14.4;
                    var bb_pb_laki_plus_1 = 15.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.0;
                    var bb_pb_perempuan_median = 14.2;
                    var bb_pb_perempuan_plus_1 = 15.6;
               } else if (pb <= 97.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.4;
                    var bb_pb_laki_median = 14.5;
                    var bb_pb_laki_plus_1 = 15.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.1;
                    var bb_pb_perempuan_median = 14.4;
                    var bb_pb_perempuan_plus_1 = 15.7;
               } else if (pb <= 98.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.5;
                    var bb_pb_laki_median = 14.6;
                    var bb_pb_laki_plus_1 = 15.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.3;
                    var bb_pb_perempuan_median = 14.5;
                    var bb_pb_perempuan_plus_1 = 15.9;
               } else if (pb <= 98.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.6;
                    var bb_pb_laki_median = 14.8;
                    var bb_pb_laki_plus_1 = 16.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.4;
                    var bb_pb_perempuan_median = 14.6;
                    var bb_pb_perempuan_plus_1 = 16.0;
               } else if (pb <= 99.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.7;
                    var bb_pb_laki_median = 14.9;
                    var bb_pb_laki_plus_1 = 16.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.5;
                    var bb_pb_perempuan_median = 14.8;
                    var bb_pb_perempuan_plus_1 = 16.2;
               } else if (pb <= 99.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.9;
                    var bb_pb_laki_median = 15.0;
                    var bb_pb_laki_plus_1 = 16.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.6;
                    var bb_pb_perempuan_median = 14.9;
                    var bb_pb_perempuan_plus_1 = 16.3;
               } else if (pb <= 100.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.0;
                    var bb_pb_laki_median = 15.2;
                    var bb_pb_laki_plus_1 = 16.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.7;
                    var bb_pb_perempuan_median = 15.0;
                    var bb_pb_perempuan_plus_1 = 16.5;
               } else if (pb <= 100.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.1;
                    var bb_pb_laki_median = 15.3;
                    var bb_pb_laki_plus_1 = 16.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.9;
                    var bb_pb_perempuan_median = 15.2;
                    var bb_pb_perempuan_plus_1 = 16.6;
               } else if (pb <= 101.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.2;
                    var bb_pb_laki_median = 15.4;
                    var bb_pb_laki_plus_1 = 16.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.0;
                    var bb_pb_perempuan_median = 15.3;
                    var bb_pb_perempuan_plus_1 = 16.8;
               } else if (pb <= 101.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.4;
                    var bb_pb_laki_median = 15.6;
                    var bb_pb_laki_plus_1 = 16.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.1;
                    var bb_pb_perempuan_median = 15.5;
                    var bb_pb_perempuan_plus_1 = 17.0;
               } else if (pb <= 102.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.5;
                    var bb_pb_laki_median = 15.7;
                    var bb_pb_laki_plus_1 = 17.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.3;
                    var bb_pb_perempuan_median = 15.6;
                    var bb_pb_perempuan_plus_1 = 17.1;
               } else if (pb <= 102.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.6;
                    var bb_pb_laki_median = 15.9;
                    var bb_pb_laki_plus_1 = 17.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.4;
                    var bb_pb_perempuan_median = 15.8;
                    var bb_pb_perempuan_plus_1 = 17.3;
               } else if (pb <= 103.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.8;
                    var bb_pb_laki_median = 16.0;
                    var bb_pb_laki_plus_1 = 17.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.5;
                    var bb_pb_perempuan_median = 15.9;
                    var bb_pb_perempuan_plus_1 = 17.5;
               } else if (pb <= 103.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.9;
                    var bb_pb_laki_median = 16.2;
                    var bb_pb_laki_plus_1 = 17.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.7;
                    var bb_pb_perempuan_median = 16.1;
                    var bb_pb_perempuan_plus_1 = 17.6;
               } else if (pb <= 104.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.0;
                    var bb_pb_laki_median = 16.3;
                    var bb_pb_laki_plus_1 = 17.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.8;
                    var bb_pb_perempuan_median = 16.2;
                    var bb_pb_perempuan_plus_1 = 17.8;
               } else if (pb <= 104.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.2;
                    var bb_pb_laki_median = 16.5;
                    var bb_pb_laki_plus_1 = 17.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.0;
                    var bb_pb_perempuan_median = 16.4;
                    var bb_pb_perempuan_plus_1 = 18.0;
               } else if (pb <= 105.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.3;
                    var bb_pb_laki_median = 16.6;
                    var bb_pb_laki_plus_1 = 18.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.1;
                    var bb_pb_perempuan_median = 16.5;
                    var bb_pb_perempuan_plus_1 = 18.2;
               } else if (pb <= 105.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.4;
                    var bb_pb_laki_median = 16.8;
                    var bb_pb_laki_plus_1 = 18.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.3;
                    var bb_pb_perempuan_median = 16.7;
                    var bb_pb_perempuan_plus_1 = 18.4;
               } else if (pb <= 106.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.6;
                    var bb_pb_laki_median = 16.9;
                    var bb_pb_laki_plus_1 = 18.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.4;
                    var bb_pb_perempuan_median = 16.9;
                    var bb_pb_perempuan_plus_1 = 18.5;
               } else if (pb <= 106.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.7;
                    var bb_pb_laki_median = 17.1;
                    var bb_pb_laki_plus_1 = 18.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.6;
                    var bb_pb_perempuan_median = 17.1;
                    var bb_pb_perempuan_plus_1 = 18.7;
               } else if (pb <= 107.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.9;
                    var bb_pb_laki_median = 17.3;
                    var bb_pb_laki_plus_1 = 18.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.7;
                    var bb_pb_perempuan_median = 17.2;
                    var bb_pb_perempuan_plus_1 = 18.9;
               } else if (pb <= 107.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.0;
                    var bb_pb_laki_median = 17.4;
                    var bb_pb_laki_plus_1 = 19.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.9;
                    var bb_pb_perempuan_median = 17.4;
                    var bb_pb_perempuan_plus_1 = 19.1;
               } else if (pb <= 108.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.2;
                    var bb_pb_laki_median = 17.6;
                    var bb_pb_laki_plus_1 = 19.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.0;
                    var bb_pb_perempuan_median = 17.6;
                    var bb_pb_perempuan_plus_1 = 19.3;
               } else if (pb <= 108.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.3;
                    var bb_pb_laki_median = 17.8;
                    var bb_pb_laki_plus_1 = 19.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.2;
                    var bb_pb_perempuan_median = 17.8;
                    var bb_pb_perempuan_plus_1 = 19.5;
               } else if (pb <= 109.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.5;
                    var bb_pb_laki_median = 17.9;
                    var bb_pb_laki_plus_1 = 19.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.4;
                    var bb_pb_perempuan_median = 18.0;
                    var bb_pb_perempuan_plus_1 = 19.7;
               } else if (pb <= 109.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.6;
                    var bb_pb_laki_median = 18.1;
                    var bb_pb_laki_plus_1 = 19.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.5;
                    var bb_pb_perempuan_median = 18.1;
                    var bb_pb_perempuan_plus_1 = 20.0;
               } else if (pb <= 110.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.8;
                    var bb_pb_laki_median = 18.3;
                    var bb_pb_laki_plus_1 = 20.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.7;
                    var bb_pb_perempuan_median = 18.3;
                    var bb_pb_perempuan_plus_1 = 20.2;
               }

          } else if (umur > 24 && umur <= 60) {
               if (pb <= 65.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 6.9;
                    var bb_pb_laki_median = 7.4;
                    var bb_pb_laki_plus_1 = 8.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.6;
                    var bb_pb_perempuan_median = 7.2;
                    var bb_pb_perempuan_plus_1 = 7.9;
               } else if (pb <= 65.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.0;
                    var bb_pb_laki_median = 7.6;
                    var bb_pb_laki_plus_1 = 8.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.7;
                    var bb_pb_perempuan_median = 7.4;
                    var bb_pb_perempuan_plus_1 = 8.1;
               } else if (pb <= 66.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.1;
                    var bb_pb_laki_median = 7.7;
                    var bb_pb_laki_plus_1 = 8.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.8;
                    var bb_pb_perempuan_median = 7.5;
                    var bb_pb_perempuan_plus_1 = 8.2;
               } else if (pb <= 66.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.2;
                    var bb_pb_laki_median = 7.8;
                    var bb_pb_laki_plus_1 = 8.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 6.9;
                    var bb_pb_perempuan_median = 7.6;
                    var bb_pb_perempuan_plus_1 = 8.3;
               } else if (pb <= 67.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.3;
                    var bb_pb_laki_median = 7.9;
                    var bb_pb_laki_plus_1 = 8.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.0;
                    var bb_pb_perempuan_median = 7.7;
                    var bb_pb_perempuan_plus_1 = 8.4;
               } else if (pb <= 67.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.4;
                    var bb_pb_laki_median = 8.0;
                    var bb_pb_laki_plus_1 = 8.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.1;
                    var bb_pb_perempuan_median = 7.8;
                    var bb_pb_perempuan_plus_1 = 8.5;
               } else if (pb <= 68.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.5;
                    var bb_pb_laki_median = 8.1;
                    var bb_pb_laki_plus_1 = 8.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.2;
                    var bb_pb_perempuan_median = 7.9;
                    var bb_pb_perempuan_plus_1 = 8.7;
               } else if (pb <= 68.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.6;
                    var bb_pb_laki_median = 8.2;
                    var bb_pb_laki_plus_1 = 9.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.3;
                    var bb_pb_perempuan_median = 8.0;
                    var bb_pb_perempuan_plus_1 = 8.8;
               } else if (pb <= 69.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.7;
                    var bb_pb_laki_median = 8.4;
                    var bb_pb_laki_plus_1 = 9.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.4;
                    var bb_pb_perempuan_median = 8.1;
                    var bb_pb_perempuan_plus_1 = 8.9;
               } else if (pb <= 69.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.8;
                    var bb_pb_laki_median = 8.5;
                    var bb_pb_laki_plus_1 = 9.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.5;
                    var bb_pb_perempuan_median = 8.2;
                    var bb_pb_perempuan_plus_1 = 9.0;
               } else if (pb <= 70.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 7.9;
                    var bb_pb_laki_median = 8.6;
                    var bb_pb_laki_plus_1 = 9.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.6;
                    var bb_pb_perempuan_median = 8.3;
                    var bb_pb_perempuan_plus_1 = 9.1;
               } else if (pb <= 70.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.0;
                    var bb_pb_laki_median = 8.7;
                    var bb_pb_laki_plus_1 = 9.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.7;
                    var bb_pb_perempuan_median = 8.4;
                    var bb_pb_perempuan_plus_1 = 9.2;
               } else if (pb <= 71.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.1;
                    var bb_pb_laki_median = 8.8;
                    var bb_pb_laki_plus_1 = 9.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.8;
                    var bb_pb_perempuan_median = 8.5;
                    var bb_pb_perempuan_plus_1 = 9.3;
               } else if (pb <= 71.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.2;
                    var bb_pb_laki_median = 8.9;
                    var bb_pb_laki_plus_1 = 9.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 7.9;
                    var bb_pb_perempuan_median = 8.6;
                    var bb_pb_perempuan_plus_1 = 9.4;
               } else if (pb <= 72.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.3;
                    var bb_pb_laki_median = 9.0;
                    var bb_pb_laki_plus_1 = 9.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.0;
                    var bb_pb_perempuan_median = 8.7;
                    var bb_pb_perempuan_plus_1 = 9.5;
               } else if (pb <= 72.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.4;
                    var bb_pb_laki_median = 9.1;
                    var bb_pb_laki_plus_1 = 9.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.1;
                    var bb_pb_perempuan_median = 8.8;
                    var bb_pb_perempuan_plus_1 = 9.7;
               } else if (pb <= 73.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.5;
                    var bb_pb_laki_median = 9.2;
                    var bb_pb_laki_plus_1 = 10.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.1;
                    var bb_pb_perempuan_median = 8.9;
                    var bb_pb_perempuan_plus_1 = 9.8;
               } else if (pb <= 73.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.6;
                    var bb_pb_laki_median = 9.3;
                    var bb_pb_laki_plus_1 = 10.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.2;
                    var bb_pb_perempuan_median = 9.0;
                    var bb_pb_perempuan_plus_1 = 9.9;
               } else if (pb <= 74.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.7;
                    var bb_pb_laki_median = 9.4;
                    var bb_pb_laki_plus_1 = 10.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.3;
                    var bb_pb_perempuan_median = 9.1;
                    var bb_pb_perempuan_plus_1 = 10.0;
               } else if (pb <= 74.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.8;
                    var bb_pb_laki_median = 9.5;
                    var bb_pb_laki_plus_1 = 10.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.4;
                    var bb_pb_perempuan_median = 9.2;
                    var bb_pb_perempuan_plus_1 = 10.1;
               } else if (pb <= 75.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 8.9;
                    var bb_pb_laki_median = 9.6;
                    var bb_pb_laki_plus_1 = 10.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.5;
                    var bb_pb_perempuan_median = 9.3;
                    var bb_pb_perempuan_plus_1 = 10.2;
               } else if (pb <= 75.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.0;
                    var bb_pb_laki_median = 9.7;
                    var bb_pb_laki_plus_1 = 10.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.6;
                    var bb_pb_perempuan_median = 9.4;
                    var bb_pb_perempuan_plus_1 = 10.3;
               } else if (pb <= 76.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.1;
                    var bb_pb_laki_median = 9.8;
                    var bb_pb_laki_plus_1 = 10.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.7;
                    var bb_pb_perempuan_median = 9.5;
                    var bb_pb_perempuan_plus_1 = 10.4;
               } else if (pb <= 76.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.2;
                    var bb_pb_laki_median = 9.9;
                    var bb_pb_laki_plus_1 = 10.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.7;
                    var bb_pb_perempuan_median = 9.6;
                    var bb_pb_perempuan_plus_1 = 10.5;
               } else if (pb <= 77.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.2;
                    var bb_pb_laki_median = 10.0;
                    var bb_pb_laki_plus_1 = 10.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.8;
                    var bb_pb_perempuan_median = 9.6;
                    var bb_pb_perempuan_plus_1 = 10.6;
               } else if (pb <= 77.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.3;
                    var bb_pb_laki_median = 10.1;
                    var bb_pb_laki_plus_1 = 11.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 8.9;
                    var bb_pb_perempuan_median = 9.7;
                    var bb_pb_perempuan_plus_1 = 10.7;
               } else if (pb <= 78.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.4;
                    var bb_pb_laki_median = 10.2;
                    var bb_pb_laki_plus_1 = 11.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.0;
                    var bb_pb_perempuan_median = 9.8;
                    var bb_pb_perempuan_plus_1 = 10.8;
               } else if (pb <= 78.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.5;
                    var bb_pb_laki_median = 10.3;
                    var bb_pb_laki_plus_1 = 11.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.1;
                    var bb_pb_perempuan_median = 9.9;
                    var bb_pb_perempuan_plus_1 = 10.9;
               } else if (pb <= 79.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.6;
                    var bb_pb_laki_median = 10.4;
                    var bb_pb_laki_plus_1 = 11.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.2;
                    var bb_pb_perempuan_median = 10.0;
                    var bb_pb_perempuan_plus_1 = 11.0;
               } else if (pb <= 79.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.7;
                    var bb_pb_laki_median = 10.5;
                    var bb_pb_laki_plus_1 = 11.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.3;
                    var bb_pb_perempuan_median = 10.1;
                    var bb_pb_perempuan_plus_1 = 11.1;
               } else if (pb <= 80.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.7;
                    var bb_pb_laki_median = 10.6;
                    var bb_pb_laki_plus_1 = 11.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.4;
                    var bb_pb_perempuan_median = 10.2;
                    var bb_pb_perempuan_plus_1 = 11.2;
               } else if (pb <= 80.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.8;
                    var bb_pb_laki_median = 10.7;
                    var bb_pb_laki_plus_1 = 11.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.5;
                    var bb_pb_perempuan_median = 10.3;
                    var bb_pb_perempuan_plus_1 = 11.3;
               } else if (pb <= 81.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 9.9;
                    var bb_pb_laki_median = 10.8;
                    var bb_pb_laki_plus_1 = 11.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.6;
                    var bb_pb_perempuan_median = 10.4;
                    var bb_pb_perempuan_plus_1 = 11.4;
               } else if (pb <= 81.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.0;
                    var bb_pb_laki_median = 10.9;
                    var bb_pb_laki_plus_1 = 11.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.7;
                    var bb_pb_perempuan_median = 10.6;
                    var bb_pb_perempuan_plus_1 = 11.6;
               } else if (pb <= 82.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.1;
                    var bb_pb_laki_median = 11.0;
                    var bb_pb_laki_plus_1 = 11.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.8;
                    var bb_pb_perempuan_median = 10.7;
                    var bb_pb_perempuan_plus_1 = 11.7;
               } else if (pb <= 82.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.2;
                    var bb_pb_laki_median = 11.1;
                    var bb_pb_laki_plus_1 = 12.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 9.9;
                    var bb_pb_perempuan_median = 10.8;
                    var bb_pb_perempuan_plus_1 = 11.8;
               } else if (pb <= 83.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.3;
                    var bb_pb_laki_median = 11.2;
                    var bb_pb_laki_plus_1 = 12.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.0;
                    var bb_pb_perempuan_median = 10.9;
                    var bb_pb_perempuan_plus_1 = 11.9;
               } else if (pb <= 83.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.4;
                    var bb_pb_laki_median = 11.3;
                    var bb_pb_laki_plus_1 = 12.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.1;
                    var bb_pb_perempuan_median = 11.0;
                    var bb_pb_perempuan_plus_1 = 12.1;
               } else if (pb <= 84.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.5;
                    var bb_pb_laki_median = 11.4;
                    var bb_pb_laki_plus_1 = 12.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.2;
                    var bb_pb_perempuan_median = 11.1;
                    var bb_pb_perempuan_plus_1 = 12.2;
               } else if (pb <= 84.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.7;
                    var bb_pb_laki_median = 11.5;
                    var bb_pb_laki_plus_1 = 12.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.3;
                    var bb_pb_perempuan_median = 11.3;
                    var bb_pb_perempuan_plus_1 = 12.3;
               } else if (pb <= 85.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.8;
                    var bb_pb_laki_median = 11.7;
                    var bb_pb_laki_plus_1 = 12.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.4;
                    var bb_pb_perempuan_median = 11.4;
                    var bb_pb_perempuan_plus_1 = 12.5;
               } else if (pb <= 85.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 10.9;
                    var bb_pb_laki_median = 11.8;
                    var bb_pb_laki_plus_1 = 12.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.6;
                    var bb_pb_perempuan_median = 11.5;
                    var bb_pb_perempuan_plus_1 = 12.6;
               } else if (pb <= 86.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.0;
                    var bb_pb_laki_median = 11.9;
                    var bb_pb_laki_plus_1 = 12.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.7;
                    var bb_pb_perempuan_median = 11.6;
                    var bb_pb_perempuan_plus_1 = 12.7;
               } else if (pb <= 86.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.1;
                    var bb_pb_laki_median = 12.0;
                    var bb_pb_laki_plus_1 = 13.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.8;
                    var bb_pb_perempuan_median = 11.8;
                    var bb_pb_perempuan_plus_1 = 12.9;
               } else if (pb <= 87.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.2;
                    var bb_pb_laki_median = 12.2;
                    var bb_pb_laki_plus_1 = 13.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 10.9;
                    var bb_pb_perempuan_median = 11.9;
                    var bb_pb_perempuan_plus_1 = 13.0;
               } else if (pb <= 87.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.3;
                    var bb_pb_laki_median = 12.3;
                    var bb_pb_laki_plus_1 = 13.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.0;
                    var bb_pb_perempuan_median = 12.0;
                    var bb_pb_perempuan_plus_1 = 13.2;
               } else if (pb <= 88.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.5;
                    var bb_pb_laki_median = 12.4;
                    var bb_pb_laki_plus_1 = 13.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.1;
                    var bb_pb_perempuan_median = 12.1;
                    var bb_pb_perempuan_plus_1 = 13.3;
               } else if (pb <= 88.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.6;
                    var bb_pb_laki_median = 12.5;
                    var bb_pb_laki_plus_1 = 13.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.2;
                    var bb_pb_perempuan_median = 12.3;
                    var bb_pb_perempuan_plus_1 = 13.4;
               } else if (pb <= 89.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.7;
                    var bb_pb_laki_median = 12.6;
                    var bb_pb_laki_plus_1 = 13.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.4;
                    var bb_pb_perempuan_median = 12.4;
                    var bb_pb_perempuan_plus_1 = 13.6;
               } else if (pb <= 89.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.8;
                    var bb_pb_laki_median = 12.8;
                    var bb_pb_laki_plus_1 = 13.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.5;
                    var bb_pb_perempuan_median = 12.5;
                    var bb_pb_perempuan_plus_1 = 13.7;
               } else if (pb <= 90.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 11.9;
                    var bb_pb_laki_median = 12.9;
                    var bb_pb_laki_plus_1 = 14.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.6;
                    var bb_pb_perempuan_median = 12.6;
                    var bb_pb_perempuan_plus_1 = 13.8;
               } else if (pb <= 90.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.0;
                    var bb_pb_laki_median = 13.0;
                    var bb_pb_laki_plus_1 = 14.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.7;
                    var bb_pb_perempuan_median = 12.8;
                    var bb_pb_perempuan_plus_1 = 14.0;
               } else if (pb <= 91.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.1;
                    var bb_pb_laki_median = 13.1;
                    var bb_pb_laki_plus_1 = 14.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.8;
                    var bb_pb_perempuan_median = 12.9;
                    var bb_pb_perempuan_plus_1 = 14.1;
               } else if (pb <= 91.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.2;
                    var bb_pb_laki_median = 13.2;
                    var bb_pb_laki_plus_1 = 14.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 11.9;
                    var bb_pb_perempuan_median = 13.0;
                    var bb_pb_perempuan_plus_1 = 14.3;
               } else if (pb <= 92.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.3;
                    var bb_pb_laki_median = 13.4;
                    var bb_pb_laki_plus_1 = 14.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.0;
                    var bb_pb_perempuan_median = 13.1;
                    var bb_pb_perempuan_plus_1 = 14.4;
               } else if (pb <= 92.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.4;
                    var bb_pb_laki_median = 13.5;
                    var bb_pb_laki_plus_1 = 14.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.1;
                    var bb_pb_perempuan_median = 13.3;
                    var bb_pb_perempuan_plus_1 = 14.5;
               } else if (pb <= 93.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.6;
                    var bb_pb_laki_median = 13.6;
                    var bb_pb_laki_plus_1 = 14.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.3;
                    var bb_pb_perempuan_median = 13.4;
                    var bb_pb_perempuan_plus_1 = 14.7;
               } else if (pb <= 93.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.7;
                    var bb_pb_laki_median = 13.7;
                    var bb_pb_laki_plus_1 = 14.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.4;
                    var bb_pb_perempuan_median = 13.5;
                    var bb_pb_perempuan_plus_1 = 14.8;
               } else if (pb <= 94.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.8;
                    var bb_pb_laki_median = 13.8;
                    var bb_pb_laki_plus_1 = 15.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.5;
                    var bb_pb_perempuan_median = 13.6;
                    var bb_pb_perempuan_plus_1 = 14.9;
               } else if (pb <= 94.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 12.9;
                    var bb_pb_laki_median = 13.9;
                    var bb_pb_laki_plus_1 = 15.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.6;
                    var bb_pb_perempuan_median = 13.8;
                    var bb_pb_perempuan_plus_1 = 15.1;
               } else if (pb <= 95.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.0;
                    var bb_pb_laki_median = 14.1;
                    var bb_pb_laki_plus_1 = 15.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.7;
                    var bb_pb_perempuan_median = 13.9;
                    var bb_pb_perempuan_plus_1 = 15.2;
               } else if (pb <= 95.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.1;
                    var bb_pb_laki_median = 14.2;
                    var bb_pb_laki_plus_1 = 15.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.8;
                    var bb_pb_perempuan_median = 14.0;
                    var bb_pb_perempuan_plus_1 = 15.4;
               } else if (pb <= 96.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.2;
                    var bb_pb_laki_median = 14.3;
                    var bb_pb_laki_plus_1 = 15.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 12.9;
                    var bb_pb_perempuan_median = 14.1;
                    var bb_pb_perempuan_plus_1 = 15.5;
               } else if (pb <= 96.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.3;
                    var bb_pb_laki_median = 14.4;
                    var bb_pb_laki_plus_1 = 15.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.1;
                    var bb_pb_perempuan_median = 14.3;
                    var bb_pb_perempuan_plus_1 = 15.6;
               } else if (pb <= 97.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.4;
                    var bb_pb_laki_median = 14.6;
                    var bb_pb_laki_plus_1 = 15.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.2;
                    var bb_pb_perempuan_median = 14.4;
                    var bb_pb_perempuan_plus_1 = 15.8;
               } else if (pb <= 97.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.6;
                    var bb_pb_laki_median = 14.7;
                    var bb_pb_laki_plus_1 = 15.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.3;
                    var bb_pb_perempuan_median = 14.5;
                    var bb_pb_perempuan_plus_1 = 15.9;
               } else if (pb <= 98.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.7;
                    var bb_pb_laki_median = 14.8;
                    var bb_pb_laki_plus_1 = 16.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.4;
                    var bb_pb_perempuan_median = 14.7;
                    var bb_pb_perempuan_plus_1 = 16.1;
               } else if (pb <= 98.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.8;
                    var bb_pb_laki_median = 14.9;
                    var bb_pb_laki_plus_1 = 16.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.5;
                    var bb_pb_perempuan_median = 14.8;
                    var bb_pb_perempuan_plus_1 = 16.2;
               } else if (pb <= 99.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 13.9;
                    var bb_pb_laki_median = 15.1;
                    var bb_pb_laki_plus_1 = 16.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.7;
                    var bb_pb_perempuan_median = 14.9;
                    var bb_pb_perempuan_plus_1 = 16.4;
               } else if (pb <= 99.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.0;
                    var bb_pb_laki_median = 15.2;
                    var bb_pb_laki_plus_1 = 16.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.8;
                    var bb_pb_perempuan_median = 15.1;
                    var bb_pb_perempuan_plus_1 = 16.5;
               } else if (pb <= 100.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.2;
                    var bb_pb_laki_median = 15.4;
                    var bb_pb_laki_plus_1 = 16.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 13.9;
                    var bb_pb_perempuan_median = 15.2;
                    var bb_pb_perempuan_plus_1 = 16.7;
               } else if (pb <= 100.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.3;
                    var bb_pb_laki_median = 15.5;
                    var bb_pb_laki_plus_1 = 16.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.1;
                    var bb_pb_perempuan_median = 15.4;
                    var bb_pb_perempuan_plus_1 = 16.9;
               } else if (pb <= 101.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.4;
                    var bb_pb_laki_median = 15.6;
                    var bb_pb_laki_plus_1 = 17.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.2;
                    var bb_pb_perempuan_median = 15.5;
                    var bb_pb_perempuan_plus_1 = 17.0;
               } else if (pb <= 101.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.5;
                    var bb_pb_laki_median = 15.8;
                    var bb_pb_laki_plus_1 = 17.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.3;
                    var bb_pb_perempuan_median = 15.7;
                    var bb_pb_perempuan_plus_1 = 17.2;
               } else if (pb <= 102.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.7;
                    var bb_pb_laki_median = 15.9;
                    var bb_pb_laki_plus_1 = 17.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.5;
                    var bb_pb_perempuan_median = 15.8;
                    var bb_pb_perempuan_plus_1 = 17.4;
               } else if (pb <= 102.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.8;
                    var bb_pb_laki_median = 16.1;
                    var bb_pb_laki_plus_1 = 17.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.6;
                    var bb_pb_perempuan_median = 16.0;
                    var bb_pb_perempuan_plus_1 = 17.5;
               } else if (pb <= 103.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 14.9;
                    var bb_pb_laki_median = 16.2;
                    var bb_pb_laki_plus_1 = 17.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.7;
                    var bb_pb_perempuan_median = 16.1;
                    var bb_pb_perempuan_plus_1 = 17.7;
               } else if (pb <= 103.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.1;
                    var bb_pb_laki_median = 16.4;
                    var bb_pb_laki_plus_1 = 17.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 14.9;
                    var bb_pb_perempuan_median = 16.3;
                    var bb_pb_perempuan_plus_1 = 17.9;
               } else if (pb <= 104.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.2;
                    var bb_pb_laki_median = 16.5;
                    var bb_pb_laki_plus_1 = 18.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.0;
                    var bb_pb_perempuan_median = 16.4;
                    var bb_pb_perempuan_plus_1 = 18.1;
               } else if (pb <= 104.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.4;
                    var bb_pb_laki_median = 16.7;
                    var bb_pb_laki_plus_1 = 18.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.2;
                    var bb_pb_perempuan_median = 16.6;
                    var bb_pb_perempuan_plus_1 = 18.2;
               } else if (pb <= 105.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.5;
                    var bb_pb_laki_median = 16.8;
                    var bb_pb_laki_plus_1 = 18.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.3;
                    var bb_pb_perempuan_median = 16.8;
                    var bb_pb_perempuan_plus_1 = 18.4;
               } else if (pb <= 105.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.6;
                    var bb_pb_laki_median = 17.0;
                    var bb_pb_laki_plus_1 = 18.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.5;
                    var bb_pb_perempuan_median = 16.9;
                    var bb_pb_perempuan_plus_1 = 18.6;
               } else if (pb <= 106.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.8;
                    var bb_pb_laki_median = 17.2;
                    var bb_pb_laki_plus_1 = 18.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.6;
                    var bb_pb_perempuan_median = 17.1;
                    var bb_pb_perempuan_plus_1 = 18.8;
               } else if (pb <= 106.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 15.9;
                    var bb_pb_laki_median = 17.3;
                    var bb_pb_laki_plus_1 = 18.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.8;
                    var bb_pb_perempuan_median = 17.3;
                    var bb_pb_perempuan_plus_1 = 19.0;
               } else if (pb <= 107.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.1;
                    var bb_pb_laki_median = 17.5;
                    var bb_pb_laki_plus_1 = 19.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 15.9;
                    var bb_pb_perempuan_median = 17.5;
                    var bb_pb_perempuan_plus_1 = 19.2;
               } else if (pb <= 107.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.2;
                    var bb_pb_laki_median = 17.7;
                    var bb_pb_laki_plus_1 = 19.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.1;
                    var bb_pb_perempuan_median = 17.7;
                    var bb_pb_perempuan_plus_1 = 19.4;
               } else if (pb <= 108.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.4;
                    var bb_pb_laki_median = 17.8;
                    var bb_pb_laki_plus_1 = 19.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.3;
                    var bb_pb_perempuan_median = 17.8;
                    var bb_pb_perempuan_plus_1 = 19.6;
               } else if (pb <= 108.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.5;
                    var bb_pb_laki_median = 18.0;
                    var bb_pb_laki_plus_1 = 19.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.4;
                    var bb_pb_perempuan_median = 18.0;
                    var bb_pb_perempuan_plus_1 = 19.8;
               } else if (pb <= 109.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.7;
                    var bb_pb_laki_median = 18.2;
                    var bb_pb_laki_plus_1 = 19.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.6;
                    var bb_pb_perempuan_median = 18.2;
                    var bb_pb_perempuan_plus_1 = 20.0;
               } else if (pb <= 109.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 16.8;
                    var bb_pb_laki_median = 18.3;
                    var bb_pb_laki_plus_1 = 20.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 16.8;
                    var bb_pb_perempuan_median = 18.4;
                    var bb_pb_perempuan_plus_1 = 20.3;
               } else if (pb <= 110.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 17.0;
                    var bb_pb_laki_median = 18.5;
                    var bb_pb_laki_plus_1 = 20.2;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 17.0;
                    var bb_pb_perempuan_median = 18.6;
                    var bb_pb_perempuan_plus_1 = 20.5;
               } else if (pb <= 110.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 17.1;
                    var bb_pb_laki_median = 18.7;
                    var bb_pb_laki_plus_1 = 20.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 17.1;
                    var bb_pb_perempuan_median = 18.8;
                    var bb_pb_perempuan_plus_1 = 20.7;
               } else if (pb <= 111.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 17.3;
                    var bb_pb_laki_median = 18.9;
                    var bb_pb_laki_plus_1 = 20.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 17.3;
                    var bb_pb_perempuan_median = 19.0;
                    var bb_pb_perempuan_plus_1 = 20.9;
               } else if (pb <= 111.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 17.5;
                    var bb_pb_laki_median = 19.1;
                    var bb_pb_laki_plus_1 = 20.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 17.5;
                    var bb_pb_perempuan_median = 19.2;
                    var bb_pb_perempuan_plus_1 = 21.2;
               } else if (pb <= 112.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 17.6;
                    var bb_pb_laki_median = 19.2;
                    var bb_pb_laki_plus_1 = 21.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 17.7;
                    var bb_pb_perempuan_median = 19.4;
                    var bb_pb_perempuan_plus_1 = 21.4;
               } else if (pb <= 112.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 17.8;
                    var bb_pb_laki_median = 19.4;
                    var bb_pb_laki_plus_1 = 21.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 17.9;
                    var bb_pb_perempuan_median = 19.6;
                    var bb_pb_perempuan_plus_1 = 21.6;
               } else if (pb <= 113.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 18.0;
                    var bb_pb_laki_median = 19.6;
                    var bb_pb_laki_plus_1 = 21.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 18.0;
                    var bb_pb_perempuan_median = 19.8;
                    var bb_pb_perempuan_plus_1 = 21.8;
               } else if (pb <= 113.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 18.1;
                    var bb_pb_laki_median = 19.8;
                    var bb_pb_laki_plus_1 = 21.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 18.2;
                    var bb_pb_perempuan_median = 20.0;
                    var bb_pb_perempuan_plus_1 = 22.1;
               } else if (pb <= 114.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 18.3;
                    var bb_pb_laki_median = 20.0;
                    var bb_pb_laki_plus_1 = 21.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 18.4;
                    var bb_pb_perempuan_median = 20.2;
                    var bb_pb_perempuan_plus_1 = 22.3;
               } else if (pb <= 114.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 18.5;
                    var bb_pb_laki_median = 20.2;
                    var bb_pb_laki_plus_1 = 22.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 18.6;
                    var bb_pb_perempuan_median = 20.5;
                    var bb_pb_perempuan_plus_1 = 22.6;
               } else if (pb <= 115.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 18.6;
                    var bb_pb_laki_median = 20.4;
                    var bb_pb_laki_plus_1 = 22.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 18.8;
                    var bb_pb_perempuan_median = 20.7;
                    var bb_pb_perempuan_plus_1 = 22.8;
               } else if (pb <= 115.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 18.8;
                    var bb_pb_laki_median = 20.6;
                    var bb_pb_laki_plus_1 = 22.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 19.0;
                    var bb_pb_perempuan_median = 20.9;
                    var bb_pb_perempuan_plus_1 = 23.0;
               } else if (pb <= 116.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 19.0;
                    var bb_pb_laki_median = 20.8;
                    var bb_pb_laki_plus_1 = 22.8;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 19.2;
                    var bb_pb_perempuan_median = 21.1;
                    var bb_pb_perempuan_plus_1 = 23.3;
               } else if (pb <= 116.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 19.2;
                    var bb_pb_laki_median = 21.0;
                    var bb_pb_laki_plus_1 = 23.0;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 19.4;
                    var bb_pb_perempuan_median = 21.3;
                    var bb_pb_perempuan_plus_1 = 23.5;
               } else if (pb <= 117.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 19.3;
                    var bb_pb_laki_median = 21.2;
                    var bb_pb_laki_plus_1 = 23.3;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 19.6;
                    var bb_pb_perempuan_median = 21.5;
                    var bb_pb_perempuan_plus_1 = 23.8;
               } else if (pb <= 117.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 19.5;
                    var bb_pb_laki_median = 21.4;
                    var bb_pb_laki_plus_1 = 23.5;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 19.8;
                    var bb_pb_perempuan_median = 21.7;
                    var bb_pb_perempuan_plus_1 = 24.0;
               } else if (pb <= 118.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 19.7;
                    var bb_pb_laki_median = 21.6;
                    var bb_pb_laki_plus_1 = 23.7;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 19.9;
                    var bb_pb_perempuan_median = 22.0;
                    var bb_pb_perempuan_plus_1 = 24.2;
               } else if (pb <= 118.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 19.9;
                    var bb_pb_laki_median = 21.8;
                    var bb_pb_laki_plus_1 = 23.9;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 20.1;
                    var bb_pb_perempuan_median = 22.2;
                    var bb_pb_perempuan_plus_1 = 24.5;
               } else if (pb <= 119.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 20.0;
                    var bb_pb_laki_median = 22.0;
                    var bb_pb_laki_plus_1 = 24.1;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 20.3;
                    var bb_pb_perempuan_median = 22.4;
                    var bb_pb_perempuan_plus_1 = 24.7;
               } else if (pb <= 119.5) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 20.2;
                    var bb_pb_laki_median = 22.2;
                    var bb_pb_laki_plus_1 = 24.4;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 20.5;
                    var bb_pb_perempuan_median = 22.6;
                    var bb_pb_perempuan_plus_1 = 25.0;
               } else if (pb <= 120.0) {
                    {{-- ! LAKI SECTION --}}
                    var bb_pb_laki_min_1 = 20.4;
                    var bb_pb_laki_median = 22.4;
                    var bb_pb_laki_plus_1 = 24.6;
                    {{-- ! PEREMPUAN SECTION --}}
                    var bb_pb_perempuan_min_1 = 20.7;
                    var bb_pb_perempuan_median = 22.8;
                    var bb_pb_perempuan_plus_1 = 25.2;
               }
          };

          jenis_kelamin.forEach(radio => {
               if (radio.checked) {
                    const genderValue = radio.value;
                    console.log(genderValue, "BB/PB");

                    if (genderValue === 'laki_laki') {
                         if (umur >= 0 && umur <= 24) {
                              if (bb < bb_pb_laki_median) {
                                   {{-- ! BB < Median --}}
                                   var a = parseFloat(bb) - parseFloat(bb_pb_laki_median);
                                   var b = parseFloat(bb_pb_laki_median) - parseFloat(bb_pb_laki_min_1);
                                   var bb_pb_rumus_satu = a / b;
                                   document.getElementById('hasil_bb_pb').value = bb_pb_rumus_satu.toFixed(1);
                                   if (bb_pb_rumus_satu < -3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Buruk';
                                   } else if (bb_pb_rumus_satu >= -3 && bb_pb_rumus_satu < -2) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Kurang';
                                   } else if (bb_pb_rumus_satu >= -2 && bb_pb_rumus_satu <= 1) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                                   } else if (bb_pb_rumus_satu > 1 && bb_pb_rumus_satu <= 2) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                                   } else if (bb_pb_rumus_satu > 3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Obesitas';
                                   };

                              } else if (bb > bb_pb_laki_median) {
                                   {{-- ! BB > Median --}}
                                   var c = parseFloat(bb) - parseFloat(bb_pb_laki_median);
                                   var d = parseFloat(bb_pb_laki_plus_1) - parseFloat(bb_pb_laki_median);
                                   var bb_pb_rumus_dua = c / d;
                                   document.getElementById('hasil_bb_pb').value = bb_pb_rumus_dua.toFixed(1);
                                   if (bb_pb_rumus_dua < -3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Buruk';
                                   } else if (bb_pb_rumus_dua >= -3 && bb_pb_rumus_dua < -2) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Kurang';
                                   } else if (bb_pb_rumus_dua >= -2 && bb_pb_rumus_dua <= 1) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                                   } else if (bb_pb_rumus_dua > 1 && bb_pb_rumus_dua <= 2) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                                   } else if (bb_pb_rumus_dua > 3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Obesitas';
                                   };
                              }
                         }

                         if (umur > 24 && umur <= 60) {
                              if (bb < bb_pb_laki_median) {
                                   {{-- ! BB < Median --}}
                                   var a = parseFloat(bb) - parseFloat(bb_pb_laki_median);
                                   var b = parseFloat(bb_pb_laki_median) - parseFloat(bb_pb_laki_min_1);
                                   var bb_pb_rumus_satu = a / b;
                                   document.getElementById('hasil_bb_pb').value = bb_pb_rumus_satu.toFixed(1);
                                   if (bb_pb_rumus_satu < -3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Buruk';
                                   } else if (bb_pb_rumus_satu >= -3 && bb_pb_rumus_satu < -2) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Kurang';
                                   } else if (bb_pb_rumus_satu >= -2 && bb_pb_rumus_satu <= 1) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                                   } else if (bb_pb_rumus_satu > 1 && bb_pb_rumus_satu <= 2) {
                                        document.getElementById('hasil_kategori_bb_pb').value =
                                             'Beresiko Gizi Lebih';
                                   } else if (bb_pb_rumus_satu > 3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Obesitas';
                                   };

                              } else if (bb > bb_pb_laki_median) {
                                   {{-- ! BB > Median --}}
                                   var c = parseFloat(bb) - parseFloat(bb_pb_laki_median);
                                   var d = parseFloat(bb_pb_laki_plus_1) - parseFloat(bb_pb_laki_median);
                                   var bb_pb_rumus_dua = c / d;
                                   document.getElementById('hasil_bb_pb').value = bb_pb_rumus_dua.toFixed(1);
                                   if (bb_pb_rumus_dua < -3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Buruk';
                                   } else if (bb_pb_rumus_dua >= -3 && bb_pb_rumus_dua < -2) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Kurang';
                                   } else if (bb_pb_rumus_dua >= -2 && bb_pb_rumus_dua <= 1) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                                   } else if (bb_pb_rumus_dua > 1 && bb_pb_rumus_dua <= 2) {
                                        document.getElementById('hasil_kategori_bb_pb').value =
                                             'Beresiko Gizi Lebih';
                                   } else if (bb_pb_rumus_dua > 3) {
                                        document.getElementById('hasil_kategori_bb_pb').value = 'Obesitas';
                                   };
                              }
                         }

                    }

                    if (genderValue === 'perempuan') {
                         if (bb < bb_pb_perempuan_median) {
                              {{-- ! BB < Median --}}
                              var a = parseFloat(bb) - parseFloat(bb_pb_perempuan_median);
                              var b = parseFloat(bb_pb_perempuan_median) - parseFloat(bb_pb_perempuan_min_1);
                              var bb_pb_rumus_satu = a / b;
                              document.getElementById('hasil_bb_pb').value = bb_pb_rumus_satu.toFixed(1);
                              if (bb_pb_rumus_satu < -3) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Buruk';
                              } else if (bb_pb_rumus_satu >= -3 && bb_pb_rumus_satu < -2) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Kurang';
                              } else if (bb_pb_rumus_satu >= -2 && bb_pb_rumus_satu <= 1) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                              } else if (bb_pb_rumus_satu > 1 && bb_pb_rumus_satu <= 2) {
                                   document.getElementById('hasil_kategori_bb_pb').value =
                                        'Beresiko Gizi Lebih';
                              } else if (bb_pb_rumus_satu > 3) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Obesitas';
                              };

                         } else if (bb > bb_pb_perempuan_median) {
                              {{-- ! BB > Median --}}
                              var c = parseFloat(bb) - parseFloat(bb_pb_perempuan_median);
                              var d = parseFloat(bb_pb_perempuan_plus_1) - parseFloat(bb_pb_perempuan_median);
                              var bb_pb_rumus_dua = c / d;
                              document.getElementById('hasil_bb_pb').value = bb_pb_rumus_dua.toFixed(1);
                              if (bb_pb_rumus_dua < -3) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Buruk';
                              } else if (bb_pb_rumus_dua >= -3 && bb_pb_rumus_dua < -2) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Kurang';
                              } else if (bb_pb_rumus_dua >= -2 && bb_pb_rumus_dua <= 1) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Gizi Baik';
                              } else if (bb_pb_rumus_dua > 1 && bb_pb_rumus_dua <= 2) {
                                   document.getElementById('hasil_kategori_bb_pb').value =
                                        'Beresiko Gizi Lebih';
                              } else if (bb_pb_rumus_dua > 3) {
                                   document.getElementById('hasil_kategori_bb_pb').value = 'Obesitas';
                              };
                         }
                    }
               }
          })
          {{-- ! END BB_PB --}}
     }
</script>

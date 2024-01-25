@extends('master.main.main_layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="ImunisasiBalita" method="POST" action="{{ url('admin/imunisasi_anak/store') }}"
                         class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-warning">
                                   <h4 class="card-title font-weight-bold">Imunisasi</h4>
                                   <p class="card-category font-weight-bold">
                                        Imunisasi Balita dan Anak
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
                                                            <option value="{{ $balita->balita_id }}"
                                                                 {{ old('balita_id') == $balita->balita_id ? 'selected' : '' }}>
                                                                 {{ $balita->adminbalita->nama_balita }} - NIK
                                                                 {{ $balita->adminbalita->nik_balita }} -
                                                                 {{ $balita->keterangan_penimbangan }} pada
                                                                 {{ $balita->tgl_timbang }}
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
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <input id="jenis_kelamin" type="text" class="form-control"
                                                       placeholder="Jenis Kelamin" disabled />
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Pilih Imunisasi Dasar Lengkap</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <select id="vaksin_imunisasi" class="pilih-vaksin form-control"
                                                       name="vaksin_imunisasi" onchange="fillForm()">

                                                       <option value="option_select" disabled selected>Pilih Imunisasi Dasar
                                                            Lengkap
                                                       </option>

                                                       <option value="Hepatitis B (< 24 Jam)">Balita Umur 0 Bulan dan Belum
                                                            Imunisasi
                                                       </option>

                                                       <option value="BCG Pertama">Balita Umur 0 Bulan dan Sudah Imunisasi
                                                            Hepatitis B
                                                       </option>

                                                       <option value="* Polio Tetes 1 Pertama">Balita Umur 0 Bulan dan Sudah
                                                            Imunisasi BCG
                                                       </option>

                                                       {{-- ! 1 BULAN --}}
                                                       <option value="BCG Kedua">Balita Umur 1 - 11 Bulan dan Sudah Imunisasi
                                                            BCG
                                                            Fase 1
                                                       </option>

                                                       <option value="* Polio Tetes 1 Kedua">Balita Umur 1 - 11 Bulan dan
                                                            Sudah
                                                            Imunisasi Polio Tetes 1 Fase 1
                                                       </option>

                                                       {{-- ! 2 BULAN --}}
                                                       <option value="* DPT-HB-Hib 1">Balita Umur 2 - 11 Bulan dan Sudah
                                                            Imunisasi
                                                            Polio Tetes 1 Fase 2
                                                       </option>

                                                       <option value="* Polio Tetes 2">Balita Umur 2 - 11 Bulan dan Sudah
                                                            Imunisasi DPT-HB-Hib 1
                                                       </option>

                                                       <option value="** PCV 1">Balita Umur 2 - 11 Bulan dan Sudah Imunisasi
                                                            Polio
                                                            Tetes 2
                                                       </option>

                                                       {{-- ! 3 BULAN --}}
                                                       <option value="* DPT-HB-Hib 2">Balita Umur 3 - 11 Bulan dan Sudah
                                                            Imunisasi
                                                            PCV 1
                                                       </option>

                                                       <option value="* Polio Tetes 3">Balita Umur 3 - 11 Bulan dan Sudah
                                                            Imunisasi DPT-HB-Hib 2
                                                       </option>

                                                       <option value="** PCV 2">Balita Umur 3 - 11 Bulan dan Sudah Imunisasi
                                                            Polio
                                                            Tetes 3
                                                       </option>

                                                       {{-- ! 4 BULAN --}}
                                                       <option value="* DPT-HB-Hib 3">Balita Umur 4 - 11 Bulan dan Sudah
                                                            Imunisasi
                                                            PCV 2
                                                       </option>

                                                       <option value="* Polio Tetes 4">Balita Umur 4 - 11 Bulan dan Sudah
                                                            Imunisasi DPT-HB-Hib 3
                                                       </option>

                                                       <option value="Polio Suntik (IPV)">Balita Umur 4 - 11 Bulan dan Sudah
                                                            Imunisasi Polio Tetes 4
                                                       </option>

                                                       {{-- ! 8 - 9 Bulan --}}
                                                       <option value="Campak-Rubella">Balita Umur 9 - 11 Bulan dan Sudah
                                                            Imunisasi Polio Suntik (IPV)
                                                       </option>

                                                       <option value="** JE">Balita Umur 10 - 11 Bulan dan Sudah
                                                            Imunisasi Campak-Rubella
                                                       </option>

                                                       <option value="** PCV 3">Balita Umur 12 Bulan Keatas dan Sudah
                                                            Imunisasi JE
                                                       </option>

                                                       {{-- ! 18 - 24 Bulan --}}
                                                       <option value="**** DPT-HB-Hib (lanjutan)">Balita Umur 18 - 24 Bulan
                                                            dan Sudah
                                                            Imunisasi PCV 3
                                                       </option>

                                                       <option value="**** Campak-Rubella (lanjutan)">Balita Umur 18 - 24
                                                            Bulan dan Sudah
                                                            Imunisasi Campak-Rubella
                                                       </option>

                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Memilih Imunisasi Dasar Lengkap"</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Nama Vaksin
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input id="vaksinValue" name="vaksinValue" value="" type="text"
                                                       class="form-control font-weight-bold" placeholder="Nama Vitamin"
                                                       readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Tanggal Pemberian Vaksin Dasar
                                             Lengkap
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input
                                                       class="form-control @error('tgl_imunisasi') is-invalid @enderror datepicker"
                                                       type="text" name="tgl_imunisasi" id="tgl_imunisasi"
                                                       placeholder="Tanggal Vaksin Imunisasi Dasar Lengkap" required="true"
                                                       value="{{ old('tgl_imunisasi') }}" />

                                                  @error('tgl_imunisasi')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Tanggal Vaksin Imunisasi Dasar
                                                  Lengkap"</code>
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer ml-auto mr-auto">
                                   <a href="#">
                                        <button type="submit" class="btn btn-warning">
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

                    var url_balita = '{{ route('getBalita_imunisasi', ':id') }}';
                    url_balita = url_balita.replace(':id', id);

                    $.ajax({
                         url: url_balita,
                         type: 'GET',
                         dataType: 'json',
                         success: function(data) {
                              if (data !== null) {
                                   $('#nik_anak').val('');
                                   $('#nik_anak').val(data.nik_balita);
                                   $('#tgl_lahir_anak').val(data.tgl_lahir);
                                   $('#jenis_kelamin').val(data.jenis_kelamin);
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
               $('#vaksin_imunisasi').select2();

               @if (Session::has('success_imunisasi'))
                    Swal.fire({
                         icon: 'success',
                         title: '<strong>Data Berhasil Diperbarui</strong>',
                         html: 'Data pemberian Vaksin Dasar Wajib <b>Berhasil</b> diperbarui',
                         showConfirmButton: false,
                         timer: 2200,
                         timerProgressBar: true
                    });
               @endif

               @if (Session::has('error_column_imunisasi'))
                    Swal.fire({
                         icon: 'error',
                         title: '<strong>Data Gagal Diperbarui</strong>',
                         html: 'Anak tersebut <b>Sudah Diberikan Vaksin Wajib</b> yang anda pilih sebelumnya',
                         showConfirmButton: false,
                         timer: 2700,
                         timerProgressBar: true
                    });
               @endif
          });
     </script>
@endsection

<script>
     function fillForm() {
          var vaksin = document.getElementById("vaksin_imunisasi");
          var vaksinValue = document.getElementById("vaksinValue");
          vaksinValue.value = " Vaksin ( " + vaksin.value + " )";
     }
</script>

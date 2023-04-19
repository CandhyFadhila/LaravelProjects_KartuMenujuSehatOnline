@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <form id="VitaminBalita" method="POST" action="{{ url('admin/vitamin_anak/store') }}"
                         class="form-horizontal" novalidate="novalidate">
                         @csrf
                         <div class="card">
                              <div class="card-header card-header-rose">
                                   <h4 class="card-title font-weight-bold">Pemberian Vitamin</h4>
                                   <p class="card-category font-weight-bold">
                                        Vitamin Balita dan Anak
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
                                        <label class="col-sm-2 col-form-label">Pilih Vitamin Wajib</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <select id="vaksin_vitamin" class="pilih-vaksin form-control"
                                                       name="vaksin_vitamin" onchange="fillForm()">

                                                       <option value="option_select" disabled selected>Pilih Vitamin Wajib
                                                       </option>

                                                       <option value="Vitamin A - Biru">Vaksin Wajib Vitamin A - Biru
                                                       </option>
                                                       <option value="Vitamin A - Merah">Vaksin Wajib Vitamin A - Merah
                                                       </option>

                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Memilih Vitamin Wajib"</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Nama Vitamin
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
                                             Tanggal Pemberian Vaksin Vitamin A
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input
                                                       class="form-control @error('tgl_vitamin') is-invalid @enderror datepicker"
                                                       type="text" name="tgl_vitamin" id="tgl_vitamin"
                                                       placeholder="Tanggal Vaksin Wajib" required="true"
                                                       value="{{ old('tgl_vitamin') }}" />

                                                  @error('tgl_vitamin')
                                                       <small class="text-danger">
                                                            {{ $message }}
                                                       </small>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Diisi Dengan "Tanggal Vaksin Vitamin A - Merah atau Biru"</code>
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer ml-auto mr-auto">
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
               $('#balita_id').select2();
               $('#vaksin_vitamin').select2();

               @if (Session::has('success_vitamin'))
                    Swal.fire({
                         icon: 'success',
                         title: '<strong>Data Berhasil Diperbarui</strong>',
                         html: 'Data pemberian Vitamin A <b>Berhasil</b> diperbarui',
                         showConfirmButton: false,
                         timer: 2200,
                         timerProgressBar: true
                    });
               @endif

               @if (Session::has('error_column_vitamin'))
                    Swal.fire({
                         icon: 'error',
                         title: '<strong>Data Gagal Diperbarui</strong>',
                         html: 'Anak yang anda pilih <b>Sudah Diberikan VItamin A</b> sebelumnya',
                         showConfirmButton: false,
                         timer: 2700,
                         timerProgressBar: true
                    });
               @endif
          });
     </script>
@endsection

@section('select_auto')
     <script>
          $(document).ready(function() {
               $('#balita_id').change(function() {
                    var id = $(this).val();
                    var url = '{{ route('getBalita_vitamin', ':id') }}';
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
                                   $('#jenis_kelamin').val(data.jenis_kelamin);
                              }
                         }
                    })
               });
          })
     </script>
@endsection

<script>
     function fillForm() {
          var vaksin = document.getElementById("vaksin_vitamin");
          var vaksinValue = document.getElementById("vaksinValue");
          vaksinValue.value = " Vaksin ( " + vaksin.value + " )";
     }
</script>

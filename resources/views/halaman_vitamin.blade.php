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

                                   {{-- <div class="row">
                                        <label class="col-sm-2 col-form-label">Tanggal Imunisasi Saat Ini</label>
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
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Tanggal Imunisasi Saat Ini"</code>
                                        </div>
                                   </div> --}}

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">Pilih Vitamin Wajib</label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group">
                                                  <select id="vitamin_id" class="pilih-vaksin form-control"
                                                       name="vitamin_id">

                                                       <option value="option_select" disabled selected>Pilih Vitamin Wajib
                                                       </option>

                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-sm-4 label-on-right">
                                             <code>Diisi Dengan "Pilih Vitamin Wajib"</code>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <label class="col-sm-2 col-form-label">
                                             Nama Vitamin
                                        </label>
                                        <div class="col-sm-6">
                                             <div class="form-group bmd-form-group is-filled">
                                                  <input id="nama_vitamin" type="text" class="form-control"
                                                       placeholder="Nama Vitamin" readonly />
                                             </div>
                                        </div>
                                        <div class="col-sm-3 label-on-right">
                                             <code>Otomatis Akan Terisi</code>
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
               $('#vitamin_id').select2();

               @if (Session::has('success_vitamin'))
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

@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                         <div class="card-header card-header-warning card-header-icon">
                              <div class="card-icon">
                                   <i class="material-icons">groups</i>
                              </div>
                              <p class="card-category">Total Balita</p>
                              <h3 class="card-title">DB</h3>
                         </div>
                         <div class="card-footer">
                              <div class="stats">
                                   <i class="material-icons">add</i>
                                   <a href="/balita/add_data_balita">Tambah Data Balita</a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                         <div class="card-header card-header-success card-header-icon">
                              <div class="card-icon">
                                   <i class="material-icons">check_circle</i>
                              </div>
                              <p class="card-category">Status Gizi Baik</p>
                              <h3 class="card-title">DB</h3>
                         </div>
                         <div class="card-footer">
                              <div class="stats">
                                   <i class="material-icons">table_chart</i>
                                   <a href="/balita">
                                        Lihat Tabel Balita</a>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                         <div class="card-header card-header-danger card-header-icon">
                              <div class="card-icon">
                                   <i class="material-icons">info_outline</i>
                              </div>
                              <p class="card-category">Status Gizi Buruk</p>
                              <h3 class="card-title">DB</h3>
                         </div>
                         <div class="card-footer">
                              <div class="stats">
                                   <i class="material-icons text-danger">warning</i> Wajib
                                   Imunisasi
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                         <div class="card-header card-header-info card-header-icon">
                              <div class="card-icon">
                                   <i class="material-icons">vaccines</i>
                              </div>
                              <p class="card-category">Vaksin</p>
                              <h3 class="card-title">DB</h3>
                         </div>
                         <div class="card-footer">
                              <div class="stats">
                                   <i class="material-icons">table_chart</i>
                                   <a href="admin/vitamin"> Lihat Tabel Vaksin</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header card-header-primary">
                              <h4 class="card-title">Petugas Posyandu</h4>
                              <p class="card-category">
                                   Petugas posyandu aktif Kecamatan Gayamsari
                              </p>
                         </div>
                         <div class="card-body table-responsive">
                              <table class="table table-hover">
                                   <thead class="text-primary">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Alamat</th>
                                        <th>Role</th>

                                   </thead>
                                   <tbody>
                                        <tr>
                                             <td>1</td>
                                             <td>Dakota Rice</td>
                                             <td>$36,738</td>
                                             <td>Bidan</td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
@section('script_select2')
     <script>
          $(document).ready(function() {
               @if (Session::has('success'))
                    toastr.info("{{ Session::get('success') }}");
               @endif

               @if (Session::has('sudah_pernah_login'))
                    toastr.warning("{{ Session::get('sudah_pernah_login') }}");
               @endif
          });
     </script>
@endsection

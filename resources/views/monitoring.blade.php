@extends('layout.main')

@section('isi_content')
     <div class="content">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                              <div class="card-header card-header-warning card-header-icon">
                                   <div class="card-icon">
                                        <i class="fa fa-child"></i>
                                   </div>
                                   <p class="card-category">Total Balita</p>
                                   @php
                                        $totalBalita = App\Models\AdminBalita::count();
                                   @endphp
                                   <h3 class="card-title">{{ $totalBalita }}
                                        <small>Anak</small>
                                   </h3>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">bookmark_added</i> Jumlah Balita Terdaftar
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                              <div class="card-header card-header-success card-header-icon">
                                   <div class="card-icon">
                                        <i class="fa fa-user"></i>
                                   </div>
                                   @php
                                        $totalIbu = App\Models\AdminOrangtua::count();
                                   @endphp
                                   <p class="card-category">Total Orangtua</p>
                                   <h3 class="card-title">{{ $totalIbu }}
                                        <small>Ibu</small>
                                   </h3>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">supervisor_account</i> Jumlah Orangtua Terdaftar
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                              <div class="card-header card-header-danger card-header-icon">
                                   <div class="card-icon">
                                        <i class="fa fa-user-md"></i>
                                   </div>
                                   @php
                                        $totalPetugas = App\Models\AdminPetugas::count();
                                   @endphp
                                   <p class="card-category">Total Petugas</p>
                                   <h3 class="card-title">{{ $totalPetugas }}
                                        <small>Kader</small>
                                   </h3>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">engineering</i> Jumlah Petugas Tersedia
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                              <div class="card-header card-header-info card-header-icon">
                                   <div class="card-icon">
                                        <i class="fa fa-balance-scale"></i>
                                   </div>
                                   @php
                                        $totalPenimbangan = App\Models\AdminKMS::count();
                                   @endphp
                                   <p class="card-category">Penimbangan</p>
                                   <h3 class="card-title">{{ $totalPenimbangan }}
                                        <small>Kali</small>
                                   </h3>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">balance</i> Jumlah Penimbangan
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               {{-- ! Keterangan GIZI 1 --}}
               <div class="row">
                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-danger">
                                   <h4 class="card-title text-center">Gizi Buruk Terhitung |
                                        <strong class="font-weight-bold">
                                             <u>{{ $Gizi_Buruk }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title font-weight-bold">Gizi Buruk</h4>
                                   <p class="card-title">Jumlah Gizi Buruk di Setiap Penimbangan Mencapai
                                        <strong class="font-weight-bold text-danger">
                                             <u>{{ $Gizi_Buruk }}</u>
                                        </strong>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-warning">
                                   <h4 class="card-title text-center">Gizi Kurang Terhitung |
                                        <strong class="font-weight-bold">
                                             <u>{{ $Gizi_Kurang }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title font-weight-bold">Gizi Kurang</h4>
                                   <p class="card-title">Jumlah Gizi Kurang di Setiap Penimbangan Terhitung
                                        <strong class="font-weight-bold text-warning">
                                             <u>{{ $Gizi_Kurang }}</u>
                                        </strong>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-success">
                                   <h4 class="card-title text-center">Gizi Baik Terhitung |
                                        <strong class="font-weight-bold">
                                             <u>{{ $Gizi_Baik }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title font-weight-bold">Gizi Baik</h4>
                                   <p class="card-title">Jumlah Gizi Baik di Setiap Penimbangan Terhitung
                                        <strong class="font-weight-bold text-success">
                                             <u>{{ $Gizi_Baik }}</u>
                                        </strong>
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>

               {{-- ! Keterangan Gizi 2 --}}
               <div class="row">
                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-info">
                                   <h4 class="card-title text-center">Resiko Gizi Lebih Terhitung |
                                        <strong class="font-weight-bold">
                                             <u>{{ $Resiko_Gizi_Lebih }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title font-weight-bold">Resiko Gizi Lebih</h4>
                                   <p class="card-title">Jumlah Resiko Gizi Lebih di Setiap Penimbangan Terhitung
                                        <strong class="font-weight-bold text-info">
                                             <u>{{ $Resiko_Gizi_Lebih }}</u>
                                        </strong>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-warning">
                                   <h4 class="card-title text-center">Gizi Lebih Terhitung |
                                        <strong class="font-weight-bold">
                                             <u>{{ $Gizi_Lebih }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title font-weight-bold">Gizi Lebih</h4>
                                   <p class="card-title">Jumlah Gizi Lebih di Setiap Penimbangan Terhitung
                                        <strong class="font-weight-bold text-warning">
                                             <u>{{ $Gizi_Lebih }}</u>
                                        </strong>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-danger">
                                   <h4 class="card-title text-center">Obesitas Terhitung |
                                        <strong class="font-weight-bold">
                                             <u>{{ $Obesitas }}</u>
                                        </strong>
                                   </h4>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title font-weight-bold">Obesitas</h4>
                                   <p class="card-title">Jumlah Obesitas di Setiap Penimbangan Terhitung
                                        <strong class="font-weight-bold text-danger">
                                             <u>{{ $Obesitas }}</u>
                                        </strong>
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

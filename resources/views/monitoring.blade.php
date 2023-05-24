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
                                   <h3 class="card-title">{{ $totalIbu }} Ibu</h3>
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
                                   <h3 class="card-title">{{ $totalPetugas }} Kader</h3>
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
                                   <h3 class="card-title">{{ $totalPenimbangan }} Kali</h3>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">balance</i> Jumlah Penimbangan
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="row">
                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-success">
                                   <div class="ct-chart" id="dailySalesChart"></div>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title">Daily Sales</h4>
                                   <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase
                                        in today sales.
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-warning">
                                   <div class="ct-chart" id="websiteViewsChart"></div>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title">Email Subscriptions</h4>
                                   <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-danger">
                                   <div class="ct-chart" id="completedTasksChart"></div>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title">Completed Tasks</h4>
                                   <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-success">
                                   <div class="ct-chart" id="dailySalesChart"></div>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title">Daily Sales</h4>
                                   <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase
                                        in today sales.
                                   </p>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-warning">
                                   <div class="ct-chart" id="websiteViewsChart"></div>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title">Email Subscriptions</h4>
                                   <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card card-chart">
                              <div class="card-header card-header-danger">
                                   <div class="ct-chart" id="completedTasksChart"></div>
                              </div>
                              <div class="card-body">
                                   <h4 class="card-title">Completed Tasks</h4>
                                   <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                   <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

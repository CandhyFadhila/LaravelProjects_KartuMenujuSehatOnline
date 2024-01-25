<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
     {{-- ! SIDEBAR --}}
     <div class="logo">
          <a class="simple-text logo-normal"> KMS ADMIN </a>
     </div>
     <div class="sidebar-wrapper">
          <ul class="nav">
               <li class="nav-item {{ $active === 'dashboard' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/dashboard') }}">
                         <i class="material-icons">dashboard</i>
                         <p>Dashboard</p>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#kelola-tabel" aria-expanded="true">
                         <i class="material-icons">toc</i>
                         <p>
                              Kelola Data
                              <b class="caret"></b>
                         </p>
                    </a>
                    <div class="collapse show" id="kelola-tabel" style>
                         <ul class="nav">
                              <li class="nav-item {{ $active === 'balita' ? 'active' : '' }}">
                                   <a class="nav-link" href="{{ url('admin/balita') }}">
                                        <span class="sidebar-mini">BA</span>
                                        <span class="sidebar-normal">Balita dan Anak</span>
                                   </a>
                              </li>
                              <li class="nav-item {{ $active === 'orangtua' ? 'active' : '' }}">
                                   <a class="nav-link" href="{{ url('admin/orangtua') }}">
                                        <span class="sidebar-mini">OT</span>
                                        <span class="sidebar-normal">Orang Tua</span>
                                   </a>
                              </li>
                              <li class="nav-item {{ $active === 'petugas' ? 'active' : '' }}">
                                   <a class="nav-link" href="{{ url('admin/petugas') }}">
                                        <span class="sidebar-mini">PP</span>
                                        <span class="sidebar-normal">Petugas Posyandu</span>
                                   </a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item {{ $active === 'timbang_balita' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/penimbangan_anak') }}">
                         <i class="material-icons">balance</i>
                         <p>Penimbangan Anak</p>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#kelola-vaksin" aria-expanded="true">
                         <i class="material-icons">medical_services</i>
                         <p>
                              Pemberian Vaksin
                              <b class="caret"></b>
                         </p>
                    </a>
                    <div class="collapse show" id="kelola-vaksin" style>
                         <ul class="nav">
                              <li class="nav-item {{ $active === 'imunisasi_anak' ? 'active' : '' }}">
                                   <a class="nav-link" href="{{ url('admin/imunisasi_anak') }}">
                                        <span class="sidebar-mini">IA</span>
                                        <span class="sidebar-normal">Imunisasi anak</span>
                                   </a>
                              </li>
                              <li class="nav-item {{ $active === 'vitamin_anak' ? 'active' : '' }}">
                                   <a class="nav-link" href="{{ url('admin/vitamin_anak') }}">
                                        <span class="sidebar-mini">VA</span>
                                        <span class="sidebar-normal">Vitamin anak</span>
                                   </a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item {{ $active === 'rekap_riwayat_balita' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/rekap_riwayat_balita') }}">
                         <i class="material-icons">content_paste</i>
                         <p>Riwayat Balita dan Anak</p>
                    </a>
               </li>

               <li class="nav-item {{ $active === 'monitoring-data' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/monitoring-all-data') }}">
                         <i class="material-icons">query_stats</i>
                         <p>Monitoring All Data</p>
                    </a>
               </li>
          </ul>
     </div>
</div>

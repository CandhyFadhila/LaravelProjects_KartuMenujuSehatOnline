<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <title>KMS | {{ $halaman }}</title>
     <meta content="" name="description">
     <meta content="" name="keywords">

     <meta name="csrf_token" content="{{ csrf_token() }}">

     <!-- Favicons -->
     <link rel="icon" sizes="76x76" href="{{ asset('img/motherhood.png') }}" />
     <link rel="icon" type="image/png" href="{{ asset('img/motherhood.png') }}" />

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">


     <!-- Vendor CSS Files -->
     <link href="{{ asset('user_page/assets/vendor/aos/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('user_page/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('user_page/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ asset('user_page/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
     <link href="{{ asset('user_page/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
     <link href="{{ asset('user_page/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

     <!-- Template Main CSS File -->
     <link href="{{ asset('user_page/assets/css/style.css') }}" rel="stylesheet">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

     {{-- ! AJAX --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- =======================================================
  * Template Name: MyResume - v4.10.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
     {{-- ! CSS FOR TABEL IMUNISASI --}}
     <style>
          /* ! Add css div_table_vitamin */
          .tabel_vitamin {
               margin-left: 11px;
               margin-right: 11px;
               width: auto;
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
               margin-left: 11px;
               margin-right: 11px;
               width: auto;
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
               width: 400px;
          }

          .tabel_vitamin_lanjut thead,
          tr>th {
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
</head>

<body>

     <!-- ======= Mobile nav toggle button ======= -->
     <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
     <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>

     <!-- ======= Header ======= -->
     <header id="header" class="d-flex flex-column justify-content-center">

          <!-- .nav-menu -->
          @include('partials.users.sidebar_user')

     </header>
     <!-- End Header -->

     {{-- ! ======= Hero Section ======= --}}
     <section id="hero" class="d-flex flex-column justify-content-center">

          @include('partials.users.hero_user')

     </section>
     <!-- End Hero -->


     <main id="main">

          {{-- ! ======= Kurva Section ======= --}}
          <section id="kurva" class="about">

               <div class="container" data-aos="fade-up">

                    <div class="section-title">
                         <h2>KMS Anak Anda</h2>
                         <p>Silahkan anda piilih terlebih dahulu nama
                              anak anda.</p>

                         <div class="btn-group mt-4">
                              <select id="balita_id" class="js-example-basic-single form-control" name="balita_id">
                                   <option value="option_select" disabled selected>Pilih Nama Balita
                                   </option>

                                   @foreach ($balita_kms as $balita)
                                        <option value="{{ $balita->id_balita }}">{{ $balita->nama_balita }} - NIK
                                             {{ $balita->nik_balita }}</option>
                                   @endforeach

                              </select>
                         </div>
                    </div>

                    <div class="row">
                         <div class="pt-4 pt-lg-0 content">
                              <div class="col">
                                   <h3 id="nama_balita">Nama Balita</h3>
                              </div>
                              <p class="fst-italic">
                                   Berikut adalah detail identitas anak anda yang sudah terdaftar pada sistem kami.
                              </p>
                              <div class="row">
                                   <div class="col-lg-6">
                                        <ul>
                                             <li>
                                                  <i class="bi bi-chevron-right"></i>
                                                  <strong>NIK :</strong>
                                                  <span id="nik_balita">NIK Balita</span>
                                             </li>
                                             <li>
                                                  <i class="bi bi-chevron-right"></i>
                                                  <strong>Tanggal Lahir :</strong>
                                                  <span id="tgl_lahir">Tanggal Lahir Balita</span>
                                             </li>
                                             <li>
                                                  <i class="bi bi-chevron-right"></i>
                                                  <strong>Jenis Kelamin :</strong>
                                                  <span id="jenis_kelamin">Jenis Kelamin Balita</span>
                                             </li>
                                        </ul>
                                   </div>
                                   <div class="col-lg-6">
                                        <ul>
                                             <li>
                                                  <i class="bi bi-chevron-right"></i>
                                                  <strong>Berat Badan saat lahir:</strong>
                                                  <span id="bb_lahir">Berat Badan Balita</span>
                                             </li>
                                             <li>
                                                  <i class="bi bi-chevron-right"></i>
                                                  <strong>Panjang Badan saat lahir:</strong>
                                                  <span id="pb_lahir">Panjang Badan Balita</span>
                                             </li>

                                             {{-- ! TESTING --}}
                                             <li>
                                                  <i class="bi bi-chevron-right"></i>
                                                  <strong>TGL VAKSIN:</strong>
                                                  <span id="tgl_vaksin_3">TGL VAKSIN</span>
                                             </li>
                                        </ul>
                                   </div>

                              </div>
                              <p>
                                   Berdasarkan hasil penimbangan anak anda yang sudah dilakukan di posyandu terdekat,
                                   berikut kami
                                   tampilkan detail hasil dari penimbangan terakhir beserta Kurva atau Grafik KMS.
                              </p>
                         </div>
                         <div class="row mt-4">
                              <div class="col-lg-12">
                                   <div id="chartKMS_bb_u" data-highcharts-chart="0" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_tb_u" data-highcharts-chart="1" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_bb_pb" data-highcharts-chart="2" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

          </section>
          <!-- End Kurva Section -->

          {{-- ! ======= Tanggal Imunisasi Section ======= --}}
          <section id="tanggal_imuns" class="about section-bg">

               <div class="container" data-aos="fade-up">

                    <div class="section-title">
                         <h2>Imunisasi Anak</h2>
                         <p>Setelah melakukan penimbangan anak anda pada posyandu terdekat, hasil akan ditampilkan
                              dibawah ini beserta
                              hasil status gizi anak anda.</p>
                    </div>

                    <div class="row">
                         <div class="pt-4 pt-lg-0 content">
                              <div class="container">
                                   <div class="tabel_vitamin">
                                        <table>
                                             <thead>
                                                  <tr class="table-success">
                                                       <th class="umur">
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
                                                       <td class="text-center" id="tgl_vaksin_1">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_2">Belum Vaksin
                                                       </td>
                                                       <td class="text-center" id="tgl_vaksin_3">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_4">Belum Vaksin
                                                       </td>
                                                       <td class="text-center" id="tgl_vaksin_5">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_6">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_7">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_8">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_9">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_10">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_11">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_12">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_13">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_14">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_15">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_16">Belum Vaksin
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
                                                       <td class="text-center" id="tgl_vaksin_17">Belum Vaksin
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>

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
                                                       <td class="text-center" id="tgl_vaksin_18">Belum Vaksin
                                                       </td>
                                                       <td class="bg-warning"></td>
                                                  </tr>
                                                  <tr>
                                                       <th>**** Campak-Rubella (lanjutan)</th>
                                                       <td class="text-center" id="tgl_vaksin_19">Belum Vaksin
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

          </section>
          <!-- End Tanggal Imunisasi Section -->

          {{-- ! ======= Rekomendasi Makanan/Dll Section ======= --}}
          <section id="rekomendasi" class="services">

               @include('partials.users.rekomendasi_user')

          </section>
          <!-- End Rekomendasi Section -->

          {{-- ! ======= Ahli Gizi Section ======= --}}
          <section id="testimonials" class="testimonials section-bg">

               @include('partials.users.ahli_gizi_user')

          </section>
          <!-- End Ahli Gizi Section -->

     </main>
     <!-- End #main -->


     {{-- ! ======= Footer ======= --}}
     <footer id="footer">

          @include('partials.users.footer_user')

     </footer>
     <!-- End Footer -->


     {{-- ! LOADER --}}
     <div id="preloader"></div>
     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
               class="bi bi-arrow-up-short"></i></a>

     <!-- Vendor JS Files -->
     <script src="{{ asset('js/core/jquery.min.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/aos/aos.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/typed.js/typed.min.js') }}"></script>
     <script src="{{ asset('user_page/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

     <!-- Template Main JS File -->
     <script src="{{ asset('user_page/assets/js/main.js') }}"></script>

     {{-- ! NOTIFIKASI APIK + SEARCH BAR --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



     {{-- ! DETAIL BALITA --}}
     <script>
          $(document).ready(function() {
               $('#balita_id').change(function() {
                    var id = $(this).val();
                    var url = '{{ route('getBalita_orangtua', ':id') }}';
                    url = url.replace(':id', id);

                    $.ajax({
                         url: url,
                         type: 'GET',
                         dataType: 'json',
                         success: function(data) {
                              if (data !== null) {
                                   $('#nama_balita').html(data.nama_balita);
                                   $('#tgl_lahir').html(data.tgl_lahir);
                                   $('#nik_balita').html(data.nik_balita);
                                   $('#jenis_kelamin').html(data.jenis_kelamin);
                                   $('#bb_lahir').html(data.bb_lahir + ' Kg');
                                   $('#pb_lahir').html(data.pb_lahir + ' Cm');

                                   {{-- ! TGL IMUNISASI --}}
                                   var kms_url = '{{ route('getBalitaImun', ':id') }}';
                                   kms_url = kms_url.replace(':id', id);

                                   $.ajax({
                                        url: kms_url,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function(kms_data) {
                                             if (kms_data !== null) {
                                                  console.log(kms_data);
                                                  $('#tgl_vaksin_1').html(
                                                       kms_data
                                                       .tgl_vaksin_1);
                                                  $('#tgl_vaksin_2').html(
                                                       kms_data
                                                       .tgl_vaksin_2);
                                                  $('#tgl_vaksin_3').html(
                                                       kms_data
                                                       .tgl_vaksin_3);
                                                  $('#tgl_vaksin_4').html(
                                                       kms_data
                                                       .tgl_vaksin_4);
                                                  $('#tgl_vaksin_5').html(
                                                       kms_data
                                                       .tgl_vaksin_5);
                                                  $('#tgl_vaksin_6').html(
                                                       kms_data
                                                       .tgl_vaksin_6);
                                                  $('#tgl_vaksin_7').html(
                                                       kms_data
                                                       .tgl_vaksin_7);
                                                  $('#tgl_vaksin_8').html(
                                                       kms_data
                                                       .tgl_vaksin_8);
                                                  $('#tgl_vaksin_9').html(
                                                       kms_data
                                                       .tgl_vaksin_9);
                                                  $('#tgl_vaksin_10').html(
                                                       kms_data
                                                       .tgl_vaksin_10);
                                                  $('#tgl_vaksin_11').html(
                                                       kms_data
                                                       .tgl_vaksin_11);
                                                  $('#tgl_vaksin_12').html(
                                                       kms_data
                                                       .tgl_vaksin_12);
                                                  $('#tgl_vaksin_13').html(
                                                       kms_data
                                                       .tgl_vaksin_13);
                                                  $('#tgl_vaksin_14').html(
                                                       kms_data
                                                       .tgl_vaksin_14);
                                                  $('#tgl_vaksin_15').html(
                                                       kms_data
                                                       .tgl_vaksin_15);
                                                  $('#tgl_vaksin_16').html(
                                                       kms_data
                                                       .tgl_vaksin_16);
                                                  $('#tgl_vaksin_17').html(
                                                       kms_data
                                                       .tgl_vaksin_17);
                                                  $('#tgl_vaksin_18').html(
                                                       kms_data
                                                       .tgl_vaksin_18);
                                                  $('#tgl_vaksin_19').html(
                                                       kms_data
                                                       .tgl_vaksin_19);
                                             } else {
                                                  $('#tgl_vaksin_1').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_2').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_3').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_4').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_5').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_6').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_7').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_8').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_9').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_10').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_11').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_12').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_13').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_14').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_15').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_16').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_17').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_18').html(
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_19').html(
                                                       'Belum Vaksin');
                                             }
                                        }
                                   })

                              } else {
                                   $('#bb_lahir').html('Belum terupdate');
                                   $('#pb_lahir').html('Belum terupdate');
                              }
                         }
                    });
               });
          })
     </script>



     {{-- ! KURVA KMS --}}
     <script src="https://code.highcharts.com/highcharts.js"></script>
     <script src="https://code.highcharts.com/modules/exporting.js"></script>
     <script src="https://code.highcharts.com/modules/export-data.js"></script>
     <script src="https://code.highcharts.com/modules/accessibility.js"></script>

     {{-- ? BERAT BADAN SECTION --}}
     <script>
          Highcharts.chart('chartKMS_bb_u', {
               chart: {
                    type: 'line'
               },
               title: {
                    text: 'Berat Badan menurut Umur (Laki - laki)'
               },
               subtitle: {
                    text: 'Source: Kartu Menuju Sehat Online (KMS)'
               },
               xAxis: {
                    categories: []
               },
               tooltip: {
                    headerFormat: 'Umur: {point.x} Bulan<br>',
                    pointFormat: 'Berat: {point.y:.1f} Kg<br>',
                    footerFormat: 'Tanggal: {point.z}<br>',
                    shared: true
               },
               legend: {
                    enabled: false
               },
               yAxis: {
                    title: {
                         text: 'Berat Badan (Kg)'
                    }
               },
               xAxis: {
                    gridLineWidth: 1,
                    title: {
                         text: 'Umur (Bulan)'
                    }
               },
               plotOptions: {
                    line: {
                         dataLabels: {
                              enabled: false
                         },
                         marker: {
                              enabled: false
                         },
                         enableMouseTracking: false,
                    },
               },
               series: [{
                    // name: '-3 SD',
                    name: '',
                    lineWidth: 2,
                    color: '#F4D03F',
                    data: [2.1, 2.9, 3.8, 4.4, 4.9, 5.3, 5.7, 5.9, 6.2, 6.4, 6.6, 6.8, 6.9, 7.1, 7.2,
                         7.4, 7.5, 7.7, 7.8, 8, 8.1, 8.2, 8.4, 8.5, 8.6, 8.8, 8.9, 9, 9.1, 9.2, 9.4,
                         9.5, 9.6, 9.7, 9.8, 9.9, 10, 10.1, 10.2, 10.3, 10.4, 10.5, 10.6, 10.7,
                         10.8, 10.9, 11, 11.1, 11.2, 11.3, 11.4, 11.5, 11.6, 11.7, 11.8, 11.9, 12,
                         12.1, 12.2, 12.3, 12.4,
                    ]
               }, {
                    // name: '-2 SD ',
                    name: '',
                    lineWidth: 1.5,
                    color: '#58D68D',
                    data: [2.5, 3.4, 4.3, 5, 5.6, 6, 6.4, 6.7, 6.9, 7.1, 7.4, 7.6, 7.7, 7.9, 8.1, 8.3,
                         8.4, 8.6, 8.8, 8.9, 9.1, 9.2, 9.4, 9.5, 9.7, 9.8, 10, 10.1, 10.2, 10.4,
                         10.5, 10.7, 10.8, 10.9, 11, 11.2, 11.3, 11.4, 11.5, 11.6, 11.8, 11.9, 12,
                         12.1, 12.2, 12.4, 12.5, 12.6, 12.7, 12.8, 12.9, 13.1, 13.2, 13.3, 13.4,
                         13.5, 13.6, 13.7, 13.8, 14, 14.1,
                    ]
               }, {
                    // name: '-1 SD',
                    name: '',
                    lineWidth: 1.5,
                    color: '#229954 ',
                    data: [2.9, 3.9, 4.9, 5.7, 6.2, 6.7, 7.1, 7.4, 7.7, 8, 8.2, 8.4, 8.6, 8.8, 9, 9.2,
                         9.4, 9.6, 9.8, 10, 10.1, 10.3, 10.5, 10.7, 10.8, 11, 11.2, 11.3, 11.5,
                         11.7, 11.8, 12, 12.1, 12.3, 12.4, 12.6, 12.7, 12.9, 13, 13.1, 13.3, 13.4,
                         13.6, 13.7, 13.8, 14, 14.1, 14.3, 14.4, 14.5, 14.7, 14.8, 15, 15.1, 15.2,
                         15.4, 15.5, 15.6, 15.8, 15.9, 16,
                    ]
               }, {
                    // name: 'Median',
                    name: '',
                    color: '#229954 ',
                    lineWidth: 1.5,
                    data: [3.3, 4.5, 5.6, 6.4, 7, 7.5, 7.9, 8.3, 8.6, 8.9, 9.2, 9.4, 9.6, 9.9, 10.1,
                         10.3, 10.5, 10.7, 10.9, 11.1, 11.3, 11.5, 11.8, 12, 12.2, 12.4, 12.5, 12.7,
                         12.9, 13.1, 13.3, 13.5, 13.7, 13.8, 14, 14.2, 14.3, 14.5, 14.7, 14.8, 15,
                         15.2, 15.3, 15.5, 15.7, 15.8, 16, 16.2, 16.3, 16.5, 16.7, 16.8, 17, 17.2,
                         17.3, 17.5, 17.7, 17.8, 18, 18.2, 18.3,
                    ]
               }, {
                    // name: '+1 SD',
                    name: '',
                    lineWidth: 1.5,
                    color: '#229954 ',
                    data: [3.9, 5.1, 6.3, 7.2, 7.8, 8.4, 8.8, 9.2, 9.6, 9.9, 10.2, 10.5, 10.8, 11, 11.3,
                         11.5, 11.7, 12, 12.2, 12.5, 12.7, 12.9, 13.2, 13.4, 13.6, 13.9, 14.1, 14.3,
                         14.5, 14.8, 15, 15.2, 15.4, 15.6, 15.8, 16, 16.2, 16.4, 16.6, 16.8, 17,
                         17.2, 17.4, 17.6, 17.8, 18, 18.2, 18.4, 18.6, 18.8, 19, 19.2, 19.4, 19.6,
                         19.8, 20, 20.2, 20.4, 20.6, 20.8, 21,
                    ]
               }, {
                    // name: '+2 SD',
                    name: '',
                    color: '#58D68D',
                    lineWidth: 1.5,
                    data: [4.4, 5.8, 7.1, 8, 8.7, 9.3, 9.8, 10.3, 10.7, 11, 11.4, 11.7, 12, 12.3, 12.6,
                         12.8, 13.1, 13.4, 13.7, 13.9, 14.2, 14.5, 14.7, 15, 15.3, 15.5, 15.8, 16.1,
                         16.3, 16.6, 16.9, 17.1, 17.4, 17.6, 17.8, 18.1, 18.3, 18.6, 18.8, 19, 19.3,
                         19.5, 19.7, 20, 20.2, 20.5, 20.7, 20.9, 21.2, 21.4, 21.7, 21.9, 22.2, 22.4,
                         22.7, 22.9, 23.2, 23.4, 23.7, 23.9, 24.2,
                    ]
               }, {
                    // name: '+3 SD',
                    name: '',
                    color: '#F4D03F',
                    lineWidth: 2,
                    data: [5, 6.6, 8, 9, 9.7, 10.4, 10.9, 11.4, 11.9, 12.3, 12.7, 13, 13.3, 13.7, 14,
                         14.3, 14.6, 14.9, 15.3, 15.6, 15.9, 16.2, 16.5, 16.8, 17.1, 17.5, 17.8,
                         18.1, 18.4, 18.7, 19, 19.3, 19.6, 19.9, 20.2, 20.4, 20.7, 21, 21.3, 21.6,
                         21.9, 22.1, 22.4, 22.7, 23, 23.3, 23.6, 23.9, 24.2, 24.5, 24.8, 25.1, 25.4,
                         25.7, 26, 26.3, 26.6, 26.9, 27.2, 27.6, 27.9,
                    ]
               }, {
                    name: '',
                    marker: {
                         enabled: true,
                         symbol: 'circle'
                    },
                    color: 'black',
                    lineWidth: 0.2,

                    // Berat
                    data: [16],
                    // UMUR
                    pointStart: 20,

                    enableMouseTracking: true
               }],
               navigation: {
                    buttonOptions: {
                         enabled: true
                    }
               }
          });
     </script>

     {{-- ! TINGGI BADAN SECTION --}}
     <script>
          Highcharts.chart('chartKMS_tb_u', {
               chart: {
                    type: 'line'
               },
               title: {
                    text: 'Tinggi Badan menurut Umur (Laki - laki)'
               },
               subtitle: {
                    text: 'Source: Kartu Menuju Sehat Online (KMS)'
               },
               xAxis: {
                    categories: []
               },
               tooltip: {
                    headerFormat: 'Umur: {point.x} Bulan<br>',
                    pointFormat: 'Tinggi: {point.y:.1f} Cm<br>',
                    footerFormat: 'Tanggal: {point.z}<br>',
                    shared: true
               },
               legend: {
                    enabled: false
               },
               yAxis: {
                    title: {
                         text: 'Tinggi Badan (Cm)'
                    }
               },
               xAxis: {
                    gridLineWidth: 1,
                    title: {
                         text: 'Umur (Bulan)'
                    }
               },
               plotOptions: {
                    line: {
                         dataLabels: {
                              enabled: false
                         },
                         marker: {
                              enabled: false
                         },
                         enableMouseTracking: false,
                    },
               },
               series: [{
                    // name: '-3 SD',
                    name: '',
                    lineWidth: 1.5,
                    color: '#F4D03F',
                    data: [44.2, 48.9, 52.4, 55.3, 57.6, 59.6, 61.2, 62.7, 64, 65.2, 66.4, 67.6, 68.6,
                         69.6, 70.6, 71.6, 72.5, 73.3, 74.2, 75, 75.8, 76.5, 77.2, 78, 78.7, 78,
                         78.6, 79.3, 79.9, 80.5, 81.1, 81.7, 82.3, 82.8, 83.4, 83.9, 84.4, 85, 85.5,
                         86, 86.5, 87, 87.5, 88, 88.4, 88.9, 89.4, 89.8, 90.3, 90.7, 91.2, 91.6,
                         92.1, 92.5, 93, 93.4, 93.9, 94.3, 94.7, 95.2, 95.6,
                    ]
               }, {
                    // name: '-2 SD',
                    name: '',
                    lineWidth: 1.5,
                    color: '#58D68D',
                    data: [46.1, 50.8, 54.4, 57.3, 59.7, 61.7, 63.3, 64.8, 66.2, 67.5, 68.7, 69.9, 71,
                         72.1, 73.1, 74.1, 75, 76, 76.9, 77.7, 78.6, 79.4, 80.2, 81, 81.7, 81, 81.7,
                         82.5, 83.1, 83.8, 84.5, 85.1, 85.7, 86.4, 86.9, 87.5, 88.1, 88.7, 89.2,
                         89.8, 90.3, 90.9, 91.4, 91.9, 92.4, 93, 93.5, 94, 94.4, 94.9, 95.4, 95.9,
                         96.4, 96.9, 97.4, 97.8, 98.3, 98.8, 99.3, 99.7, 100.2,
                    ]
               }, {
                    // name: '-1 SD',
                    name: '',
                    lineWidth: 1.5,
                    color: '#229954 ',
                    data: [48, 52.8, 56.4, 59.4, 61.8, 63.8, 65.5, 67, 68.4, 69.7, 71, 72.2, 73.4, 74.5,
                         75.6, 76.6, 77.6, 78.6, 79.6, 80.5, 81.4, 82.3, 83.1, 83.9, 84.8, 84.1,
                         84.9, 85.6, 86.4, 87.1, 87.8, 88.5, 89.2, 89.9, 90.5, 91.1, 91.8, 92.4, 93,
                         93.6, 94.2, 94.7, 95.3, 95.9, 96.4, 97, 97.5, 98.1, 98.6, 99.1, 99.7,
                         100.2, 100.7, 101.2, 101.7, 102.3, 102.8, 103.3, 103.8, 104.3, 104.8,
                    ]
               }, {
                    // name: 'Median',
                    name: '',
                    color: '#229954 ',
                    lineWidth: 1.5,
                    data: [49.9, 54.7, 58.4, 61.4, 63.9, 65.9, 67.6, 69.2, 70.6, 72, 73.3, 74.5, 75.7,
                         76.9, 78, 79.1, 80.2, 81.2, 82.3, 83.2, 84.2, 85.1, 86, 86.9, 87.8, 87.1,
                         88, 88.8, 89.6, 90.4, 91.2, 91.9, 92.7, 93.4, 94.1, 94.8, 95.4, 96.1, 96.7,
                         97.4, 98, 98.6, 99.2, 99.9, 100.4, 101, 101.6, 102.2, 102.8, 103.3, 103.9,
                         104.4, 105, 105.6, 106.1, 106.7, 107.2, 107.8, 108.3, 108.9, 109.4,
                    ]
               }, {
                    // name: '+1 SD',
                    name: '',
                    lineWidth: 1.5,
                    color: '#229954 ',
                    data: [51.8, 56.7, 60.4, 63.5, 66, 68, 69.8, 71.3, 72.8, 74.2, 75.6, 76.9, 78.1,
                         79.3, 80.5, 81.7, 82.8, 83.9, 85, 86, 87, 88, 89, 89.9, 90.9, 90.2, 91.1,
                         92, 92.9, 93.7, 94.5, 95.3, 96.1, 96.9, 97.6, 98.4, 99.1, 99.8, 100.5,
                         101.2, 101.8, 102.5, 103.2, 103.8, 104.5, 105.1, 105.7, 106.3, 106.9,
                         107.5, 108.1, 108.7, 109.3, 109.9, 110.5, 111.1, 111.7, 112.3, 112.8,
                         113.4, 114,
                    ]
               }, {
                    // name: '+2 SD',
                    name: '',
                    color: '#58D68D',
                    lineWidth: 1.5,
                    data: [53.7, 58.6, 62.4, 65.5, 68, 70.1, 71.9, 73.5, 75, 76.5, 77.9, 79.2, 80.5,
                         81.8, 83, 84.2, 85.4, 86.5, 87.7, 88.8, 89.8, 90.9, 91.9, 92.9, 93.9, 93.2,
                         94.2, 95.2, 96.1, 97, 97.9, 98.7, 99.6, 100.4, 101.2, 102, 102.7, 103.5,
                         104.2, 105, 105.7, 106.4, 107.1, 107.8, 108.5, 109.1, 109.8, 110.4, 111.1,
                         111.7, 112.4, 113, 113.6, 114.2, 114.9, 115.5, 116.1, 116.7, 117.4, 118,
                         118.6,
                    ]
               }, {
                    // name: '+3 SD',
                    name: '',
                    color: '#F4D03F',
                    lineWidth: 1.5,
                    data: [55.6, 60.6, 64.4, 67.6, 70.1, 72.2, 74, 75.7, 77.2, 78.7, 80.1, 81.5, 82.9,
                         84.2, 85.5, 86.7, 88, 89.2, 90.4, 91.5, 92.6, 93.8, 94.9, 95.9, 97, 96.3,
                         97.3, 98.3, 99.3, 100.3, 101.2, 102.1, 103, 103.9, 104.8, 105.6, 106.4,
                         107.2, 108, 108.8, 109.5, 110.3, 111, 111.7, 112.5, 113.2, 113.9, 114.6,
                         115.2, 115.9, 116.6, 117.3, 117.9, 118.6, 119.2, 119.9, 120.6, 121.2,
                         121.9, 122.6, 123.2,
                    ]
               }, {
                    name: '',
                    marker: {
                         enabled: true,
                         symbol: 'circle',
                    },
                    color: 'black',
                    lineWidth: 0.2,

                    // TINGGI BADAN
                    data: [52, 62],
                    // UMUR BULAN
                    pointStart: 1,

                    enableMouseTracking: true
               }],
               navigation: {
                    buttonOptions: {
                         enabled: true
                    }
               }
          });
     </script>

     @yield('script_select2')
</body>

</html>

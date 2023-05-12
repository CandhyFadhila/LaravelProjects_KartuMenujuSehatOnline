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

          /* CSS for tabel_vitamin_a */
          .tabel_vitamin_a {
               margin-top: 45px;
               margin-left: 11px;
               margin-right: 11px;
               width: auto;
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
               width: 400px;
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

          /* CSS for tabel_detail_kms */
          .tabel_detail_kms {
               margin-left: 11px;
               margin-right: 11px;
               width: auto;
               height: auto;
               overflow: auto;
               position: relative;
               border: 1px solid #5e5e5e;
          }

          .tabel_detail_kms table {
               border-spacing: 0;
               white-space: nowrap;
               table-layout: relative;
          }

          .tabel_detail_kms thead {
               top: 0;
               z-index: 2;
          }

          .tabel_detail_kms tr>th {
               left: 0;
               z-index: 1;
          }

          .tabel_detail_kms thead tr>th:first-child {
               z-index: 3;
          }

          .tabel_detail_kms th,
          td {
               height: 50px;
               border: 1px solid #5e5e5e;
               border-width: 0 0 1px 1px;
               text-align: left;
               padding: 10px;
               font-family: sans-serif;
          }

          .tabel_detail_kms td {
               background: #fff;
          }

          .tabel_detail_kms th:first-child {
               border-right-width: 1px;
               border-left: 0;
          }

          .tabel_detail_kms th+td,
          th:first-child+th {
               border-left: 0;
          }

          .tabel_detail_kms tbody tr:last-child>* {
               border-bottom: 0;
          }

          .tabel_detail_kms tr>*:last-child {
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
                              {{-- ! BB_LAKI --}}
                              <div class="col-lg-12">
                                   <div id="chartKMS_bb_u_laki" data-highcharts-chart="0" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>
                              {{-- ! BB_PR --}}
                              <div class="col-lg-12">
                                   <div id="chartKMS_bb_u_perempuan" data-highcharts-chart="1" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>
                              {{-- ! TB_LAKI --}}
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_tb_u_laki" data-highcharts-chart="2" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>
                              {{-- ! TB_PR --}}
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_tb_u_perempuan" data-highcharts-chart="3" style="overflow: hidden;"
                                        aria-hidden="false">
                                   </div>
                              </div>

                              {{-- ! BB_PB_LAKI --}}
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_bb_pb_laki_0_24" data-highcharts-chart="4"
                                        style="overflow: hidden;" aria-hidden="false">
                                   </div>
                              </div>
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_bb_pb_laki_24_60" data-highcharts-chart="5"
                                        style="overflow: hidden;" aria-hidden="false">
                                   </div>
                              </div>

                              {{-- ! BB_PB_PR --}}
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_bb_pb_perempuan_0_24" data-highcharts-chart="6"
                                        style="overflow: hidden;" aria-hidden="false">
                                   </div>
                              </div>
                              <div class="col-lg-12 mt-4">
                                   <div id="chartKMS_bb_pb_perempuan_24_60" data-highcharts-chart="7"
                                        style="overflow: hidden;" aria-hidden="false">
                                   </div>
                              </div>
                         </div>
                         <div class="container mt-4">
                              <p class="text-center">Dari hasil kurva tersebut, Anak <strong id="nama_anak">Nama
                                        Balita</strong> memiliki
                                   keterangan sebagai berikut.</p>

                              <div class="row">
                                   <div class="pt-5 pt-lg-0">
                                        <div class="container">
                                             <div class="tabel_detail_kms">
                                                  <table>
                                                       <thead>
                                                            <tr style="background-color: #dc3545">
                                                                 <th colspan="15" class="text-center text-white">
                                                                      Tabel Detail Penimbangan</th>
                                                            </tr>
                                                            <tr style="background-color: #FCC8D1">
                                                                 <th class="keterangan">
                                                                      <div style="width: 310px">Keterangan
                                                                 </th>
                                                                 <th class="text-center">
                                                                      <div style="width: 150px">Umur
                                                                 </th>
                                                                 <th class="text-center">
                                                                      <div style="width: 150px">BB Timbang
                                                                 </th>
                                                                 <th class="text-center">
                                                                      <div style="width: 150px">PB Ukur
                                                                 </th>
                                                                 <th class="text-center">
                                                                      <div style="width: 300px">Kategori Berat Badan
                                                                 </th>
                                                                 <th class="text-center">
                                                                      <div style="width: 300px">Kategori Panjang Badan
                                                                 </th>
                                                                 <th class="text-center">
                                                                      <div style="width: 300px">Kategori Panjang Badan
                                                                           Berat Badan
                                                                 </th>
                                                            </tr>
                                                       </thead>
                                                       <tbody id="kms_table_body">

                                                       </tbody>
                                                  </table>
                                             </div>
                                        </div>
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
                         <p>Setelah imunisasi anak anda dilakukan pada posyandu terdekat, hasil imunisasi akan
                              ditampilkan
                              dibawah ini.</p>
                    </div>

                    <div class="row">
                         <div class="pt-4 pt-lg-0 content">
                              <div class="container">
                                   <div class="tabel_vitamin">
                                        <table>
                                             <thead>
                                                  <tr
                                                       style="background-color: #198754;
                                                  ">
                                                       <th colspan="15" class="text-center text-white">Tabel
                                                            Pemberian Vaksin Imunisasi</th>
                                                  </tr>
                                                  <tr style="background-color: #A0D8B3;">
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
                                                  <tr style="background-color:#71C9CE;">
                                                       <th>Vaksin</th>
                                                       <th colspan="13" class="text-center">Tanggal
                                                            Pemberian Vaksin Imunisasi</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <th style="background-color:#71C9CE;">Hepatitis B (< 24
                                                                 Jam)</th>
                                                       <td class="text-center" id="tgl_vaksin_1">
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
                                                       <th style="background-color:#71C9CE;">BCG</th>
                                                       <td class="text-center" id="tgl_vaksin_2">
                                                       </td>
                                                       <td class="text-center" id="tgl_vaksin_3">
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
                                                       <th style="background-color:#71C9CE;">* Polio Tetes 1</th>
                                                       <td class="text-center" id="tgl_vaksin_4">
                                                       </td>
                                                       <td class="text-center" id="tgl_vaksin_5">
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
                                                       <th style="background-color:#71C9CE;">* DPT-HB-Hib 1</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_6">
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
                                                       <th style="background-color:#71C9CE;">* Polio Tetes 2</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_7">
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
                                                       <th style="background-color:#71C9CE;">** PCV 1</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_8">
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
                                                       <th style="background-color:#71C9CE;">* DPT-HB-Hib 2</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_9">
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
                                                       <th style="background-color:#71C9CE;">* Polio Tetes 3</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_10">
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
                                                       <th style="background-color:#71C9CE;">** PCV 2</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_11">
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
                                                       <th style="background-color:#71C9CE;">* DPT-HB-Hib 3</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_12">
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
                                                       <th style="background-color:#71C9CE;">* Polio Tetes 4</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_13">
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
                                                       <th style="background-color:#71C9CE;">Polio Suntik (IPV)</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_14">
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
                                                       <th style="background-color:#71C9CE;">Campak-Rubella</th>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="bg-dark text-white"></td>
                                                       <td class="text-center" id="tgl_vaksin_15">
                                                       </td>
                                                       <td class="bg-warning"></td>
                                                       <td class="bg-warning"></td>
                                                       <td class="bg-danger text-white"></td>
                                                  </tr>
                                                  <tr>
                                                       <th style="background-color:#71C9CE;">** JE</th>
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
                                                       <td class="text-center" id="tgl_vaksin_16">
                                                       </td>
                                                       <td class="bg-warning"></td>
                                                       <td class="bg-danger text-white"></td>
                                                  </tr>
                                                  <tr>
                                                       <th style="background-color:#71C9CE;">** PCV 3</th>
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
                                                       <td class="text-center" id="tgl_vaksin_17">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>

                                   <div class="tabel_vitamin_lanjut">
                                        <table>
                                             <thead>
                                                  <tr
                                                       style="background-color: #198754;
                                                  ">
                                                       <th colspan="15" class="text-center text-white">Tabel
                                                            Pemberian Vaksin Imunisasi (Lanjutan)</th>
                                                  </tr>
                                                  <tr style="background-color: #A0D8B3;"">
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
                                                  <tr style="background-color:#71C9CE;">
                                                       <th>Vaksin</th>
                                                       <th colspan="3" class="text-center">Tanggal
                                                            Pemberian Vaksin Imunisasi</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <th style="background-color:#71C9CE;">**** DPT-HB-Hib (lanjutan)
                                                       </th>
                                                       <td class="text-center" id="tgl_vaksin_18">
                                                       </td>
                                                       <td class="bg-warning"></td>
                                                  </tr>
                                                  <tr>
                                                       <th style="background-color:#71C9CE;">**** Campak-Rubella
                                                            (lanjutan)</th>
                                                       <td class="text-center" id="tgl_vaksin_19">
                                                       </td>
                                                       <td class="bg-warning"></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>

                                   <div class="tabel_vitamin_a">
                                        <table>
                                             <thead>
                                                  <tr
                                                       style="background-color: #B04759;
                                                  ">
                                                       <th colspan="13" class="text-center text-white">Tabel
                                                            Pemberian Vaksin Vitamin Wajib</th>
                                                  </tr>
                                                  <tr style="background-color: #F99B7D;">
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
                                                  <tr style="background-color:#71C9CE;">
                                                       <th>Vaksin</th>
                                                       <th colspan="3" class="text-center">Tanggal
                                                            Pemberian Vaksin Vitamin Wajib</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr style="background-color:#71C9CE;">
                                                       <th>Vitamin A (Merah)</th>
                                                       <td class="text-center" id="tgl_vaksin_23">
                                                       </td>
                                                       <td class="text-center" id="tgl_vaksin_24">
                                                       </td>
                                                  </tr>
                                                  <tr style="background-color:#71C9CE;">
                                                       <th>Vitamin A (Biru)</th>
                                                       <td class="text-center" id="tgl_vaksin_25">
                                                       </td>
                                                       <td class="text-center" id="tgl_vaksin_26">
                                                       </td>
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
                                   $('#nama_anak').html(data.nama_balita);
                                   $('#tgl_lahir').html(data.tgl_lahir);
                                   $('#nik_balita').html(data.nik_balita);
                                   $('#jenis_kelamin').html(data.jenis_kelamin);
                                   $('#bb_lahir').html(data.bb_lahir ??
                                        '~Data Belum Terupdate~' + ' Kg');
                                   $('#pb_lahir').html(data.pb_lahir ??
                                        '~Data Belum Terupdate~' + ' Cm');

                                   {{-- ! TGL IMUNISASI --}}
                                   var kms_url = '{{ route('getBalitaImun', ':id') }}';
                                   kms_url = kms_url.replace(':id', id);

                                   $.ajax({
                                        url: kms_url,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function(kms_data) {
                                             if (kms_data !== null) {
                                                  $('#tgl_vaksin_1').html(
                                                       kms_data
                                                       .tgl_vaksin_1 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_2').html(
                                                       kms_data
                                                       .tgl_vaksin_2 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_3').html(
                                                       kms_data
                                                       .tgl_vaksin_3 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_4').html(
                                                       kms_data
                                                       .tgl_vaksin_4 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_5').html(
                                                       kms_data
                                                       .tgl_vaksin_5 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_6').html(
                                                       kms_data
                                                       .tgl_vaksin_6 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_7').html(
                                                       kms_data
                                                       .tgl_vaksin_7 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_8').html(
                                                       kms_data
                                                       .tgl_vaksin_8 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_9').html(
                                                       kms_data
                                                       .tgl_vaksin_9 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_10').html(
                                                       kms_data
                                                       .tgl_vaksin_10 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_11').html(
                                                       kms_data
                                                       .tgl_vaksin_11 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_12').html(
                                                       kms_data
                                                       .tgl_vaksin_12 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_13').html(
                                                       kms_data
                                                       .tgl_vaksin_13 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_14').html(
                                                       kms_data
                                                       .tgl_vaksin_14 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_15').html(
                                                       kms_data
                                                       .tgl_vaksin_15 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_16').html(
                                                       kms_data
                                                       .tgl_vaksin_16 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_17').html(
                                                       kms_data
                                                       .tgl_vaksin_17 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_18').html(
                                                       kms_data
                                                       .tgl_vaksin_18 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_19').html(
                                                       kms_data
                                                       .tgl_vaksin_19 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_20').html(
                                                       kms_data
                                                       .tgl_vaksin_20 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_21').html(
                                                       kms_data
                                                       .tgl_vaksin_21 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_22').html(
                                                       kms_data
                                                       .tgl_vaksin_22 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_23').html(
                                                       kms_data
                                                       .tgl_vaksin_23 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_24').html(
                                                       kms_data
                                                       .tgl_vaksin_24 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_25').html(
                                                       kms_data
                                                       .tgl_vaksin_25 ??
                                                       'Belum Vaksin');
                                                  $('#tgl_vaksin_26').html(
                                                       kms_data
                                                       .tgl_vaksin_26 ??
                                                       'Belum Vaksin');
                                             }
                                        }
                                   });

                                   {{-- ! DETAIL KMS --}}
                                   var kms_detail =
                                        '{{ route('getBalitaDetail', ':id') }}';
                                   kms_detail = kms_detail.replace(':id', id);

                                   $.ajax({
                                        url: kms_detail,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function(detail) {

                                             // clear the table body
                                             var table = $('#kms_table_body');
                                             table.empty();

                                             var BBsection = [];
                                             var TBsection = [];
                                             var BB_PBsection_0_24 = [];
                                             var BB_PBsection_24_60 = [];

                                             $.each(detail, function(index,
                                                  item) {
                                                  var row =
                                                       '<tr>' +

                                                       '<td class="font-weight-bold">' +
                                                       item
                                                       .keterangan_penimbangan +
                                                       ' pada ' +
                                                       item
                                                       .tgl_timbang +
                                                       '</td>' +

                                                       '<td class="text-center">' +
                                                       item
                                                       .umur_sekarang +
                                                       ' Bulan' +
                                                       '</td>' +

                                                       '<td class="text-center">' +
                                                       item
                                                       .bb_sekarang +
                                                       ' Kg' +
                                                       '</td>' +

                                                       '<td class="text-center">' +
                                                       item
                                                       .pb_sekarang +
                                                       ' Cm' +
                                                       '</td>' +

                                                       '<td class="text-center">' +
                                                       item
                                                       .kategori_bb_u +
                                                       '</td>' +

                                                       '<td class="text-center">' +
                                                       item
                                                       .kategori_pb_u +
                                                       '</td>' +

                                                       '<td class="text-center">' +
                                                       item
                                                       .kategori_bb_pb +
                                                       '</td>' +

                                                       '</tr>';
                                                  table.append(
                                                       row);

                                                  {{-- ! BB --}}
                                                  var pointBB = [
                                                       parseFloat(
                                                            item
                                                            .umur_sekarang
                                                       ),
                                                       parseFloat(
                                                            item
                                                            .bb_sekarang
                                                       )
                                                  ];
                                                  BBsection.push(
                                                       pointBB
                                                  );

                                                  {{-- ! TB --}}
                                                  var pointTB = [
                                                       parseFloat(
                                                            item
                                                            .umur_sekarang
                                                       ),
                                                       parseFloat(
                                                            item
                                                            .pb_sekarang
                                                       )
                                                  ];
                                                  TBsection.push(
                                                       pointTB
                                                  );

                                                  {{-- ! BB_PB --}}
                                                  var pointBB_PB = [
                                                       parseFloat(
                                                            item
                                                            .bb_sekarang
                                                       ),
                                                       parseFloat(
                                                            item
                                                            .pb_sekarang
                                                       )
                                                  ];
                                                  if (item
                                                       .umur_sekarang >=
                                                       0 && item
                                                       .umur_sekarang <=
                                                       24) {
                                                       BB_PBsection_0_24
                                                            .push(
                                                                 pointBB_PB
                                                            );
                                                  } else if (item
                                                       .umur_sekarang >
                                                       24 && item
                                                       .umur_sekarang <=
                                                       60) {
                                                       BB_PBsection_24_60
                                                            .push(
                                                                 pointBB_PB
                                                            );
                                                  }
                                             });

                                             {{-- ! KMS --}}
                                             if (data.jenis_kelamin ===
                                                  "P") {

                                                  {{-- ! BERAT BADAN SECTION --}}
                                                  Highcharts.chart(
                                                       'chartKMS_bb_u_perempuan', {
                                                            chart: {
                                                                 type: 'line'
                                                            },
                                                            title: {
                                                                 text: 'Berat Badan menurut Umur (Perempuan)'
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
                                                                      data: [
                                                                           2.0,
                                                                           2.7,
                                                                           3.4,
                                                                           4.0,
                                                                           4.4,
                                                                           4.8,
                                                                           5.1,
                                                                           5.3,
                                                                           5.6,
                                                                           5.8,
                                                                           5.9,
                                                                           6.1,
                                                                           6.3,
                                                                           6.4,
                                                                           6.6,
                                                                           6.7,
                                                                           6.9,
                                                                           7.0,
                                                                           7.2,
                                                                           7.3,
                                                                           7.5,
                                                                           7.6,
                                                                           7.8,
                                                                           7.9,
                                                                           8.1,
                                                                           8.2,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-2 SD ',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#58D68D',
                                                                      data: [
                                                                           2.4,
                                                                           3.2,
                                                                           3.9,
                                                                           4.5,
                                                                           5.0,
                                                                           5.4,
                                                                           5.7,
                                                                           6.0,
                                                                           6.3,
                                                                           6.5,
                                                                           6.7,
                                                                           6.9,
                                                                           7.0,
                                                                           7.2,
                                                                           7.4,
                                                                           7.6,
                                                                           7.7,
                                                                           7.9,
                                                                           8.1,
                                                                           8.2,
                                                                           8.4,
                                                                           8.6,
                                                                           8.7,
                                                                           8.9,
                                                                           9.0,
                                                                           9.2,
                                                                           9.4,
                                                                           9.5,
                                                                           9.7,
                                                                           9.8,
                                                                           10.0,
                                                                           10.1,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           2.8,
                                                                           3.6,
                                                                           4.5,
                                                                           5.2,
                                                                           5.7,
                                                                           6.1,
                                                                           6.5,
                                                                           6.8,
                                                                           7.0,
                                                                           7.3,
                                                                           7.5,
                                                                           7.7,
                                                                           7.9,
                                                                           8.1,
                                                                           8.3,
                                                                           8.5,
                                                                           8.7,
                                                                           8.9,
                                                                           9.1,
                                                                           9.2,
                                                                           9.4,
                                                                           9.6,
                                                                           9.8,
                                                                           10.0,
                                                                           10.2,
                                                                           10.3,
                                                                           10.5,
                                                                           10.7,
                                                                           10.9,
                                                                           11.1,
                                                                           11.2,
                                                                           11.4,
                                                                           11.6,
                                                                           11.7,
                                                                           11.9,
                                                                           12.0,
                                                                           12.2,
                                                                           12.4,
                                                                           12.5,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#229954 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           3.2,
                                                                           4.2,
                                                                           5.1,
                                                                           5.8,
                                                                           6.4,
                                                                           6.9,
                                                                           7.3,
                                                                           7.6,
                                                                           7.9,
                                                                           8.2,
                                                                           8.5,
                                                                           8.7,
                                                                           8.9,
                                                                           9.2,
                                                                           9.4,
                                                                           9.6,
                                                                           9.8,
                                                                           10.0,
                                                                           10.2,
                                                                           10.4,
                                                                           10.6,
                                                                           10.9,
                                                                           11.1,
                                                                           11.3,
                                                                           11.5,
                                                                           11.7,
                                                                           11.9,
                                                                           12.1,
                                                                           12.3,
                                                                           12.5,
                                                                           12.7,
                                                                           12.9,
                                                                           13.1,
                                                                           13.3,
                                                                           13.5,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.4,
                                                                           14.6,
                                                                           14.8,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.7,
                                                                           15.9,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.6,
                                                                           16.8,
                                                                           17.0,
                                                                           17.2,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           3.7,
                                                                           4.8,
                                                                           5.8,
                                                                           6.6,
                                                                           7.3,
                                                                           7.8,
                                                                           8.2,
                                                                           8.6,
                                                                           9.0,
                                                                           9.3,
                                                                           9.6,
                                                                           9.9,
                                                                           10.1,
                                                                           10.4,
                                                                           10.6,
                                                                           10.9,
                                                                           11.1,
                                                                           11.4,
                                                                           11.6,
                                                                           11.8,
                                                                           12.1,
                                                                           12.3,
                                                                           12.5,
                                                                           12.8,
                                                                           13.0,
                                                                           13.3,
                                                                           13.5,
                                                                           13.7,
                                                                           14.0,
                                                                           14.2,
                                                                           14.4,
                                                                           14.7,
                                                                           14.9,
                                                                           15.1,
                                                                           15.4,
                                                                           15.6,
                                                                           15.8,
                                                                           16.0,
                                                                           16.3,
                                                                           16.5,
                                                                           16.7,
                                                                           16.9,
                                                                           17.2,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           18.1,
                                                                           18.3,
                                                                           18.5,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.7,
                                                                           19.9,
                                                                           20.1,
                                                                           20.3,
                                                                           20.6,
                                                                           20.8,
                                                                           21.0,
                                                                           21.2
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#58D68D',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           4.2,
                                                                           5.5,
                                                                           6.6,
                                                                           7.5,
                                                                           8.2,
                                                                           8.8,
                                                                           9.3,
                                                                           9.8,
                                                                           10.2,
                                                                           10.5,
                                                                           10.9,
                                                                           11.2,
                                                                           11.5,
                                                                           11.8,
                                                                           12.1,
                                                                           12.4,
                                                                           12.6,
                                                                           12.9,
                                                                           13.2,
                                                                           13.5,
                                                                           13.7,
                                                                           14.0,
                                                                           14.3,
                                                                           14.6,
                                                                           14.8,
                                                                           15.1,
                                                                           15.4,
                                                                           15.7,
                                                                           16.0,
                                                                           16.2,
                                                                           16.5,
                                                                           16.8,
                                                                           17.1,
                                                                           17.3,
                                                                           17.6,
                                                                           17.9,
                                                                           18.1,
                                                                           18.4,
                                                                           18.7,
                                                                           19.0,
                                                                           19.2,
                                                                           19.5,
                                                                           19.8,
                                                                           20.1,
                                                                           20.4,
                                                                           20.7,
                                                                           20.9,
                                                                           21.2,
                                                                           21.5,
                                                                           21.8,
                                                                           22.1,
                                                                           22.4,
                                                                           22.6,
                                                                           22.9,
                                                                           23.2,
                                                                           23.5,
                                                                           23.8,
                                                                           24.1,
                                                                           24.4,
                                                                           24.6,
                                                                           24.9
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#F4D03F',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           4.8,
                                                                           6.2,
                                                                           7.5,
                                                                           8.5,
                                                                           9.3,
                                                                           10.0,
                                                                           10.6,
                                                                           11.1,
                                                                           11.6,
                                                                           12.0,
                                                                           12.4,
                                                                           12.8,
                                                                           13.1,
                                                                           13.5,
                                                                           13.8,
                                                                           14.1,
                                                                           14.5,
                                                                           14.8,
                                                                           15.1,
                                                                           15.4,
                                                                           15.7,
                                                                           16.0,
                                                                           16.4,
                                                                           16.7,
                                                                           17.0,
                                                                           17.3,
                                                                           17.7,
                                                                           18.0,
                                                                           18.3,
                                                                           18.7,
                                                                           19.0,
                                                                           19.3,
                                                                           19.6,
                                                                           20.0,
                                                                           20.3,
                                                                           20.6,
                                                                           20.9,
                                                                           21.3,
                                                                           21.6,
                                                                           22.0,
                                                                           22.3,
                                                                           22.7,
                                                                           23.0,
                                                                           23.4,
                                                                           23.7,
                                                                           24.1,
                                                                           24.5,
                                                                           24.8,
                                                                           25.2,
                                                                           25.5,
                                                                           25.9,
                                                                           26.3,
                                                                           26.6,
                                                                           27.0,
                                                                           27.4,
                                                                           27.7,
                                                                           28.1,
                                                                           28.5,
                                                                           28.8,
                                                                           29.2,
                                                                           29.5
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle'
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // Berat
                                                                      data: BBsection,

                                                                      pointStart: BBsection,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });

                                                  {{-- ! TINGGI BADAN SECTION --}}
                                                  Highcharts.chart(
                                                       'chartKMS_tb_u_perempuan', {
                                                            chart: {
                                                                 type: 'line'
                                                            },
                                                            title: {
                                                                 text: 'Tinggi Badan menurut Umur (Perempuan)'
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
                                                                      data: [
                                                                           43.6,
                                                                           47.8,
                                                                           51.0,
                                                                           53.5,
                                                                           55.6,
                                                                           57.4,
                                                                           58.9,
                                                                           60.3,
                                                                           61.7,
                                                                           62.9,
                                                                           64.1,
                                                                           65.2,
                                                                           66.3,
                                                                           67.3,
                                                                           68.3,
                                                                           69.3,
                                                                           70.2,
                                                                           71.1,
                                                                           72.0,
                                                                           72.8,
                                                                           73.7,
                                                                           74.5,
                                                                           75.2,
                                                                           76.0,
                                                                           76.7,
                                                                           76.0,
                                                                           76.8,
                                                                           77.5,
                                                                           78.1,
                                                                           78.8,
                                                                           79.5,
                                                                           80.1,
                                                                           80.7,
                                                                           81.3,
                                                                           81.9,
                                                                           82.5,
                                                                           83.1,
                                                                           83.6,
                                                                           84.2,
                                                                           84.7,
                                                                           85.3,
                                                                           85.8,
                                                                           86.3,
                                                                           86.8,
                                                                           87.4,
                                                                           87.9,
                                                                           88.4,
                                                                           88.9,
                                                                           89.3,
                                                                           89.8,
                                                                           90.3,
                                                                           90.7,
                                                                           91.2,
                                                                           91.7,
                                                                           92.1,
                                                                           92.6,
                                                                           93.0,
                                                                           93.4,
                                                                           93.9,
                                                                           94.3,
                                                                           94.7,
                                                                           95.2
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '-2 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#58D68D',
                                                                      data: [
                                                                           45.4,
                                                                           49.8,
                                                                           53.0,
                                                                           55.6,
                                                                           57.8,
                                                                           59.6,
                                                                           61.2,
                                                                           62.7,
                                                                           64.0,
                                                                           65.3,
                                                                           66.5,
                                                                           67.7,
                                                                           68.9,
                                                                           70.0,
                                                                           71.0,
                                                                           72.0,
                                                                           73.0,
                                                                           74.0,
                                                                           74.9,
                                                                           75.8,
                                                                           76.7,
                                                                           77.5,
                                                                           78.4,
                                                                           79.2,
                                                                           80.0,
                                                                           79.3,
                                                                           80.0,
                                                                           80.8,
                                                                           81.5,
                                                                           82.2,
                                                                           82.9,
                                                                           83.6,
                                                                           84.3,
                                                                           84.9,
                                                                           85.6,
                                                                           86.2,
                                                                           86.8,
                                                                           87.4,
                                                                           88.0,
                                                                           88.6,
                                                                           89.2,
                                                                           89.8,
                                                                           90.4,
                                                                           90.9,
                                                                           91.5,
                                                                           92.0,
                                                                           92.5,
                                                                           93.1,
                                                                           93.6,
                                                                           94.1,
                                                                           94.6,
                                                                           95.1,
                                                                           95.6,
                                                                           96.1,
                                                                           96.6,
                                                                           97.1,
                                                                           97.6,
                                                                           98.1,
                                                                           98.5,
                                                                           99.0,
                                                                           99.5,
                                                                           99.9
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           47.3,
                                                                           51.7,
                                                                           55.0,
                                                                           57.7,
                                                                           59.9,
                                                                           61.8,
                                                                           63.5,
                                                                           65.0,
                                                                           66.4,
                                                                           67.7,
                                                                           69.0,
                                                                           70.3,
                                                                           71.4,
                                                                           72.6,
                                                                           73.7,
                                                                           74.8,
                                                                           75.8,
                                                                           76.8,
                                                                           77.8,
                                                                           78.8,
                                                                           79.7,
                                                                           80.6,
                                                                           81.5,
                                                                           82.3,
                                                                           83.2,
                                                                           82.5,
                                                                           83.3,
                                                                           84.1,
                                                                           84.9,
                                                                           85.7,
                                                                           86.4,
                                                                           87.1,
                                                                           87.9,
                                                                           88.6,
                                                                           89.3,
                                                                           89.9,
                                                                           90.6,
                                                                           91.2,
                                                                           91.9,
                                                                           92.5,
                                                                           93.1,
                                                                           93.8,
                                                                           94.4,
                                                                           95.0,
                                                                           95.6,
                                                                           96.2,
                                                                           96.7,
                                                                           97.3,
                                                                           97.9,
                                                                           98.4,
                                                                           99.0,
                                                                           99.5,
                                                                           100.1,
                                                                           100.6,
                                                                           101.1,
                                                                           101.6,
                                                                           102.2,
                                                                           102.7,
                                                                           103.2,
                                                                           103.7,
                                                                           104.2,
                                                                           104.7
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#229954 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           49.1,
                                                                           53.7,
                                                                           57.1,
                                                                           59.8,
                                                                           62.1,
                                                                           64.0,
                                                                           65.7,
                                                                           67.3,
                                                                           68.7,
                                                                           70.1,
                                                                           71.5,
                                                                           72.8,
                                                                           74.0,
                                                                           75.2,
                                                                           76.4,
                                                                           77.5,
                                                                           78.6,
                                                                           79.7,
                                                                           80.7,
                                                                           81.7,
                                                                           82.7,
                                                                           83.7,
                                                                           84.6,
                                                                           85.5,
                                                                           86.4,
                                                                           85.7,
                                                                           86.6,
                                                                           87.4,
                                                                           88.3,
                                                                           89.1,
                                                                           89.9,
                                                                           90.7,
                                                                           91.4,
                                                                           92.2,
                                                                           92.9,
                                                                           93.6,
                                                                           94.4,
                                                                           95.1,
                                                                           95.7,
                                                                           96.4,
                                                                           97.1,
                                                                           97.7,
                                                                           98.4,
                                                                           99.0,
                                                                           99.7,
                                                                           100.3,
                                                                           100.9,
                                                                           101.5,
                                                                           102.1,
                                                                           102.7,
                                                                           103.3,
                                                                           103.9,
                                                                           104.5,
                                                                           105.0,
                                                                           105.6,
                                                                           106.2,
                                                                           106.7,
                                                                           107.3,
                                                                           107.8,
                                                                           108.4,
                                                                           108.9,
                                                                           109.4
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           51.0,
                                                                           55.6,
                                                                           59.1,
                                                                           61.9,
                                                                           64.3,
                                                                           66.2,
                                                                           68.0,
                                                                           69.6,
                                                                           71.1,
                                                                           72.6,
                                                                           73.9,
                                                                           75.3,
                                                                           76.6,
                                                                           77.8,
                                                                           79.1,
                                                                           80.2,
                                                                           81.4,
                                                                           82.5,
                                                                           83.6,
                                                                           84.7,
                                                                           85.7,
                                                                           86.7,
                                                                           87.7,
                                                                           88.7,
                                                                           89.6,
                                                                           88.9,
                                                                           89.9,
                                                                           90.8,
                                                                           91.7,
                                                                           92.5,
                                                                           93.4,
                                                                           94.2,
                                                                           95.0,
                                                                           95.8,
                                                                           96.6,
                                                                           97.4,
                                                                           98.1,
                                                                           98.9,
                                                                           99.6,
                                                                           100.3,
                                                                           101.0,
                                                                           101.7,
                                                                           102.4,
                                                                           103.1,
                                                                           103.8,
                                                                           104.5,
                                                                           105.1,
                                                                           105.8,
                                                                           106.4,
                                                                           107.0,
                                                                           107.7,
                                                                           108.3,
                                                                           108.9,
                                                                           109.5,
                                                                           110.1,
                                                                           110.7,
                                                                           111.3,
                                                                           111.9,
                                                                           112.5,
                                                                           113.0,
                                                                           113.6,
                                                                           114.2
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#58D68D',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           52.9,
                                                                           57.6,
                                                                           61.1,
                                                                           64.0,
                                                                           66.4,
                                                                           68.5,
                                                                           70.3,
                                                                           71.9,
                                                                           73.5,
                                                                           75.0,
                                                                           76.4,
                                                                           77.8,
                                                                           79.2,
                                                                           80.5,
                                                                           81.7,
                                                                           83.0,
                                                                           84.2,
                                                                           85.4,
                                                                           86.5,
                                                                           87.6,
                                                                           88.7,
                                                                           89.8,
                                                                           90.8,
                                                                           91.9,
                                                                           92.9,
                                                                           92.2,
                                                                           93.1,
                                                                           94.1,
                                                                           95.0,
                                                                           96.0,
                                                                           96.9,
                                                                           97.7,
                                                                           98.6,
                                                                           99.4,
                                                                           100.3,
                                                                           101.1,
                                                                           101.9,
                                                                           102.7,
                                                                           103.4,
                                                                           104.2,
                                                                           105.0,
                                                                           105.7,
                                                                           106.4,
                                                                           107.2,
                                                                           107.9,
                                                                           108.6,
                                                                           109.3,
                                                                           110.0,
                                                                           110.7,
                                                                           111.3,
                                                                           112.0,
                                                                           112.7,
                                                                           113.3,
                                                                           114.0,
                                                                           114.6,
                                                                           115.2,
                                                                           115.9,
                                                                           116.5,
                                                                           117.1,
                                                                           117.7,
                                                                           118.3,
                                                                           118.9
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#F4D03F',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           54.7,
                                                                           59.5,
                                                                           63.2,
                                                                           66.1,
                                                                           68.6,
                                                                           70.7,
                                                                           72.5,
                                                                           74.2,
                                                                           75.8,
                                                                           77.4,
                                                                           78.9,
                                                                           80.3,
                                                                           81.7,
                                                                           83.1,
                                                                           84.4,
                                                                           85.7,
                                                                           87.0,
                                                                           88.2,
                                                                           89.4,
                                                                           90.6,
                                                                           91.7,
                                                                           92.9,
                                                                           94.0,
                                                                           95.0,
                                                                           96.1,
                                                                           95.4,
                                                                           96.4,
                                                                           97.4,
                                                                           98.4,
                                                                           99.4,
                                                                           100.3,
                                                                           101.3,
                                                                           102.2,
                                                                           103.1,
                                                                           103.9,
                                                                           104.8,
                                                                           105.6,
                                                                           106.5,
                                                                           107.3,
                                                                           108.1,
                                                                           108.9,
                                                                           109.7,
                                                                           110.5,
                                                                           111.2,
                                                                           112.0,
                                                                           112.7,
                                                                           113.5,
                                                                           114.2,
                                                                           114.9,
                                                                           115.7,
                                                                           116.4,
                                                                           117.1,
                                                                           117.7,
                                                                           118.4,
                                                                           119.1,
                                                                           119.8,
                                                                           120.4,
                                                                           121.1,
                                                                           121.8,
                                                                           122.4,
                                                                           123.1,
                                                                           123.7
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle',
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // TINGGI BADAN
                                                                      data: TBsection,
                                                                      // UMUR BULAN
                                                                      pointStart: TBsection,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });

                                                  {{-- ! BERAT BADAN TINGGI BADAN SECTION --}}
                                                  Highcharts.chart(
                                                       'chartKMS_bb_pb_perempuan_0_24', {
                                                            chart: {
                                                                 type: 'line'
                                                            },
                                                            title: {
                                                                 text: 'Berat Badan menurut Panjang Badan (Perempuan Umur 0 - 24 Bulan)'
                                                            },
                                                            subtitle: {
                                                                 text: 'Source: Kartu Menuju Sehat Online (KMS)'
                                                            },
                                                            xAxis: {
                                                                 categories: []
                                                            },
                                                            tooltip: {
                                                                 headerFormat: 'Berat: {point.y:.1f} Kg<br>',
                                                                 pointFormat: 'Panjang: {point.x} Cm<br>',
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
                                                                      text: 'Panjang Badan (Cm)'
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
                                                                      color: '#20262E',
                                                                      data: [
                                                                           1.9,
                                                                           2.0,
                                                                           2.0,
                                                                           2.1,
                                                                           2.2,
                                                                           2.2,
                                                                           2.3,
                                                                           2.4,
                                                                           2.4,
                                                                           2.5,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.1,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.6,
                                                                           4.7,
                                                                           4.8,
                                                                           4.9,
                                                                           5.0,
                                                                           5.1,
                                                                           5.2,
                                                                           5.3,
                                                                           5.4,
                                                                           5.5,
                                                                           5.5,
                                                                           5.6,
                                                                           5.7,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-2 SD ',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#DF2E38',
                                                                      data: [
                                                                           2.1,
                                                                           2.1,
                                                                           2.2,
                                                                           2.3,
                                                                           2.4,
                                                                           2.4,
                                                                           2.5,
                                                                           2.6,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.1,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.6,
                                                                           4.7,
                                                                           4.8,
                                                                           4.9,
                                                                           5.0,
                                                                           5.1,
                                                                           5.2,
                                                                           5.3,
                                                                           5.4,
                                                                           5.5,
                                                                           5.6,
                                                                           5.7,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           2.3,
                                                                           2.3,
                                                                           2.4,
                                                                           2.5,
                                                                           2.6,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.6,
                                                                           4.8,
                                                                           4.9,
                                                                           5.0,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.5,
                                                                           5.6,
                                                                           5.7,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#7AA874 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           2.5,
                                                                           2.5,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.7,
                                                                           4.8,
                                                                           5.0,
                                                                           5.1,
                                                                           5.2,
                                                                           5.4,
                                                                           5.5,
                                                                           5.6,
                                                                           5.7,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.9,
                                                                           17.1,
                                                                           17.2,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           18.0,
                                                                           18.1,
                                                                           18.3
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.6,
                                                                           4.7,
                                                                           4.8,
                                                                           5.0,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.6,
                                                                           5.7,
                                                                           5.9,
                                                                           6.0,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.6,
                                                                           6.7,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.8,
                                                                           17.0,
                                                                           17.1,
                                                                           17.3,
                                                                           17.5,
                                                                           17.6,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           20.0,
                                                                           20.2
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#DF2E38',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.6,
                                                                           4.7,
                                                                           4.9,
                                                                           5.0,
                                                                           5.2,
                                                                           5.3,
                                                                           5.5,
                                                                           5.7,
                                                                           5.8,
                                                                           6.0,
                                                                           6.1,
                                                                           6.3,
                                                                           6.5,
                                                                           6.6,
                                                                           6.8,
                                                                           6.9,
                                                                           7.1,
                                                                           7.3,
                                                                           7.4,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           8.0,
                                                                           8.1,
                                                                           8.3,
                                                                           8.4,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.5,
                                                                           13.6,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.1,
                                                                           17.3,
                                                                           17.5,
                                                                           17.6,
                                                                           17.8,
                                                                           18.0,
                                                                           18.1,
                                                                           18.3,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.1,
                                                                           21.3,
                                                                           21.6,
                                                                           21.8,
                                                                           22.0,
                                                                           22.3
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#20262E',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           4.0,
                                                                           4.1,
                                                                           4.2,
                                                                           4.3,
                                                                           4.5,
                                                                           4.6,
                                                                           4.8,
                                                                           4.9,
                                                                           5.1,
                                                                           5.2,
                                                                           5.4,
                                                                           5.5,
                                                                           5.7,
                                                                           5.9,
                                                                           6.1,
                                                                           6.3,
                                                                           6.4,
                                                                           6.6,
                                                                           6.8,
                                                                           7.0,
                                                                           7.1,
                                                                           7.3,
                                                                           7.5,
                                                                           7.7,
                                                                           7.8,
                                                                           8.0,
                                                                           8.2,
                                                                           8.4,
                                                                           8.5,
                                                                           8.7,
                                                                           8.8,
                                                                           9.0,
                                                                           9.1,
                                                                           9.3,
                                                                           9.5,
                                                                           9.6,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.2,
                                                                           10.3,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.9,
                                                                           17.0,
                                                                           17.2,
                                                                           17.4,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.6,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.3,
                                                                           19.5,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4,
                                                                           20.6,
                                                                           20.8,
                                                                           21.0,
                                                                           21.3,
                                                                           21.5,
                                                                           21.7,
                                                                           21.9,
                                                                           22.2,
                                                                           22.4,
                                                                           22.6,
                                                                           22.9,
                                                                           23.1,
                                                                           23.4,
                                                                           23.6,
                                                                           23.9,
                                                                           24.2,
                                                                           24.4,
                                                                           24.7
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle'
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // Berat
                                                                      data: BB_PBsection_0_24,

                                                                      pointStart: BB_PBsection_0_24,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });
                                                  Highcharts.chart(
                                                       'chartKMS_bb_pb_perempuan_24_60', {
                                                            chart: {
                                                                 type: 'line'
                                                            },
                                                            title: {
                                                                 text: 'Berat Badan menurut Panjang Badan (Perempuan Umur 24 - 60 Bulan)'
                                                            },
                                                            subtitle: {
                                                                 text: 'Source: Kartu Menuju Sehat Online (KMS)'
                                                            },
                                                            xAxis: {
                                                                 categories: []
                                                            },
                                                            tooltip: {
                                                                 headerFormat: 'Berat: {point.y:.1f} Kg<br>',
                                                                 pointFormat: 'Panjang: {point.x} Cm<br>',
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
                                                                      text: 'Panjang Badan (Cm)'
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
                                                                      color: '#20262E',
                                                                      data: [
                                                                           5.6,
                                                                           5.7,
                                                                           5.8,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1,
                                                                           17.3
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-2 SD ',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#DF2E38',
                                                                      data: [
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.2,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.6,
                                                                           16.8,
                                                                           17.0,
                                                                           17.1,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           19.9,
                                                                           20.1,
                                                                           20.3,
                                                                           20.5,
                                                                           20.7
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#7AA874 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           7.2,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.6,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.1,
                                                                           21.3,
                                                                           21.5,
                                                                           21.7,
                                                                           22.0,
                                                                           22.2,
                                                                           22.4,
                                                                           22.6,
                                                                           22.8
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           7.9,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.9,
                                                                           13.0,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.9,
                                                                           17.0,
                                                                           17.2,
                                                                           17.4,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.1,
                                                                           18.2,
                                                                           18.4,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.3,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.2,
                                                                           21.4,
                                                                           21.6,
                                                                           21.8,
                                                                           22.1,
                                                                           22.3,
                                                                           22.6,
                                                                           22.8,
                                                                           23.0,
                                                                           23.3,
                                                                           23.5,
                                                                           23.8,
                                                                           24.0,
                                                                           24.2,
                                                                           24.5,
                                                                           24.7,
                                                                           25.0,
                                                                           25.2
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#DF2E38',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           8.7,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.6,
                                                                           16.7,
                                                                           16.9,
                                                                           17.0,
                                                                           17.2,
                                                                           17.4,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.6,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           19.9,
                                                                           20.1,
                                                                           20.3,
                                                                           20.5,
                                                                           20.8,
                                                                           21.0,
                                                                           21.2,
                                                                           21.4,
                                                                           21.7,
                                                                           21.9,
                                                                           22.1,
                                                                           22.4,
                                                                           22.6,
                                                                           22.9,
                                                                           23.1,
                                                                           23.4,
                                                                           23.6,
                                                                           23.9,
                                                                           24.2,
                                                                           24.4,
                                                                           24.7,
                                                                           25.0,
                                                                           25.2,
                                                                           25.5,
                                                                           25.8,
                                                                           26.1,
                                                                           26.3,
                                                                           26.6,
                                                                           26.9,
                                                                           27.2,
                                                                           27.4,
                                                                           27.7,
                                                                           28.0
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#20262E',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           9.7,
                                                                           9.8,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.4,
                                                                           10.5,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.6,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1,
                                                                           17.3,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           17.9,
                                                                           18.1,
                                                                           18.3,
                                                                           18.5,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           19.9,
                                                                           20.1,
                                                                           20.3,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.1,
                                                                           21.4,
                                                                           21.6,
                                                                           21.8,
                                                                           22.0,
                                                                           22.3,
                                                                           22.5,
                                                                           22.7,
                                                                           23.0,
                                                                           23.2,
                                                                           23.5,
                                                                           23.7,
                                                                           24.0,
                                                                           24.3,
                                                                           24.5,
                                                                           24.8,
                                                                           25.1,
                                                                           25.4,
                                                                           25.7,
                                                                           26.0,
                                                                           26.2,
                                                                           26.5,
                                                                           26.8,
                                                                           27.1,
                                                                           27.4,
                                                                           27.8,
                                                                           28.1,
                                                                           28.4,
                                                                           28.7,
                                                                           29.0,
                                                                           29.3,
                                                                           29.6,
                                                                           29.9,
                                                                           30.3,
                                                                           30.6,
                                                                           30.9,
                                                                           31.2
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle'
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // Berat
                                                                      data: BB_PBsection_24_60,

                                                                      pointStart: BB_PBsection_24_60,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });

                                             } else if (data
                                                  .jenis_kelamin === "L") {

                                                  {{-- ! BERAT BADAN SECTION --}}
                                                  Highcharts.chart(
                                                       'chartKMS_bb_u_laki', {
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
                                                                      data: [
                                                                           2.1,
                                                                           2.9,
                                                                           3.8,
                                                                           4.4,
                                                                           4.9,
                                                                           5.3,
                                                                           5.7,
                                                                           5.9,
                                                                           6.2,
                                                                           6.4,
                                                                           6.6,
                                                                           6.8,
                                                                           6.9,
                                                                           7.1,
                                                                           7.2,
                                                                           7.4,
                                                                           7.5,
                                                                           7.7,
                                                                           7.8,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-2 SD ',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#58D68D',
                                                                      data: [
                                                                           2.5,
                                                                           3.4,
                                                                           4.3,
                                                                           5.0,
                                                                           5.6,
                                                                           6.0,
                                                                           6.4,
                                                                           6.7,
                                                                           6.9,
                                                                           7.1,
                                                                           7.4,
                                                                           7.6,
                                                                           7.7,
                                                                           7.9,
                                                                           8.1,
                                                                           8.3,
                                                                           8.4,
                                                                           8.6,
                                                                           8.8,
                                                                           8.9,
                                                                           9.1,
                                                                           9.2,
                                                                           9.4,
                                                                           9.5,
                                                                           9.7,
                                                                           9.8,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.4,
                                                                           10.5,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           2.9,
                                                                           3.9,
                                                                           4.9,
                                                                           5.7,
                                                                           6.2,
                                                                           6.7,
                                                                           7.1,
                                                                           7.4,
                                                                           7.7,
                                                                           8.0,
                                                                           8.2,
                                                                           8.4,
                                                                           8.6,
                                                                           8.8,
                                                                           9.0,
                                                                           9.2,
                                                                           9.4,
                                                                           9.6,
                                                                           9.8,
                                                                           10.0,
                                                                           10.1,
                                                                           10.3,
                                                                           10.5,
                                                                           10.7,
                                                                           10.8,
                                                                           11.0,
                                                                           11.2,
                                                                           11.3,
                                                                           11.5,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           15.0,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.0
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#229954 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           3.3,
                                                                           4.5,
                                                                           5.6,
                                                                           6.4,
                                                                           7.0,
                                                                           7.5,
                                                                           7.9,
                                                                           8.3,
                                                                           8.6,
                                                                           8.9,
                                                                           9.2,
                                                                           9.4,
                                                                           9.6,
                                                                           9.9,
                                                                           10.1,
                                                                           10.3,
                                                                           10.5,
                                                                           10.7,
                                                                           10.9,
                                                                           11.1,
                                                                           11.3,
                                                                           11.5,
                                                                           11.8,
                                                                           12.0,
                                                                           12.2,
                                                                           12.4,
                                                                           12.5,
                                                                           12.7,
                                                                           12.9,
                                                                           13.1,
                                                                           13.3,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.2,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.3
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           3.9,
                                                                           5.1,
                                                                           6.3,
                                                                           7.2,
                                                                           7.8,
                                                                           8.4,
                                                                           8.8,
                                                                           9.2,
                                                                           9.6,
                                                                           9.9,
                                                                           10.2,
                                                                           10.5,
                                                                           10.8,
                                                                           11.0,
                                                                           11.3,
                                                                           11.5,
                                                                           11.7,
                                                                           12.0,
                                                                           12.2,
                                                                           12.5,
                                                                           12.7,
                                                                           12.9,
                                                                           13.2,
                                                                           13.4,
                                                                           13.6,
                                                                           13.9,
                                                                           14.1,
                                                                           14.3,
                                                                           14.5,
                                                                           14.8,
                                                                           15.0,
                                                                           15.2,
                                                                           15.4,
                                                                           15.6,
                                                                           15.8,
                                                                           16.0,
                                                                           16.2,
                                                                           16.4,
                                                                           16.6,
                                                                           16.8,
                                                                           17.0,
                                                                           17.2,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4,
                                                                           20.6,
                                                                           20.8,
                                                                           21.0
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#58D68D',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           4.4,
                                                                           5.8,
                                                                           7.1,
                                                                           8.0,
                                                                           8.7,
                                                                           9.3,
                                                                           9.8,
                                                                           10.3,
                                                                           10.7,
                                                                           11.0,
                                                                           11.4,
                                                                           11.7,
                                                                           12.0,
                                                                           12.3,
                                                                           12.6,
                                                                           12.8,
                                                                           13.1,
                                                                           13.4,
                                                                           13.7,
                                                                           13.9,
                                                                           14.2,
                                                                           14.5,
                                                                           14.7,
                                                                           15.0,
                                                                           15.3,
                                                                           15.5,
                                                                           15.8,
                                                                           16.1,
                                                                           16.3,
                                                                           16.6,
                                                                           16.9,
                                                                           17.1,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           18.1,
                                                                           18.3,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           20.0,
                                                                           20.2,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.2,
                                                                           21.4,
                                                                           21.7,
                                                                           21.9,
                                                                           22.2,
                                                                           22.4,
                                                                           22.7,
                                                                           22.9,
                                                                           23.2,
                                                                           23.4,
                                                                           23.7,
                                                                           23.9,
                                                                           24.2
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#F4D03F',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           5.0,
                                                                           6.6,
                                                                           8.0,
                                                                           9.0,
                                                                           9.7,
                                                                           10.4,
                                                                           10.9,
                                                                           11.4,
                                                                           11.9,
                                                                           12.3,
                                                                           12.7,
                                                                           13.0,
                                                                           13.3,
                                                                           13.7,
                                                                           14.0,
                                                                           14.3,
                                                                           14.6,
                                                                           14.9,
                                                                           15.3,
                                                                           15.6,
                                                                           15.9,
                                                                           16.2,
                                                                           16.5,
                                                                           16.8,
                                                                           17.1,
                                                                           17.5,
                                                                           17.8,
                                                                           18.1,
                                                                           18.4,
                                                                           18.7,
                                                                           19.0,
                                                                           19.3,
                                                                           19.6,
                                                                           19.9,
                                                                           20.2,
                                                                           20.4,
                                                                           20.7,
                                                                           21.0,
                                                                           21.3,
                                                                           21.6,
                                                                           21.9,
                                                                           22.1,
                                                                           22.4,
                                                                           22.7,
                                                                           23.0,
                                                                           23.3,
                                                                           23.6,
                                                                           23.9,
                                                                           24.2,
                                                                           24.5,
                                                                           24.8,
                                                                           25.1,
                                                                           25.4,
                                                                           25.7,
                                                                           26.0,
                                                                           26.3,
                                                                           26.6,
                                                                           26.9,
                                                                           27.2,
                                                                           27.6,
                                                                           27.9
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle'
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // Berat
                                                                      data: BBsection,
                                                                      // UMUR
                                                                      pointStart: BBsection,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });

                                                  {{-- ! TINGGI BADAN SECTION --}}
                                                  Highcharts.chart(
                                                       'chartKMS_tb_u_laki', {
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
                                                                      data: [
                                                                           44.2,
                                                                           48.9,
                                                                           52.4,
                                                                           55.3,
                                                                           57.6,
                                                                           59.6,
                                                                           61.2,
                                                                           62.7,
                                                                           64.0,
                                                                           65.2,
                                                                           66.4,
                                                                           67.6,
                                                                           68.6,
                                                                           69.6,
                                                                           70.6,
                                                                           71.6,
                                                                           72.5,
                                                                           73.3,
                                                                           74.2,
                                                                           75.0,
                                                                           75.8,
                                                                           76.5,
                                                                           77.2,
                                                                           78.0,
                                                                           78.7,
                                                                           78.0,
                                                                           78.6,
                                                                           79.3,
                                                                           79.9,
                                                                           80.5,
                                                                           81.1,
                                                                           81.7,
                                                                           82.3,
                                                                           82.8,
                                                                           83.4,
                                                                           83.9,
                                                                           84.4,
                                                                           85.0,
                                                                           85.5,
                                                                           86.0,
                                                                           86.5,
                                                                           87.0,
                                                                           87.5,
                                                                           88.0,
                                                                           88.4,
                                                                           88.9,
                                                                           89.4,
                                                                           89.8,
                                                                           90.3,
                                                                           90.7,
                                                                           91.2,
                                                                           91.6,
                                                                           92.1,
                                                                           92.5,
                                                                           93.0,
                                                                           93.4,
                                                                           93.9,
                                                                           94.3,
                                                                           94.7,
                                                                           95.2,
                                                                           95.6,
                                                                           96.1,
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '-2 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#58D68D',
                                                                      data: [
                                                                           46.1,
                                                                           50.8,
                                                                           54.4,
                                                                           57.3,
                                                                           59.7,
                                                                           61.7,
                                                                           63.3,
                                                                           64.8,
                                                                           66.2,
                                                                           67.5,
                                                                           68.7,
                                                                           69.9,
                                                                           71.0,
                                                                           72.1,
                                                                           73.1,
                                                                           74.1,
                                                                           75.0,
                                                                           76.0,
                                                                           76.9,
                                                                           77.7,
                                                                           78.6,
                                                                           79.4,
                                                                           80.2,
                                                                           81.0,
                                                                           81.7,
                                                                           81.0,
                                                                           81.7,
                                                                           82.5,
                                                                           83.1,
                                                                           83.8,
                                                                           84.5,
                                                                           85.1,
                                                                           85.7,
                                                                           86.4,
                                                                           86.9,
                                                                           87.5,
                                                                           88.1,
                                                                           88.7,
                                                                           89.2,
                                                                           89.8,
                                                                           90.3,
                                                                           90.9,
                                                                           91.4,
                                                                           91.9,
                                                                           92.4,
                                                                           93.0,
                                                                           93.5,
                                                                           94.0,
                                                                           94.4,
                                                                           94.9,
                                                                           95.4,
                                                                           95.9,
                                                                           96.4,
                                                                           96.9,
                                                                           97.4,
                                                                           97.8,
                                                                           98.3,
                                                                           98.8,
                                                                           99.3,
                                                                           99.7,
                                                                           100.2,
                                                                           100.7,
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           48.0,
                                                                           52.8,
                                                                           56.4,
                                                                           59.4,
                                                                           61.8,
                                                                           63.8,
                                                                           65.5,
                                                                           67.0,
                                                                           68.4,
                                                                           69.7,
                                                                           71.0,
                                                                           72.2,
                                                                           73.4,
                                                                           74.5,
                                                                           75.6,
                                                                           76.6,
                                                                           77.6,
                                                                           78.6,
                                                                           79.6,
                                                                           80.5,
                                                                           81.4,
                                                                           82.3,
                                                                           83.1,
                                                                           83.9,
                                                                           84.8,
                                                                           84.1,
                                                                           84.9,
                                                                           85.6,
                                                                           86.4,
                                                                           87.1,
                                                                           87.8,
                                                                           88.5,
                                                                           89.2,
                                                                           89.9,
                                                                           90.5,
                                                                           91.1,
                                                                           91.8,
                                                                           92.4,
                                                                           93.0,
                                                                           93.6,
                                                                           94.2,
                                                                           94.7,
                                                                           95.3,
                                                                           95.9,
                                                                           96.4,
                                                                           97.0,
                                                                           97.5,
                                                                           98.1,
                                                                           98.6,
                                                                           99.1,
                                                                           99.7,
                                                                           100.2,
                                                                           100.7,
                                                                           101.2,
                                                                           101.7,
                                                                           102.3,
                                                                           102.8,
                                                                           103.3,
                                                                           103.8,
                                                                           104.3,
                                                                           104.8,
                                                                           105.3,
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#229954 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           49.9,
                                                                           54.7,
                                                                           58.4,
                                                                           61.4,
                                                                           63.9,
                                                                           65.9,
                                                                           67.6,
                                                                           69.2,
                                                                           70.6,
                                                                           72.0,
                                                                           73.3,
                                                                           74.5,
                                                                           75.7,
                                                                           76.9,
                                                                           78.0,
                                                                           79.1,
                                                                           80.2,
                                                                           81.2,
                                                                           82.3,
                                                                           83.2,
                                                                           84.2,
                                                                           85.1,
                                                                           86.0,
                                                                           86.9,
                                                                           87.8,
                                                                           87.1,
                                                                           88.0,
                                                                           88.8,
                                                                           89.6,
                                                                           90.4,
                                                                           91.2,
                                                                           91.9,
                                                                           92.7,
                                                                           93.4,
                                                                           94.1,
                                                                           94.8,
                                                                           95.4,
                                                                           96.1,
                                                                           96.7,
                                                                           97.4,
                                                                           98.0,
                                                                           98.6,
                                                                           99.2,
                                                                           99.9,
                                                                           100.4,
                                                                           101.0,
                                                                           101.6,
                                                                           102.2,
                                                                           102.8,
                                                                           103.3,
                                                                           103.9,
                                                                           104.4,
                                                                           105.0,
                                                                           105.6,
                                                                           106.1,
                                                                           106.7,
                                                                           107.2,
                                                                           107.8,
                                                                           108.3,
                                                                           108.9,
                                                                           109.4,
                                                                           110.0,
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#229954 ',
                                                                      data: [
                                                                           51.8,
                                                                           56.7,
                                                                           60.4,
                                                                           63.5,
                                                                           66.0,
                                                                           68.0,
                                                                           69.8,
                                                                           71.3,
                                                                           72.8,
                                                                           74.2,
                                                                           75.6,
                                                                           76.9,
                                                                           78.1,
                                                                           79.3,
                                                                           80.5,
                                                                           81.7,
                                                                           82.8,
                                                                           83.9,
                                                                           85.0,
                                                                           86.0,
                                                                           87.0,
                                                                           88.0,
                                                                           89.0,
                                                                           89.9,
                                                                           90.9,
                                                                           90.2,
                                                                           91.1,
                                                                           92.0,
                                                                           92.9,
                                                                           93.7,
                                                                           94.5,
                                                                           95.3,
                                                                           96.1,
                                                                           96.9,
                                                                           97.6,
                                                                           98.4,
                                                                           99.1,
                                                                           99.8,
                                                                           100.5,
                                                                           101.2,
                                                                           101.8,
                                                                           102.5,
                                                                           103.2,
                                                                           103.8,
                                                                           104.5,
                                                                           105.1,
                                                                           105.7,
                                                                           106.3,
                                                                           106.9,
                                                                           107.5,
                                                                           108.1,
                                                                           108.7,
                                                                           109.3,
                                                                           109.9,
                                                                           110.5,
                                                                           111.1,
                                                                           111.7,
                                                                           112.3,
                                                                           112.8,
                                                                           113.4,
                                                                           114.0,
                                                                           114.6,
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#58D68D',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           53.7,
                                                                           58.6,
                                                                           62.4,
                                                                           65.5,
                                                                           68.0,
                                                                           70.1,
                                                                           71.9,
                                                                           73.5,
                                                                           75.0,
                                                                           76.5,
                                                                           77.9,
                                                                           79.2,
                                                                           80.5,
                                                                           81.8,
                                                                           83.0,
                                                                           84.2,
                                                                           85.4,
                                                                           86.5,
                                                                           87.7,
                                                                           88.8,
                                                                           89.8,
                                                                           90.9,
                                                                           91.9,
                                                                           92.9,
                                                                           93.9,
                                                                           93.2,
                                                                           94.2,
                                                                           95.2,
                                                                           96.1,
                                                                           97.0,
                                                                           97.9,
                                                                           98.7,
                                                                           99.6,
                                                                           100.4,
                                                                           101.2,
                                                                           102.0,
                                                                           102.7,
                                                                           103.5,
                                                                           104.2,
                                                                           105.0,
                                                                           105.7,
                                                                           106.4,
                                                                           107.1,
                                                                           107.8,
                                                                           108.5,
                                                                           109.1,
                                                                           109.8,
                                                                           110.4,
                                                                           111.1,
                                                                           111.7,
                                                                           112.4,
                                                                           113.0,
                                                                           113.6,
                                                                           114.2,
                                                                           114.9,
                                                                           115.5,
                                                                           116.1,
                                                                           116.7,
                                                                           117.4,
                                                                           118.0,
                                                                           118.6,
                                                                           119.2,
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#F4D03F',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           55.6,
                                                                           60.6,
                                                                           64.4,
                                                                           67.6,
                                                                           70.1,
                                                                           72.2,
                                                                           74.0,
                                                                           75.7,
                                                                           77.2,
                                                                           78.7,
                                                                           80.1,
                                                                           81.5,
                                                                           82.9,
                                                                           84.2,
                                                                           85.5,
                                                                           86.7,
                                                                           88.0,
                                                                           89.2,
                                                                           90.4,
                                                                           91.5,
                                                                           92.6,
                                                                           93.8,
                                                                           94.9,
                                                                           95.9,
                                                                           97.0,
                                                                           96.3,
                                                                           97.3,
                                                                           98.3,
                                                                           99.3,
                                                                           100.3,
                                                                           101.2,
                                                                           102.1,
                                                                           103.0,
                                                                           103.9,
                                                                           104.8,
                                                                           105.6,
                                                                           106.4,
                                                                           107.2,
                                                                           108.0,
                                                                           108.8,
                                                                           109.5,
                                                                           110.3,
                                                                           111.0,
                                                                           111.7,
                                                                           112.5,
                                                                           113.2,
                                                                           113.9,
                                                                           114.6,
                                                                           115.2,
                                                                           115.9,
                                                                           116.6,
                                                                           117.3,
                                                                           117.9,
                                                                           118.6,
                                                                           119.2,
                                                                           119.9,
                                                                           120.6,
                                                                           121.2,
                                                                           121.9,
                                                                           122.6,
                                                                           123.2,
                                                                           123.9,
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle',
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.3,

                                                                      // TINGGI BADAN
                                                                      data: TBsection,
                                                                      // UMUR BULAN
                                                                      pointStart: TBsection,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });

                                                  {{-- ! BERAT BADAN TINGGI BADAN SECTION --}}
                                                  Highcharts.chart(
                                                       'chartKMS_bb_pb_laki_0_24', {
                                                            chart: {
                                                                 type: 'line'
                                                            },
                                                            title: {
                                                                 text: 'Berat Badan menurut Panjang Badan (Laki - laki Umur 0 - 24 Bulan)'
                                                            },
                                                            subtitle: {
                                                                 text: 'Source: Kartu Menuju Sehat Online (KMS)'
                                                            },
                                                            xAxis: {
                                                                 categories: []
                                                            },
                                                            tooltip: {
                                                                 headerFormat: 'Berat: {point.y:.1f} Kg<br>',
                                                                 pointFormat: 'Panjang: {point.x} Cm<br>',
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
                                                                      text: 'Panjang Badan (Cm)'
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
                                                                      color: '#20262E',
                                                                      data: [
                                                                           1.9,
                                                                           1.9,
                                                                           2.0,
                                                                           2.1,
                                                                           2.1,
                                                                           2.2,
                                                                           2.3,
                                                                           2.3,
                                                                           2.4,
                                                                           2.5,
                                                                           2.6,
                                                                           2.7,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.1,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.6,
                                                                           4.7,
                                                                           4.8,
                                                                           4.9,
                                                                           5.0,
                                                                           5.1,
                                                                           5.2,
                                                                           5.3,
                                                                           5.4,
                                                                           5.5,
                                                                           5.6,
                                                                           5.7,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1,
                                                                           14.2
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-2 SD ',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#DF2E38',
                                                                      data: [
                                                                           2.0,
                                                                           2.1,
                                                                           2.2,
                                                                           2.3,
                                                                           2.3,
                                                                           2.4,
                                                                           2.5,
                                                                           2.6,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           4.0,
                                                                           4.1,
                                                                           4.2,
                                                                           4.3,
                                                                           4.5,
                                                                           4.6,
                                                                           4.7,
                                                                           4.8,
                                                                           5.0,
                                                                           5.1,
                                                                           5.2,
                                                                           5.3,
                                                                           5.4,
                                                                           5.6,
                                                                           5.7,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3,
                                                                           15.4
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           2.2,
                                                                           2.3,
                                                                           2.4,
                                                                           2.5,
                                                                           2.5,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.6,
                                                                           4.7,
                                                                           4.9,
                                                                           5.0,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.5,
                                                                           5.6,
                                                                           5.8,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.2,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.8
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#7AA874 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           2.4,
                                                                           2.5,
                                                                           2.6,
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           2.9,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.1,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.7,
                                                                           4.8,
                                                                           5.0,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.6,
                                                                           5.7,
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1,
                                                                           17.3,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           17.9,
                                                                           18.1,
                                                                           18.3
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           2.7,
                                                                           2.8,
                                                                           2.9,
                                                                           3.0,
                                                                           3.0,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.1,
                                                                           4.2,
                                                                           4.4,
                                                                           4.5,
                                                                           4.7,
                                                                           4.8,
                                                                           5.0,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.6,
                                                                           5.7,
                                                                           5.9,
                                                                           6.1,
                                                                           6.2,
                                                                           6.4,
                                                                           6.5,
                                                                           6.7,
                                                                           6.8,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.3,
                                                                           14.4,
                                                                           14.6,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.7,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1,
                                                                           17.3,
                                                                           17.4,
                                                                           17.6,
                                                                           17.8,
                                                                           17.9,
                                                                           18.1,
                                                                           18.3,
                                                                           18.5,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#DF2E38',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           3.0,
                                                                           3.1,
                                                                           3.1,
                                                                           3.2,
                                                                           3.3,
                                                                           3.4,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.1,
                                                                           4.2,
                                                                           4.4,
                                                                           4.5,
                                                                           4.6,
                                                                           4.8,
                                                                           4.9,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.6,
                                                                           5.8,
                                                                           5.9,
                                                                           6.1,
                                                                           6.3,
                                                                           6.4,
                                                                           6.6,
                                                                           6.8,
                                                                           7.0,
                                                                           7.1,
                                                                           7.3,
                                                                           7.4,
                                                                           7.6,
                                                                           7.7,
                                                                           7.9,
                                                                           8.0,
                                                                           8.2,
                                                                           8.3,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.9,
                                                                           9.0,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.5,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.1,
                                                                           17.3,
                                                                           17.5,
                                                                           17.6,
                                                                           17.8,
                                                                           18.0,
                                                                           18.1,
                                                                           18.3,
                                                                           18.5,
                                                                           18.7,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4,
                                                                           20.6,
                                                                           20.8,
                                                                           21.0,
                                                                           21.2,
                                                                           21.4,
                                                                           21.7,
                                                                           21.9
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#20262E',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           3.3,
                                                                           3.4,
                                                                           3.5,
                                                                           3.6,
                                                                           3.7,
                                                                           3.8,
                                                                           3.9,
                                                                           4.0,
                                                                           4.2,
                                                                           4.3,
                                                                           4.4,
                                                                           4.5,
                                                                           4.7,
                                                                           4.8,
                                                                           5.0,
                                                                           5.1,
                                                                           5.3,
                                                                           5.4,
                                                                           5.6,
                                                                           5.8,
                                                                           6.0,
                                                                           6.1,
                                                                           6.3,
                                                                           6.5,
                                                                           6.7,
                                                                           6.9,
                                                                           7.1,
                                                                           7.2,
                                                                           7.4,
                                                                           7.6,
                                                                           7.8,
                                                                           8.0,
                                                                           8.1,
                                                                           8.3,
                                                                           8.5,
                                                                           8.6,
                                                                           8.8,
                                                                           8.9,
                                                                           9.1,
                                                                           9.3,
                                                                           9.4,
                                                                           9.6,
                                                                           9.7,
                                                                           9.9,
                                                                           10.0,
                                                                           10.2,
                                                                           10.3,
                                                                           10.5,
                                                                           10.6,
                                                                           10.8,
                                                                           10.9,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.5,
                                                                           11.6,
                                                                           11.8,
                                                                           11.9,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.5,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.4,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.1,
                                                                           17.3,
                                                                           17.4,
                                                                           17.6,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4,
                                                                           20.6,
                                                                           20.8,
                                                                           21.0,
                                                                           21.2,
                                                                           21.5,
                                                                           21.7,
                                                                           21.9,
                                                                           22.1,
                                                                           22.4,
                                                                           22.6,
                                                                           22.8,
                                                                           23.1,
                                                                           23.3,
                                                                           23.6,
                                                                           23.8,
                                                                           24.1
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle'
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // Berat
                                                                      data: BB_PBsection_0_24,

                                                                      pointStart: BB_PBsection_0_24,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });
                                                  Highcharts.chart(
                                                       'chartKMS_bb_pb_laki_24_60', {
                                                            chart: {
                                                                 type: 'line'
                                                            },
                                                            title: {
                                                                 text: 'Berat Badan menurut Panjang Badan (Laki - laki Umur 24 - 60 Bulan)'
                                                            },
                                                            subtitle: {
                                                                 text: 'Source: Kartu Menuju Sehat Online (KMS)'
                                                            },
                                                            xAxis: {
                                                                 categories: []
                                                            },
                                                            tooltip: {
                                                                 headerFormat: 'Berat: {point.y:.1f} Kg<br>',
                                                                 pointFormat: 'Panjang: {point.x} Cm<br>',
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
                                                                      text: 'Panjang Badan (Cm)'
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
                                                                      color: '#20262E',
                                                                      data: [
                                                                           5.9,
                                                                           6.0,
                                                                           6.1,
                                                                           6.1,
                                                                           6.2,
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.0,
                                                                           15.2,
                                                                           15.3,
                                                                           15.4,
                                                                           15.6,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-2 SD ',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#DF2E38',
                                                                      data: [
                                                                           6.3,
                                                                           6.4,
                                                                           6.5,
                                                                           6.6,
                                                                           6.7,
                                                                           6.8,
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.8,
                                                                           16.9,
                                                                           17.1,
                                                                           17.2,
                                                                           17.4,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                           18.3,
                                                                           18.5,
                                                                           18.6
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '-1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           6.9,
                                                                           7.0,
                                                                           7.1,
                                                                           7.2,
                                                                           7.3,
                                                                           7.4,
                                                                           7.5,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.4,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.0,
                                                                           14.2,
                                                                           14.3,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.1,
                                                                           17.3,
                                                                           17.5,
                                                                           17.6,
                                                                           17.8,
                                                                           18.0,
                                                                           18.1,
                                                                           18.3,
                                                                           18.5,
                                                                           18.6,
                                                                           18.8,
                                                                           19.0,
                                                                           19.2,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           19.9,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: 'Median',
                                                                      name: '',
                                                                      color: '#7AA874 ',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           7.4,
                                                                           7.6,
                                                                           7.7,
                                                                           7.8,
                                                                           7.9,
                                                                           8.0,
                                                                           8.1,
                                                                           8.2,
                                                                           8.4,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           8.9,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.1,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.2,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.3,
                                                                           14.4,
                                                                           14.6,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.8,
                                                                           17.0,
                                                                           17.2,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.3,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.2,
                                                                           19.4,
                                                                           19.6,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4,
                                                                           20.6,
                                                                           20.8,
                                                                           21.0,
                                                                           21.2,
                                                                           21.4,
                                                                           21.6,
                                                                           21.8,
                                                                           22.0,
                                                                           22.2,
                                                                           22.4
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+1 SD',
                                                                      name: '',
                                                                      lineWidth: 1.5,
                                                                      color: '#F49D1A ',
                                                                      data: [
                                                                           8.1,
                                                                           8.2,
                                                                           8.3,
                                                                           8.5,
                                                                           8.6,
                                                                           8.7,
                                                                           8.8,
                                                                           9.0,
                                                                           9.1,
                                                                           9.2,
                                                                           9.3,
                                                                           9.5,
                                                                           9.6,
                                                                           9.7,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.5,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           10.9,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.5,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.5,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.1,
                                                                           13.2,
                                                                           13.3,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.9,
                                                                           14.0,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.7,
                                                                           14.9,
                                                                           15.0,
                                                                           15.1,
                                                                           15.3,
                                                                           15.4,
                                                                           15.5,
                                                                           15.7,
                                                                           15.8,
                                                                           15.9,
                                                                           16.1,
                                                                           16.2,
                                                                           16.4,
                                                                           16.5,
                                                                           16.7,
                                                                           16.9,
                                                                           17.0,
                                                                           17.2,
                                                                           17.3,
                                                                           17.5,
                                                                           17.7,
                                                                           17.8,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           19.8,
                                                                           20.0,
                                                                           20.2,
                                                                           20.4,
                                                                           20.7,
                                                                           20.9,
                                                                           21.1,
                                                                           21.3,
                                                                           21.5,
                                                                           21.7,
                                                                           21.9,
                                                                           22.1,
                                                                           22.4,
                                                                           22.6,
                                                                           22.8,
                                                                           23.0,
                                                                           23.3,
                                                                           23.5,
                                                                           23.7,
                                                                           23.9,
                                                                           24.1,
                                                                           24.4,
                                                                           24.6
                                                                      ]
                                                                 },
                                                                 {
                                                                      // name: '+2 SD',
                                                                      name: '',
                                                                      color: '#DF2E38',
                                                                      lineWidth: 1.5,
                                                                      data: [
                                                                           8.8,
                                                                           8.9,
                                                                           9.1,
                                                                           9.2,
                                                                           9.4,
                                                                           9.5,
                                                                           9.6,
                                                                           9.8,
                                                                           9.9,
                                                                           10.0,
                                                                           10.2,
                                                                           10.3,
                                                                           10.4,
                                                                           10.6,
                                                                           10.7,
                                                                           10.8,
                                                                           11.0,
                                                                           11.1,
                                                                           11.2,
                                                                           11.3,
                                                                           11.4,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           11.9,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.3,
                                                                           12.4,
                                                                           12.6,
                                                                           12.7,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.7,
                                                                           13.8,
                                                                           13.9,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.7,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.3,
                                                                           15.5,
                                                                           15.6,
                                                                           15.8,
                                                                           15.9,
                                                                           16.0,
                                                                           16.2,
                                                                           16.3,
                                                                           16.5,
                                                                           16.6,
                                                                           16.7,
                                                                           16.9,
                                                                           17.0,
                                                                           17.2,
                                                                           17.4,
                                                                           17.5,
                                                                           17.7,
                                                                           17.9,
                                                                           18.0,
                                                                           18.2,
                                                                           18.4,
                                                                           18.5,
                                                                           18.7,
                                                                           18.9,
                                                                           19.1,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           19.9,
                                                                           20.1,
                                                                           20.3,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.1,
                                                                           21.3,
                                                                           21.5,
                                                                           21.8,
                                                                           22.0,
                                                                           22.2,
                                                                           22.4,
                                                                           22.7,
                                                                           22.9,
                                                                           23.1,
                                                                           23.4,
                                                                           23.6,
                                                                           23.9,
                                                                           24.1,
                                                                           24.4,
                                                                           24.6,
                                                                           24.9,
                                                                           25.1,
                                                                           25.4,
                                                                           25.6,
                                                                           25.9,
                                                                           26.1,
                                                                           26.4,
                                                                           26.6,
                                                                           26.9,
                                                                           27.2
                                                                      ]

                                                                 },
                                                                 {
                                                                      // name: '+3 SD',
                                                                      name: '',
                                                                      color: '#20262E',
                                                                      lineWidth: 2,
                                                                      data: [
                                                                           9.6,
                                                                           9.8,
                                                                           9.9,
                                                                           10.1,
                                                                           10.2,
                                                                           10.4,
                                                                           10.5,
                                                                           10.7,
                                                                           10.8,
                                                                           11.0,
                                                                           11.1,
                                                                           11.3,
                                                                           11.4,
                                                                           11.6,
                                                                           11.7,
                                                                           11.8,
                                                                           12.0,
                                                                           12.1,
                                                                           12.2,
                                                                           12.4,
                                                                           12.5,
                                                                           12.6,
                                                                           12.8,
                                                                           12.9,
                                                                           13.0,
                                                                           13.1,
                                                                           13.3,
                                                                           13.4,
                                                                           13.5,
                                                                           13.6,
                                                                           13.7,
                                                                           13.8,
                                                                           14.0,
                                                                           14.1,
                                                                           14.2,
                                                                           14.4,
                                                                           14.5,
                                                                           14.6,
                                                                           14.8,
                                                                           14.9,
                                                                           15.1,
                                                                           15.2,
                                                                           15.4,
                                                                           15.5,
                                                                           15.7,
                                                                           15.8,
                                                                           16.0,
                                                                           16.1,
                                                                           16.3,
                                                                           16.4,
                                                                           16.6,
                                                                           16.7,
                                                                           16.9,
                                                                           17.0,
                                                                           17.2,
                                                                           17.3,
                                                                           17.5,
                                                                           17.6,
                                                                           17.8,
                                                                           17.9,
                                                                           18.1,
                                                                           18.3,
                                                                           18.4,
                                                                           18.6,
                                                                           18.8,
                                                                           18.9,
                                                                           19.1,
                                                                           19.3,
                                                                           19.5,
                                                                           19.7,
                                                                           19.9,
                                                                           20.1,
                                                                           20.3,
                                                                           20.5,
                                                                           20.7,
                                                                           20.9,
                                                                           21.1,
                                                                           21.3,
                                                                           21.6,
                                                                           21.8,
                                                                           22.0,
                                                                           22.2,
                                                                           22.5,
                                                                           22.7,
                                                                           22.9,
                                                                           23.2,
                                                                           23.4,
                                                                           23.7,
                                                                           23.9,
                                                                           24.2,
                                                                           24.4,
                                                                           24.7,
                                                                           25.0,
                                                                           25.2,
                                                                           25.5,
                                                                           25.8,
                                                                           26.0,
                                                                           26.3,
                                                                           26.6,
                                                                           26.9,
                                                                           27.2,
                                                                           27.5,
                                                                           27.8,
                                                                           28.0,
                                                                           28.3,
                                                                           28.6,
                                                                           28.9,
                                                                           29.2,
                                                                           29.5,
                                                                           29.8,
                                                                           30.1
                                                                      ]

                                                                 },
                                                                 {
                                                                      name: '',
                                                                      marker: {
                                                                           enabled: true,
                                                                           symbol: 'circle'
                                                                      },
                                                                      color: 'black',
                                                                      lineWidth: 0.2,

                                                                      // Berat
                                                                      data: BB_PBsection_24_60,

                                                                      pointStart: BB_PBsection_24_60,

                                                                      enableMouseTracking: true
                                                                 }
                                                            ],
                                                            navigation: {
                                                                 buttonOptions: {
                                                                      enabled: true
                                                                 }
                                                            }
                                                       });
                                             }

                                        }
                                   });
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

     @yield('script_select2')
</body>

</html>

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
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
     

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

               @include('partials.users.kurva_user')

          </section>
          <!-- End Kurva Section -->

          {{-- ! ======= Tanggal Imunisasi Section ======= --}}
          <section id="tanggal_imuns" class="about section-bg">

               @include('partials.users.tanggal_imunisasi_user')

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

     @yield('script_select2')

     {{-- ! KURVA --}}
     @yield('kurva_kms')

</body>

</html>

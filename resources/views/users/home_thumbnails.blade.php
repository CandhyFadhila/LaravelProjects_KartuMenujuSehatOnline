<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <title>KMS Online | {{ $halaman }}</title>
     <meta content="" name="description">
     <meta content="" name="keywords">
     <meta name="csrf_token" content="{{ csrf_token() }}">

     <!-- Favicons -->
     <link href="{{ asset('img/motherhood.png') }}" rel="icon">
     <link href="{{ asset('img/motherhood.png') }}" rel="apple-touch-icon">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

     <!-- Vendor CSS Files -->
     <link href="{{ asset('thumbnail/assets/vendor/aos/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('thumbnail/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('thumbnail/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
     <link href="{{ asset('thumbnail/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
     <link href="{{ asset('thumbnail/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
     <link href="{{ asset('thumbnail/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

     <!-- Template Main CSS File -->
     <link href="{{ asset('thumbnail/assets/css/style.css') }}" rel="stylesheet">

     <!-- =======================================================
  * Template Name: Bikin
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
     ======================================================== -->

     <!-- PWA  -->
     <meta name="theme-color" content="#6777ef" />
     <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
     <link rel="manifest" href="{{ asset('/manifest.json') }}">
     {{-- TODO | end of PWA --}}

</head>

<body>

     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top">
          <div class="container d-flex align-items-center justify-content-between">

			<a href="#" class="logo"><img src="{{ asset('img/motherhood.png') }}" alt="KMS Online"></a>
               <!-- Uncomment below if you prefer to use an image logo -->
               <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

               <nav id="navbar" class="navbar">
                    <ul>
                         <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                         <li><a class="nav-link scrollto" href="#about">About</a></li>
                         <li><a class="getstarted scrollto" href="{{ url('session_users') }}">Get Started</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
               </nav><!-- .navbar -->

          </div>
     </header><!-- End Header -->

     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex align-items-center">

          <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
               <h1>Stunting Ditaklukkan, KMS Membangun Masa Depan!</h1>
               <h2>Kami siap membantu anda dengan aplikasi KMS Online, anda dapat menghubungi Puskesmas Gayamsari jika belum terdaftar dan masih menggunakan KMS pada Buku KIA</h2>
               <a href="{{ url('session_users') }}" class="btn-get-started scrollto">Coba Sekarang</a>
               <img src="{{ asset('thumbnail/assets/img/hero-img.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-in"
                    data-aos-delay="150">
          </div>

     </section><!-- End Hero -->

     <main id="main">

          <!-- ======= About Section ======= -->
          <section id="about" class="about">
               <div class="container">

                    <div class="row no-gutters">
                         <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
                              <div class="content">
                                   <h3>Keunggulan KMS Online</h3>
                                   <p>
                                        KMS Online dapat mempermudah dalam memantau tumbuh kembang anak dan dapat mengurangi faktor - faktor yang tidak diinginkan pada buku KIA atau KMS kita
                                   </p>
                                   <a href="https://puskesmasgayamsari.wordpress.com" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
                              </div>
                         </div>
                         <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
                              <div class="icon-boxes d-flex flex-column justify-content-center">
                                   <div class="row">
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
											<i class='bx bx-message-alt-check'></i>
                                             <h4>Mudah Digunakan</h4>
                                             <p>KMS Online sangat mudah digunakan dalam Pemantauan Rutin</p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
											<i class='bx bx-globe'></i>
                                             <h4>Offline Mode</h4>
                                             <p>Jangan khawatir tidak punya internet cepat, KMS Online dapat digunakan secara Offline</p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
											<i class='bx bx-spreadsheet'></i>
                                             <h4>Informatif</h4>
                                             <p>Banyak informasi penting yang disampaikan oleh Ahli Gizi</p>
                                        </div>
                                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
											<i class='bx bx-paper-plane'></i>
                                             <h4>Ringan dan Cepat</h4>
                                             <p>KMS Online 10x lebih cepat dibandingkan aplikasi lainnya</p>
                                        </div>
                                   </div>
                              </div><!-- End .content-->
                         </div>
                    </div>

               </div>
          </section><!-- End About Section -->

     </main><!-- End #main -->

     <!-- ======= Footer ======= -->
     <footer id="footer">

          <div class="container d-md-flex py-4">

               <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
						&copy; Copyright - 2023. <strong><span>Kartu Menuju Sehat Online</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                         <!-- All the links in the footer should remain intact. -->
                         <!-- You can delete the links only if you purchased the pro version. -->
                         <!-- Licensing information: https://bootstrapmade.com/license/ -->
                         <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->
                         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
               </div>
               <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="https://www.instagram.com/puskesmasgayamsari" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://puskesmasgayamsari.wordpress.com" class="linkedin"><i class="bx bx-globe"></i></a>
               </div>
          </div>
     </footer>
     <!-- End Footer -->
     
     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
               class="bi bi-arrow-up-short"></i></a>

     <!-- PWA  -->
     <script src="{{ asset('/sw.js') }}"></script>
     <script>
          if ("serviceWorker" in navigator) {
               // Register a service worker hosted at the root of the
               // site using the default scope.
               navigator.serviceWorker.register("/sw.js").then(
                    (registration) => {
                         console.log("Service worker registration succeeded:", registration);
                    },
                    (error) => {
                         console.error(`Service worker registration failed: ${error}`);
                    },
               );
          } else {
               console.error("Service workers are not supported.");
          }
     </script>
     {{-- TODO | end of PWA --}}

     <!-- Vendor JS Files -->
     <script src="{{ asset('thumbnail/assets/vendor/aos/aos.js') }}"></script>
     <script src="{{ asset('thumbnail/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('thumbnail/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
     <script src="{{ asset('thumbnail/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
     <script src="{{ asset('thumbnail/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
     <script src="{{ asset('thumbnail/assets/vendor/php-email-form/validate.js') }}"></script>

     <!-- Template Main JS File -->
     <script src="{{ asset('thumbnail/assets/js/main.js') }}"></script>

</body>

</html>

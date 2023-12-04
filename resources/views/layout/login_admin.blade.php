<!doctype html>
<html lang="en">

<head>
     <link rel="icon" sizes="76x76" href="{{ asset('img/motherhood.png') }}" />
     <link rel="icon" type="image/png" href="{{ asset('img/motherhood.png') }}" />
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Ini adalah halaman admin login KMS Online yang digunakan oleh admin ahli gizi daerah puskesmas gayamsari kota semarang">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/fonts/icomoon/style.css') }}">

     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/owl.carousel.min.css') }}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/bootstrap.min.css') }}">

     <!-- Style -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/style.css') }}">

     <title>KMS | {{ $halaman }}</title>

     <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>

<body>

     <div class="content">

          <div class="container">

               @yield('content_auth')

          </div>

     </div>


     <script src="{{ asset('admin_login_registrasi/js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi/js/popper.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi/js/main.js') }}"></script>

     {{-- ! SWEATALERT2 + TOASTR --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     @yield('script_notifications')


</body>

</html>

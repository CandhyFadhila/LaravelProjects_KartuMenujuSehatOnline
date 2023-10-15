<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="{{ asset('admin_login_registrasi_new/fonts/icomoon/style.css') }}">

     <link rel="stylesheet" href="{{ asset('admin_login_registrasi_new/css/owl.carousel.min.css') }}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi_new/css/bootstrap.min.css') }}">

     <!-- Style -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi_new/css/style.css') }}">

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


     <script src="{{ asset('admin_login_registrasi_new/js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi_new/js/popper.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi_new/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi_new/js/main.js') }}"></script>

     {{-- ! SWEATALERT2 + TOASTR --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     @yield('script_notifications')


</body>

</html>

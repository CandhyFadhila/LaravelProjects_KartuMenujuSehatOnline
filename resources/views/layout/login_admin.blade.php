<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/motherhood.png') }}" />
     <link rel="icon" type="image/png" href="{{ asset('img/motherhood.png') }}" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>KMS | {{ $halaman }}</title>
     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/fonts/icomoon/style.css') }}">


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/bootstrap.min.css') }}">

     <!-- Style -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/style.css') }}">

     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

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

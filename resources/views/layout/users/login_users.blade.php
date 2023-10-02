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

     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/fonts/icomoon/style.css') }}">


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/bootstrap.min.css') }}">

     <!-- Style -->
     <link rel="stylesheet" href="{{ asset('admin_login_registrasi/css/style.css') }}">

     <!-- PWA  -->
     <meta name="theme-color" content="#6777ef" />
     <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
     <link rel="manifest" href="{{ asset('/manifest.json') }}">
     {{-- TODO | end of PWA --}}

</head>

<body>

     <div class="content">

          <div class="container">

               @yield('login_user')

          </div>

     </div>


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

     <script src="{{ asset('admin_login_registrasi/js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi/js/popper.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('admin_login_registrasi/js/main.js') }}"></script>

     {{-- ! SWEATALERT2 + TOASTR --}}
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

     @yield('script_notifications')


</body>

</html>

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

     <link rel="stylesheet" href="{{ asset('user_login/fonts/icomoon/style.css') }}">


     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('user_login/css/bootstrap.min.css') }}">

     <!-- Style -->
     <link rel="stylesheet" href="{{ asset('user_login/css/style.css') }}">

</head>

<body>

     <div class="content">

          <div class="container">

               @yield('login_user')

          </div>

     </div>



     <script src="{{ asset('user_login/js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('user_login/js/popper.min.js') }}"></script>
     <script src="{{ asset('user_login/js/bootstrap.min.js') }}"></script>

     @yield('js_user')
     

</body>

</html>

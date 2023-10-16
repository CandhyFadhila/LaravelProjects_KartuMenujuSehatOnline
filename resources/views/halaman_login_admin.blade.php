@extends('layout.login_admin')

@section('content_auth')
     <style>
          /* CSS TOASTR */
          .colored-toast.swal2-icon-success {
               background-color: #159fbb !important;
          }

          .colored-toast .swal2-title {
               color: white;
          }

          .colored-toast .swal2-close {
               color: white;
          }

          .colored-toast .swal2-html-container {
               color: white;
          }

          /* visited link */
          a:visited {
               color: grey;
          }

          /* mouse over link */
          a:hover {
               color: #6c63ff;
          }
     </style>

     <div class="row">
          <div class="col-md-6">
               <img src="{{ asset('admin_login_registrasi_new/images/undraw_remotely_2j6y.svg') }}" alt="Image"
                    class="img-fluid">
          </div>
          <div class="col-md-6 contents">
               <div class="row justify-content-center">
                    <div class="col-md-8">
                         <div class="mb-4">
                              <h3>Sign In</h3>
                              <p class="mb-4">Selamat datang di platform Dashboard KMS Online, silahkan lakukan login
                                   terlebih dahulu.
                              </p>
                         </div>
                         <form action="/session_admin/login" method="POST">
                              @csrf
                              <div class="form-group first">
                                   <label for="email">Email *</label>
                                   <input type="email" class="form-control" name="email" id="email"
                                        value="{{ Session::get('email') }}">
                                   @error('email')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>
                              <div class="form-group last mb-4">
                                   <label for="password">Password *</label>
                                   <input type="password" class="form-control" name="password" id="password">
                                   @error('password')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>

                              <button type="submit" name="submit" class="btn btn-block btn-primary">Sign In</button>

                              <span class="d-block text-center my-4 text-muted">&mdash; belum punya akun? • 
                                   <a href="{{ url('session_admin/registrasi') }}">
                                        Daftar Sekarang
                                   </a> &mdash;
                              </span>



                         </form>
                    </div>
               </div>

          </div>

     </div>
@endsection

@section('script_notifications')
     <script>
          $(document).ready(function() {
               @if (Session::has('success'))
                    (async function() {
                         const Toast = Swal.mixin({
                              toast: true,
                              position: 'top-right',
                              iconColor: 'white',
                              customClass: {
                                   popup: 'colored-toast'
                              },
                              showConfirmButton: false,
                              timer: 3000,
                              timerProgressBar: true
                         });

                         await Toast.fire({
                              icon: 'success',
                              title: "{{ Session::get('success') }}"
                         });
                    })();
               @endif

               @if (Session::has('error_password'))
                    Swal.fire({
                         icon: 'error',
                         title: '<strong>Login Gagal</strong>',
                         html: 'Password atau Email yang anda masukkan <b>Tidak Valid</b>',
                         showConfirmButton: false,
                         timer: 3200,
                         timerProgressBar: true
                    });
               @endif

               @if (Session::has('error_session_admin'))
                    Swal.fire({
                         icon: 'question',
                         title: '<strong>Oops..</strong>',
                         html: 'Anda belum melakukan <b>Login</b>, Silahkan <b>Login</b> dahulu',
                         showConfirmButton: false,
                         timer: 3200,
                         timerProgressBar: true
                    });
               @endif
          });
     </script>
@endsection

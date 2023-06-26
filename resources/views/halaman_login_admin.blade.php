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
     </style>
     <div class="row align-items-stretch justify-content-center no-gutters">
          <div class="col-md-7">

               <div class="form h-100 contact-wrap p-5">
                    <h3 class="text-center">Login</h3>
                    <form class="mb-5" action="/session_admin/login" method="POST">
                         @csrf
                         <div class="row mb-5">
                              <div class="col-md-12 form-group mb-3">
                                   <label for="email" class="col-form-label">Email *</label>
                                   <input type="email" class="form-control" name="email" id="email"
                                        value="{{ Session::get('email') }}" placeholder="Email Anda">
                                   @error('email')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>

                              <div class="col-md-12 form-group mb-3">
                                   <label for="password" class="col-form-label">Password *</label>
                                   <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password Anda">
                                   <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                   @error('password')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>
                         </div>

                         <div class="row justify-content-center">
                              <div class="col-md-5 form-group text-center">
                                   <button class="btn btn-block btn-grad rounded-0 py-2 px-4" type="submit" name="submit"
                                        style="background-image: linear-gradient(to right, #457fca 0%, #5691c8  51%, #457fca  100%)">Masuk</button>
                                   <label for="terms" class="form-check-label custom-label">
                                        Belum punya akun? - <a href="{{ url('session_admin/registrasi') }}"
                                             class="custom-link">
                                             Buat Akun
                                        </a>
                                   </label>
                              </div>
                         </div>
                    </form>
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
                         timer: 2700,
                         timerProgressBar: true
                    });
               @endif

               @if (Session::has('error_session_admin'))
                    Swal.fire({
                         icon: 'question',
                         title: '<strong>Oops..</strong>',
                         html: 'Anda belum <b>Login</b>, Silahkan <b>Login</b> terlebih dahulu',
                         showConfirmButton: false,
                         timer: 3000,
                         timerProgressBar: true
                    });
               @endif
          });
     </script>
@endsection

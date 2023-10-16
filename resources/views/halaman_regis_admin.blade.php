@extends('layout.login_admin')

@section('content_auth')

     {{-- ! NEW --}}
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

               @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                         <label>{{ $message }}</label>
                    </div>
               @endif

               <img src="{{ asset('admin_login_registrasi_new/images/undraw_remotely_2j6y.svg') }}" alt="Image"
                    class="img-fluid">
          </div>
          <div class="col-md-6 contents">
               <div class="row justify-content-center">
                    <div class="col-md-8">
                         <div class="mb-4">
                              <h3>Sign Up</h3>
                              <p class="mb-4">Selamat datang di platform Dashboard KMS Online, silahkan isi form yang diperlukan.
                              </p>
                         </div>
                         <form action="/session_admin/create" method="POST">
                              @csrf
                              <div class="form-group first">
                                   <label for="nama">Nama *</label>
                                   <input type="text" class="form-control" name="name" id="name"
                                        value="{{ Session::get('name') }}">
                                   @error('name')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>

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

                              <button type="submit" name="submit" class="btn btn-block btn-primary">Sign Up</button>

                              <span class="d-block text-center my-4 text-muted">&mdash; sudah punya akun? • 
                                   <a href="{{ url('session_admin') }}">
                                        Login Sekarang
                                   </a> &mdash;
                              </span>



                         </form>
                    </div>
               </div>

          </div>

     </div>
@endsection

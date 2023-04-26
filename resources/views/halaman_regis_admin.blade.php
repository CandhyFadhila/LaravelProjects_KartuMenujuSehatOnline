@extends('layout.login_admin')

@section('content_auth')
     <div class="row align-items-stretch justify-content-center no-gutters">
          <div class="col-md-7">

               @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                         <label>{{ $message }}</label>
                    </div>
               @endif

               <div class="form h-100 contact-wrap p-5">
                    <h3 class="text-center">Registrasi</h3>
                    <form class="mb-5" action="/session_admin/create" method="POST">
                         @csrf
                         <div class="row mb-5">
                              <div class="col-md-12 form-group mb-3">
                                   <label for="name" class="col-form-label">Nama *</label>
                                   <input type="text" class="form-control" name="name" id="name"
                                        value="{{ Session::get('name') }}" placeholder="Masukkan Nama Anda">
                                   @error('name')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>
                              <div class="col-md-12 form-group mb-3">
                                   <label for="email" class="col-form-label">Email *</label>
                                   <input type="email" class="form-control" name="email" id="email"
                                        value="{{ Session::get('email') }}" placeholder="Masukkan Email Anda">
                                   @error('email')
                                        <small class="text-danger">
                                             {{ $message }}
                                        </small>
                                   @enderror
                              </div>

                              <div class="col-md-12 form-group mb-3">
                                   <label for="password" class="col-form-label">Password *</label>
                                   <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Masukkan Password Anda">
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
                                   <button class="btn btn-block btn-grad rounded-0 py-2 px-4" type="submit"
                                        name="submit">Daftar Akun</button>
                                   <label for="terms" class="form-check-label custom-label">
                                        Sudah punya akun? - <a href="{{ url('session_admin') }}" class="custom-link">
                                             Login
                                        </a>

                                   </label>

                              </div>


                         </div>
                    </form>
               </div>
          </div>
     </div>
@endsection

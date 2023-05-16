@extends('layout.users.login_users')

@section('login_user')
     <div class="row align-items-stretch justify-content-center no-gutters">
          <div class="col-md-7">

               <div class="form h-100 contact-wrap p-5">
                    <h3 class="text-center">Login</h3>
                    <form class="mb-5" action="/session_users/login" method="POST">
                         @csrf
                         <div class="row mb-5">
                              <div class="col-md-12 form-group mb-3">
                                   <label for="nik_ibu" class="col-form-label">NIK Ibu *</label>
                                   <input type="text" class="form-control" name="nik_ibu" id="nik_ibu" value="{{ Session::get('nik_ibu') }}" placeholder="Masukkan NIK dari Ibu Anak">
                                   @error('nik_ibu')
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
               @if (Session::has('success_orangtua'))
                    toastr.info("{{ Session::get('success_orangtua') }}");
               @endif

               @if (Session::has('error_nik'))
                    Swal.fire({
                         icon: 'error',
                         title: '<strong>Login Gagal</strong>',
                         html: 'NIK yang anda masukkan <b>Tidak Valid</b>',
                         showConfirmButton: true,
                         timer: 2700,
                         timerProgressBar: true
                    });
               @endif
          });
     </script>
@endsection

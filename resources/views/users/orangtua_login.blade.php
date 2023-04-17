@extends('layout.users.login_users')

@section('login_user')
     <div class="row align-items-stretch justify-content-center no-gutters">
          <div class="col-md-7">
               <div class="form h-100 contact-wrap p-5">
                    <h3 class="text-center">Login</h3>
                    <form class="mb-5" method="post" id="contactForm" name="contactForm">
                         <div class="row mb-5">
                              <div class="col-md-12 form-group mb-3">
                                   <label for="" class="col-form-label">Nomor Induk Keluarga/NIK *</label>
                                   <input type="text" class="form-control" name="name" id="name"
                                        placeholder="NIK Anda">
                              </div>
                         </div>
                         <div class="row justify-content-center">
                              <div class="col-md-5 form-group text-center">
                                   <input type="submit" value="Masuk"
                                        class="btn btn-block btn-primary rounded-0 py-2 px-4">
                                   <span class="submitting"></span>
                              </div>
                         </div>
                    </form>

                    <div id="form-message-warning mt-4"></div>
                    <div id="form-message-success">
                         Your message was sent, thank you!
                    </div>

               </div>
          </div>
     </div>
@endsection

@section('js_user')
     <script src="{{ asset('user_login/js/jquery.validate.min.js') }}"></script>
     <script src="{{ asset('user_login/js/main.js') }}"></script>
@endsection

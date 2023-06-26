@extends('layout.users.main_users')

<style>
     /* CSS TOASTR */
     .colored-toast.swal2-icon-success {
          background-color: #609966 !important;
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

@section('script_select2')
     <script>
          $(document).ready(function() {
               $('#balita_id').select2();

               @if (Session::has('success_orangtua'))
                    (async function() {
                         const Toast = Swal.mixin({
                              toast: true,
                              position: 'top-right',
                              iconColor: 'white',
                              customClass: {
                                   popup: 'colored-toast'
                              },
                              showConfirmButton: false,
                              timer: 4000,
                              timerProgressBar: true
                         });

                         await Toast.fire({
                              icon: 'success',
                              title: "{{ Session::get('success_orangtua') }}"
                         });
                    })();
               @endif

          });
     </script>
@endsection

@extends('layout.users.main_users')

@section('script_select2')
     <script>
          $(document).ready(function() {
               $('#balita_id').select2();
               
               @if (Session::has('success_orangtua'))
                    toastr.success("{{ Session::get('success_orangtua') }}");
               @endif
          });
     </script>
@endsection

@extends('master.main.main_layout.main')

@section('isi_content')
     <style>
          /* CSS TOASTR */
          .colored-toast.swal2-icon-success {
               background-color: #609966 !important;
          }

          .colored-toast.swal2-icon-info {
               background-color: #6d9eb3 !important;
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
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header card-header-primary card-header-icon">

                              <div class="card-icon">
                                   <i class="material-icons">assignment</i>
                              </div>
                              <h4 class="card-title">
                                   Data Petugas Posyandu
                                   <a href="{{ url('admin/petugas/add_data_petugas') }}"
                                        class="btn btn-primary float-right mb-1">
                                        Tambah Data Petugas
                                   </a>
                              </h4>

                         </div>

                         <div class="card-body">
                              <div class="material-datatables">
                                   <div class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                             <div class="col-sm-12 table-responsive">

                                                  {{-- ! SEARCH --}}
                                                  <form action="{{ url('admin/petugas') }}" method="GET">
                                                       <div class="form-row">
                                                            <div class="form-group mb-2 col-md-10">
                                                                 <h4 class="card-title text-dark font-weight-bold">Pencarian
                                                                      Data Petugas</h4>
                                                                 <input type="text"
                                                                      class="form-control form-control-lg text-dark font-weight-bold"
                                                                      id="search" name="search"
                                                                      aria-describedby="namaPetugas"
                                                                      value="{{ Request::get('search') }}"
                                                                      placeholder="Masukkan Nama atau Alamat petugas">
                                                                 <h6 id="search"
                                                                      class="form-text text-capitalize text-muted text-dark font-weight-bold">
                                                                      Dengan
                                                                      mengetikkan
                                                                      Nama atau Alamat dari Petugas yang akan
                                                                      memudahkan
                                                                      pencarian.</h6>
                                                            </div>
                                                            <div class="col text-center align-self-center">
                                                                 <button type="submit"
                                                                      class="btn btn-primary float-right">Cari</button>
                                                            </div>
                                                       </div>
                                                  </form>



                                                  <table class="table table-hover">
                                                       <thead>
                                                            <tr role="row" class="bg-success text-light">
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Nama
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Alamat
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Role
                                                                 </th>
                                                                 <th scope="col" class="text-center font-weight-bold">
                                                                      Actions
                                                                 </th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            @foreach ($data_Petugas as $petugas)
                                                                 <tr role="row">
                                                                      <td>
                                                                           {{ $petugas->nama_petugas }}
                                                                      </td>

                                                                      <td>
                                                                           {{ $petugas->alamat }}
                                                                      </td>

                                                                      <td>
                                                                           <h4>
                                                                                <span class="badge badge-success">{{ $petugas->adminrole->role }}
                                                                                </span>
                                                                           </h4>
                                                                      </td>

                                                                      <td class="text-center">
                                                                           <a href='{{ url('admin/petugas/' . $petugas->id_petugas . '/edit') }}'
                                                                                class="btn btn-warning btn-sm">Edit
                                                                           </a>

                                                                           <form action="{{ url('admin/petugas/' . $petugas->id_petugas) }}"
                                                                                method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" name="save"
                                                                                     class="btn btn-rose btn-sm show_confirm_petugas">
                                                                                     Hapus
                                                                                </button>
                                                                           </form>
                                                                      </td>
                                                                 </tr>
                                                            @endforeach
                                                       </tbody>
                                                  </table>
                                                  {{ $data_Petugas->withQueryString()->links() }}
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection

<script type="text/javascript">
     window.setTimeout(function() {
          $("#alert").fadeTo(500, 0).slideUp(500, function() {
               $(this).remove();
          });
     }, 3800);
</script>


@section('script_select2')
     <script>
          $('.show_confirm_petugas').click(function(event) {
               var form = $(this).closest("form");
               event.preventDefault();
               swal.fire({
                         title: 'Apakah kamu yakin?',
                         text: "Setelah data terhapus maka data akan hilang!",
                         icon: 'warning',
                         showCancelButton: true,
                         confirmButtonColor: '#3085d6',
                         cancelButtonColor: '#d33',
                         confirmButtonText: 'Ya, Hapus Data!',
                         cancelButtonText: 'Batal'
                    })
                    .then((result) => {
                         if (result.isConfirmed) {
                              Swal.fire({
                                   icon: 'success',
                                   title: '<strong>Data Berhasil Dihapus</strong>',
                                   html: 'Data yang anda pilih <b>Berhasil</b> terhapus',
                                   showConfirmButton: false,
                                   timer: 2200,
                                   timerProgressBar: true
                              }).then((result) => {
                                   form.submit();
                              })
                         }
                    });
          });
     </script>


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

               @if (Session::has('success_update'))
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
                              icon: 'info',
                              title: "{{ Session::get('success_update') }}"
                         });
                    })();
               @endif
          });
     </script>
@endsection

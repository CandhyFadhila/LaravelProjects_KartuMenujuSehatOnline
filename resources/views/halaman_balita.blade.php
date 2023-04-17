@extends('layout.main')

@section('isi_content')
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                         <div class="card-header card-header-primary card-header-icon">
                              <div class="card-icon">
                                   <i class="material-icons">assignment</i>
                              </div>
                              <h4 class="card-title">
                                   Data Balita dan Anak
                                   <a href="{{ url('/admin/balita/add_data_balita') }}"
                                        class="btn btn-primary float-right mb-1">
                                        Tambah Data Balita dan Anak
                                   </a>
                              </h4>
                         </div>
                         <div class="card-body">
                              <div class="material-datatables">
                                   <div class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                             <div class="col-sm-12 table-responsive">

                                                  {{-- ! SEARCH --}}
                                                  <form action="{{ url('admin/balita') }}" method="GET">
                                                       <div class="form-row">
                                                            <div class="form-group mb-2 col-md-10">
                                                                 <h4 class="card-title text-dark font-weight-bold">Pencarian
                                                                      Data Balita</h4>
                                                                 <input type="text"
                                                                      class="form-control form-control-lg text-dark font-weight-bold"
                                                                      id="search" name="search"
                                                                      aria-describedby="namaBalita"
                                                                      value="{{ Request::get('search') }}"
                                                                      placeholder="Masukkan Nama, NIK, BB Lahir atau PB Lahir balita">
                                                                 <h6 id="search"
                                                                      class="form-text text-capitalize text-muted text-dark font-weight-bold">
                                                                      Dengan
                                                                      mengetikkan
                                                                      Nama, NIK, BB Lahir atau PB Lahir dari Balita yang akan
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
                                                            <tr role="row" class="bg-info text-white">
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Nama
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      NIK
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Tgl Lahir
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Nama Ibu
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      Jns Kelamin
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      BB Lahir
                                                                 </th>
                                                                 <th scope="col" class="font-weight-bold">
                                                                      PB Lahir
                                                                 </th>
                                                                 <th scope="col" class="text-center font-weight-bold">
                                                                      Actions
                                                                 </th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            @foreach ($data_Balita as $balita)
                                                                 <tr role="row">
                                                                      <td scope="row">
                                                                           {{ $balita->nama_balita }}
                                                                      </td>
                                                                      <td>{{ $balita->nik_balita }}</td>
                                                                      <td>{{ $balita->tgl_lahir }}</td>
                                                                      <td>{{ $balita->adminorangtua->nama_ibu }}</td>
                                                                      <td>{{ $balita->jenis_kelamin }}</td>
                                                                      <td>{{ $balita->bb_lahir }} gr</td>
                                                                      <td>{{ $balita->pb_lahir }} Cm</td>
                                                                      <td class="text-center">
                                                                           <a href='{{ url('admin/balita/' . $balita->id_balita . '/edit') }}'
                                                                                class="btn btn-warning btn-sm">Edit
                                                                           </a>

                                                                           <form action="{{ url('admin/balita/' . $balita->id_balita) }}"
                                                                                method="POST" class="d-inline">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" name="save"
                                                                                     class="btn btn-rose btn-sm show_confirm_balita">
                                                                                     Hapus
                                                                                </button>
                                                                           </form>
                                                                      </td>
                                                                 </tr>
                                                            @endforeach

                                                       </tbody>
                                                  </table>
                                                  {{ $data_Balita->withQueryString()->links() }}
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
          $('.show_confirm_balita').click(function(event) {
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
                    toastr.success("{{ Session::get('success') }}");
               @endif
          });
     </script>
@endsection

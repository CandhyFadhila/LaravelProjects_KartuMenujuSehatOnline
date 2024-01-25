@extends('master.main.main_layout.main')

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
                                   Data Riwayat Balita dan Anak
                              </h4>
                         </div>

                         <div class="card-body">
                              <div class="material-datatables">
                                   <div class="dataTables_wrapper dt-bootstrap4">
                                        <div class="row">
                                             <div class="col-sm-12">
                                                  {{-- ! SEARCH --}}
                                                  <form action="{{ url('admin/rekap_riwayat_balita') }}" method="GET">
                                                       <div class="form-row">
                                                            <div class="form-group mb-2 col-md-10">
                                                                 <h4 class="card-title text-dark font-weight-bold">Pencarian
                                                                      Rekap Data Balita</h4>
                                                                 <input type="text"
                                                                      class="form-control form-control-lg text-dark font-weight-bold"
                                                                      id="search" name="search"
                                                                      aria-describedby="namaBalita"
                                                                      value="{{ Request::get('search') }}"
                                                                      placeholder="Masukkan Nama dan NIK dari Balita">
                                                                 <h6 id="search"
                                                                      class="form-text text-capitalize text-muted text-dark font-weight-bold">
                                                                      Dengan
                                                                      mengetikkan
                                                                      Nama dan NIK dari Balita yang akan memudahkan
                                                                      pencarian.</h6>
                                                            </div>
                                                            <div class="col text-center align-self-center">
                                                                 <button type="submit"
                                                                      class="btn btn-primary float-right">Cari</button>
                                                            </div>
                                                       </div>
                                                  </form>
                                                  <div class="container">
                                                       @foreach ($data_Balita as $balita)
                                                            <div class="row">
                                                                 <div class="col-lg-12 border bg-light mb-3">
                                                                      <div class="col-md-10 float-left"
                                                                           style="margin:24px 0 15px">
                                                                           <h4 class="text-dark font-weight-bold">{{ $balita->nama_balita }} - NIK
                                                                                {{ $balita->nik_balita }}</h4>
                                                                      </div>
                                                                      <div class="col" style="margin:12px 0 15px">
                                                                           <a
                                                                                href="{{ url('admin/rekap_riwayat_balita/detail/' . $balita->id_balita) }}">
                                                                                <button type="submit"
                                                                                     class="btn btn-rose mx-auto d-block float-md-right">
                                                                                     Lihat Detail
                                                                                </button>
                                                                           </a>

                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       @endforeach
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
     </div>
@endsection

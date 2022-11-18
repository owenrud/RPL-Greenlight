@extends('admin.layouts.main')

@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Halaman Validasi Pemesan Instansi</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Bus</th>
                                <th>Nama Instansi</th>
                                <th>Email</th>
                                <th>Nomor Handphone</th>
                                <th>Pembayaran</th>
                                <th>Lokasi Pickup</th>
                                <th>Tujuan</th>
                                <th>Taggal Pickup</th>
                                <th>Waktu</th>
                                <th>Validasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>PT.Taspen</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>082147763055</td>
                                <td>Dana</td>
                                <td>Seturan</td>
                                <td>Salatiga</td>
                                <td>12/11/2002</td>
                                <td>12:30:00</td>
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Validasi</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/mahasiswa/editmahasiswa/" type="button" style="word-spacing:50px">
                                          Validate <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/mahasiswa/hapusmahasiswa/" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                          Tolak <i class="bi bi-trash"></i>
                                        </a>
                                      </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Nixon</td>
                                <td>PT.Taspen</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>082147763055</td>
                                <td>Dana</td>
                                <td>Seturan</td>
                                <td>Salatiga</td>
                                <td>12/11/2002</td>
                                <td>12:30:00</td>
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Validasi</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/mahasiswa/editmahasiswa/" type="button" style="word-spacing:50px">
                                          Validate <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/mahasiswa/hapusmahasiswa/" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                          Tolak <i class="bi bi-trash"></i>
                                        </a>
                                      </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>Nixon</td>
                                <td>PT.Taspen</td>
                                <td>Edinburgh@gmail.com</td>
                                <td>082147763055</td>
                                <td>Dana</td>
                                <td>Seturan</td>
                                <td>Salatiga</td>
                                <td>12/11/2002</td>
                                <td>12:30:00</td>
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Validasi</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/mahasiswa/editmahasiswa/" type="button" style="word-spacing:50px">
                                          Validate <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/mahasiswa/hapusmahasiswa/" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                          Tolak <i class="bi bi-trash"></i>
                                        </a>
                                      </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection
@extends('admin.layouts.main')

@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Halaman Master Data User</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Master Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Password</th>
                                <th>No Telp</th>
                                <th>CRUD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gilbert</td>
                                <td>gilbert@gmail.com</td>
                                <td>23/10/2002</td>
                                <td>Jembatan Merah III</td>
                                <td>agsfdhaasd</td>
                                <td>082147763055</td>
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Edit</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/mahasiswa/editmahasiswa/" type="button" style="word-spacing:50px">
                                          Edit <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/mahasiswa/hapusmahasiswa/" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                          Hapus <i class="bi bi-trash"></i>
                                        </a>
                                      </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gilbert</td>
                                <td>gilbert@gmail.com</td>
                                <td>23/10/2002</td>
                                <td>Jembatan Merah III</td>
                                <td>agsfdhaasd</td>
                                <td>082147763055</td>
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Edit</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/mahasiswa/editmahasiswa/" type="button" style="word-spacing:50px">
                                          Edit <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/mahasiswa/hapusmahasiswa/" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                          Hapus <i class="bi bi-trash"></i>
                                        </a>
                                      </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gilbert</td>
                                <td>gilbert@gmail.com</td>
                                <td>23/10/2002</td>
                                <td>Jembatan Merah III</td>
                                <td>agsfdhaasd</td>
                                <td>082147763055</td>
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Edit</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/mahasiswa/editmahasiswa/" type="button" style="word-spacing:50px">
                                          Edit <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/mahasiswa/hapusmahasiswa/" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menghapus data ini')" style="word-spacing:32.5px">
                                          Hapus <i class="bi bi-trash"></i>
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
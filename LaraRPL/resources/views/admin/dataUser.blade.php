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
              <a class="btn btn-info" href="/formInputUser">Tambah Data</a>
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
                                <th>No Telp</th>
                                <th>Password</th>
                                <th>CRUD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $key=>$user)
                            <tr>
                              <td>{{ $user->nama }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->tgl_lahir }}</td>
                              <td>{{ $user->alamat }}</td>
                              <td>{{ $user->no_telp }}</td>
                              <td>{{ $user->password }}</td>
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
                                
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
@endsection
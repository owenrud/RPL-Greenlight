@extends('admin.layouts.main')

@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Halaman Master Data Bus</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Master Data Bus</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Bus</th>
                                <th>Sifat</th>
                                <th>Kode Bus</th>
                                <th>Area</th>
                                <th>Pabrikan</th>
                                <th>No Mesin</th>
                                <th>Plat Nomor</th>
                                <th>Kapasitas</th>
                                <th>Bagasi</th>
                                <th>Foto</th>
                                <th>CRUD</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $key=>$bus)
                            <tr>
                              <td>{{ $bus->Nama_Bus}}</td>
                              <td>{{ $bus->Sifat}}</td>
                              <td>{{ $bus->Kode_Bus}}</td>
                              <td>{{ $bus->Area}}</td>
                              <td>{{ $bus->pabrikan}}</td>
                              <td>{{ $bus->no_mesin}}</td>
                              <td>{{ $bus->Plat_nomor}}</td>
                              <td>{{ $bus->Kapasitas}} Penumpang</td>
                              <td>{{ $bus->Bagasi}} Kg</td>
                              <td>{{ $bus->foto}}</td>
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
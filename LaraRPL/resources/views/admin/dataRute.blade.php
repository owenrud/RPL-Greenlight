@extends('admin.layouts.main') @section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Halaman Master Data Rute</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-info" href="/formInputRute">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered"
                        id="dataTable"
                        width="100%"
                        cellspacing="0"
                    >
                        <thead>
                            <tr>
                                <th>ID Bus</th>
                                <th>Titik Awal</th>
                                <th>Titik Sampai</th>
                                <th>Jam Berangkat</th>
                                <th>Jam Sampai</th>
                                <!-- <th>Password</th> -->
                                <th>CRUD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $rute )
                            <tr>
                                <td>{{ $rute->id_bus }}</td>
                                <td>{{ $rute->titik_awal }}</td>
                                <td>{{ $rute->titik_sampai }}</td>
                                <td>{{ $rute->jam_berangkat }}</td>
                                <td>{{ $rute->jam_sampai }}</td>
                                
                                <td>
                                    <div class="btn-group dropdown">
                                        <button
                                            type="button"
                                            class="btn btn-outline-info dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown"
                                            aria-expanded="false"
                                        >
                                            <span>Edit</span>
                                        </button>
                                        <div
                                            class="dropdown-menu"
                                            aria-labelledby="dropdownMenu2"
                                        >
                                            <a
                                                class="dropdown-item"
                                                href="/dataRute/editDataRute/{{ $rute->id }}"
                                                type="button"
                                                style="word-spacing: 50px"
                                            >
                                                Edit
                                                <i
                                                    class="bi bi-pencil-square"
                                                ></i>
                                            </a>
                                            <div class="dropdown-divider"></div>

                                            <a
                                                class="dropdown-item"
                                                href="/dataRute/hapusDataRute/{{ encrypt($rute -> id) }}"
                                                type="button"
                                                onclick="return confirm('Apakah Anda Yakin menghapus data ini')"
                                                style="word-spacing: 32.5px"
                                            >
                                                Hapus
                                                <i class="bi bi-trash"></i>
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

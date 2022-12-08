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
                                <th>ID Bus</th>
                                <th>kode_invoice</th>
                                <th>Tanggal cetak</th>
                                <th>Pembayaran</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Validasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoice as $i)
                        @if($i->sifat == "Instansi")
                            <tr>
                                <td>{{$i->id_bus_invoice}}</td>
                                <td>{{$i->kode_invoice}}</td>
                                <td>{{$i->tgl_cetak}}</td>
                                <td>{{$i->tipe_bayar}}</td>
                                <td>{{$i->harga}}</td>
                                @if($i->status == 0)
                                <td style="color:orange;">Belum Validasi</td>
                                @else
                                <td style="color:green;">Tervalidasi</td>
                                @endif
                                
                                <td>
                                    <div class="btn-group dropdown">
                                      <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                                      aria-expanded="false">
                                        <span>Validasi</span>
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="/details_validate/{{$i->id}}" type="button" style="word-spacing:50px">
                                          Validate <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/hapus" type="button"
                                          onclick="return confirm('Apakah Anda Yakin menolak pesanan ini?')" style="word-spacing:32.5px">
                                          Tolak <i class="bi bi-trash"></i>
                                        </a>
                                      </div>
                                    </div>
                                </td>                          
                            </tr>
                            @endif
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
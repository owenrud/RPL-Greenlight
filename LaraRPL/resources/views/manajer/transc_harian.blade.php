@extends('manajer.layouts.main')

@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Halaman Laporan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <div class="form-group">
            <form Method="post" action="/reportday">
            <span>Tanggal Laporan</span>
            @csrf
            <input type="date" name="from_tgl">
                <button class="btn btn-primary" type="submit">Submit</a>
            </form>
            </div>
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
                                <th>Kode Invoice</th>
                                <th>Sifat</th>
                                <th>Tanggal Cetak</th>
                                <th>Tipe Bayar</th>
                                <th>Nomor Bayar</th>
                                <th>Jumlah Kursi</th>
                                <th>Jumlah Bus</th>
                                <th>Harga</th>
                                <!-- <th>Password</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($datainvoice))
                            @foreach($datainvoice as $items )
                            <tr>
                                <td>{{$items->kode_invoice}}</td>
                                <td>{{$items->sifat}}</td>
                                <td>{{$items->tgl_cetak}}</td>
                                <td>{{$items->tipe_bayar}}</td>
                                <td>{{$items->no_bayar}}</td>
                                <td>{{$items->jmlh_kursi}}</td>
                                <td>{{$items->jmlh_bus}}</td>
                                <td>{{$items->harga}}</td>
                                
                               
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td>{{""}}</td>
                                <td>{{""}}</td>
                                <td>{{"" }}</td>
                                <td>{{""}}</td>
                                <td>{{""}}</td>
                                <td>{{"" }}</td>
                                <td>{{""}}</td>
                                <td>{{"" }}</td>
                                
                               
                            </tr>
                            @endif
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@extends('admin.layouts.main') 
@section('content')
<div class="container-fluid">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px">
            <h4 class="card-title mt-3 text-center">Ubah Data rute</h4>

            <form
                method="POST"
                action="/updateDataRute/{{ $rute -> id }}"
                enctype="multipart/form-data"
            >
                @csrf
                <input type="hidden" name="_method" value="PATCH" />
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-hashtag"></i>
                        </span>
                    </div>
                    <input
                        name="id_bus"
                        class="form-control"
                        placeholder="Nama"
                        type="text"
                        value="{{ $rute -> id_bus}}"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-city"></i>
                        </span>
                    </div>
                    <input
                        name="titik_awal"
                        class="form-control"
                        placeholder="Email"
                        type="text"
                        value="{{ $rute -> titik_awal}}"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-city"></i>
                        </span>
                    </div>
                    <input
                        name="titik_sampai"
                        class="form-control"
                        placeholder="Tanggal Lahir"
                        type="text"
                        value="{{ $rute -> titik_sampai}}"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-clock"></i>
                        </span>
                    </div>
                    <input
                        name="berangkat"
                        class="form-control"
                        placeholder="Alamat"
                        value="{{ $rute -> jam_berangkat}}"
                        type="time"
                    />
                </div>
                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-clock"></i>
                        </span>
                    </div>
                    <input
                        name="sampai"
                        class="form-control"
                        placeholder="No Telp"
                        value="{{ $rute -> jam_sampai}}"
                        type="time"
                    />
                    </div>
                
                <!-- {{-- Untuk Role --}} -->

                <!-- {{--
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-users"></i>
                        </span>
                    </div>
                    <select class="custom-select" style="max-width: 150px">
                        <option value="admin">Admin</option>
                        <option value="rute">rute</option>
                    </select>
                </div>
                --}} -->
                <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Add Data
                    </button>
                </div>
            </form>
        </article>
    </div>
    <!-- card.// -->
</div>

@endsection

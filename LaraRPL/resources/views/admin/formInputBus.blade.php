@extends('admin.layouts.main') @section('content')
<div class="container-fluid">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px">
            <h4 class="card-title mt-3 text-center">Tambah Data User</h4>

            <form
                method="POST"
                action="/addDataBus"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <input
                        name="Nama_Bus"
                        class="form-control"
                        placeholder="Nama Bus"
                        type="text"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-bus"></i>
                        </span>
                    </div>
                    <select class="custom-select" name="Sifat">
                        <option disabled selected>Sifat</option>
                        <option value="Instansi">Instansi</option>
                        <option value="Pribadi">Pribadi</option>
                    </select>
                </div>
                <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-city"></i>
                        </span>
                    </div>
                    <select class="custom-select" name="Area">
                        <option disabled selected>Area</option>
                        <option value="Dalam Kota">Dalam Kota</option>
                        <option value="Luar Kota">Luar Kota</option>
                    </select>
                </div>
                <!-- form-group// -->

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-hashtag"></i>
                        </span>
                    </div>
                    <input
                        name="Kode_Bus"
                        class="form-control"
                        placeholder="Kode Bus"
                        type="text"
                    />
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-industry"></i>
                        </span>
                    </div>
                    <input
                        name="pabrikan"
                        class="form-control"
                        placeholder="Pabrikan Bus"
                        type="text"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-hashtag"></i>
                        </span>
                    </div>
                    <input
                        name="no_mesin"
                        class="form-control"
                        placeholder="Nomor Mesin"
                        type="text"
                    />
                </div>

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-hashtag"></i>
                        </span>
                    </div>
                    <input
                        name="Plat_nomor"
                        class="form-control"
                        placeholder="Plat Nomor"
                        type="text"
                    />
                </div>

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-warehouse"></i>
                        </span>
                    </div>
                    <input
                        name="Kapasitas"
                        class="form-control"
                        placeholder="Kapasitas Bus"
                        type="number"
                    />
                </div>

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-suitcase-rolling"></i>
                        </span>
                    </div>
                    <input
                        name="Bagasi"
                        class="form-control"
                        placeholder="Bagasi Bus"
                        type="number"
                    />
                </div>

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-image"></i>
                        </span>
                    </div>
                    <input
                        name="foto"
                        class="form-control"
                        placeholder="Foto Bus"
                        type="file"
                    />
                </div>

                {{-- Untuk Role --}}

                {{--
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-users"></i>
                        </span>
                    </div>
                    <select class="custom-select" style="max-width: 150px">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                --}}
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

@extends('admin.layouts.main') 
@section('content')
<div class="container-fluid">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px">
            <h4 class="card-title mt-3 text-center">Tambah Data User</h4>

            <form
                method="POST"
                action="/updateDataUser/{{ $user -> id }}"
                enctype="multipart/form-data"
            >
                @csrf
                <input type="hidden" name="_method" value="PATCH" />
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <input
                        name="nama"
                        class="form-control"
                        placeholder="Nama"
                        type="text"
                        value="{{ $user -> nama}}"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <input
                        name="email"
                        class="form-control"
                        placeholder="Email"
                        type="email"
                        value="{{ $user -> email}}"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                    <input
                        name="tgl_lahir"
                        class="form-control"
                        placeholder="Tanggal Lahir"
                        type="date"
                        value="{{ $user -> tgl_lahir}}"
                    />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-building"></i>
                        </span>
                    </div>
                    <input
                        name="alamat"
                        class="form-control"
                        placeholder="Alamat"
                        value="{{ $user -> alamat}}"
                        type="text"
                    />
                </div>
                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <input
                        name="no_telp"
                        class="form-control"
                        placeholder="No Telp"
                        value="{{ $user -> no_telp}}"
                        type="number"
                    />
                </div>
                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input
                        name="password"
                        class="form-control"
                        placeholder="Create password"
                        value="{{ $user ->password}}"
                        type="password"
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
                        <option value="user">User</option>
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

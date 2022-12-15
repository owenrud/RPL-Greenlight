@extends('admin.layouts.main') @section('content')
<div class="container-fluid">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px">
            <h4 class="card-title mt-3 text-center">Tambah Data Rute</h4>

            <form method="POST" action="/addDataRute" enctype="multipart/form-data">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-hashtag"></i>
                        </span>
                    </div>
                    <select name="id_bus" class="form-control">
                    @foreach($dbus as $items)
                    <option>{{$items->id}}</option>
                    @endforeach
                    </select>
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-city"></i>
                        </span>
                    </div>
                    <input class="form-control" name="titik_awal" placeholder="Titik Awal">
                </div>
                <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-city"></i>
                        </span>
                    </div>
                     <input class="form-control" name="titik_sampai" placeholder="Titik Sampai">>
                </div>
                <!-- form-group// -->

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-clock"></i>
                        </span>
                    </div>
                    <input name="berangkat" class="form-control" placeholder="Jam Berangkat" type="time" />
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-clock"></i>
                        </span>
                    </div>
                    <input name="sampai" class="form-control" placeholder="Jam Sampai" type="time" />
                </div>
                <!-- form-group// -->
                
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
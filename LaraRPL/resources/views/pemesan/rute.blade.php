@extends('pemesan.main')
@section('content')
<div id="booking" class="section">
<div class="section-center">
<div style="padding:0% 10% 30%;" class="container">
<table class="table table-hover ">
  <thead >
    <tr style="background-color:white;">
      <th scope="col">No</th>
      <th scope="col">Titik Awal</th>
      <th scope="col">Titik Sampai</th>
      <th scope="col">Berangkat</th>
      <th scope="col">Sampai</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @if($bus->Sifat == "Pribadi")
  @foreach($rute as $no=> $datas)
    <tr style="color:#98AFC7;">
      <th scope="row">{{$no+1}}</th>
      <td >{{$datas->titik_awal}}</td>
      <td>{{$datas->titik_sampai}}</td>
      <td>{{$datas->jam_berangkat}}</td>
      <td>{{$datas->jam_sampai}}</td>
      <td>
      <form method="POST" action="/pbooking">
      @csrf
      <input type="hidden" name="id" value="{{$bus->id}}">
      <input type="hidden" name="id_rute" value="{{$datas->id}}">
        <button class="btn btn-primary" type="submit">Pilih</button>
        </form>
      </td>
    </tr>
    @endforeach
    @elseif($bus->Sifat == "Instansi")
     @foreach($rute as $no=> $datas)
    <tr>
      <th scope="row">{{$no+1}}</th>
      <td>{{$datas->titik_awal}}</td>
      <td>{{$datas->titik_sampai}}</td>
      <td>{{$datas->jam_berangkat}}</td>
      <td>{{$datas->jam_sampai}}</td>
      <td>
      <form method="POST" action="/booking">
      @csrf
      <input type="hidden" name="id" value="{{$bus->id}}">
      <input type="hidden" name="id_rute" value="{{$datas->id}}">
        <button class="btn btn-primary" type="submit">Pilih</button>
        </form>
      </td>
    </tr>
    @endforeach
   
    @endif
  </tbody>
</table>
</div>
</div>
</div>
@endsection
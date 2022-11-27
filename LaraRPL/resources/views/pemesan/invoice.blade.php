<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>
<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <p class="my-5 mx-5" style="font-size: 30px;">Thank for your order</p>
      <div class="row">
        <ul class="list-unstyled">
        {{$databook['email']}}
          <li class="text-black"></li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> #{{$invo}}</li>
          <li class="text-black mt-1">{{ now()}}</li>
          <li class="text-black mt-1"><strong>Pembayaran Via : {{$databook['tipe_bayar']}}</strong></li>
        <li class="text-black mt-1"><strong>12345678765 - a/n Test Invoice</strong></li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>{{$databook['nama_bus']}}</p>
          <small>Tanggal Pickup : {{$databook['tgl']}}</small>
          <br>
          <small>Waktu : {{$databook['jam']}} : {{$databook['menit']}} : {{$databook['waktu']}}</small>
          <br>
          <small>Lokasi Pickup : {{$databook['lok_pickup']}}</small>
          <br>
          <small>Tujuan : {{$databook['tujuan']}} </small>
          <br>
          @if(isset($databook['seat']))
           @php   
           echo("Seat : ");
            echo implode(",",$databook['seat']);
            @endphp
          @endif
          
          
        </div>
        <div class="col-xl-2">
          <p class="float-end">Rp 150.000
          </p>
        </div>
        <hr>
      </div>
      <!--<div class="row">
        <div class="col-xl-10">
          <p>Consulting</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">$100.00
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>Support</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">$10.00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="row text-black">

        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: $10.00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>-->
      <div class="text-center" style="margin-top: 90px;">
        <p><strong>Upload Bukti Pembayaran</strong></p>
        <form method="POST" action="/booking/invoice/upload" enctype="multipart/form-data">
        @csrf
        <input name="kode_invoice" type ="hidden" value="{{$invo}}">
        <input name="email" type ="hidden" value="{{$databook['email']}}">
        <input name="tipe_bayar" type ="hidden" value="{{$databook['tipe_bayar']}}">
        <input name="no_bayar" type ="hidden" value="12345678">
        <input name="nama_bus" type ="hidden" value="{{$databook['nama_bus']}}">
        <input name="tgl" type ="hidden" value="{{$databook['tgl']}}">
        <input name="lok_pickup" type ="hidden" value="{{$databook['lok_pickup']}}">
        <input name="tujuan" type ="hidden" value="{{$databook['tujuan']}}">
        @if(isset($databook['seat']))
        <input name="seat" type ="hidden" value="{{implode(',', $databook['seat'])}}">
        @endif
        <input name="harga" type ="hidden" value="150000">
        <input name="waktu" type ="hidden" value="{{$databook['jam']}} : {{$databook['menit']}} : {{$databook['waktu']}}">


        <input name="bukti_bayar" type="file" style="padding-left:7%;">
        <button type="submit" class="btn btn-success">Submit</button>
        <br>
        </form>
        <button class="btn btn-secondary"><a href="/cart"><u class="text-info">My Order</u></a></button>
        <p> </p>
      </div>

    </div>
  </div>
</div>

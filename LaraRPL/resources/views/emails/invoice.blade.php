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
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> #{{$databook['kode_invoice']}}</li>
          <li class="text-black mt-1">{{ now()}}</li>
          <li class="text-black mt-1"><strong>Pembayaran Via : {{$databook['tipe_bayar']}}</strong></li>
        <li class="text-black mt-1"><strong>{{$databook['no_bayar']}}</strong></li>

        </ul>
        <hr>
        <div class="col-xl-10">
          <small>Tanggal Pickup : {{$databook['tgl_pickup']}}</small>
          <br>
          <small>Jam Berangkat : {{$databook['berangkat']}}</small>
          <br>
          <small>Jam Sampai : {{$databook['sampai']}}</small>
          <br>
          <small>Lokasi Pickup : {{$databook['lokasi']}}</small>
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
          <p class="float-end">Rp {{$databook['harga']}}
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


    </div>
  </div>
</div>

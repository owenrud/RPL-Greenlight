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
          <li class="text-black">Test</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> #12345</li>
          <li class="text-black mt-1">November 17 2022</li>
          <li class="text-black mt-1"><strong>Pembayaran Via : X</strong></li>
        <li class="text-black mt-1"><strong>12345678765 - a/n Test</strong></li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>Bus A01</p>
          <small>Tanggal Pickup : 20-11-2022</small>
          <br>
          <small>Waktu : 10:45:00</small>
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
        <form method="POST" action="/booking/invoice/upload" enctype="multipart/formdata">
        <input type="file" style="padding-left:7%;">
        <button type="submit" class="btn btn-success">Submit</button>
        <br>
        </form>
        <button class="btn btn-secondary"><a href="/cart"><u class="text-info">My Order</u></a></button>
        <p> </p>
      </div>

    </div>
  </div>
</div>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bus Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

  <!-- Slider
    ================================================== -->
  <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
  <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

  <!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/responsive.css">

  <link
    href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
    rel='stylesheet' type='text/css'>
  <link
    href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400'
    rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="../js/modernizr.custom.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="/home">Back to Home</a>
      
    </div>
  </nav>
  <section class="ftco-section ftco-car-details">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="car-details">
            <div class="img rounded px-4 text-center" width="10px" height="10px" style="background-repeat:no-repeat;">
              <img style="width:1000px;height:600px;"src="../bus-images/{{$bus->foto}}" alt="{{ $bus->foto }}">
            </div>
            <div class="text text-center">
              <h2>{{$bus->Nama_Bus}}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
              <div class="d-flex mb-3 align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="bi bi-person">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-person" viewBox="0 0 16 16">
                      <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>
                  </span>
                </div>
                <div class="text">
                  <h3 class="heading mb-0 pl-3">
                    Sifat
                    <span>{{$bus->Sifat}}</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
              <div class="d-flex mb-3 align-items-center">
                <div class=" d-flex align-items-center justify-content-center"><span class="bi bi-geo-alt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo"
                      viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                    </svg>
                  </span>
                </div>
                <div class="text">
                  <h3 class="heading mb-0 pl-3">
                    Area
                    <span>{{$bus->Area}}</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
              <div class="d-flex mb-3 align-items-center">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="flaticon-car-seat"></span></div>
                <div class="text">
                  <h3 class="heading mb-0 pl-3">
                    Kapasitas
                    <span>{{$bus->Kapasitas}} Orang</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
              <div class="d-flex mb-3 align-items-center">
                <div class="icon d-flex align-items-center justify-content-center"><span
                    class="flaticon-backpack"></span></div>
                <div class="text">
                  <h3 class="heading mb-0 pl-3">
                    Bagasi
                    <span>{{$bus->Bagasi}} Tas</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="media-body py-md-4">
              <div class="d-flex mb-3 align-items-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="bi bi-123">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-123"
                      viewBox="0 0 16 16">
                      <path
                        d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961h1.174Zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057h1.138Zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75v.96Z" />
                    </svg>
                  </span>
                </div>
                <div class="text">
                  <h3 class="heading mb-0 pl-3">
                    Plat nomor
                    <span>{{$bus->Plat_nomor}}</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-success ">
        <div class="container-fluid">
          <form method="GET" action="/rute/{{$bus->id}}">
            @csrf
            <button class="btn btn-success" type="submit">Pesan</button>
        </div>
        </form>

      </nav>

  </section>
  <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day
      however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown
      Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a
      rethoric question ran over her cheek, then she continued her way.</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>

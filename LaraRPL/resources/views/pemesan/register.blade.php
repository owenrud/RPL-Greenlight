<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

<!-- <style>
.gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
</style>-->
<title>Register</title>
  </head>
  <body>
<section class="vh-100 bg-image"
  style="background-image: url('images/Background_2.jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center ">Create an account</h2>

              <form Method="POST" action="/register/createuser">
              @csrf
                <div class="form-outline mb-4">
                <label class="form-label" >Nama</label>
                  <input type="text" name="nama" class="form-control form-control-lg" required />
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" >Email</label>
                  <input type="email" name="email" class="form-control form-control-lg" required/>
                  
                </div>

                <div class="form-outline mb-4">
                                  <label class="form-label" >Tgl lahir</label>
                  <input type="date" name="tgl_lahir" class="form-control form-control-lg" required />

                </div>

                <div class="form-outline mb-4">
                <label class="form-label" >Alamat</label>
                  <input type="text" name="alamat" class="form-control form-control-lg" required />
                  
                </div>

                

                <div class="form-outline mb-4">
                <label class="form-label" >Password</label>
                  <input type="password" name="password" class="form-control form-control-lg" required />
                  
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" >No. Telepon</label>
                  <input type="text" name="no_telp" class="form-control form-control-lg" required />
                  
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>
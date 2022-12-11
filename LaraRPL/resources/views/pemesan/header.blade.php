
<!-- Navigation
    ==========================================-->
    
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      @if(Session::get('notif'))
<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>{{ session('notif') }}</strong> 
    </div>
@endif
@if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
            {{ session('success') }}
        </div>
    @endif
    @if(session('message'))
<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>{{ session('message') }}</strong> 
    </div>
@endif
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/home">GreenLight</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#daftar_bus" class="page-scroll">Daftar Bus</a></li>
            <li><a href="/cart" class="btn btn-info"><strong>Pesanan</strong></a></li>
            <li style="padding-left: 10px;">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img src="../images/personal.png" style="width:25px;height:25px">
  </button>
  <div class="dropdown-menu" style="margin-top: 20px;background-color:#10069f;"aria-labelledby="dropdownMenuButton">
     <a class="dropdown-item {{Auth::check()?'disabled':''}}" style="color: white;" href="/login" >Login</a><br>
    <a class="dropdown-item {{!Auth::check()?'disabled':''}}" style="color: antiquewhite;" href="/logout">Logout</a>
  </div>
</div>
</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      
    </nav>

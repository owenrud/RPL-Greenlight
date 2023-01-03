@extends('pemesan.main')
@section('title','Home')
@section('content')

<!-- Home Page
    ==========================================-->
<div id="home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">GreenLight</span></strong></h1>
            <p class="lead">Web <strong>Pemesanan Bus</strong></p>
            <a href="#about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>
<!-- About Us Page
    ==========================================-->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/about_logo.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>About us</h4>
                        <h2>Some words <strong>about us</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">We love building and rebuilding brands through our specific skills. Using colour,
                        fonts, and illustration, we brand companies in a way they will never forget.</p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Portfolio Section
    ==========================================-->
<div id="daftar_bus">
    <div class="container">
        <!-- Container -->
        <div class="section-title text-center center">
            <h2><strong>Daftar Bus</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            
            </div>

        <div class="space"></div>

        <div class="categories">

            <ul class="cat">
                <li class="pull-left">
                    <h4>Filter by Type:</h4>
                </li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".p">Pribadi</a></li>
                        <li><a href="#" data-filter=".i">Instansi</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        
        <div id="lightbox" class="row">
            @foreach ($datas as $key=>$bus)
            @if($bus->Sifat == "Pribadi")
            <div class="col-sm-6 col-md-3 col-lg-3 p">
                @else
                <div class="col-sm-6 col-md-3 col-lg-3 i">
                    @endif
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="details/{{ $bus->id }}">
                                <div class="hover-text">
                                    <h4>{{$bus->Nama_Bus}}</h4>
                                    <small>Description singkat</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="{{$bus->foto}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection
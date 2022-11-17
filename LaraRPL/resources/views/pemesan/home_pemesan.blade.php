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
                        <p class="intro">We love building and rebuilding brands through our  specific skills. Using colour, fonts, and illustration, we brand companies in a way they will never forget.</p>
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
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2><strong>Daftar Bus</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
            </div>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
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

                <div class="col-sm-6 col-md-3 col-lg-3 p">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="details/1">
                                <div class="hover-text">
                                    <h4>Bus1</h4>
                                    <small>Description singkat</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b1.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 exe p i">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/2">
                                <div class="hover-text">
                                    <h4>Bus 2</h4>
                                    <small>Description singkat</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b2.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 p">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/3">
                                <div class="hover-text">
                                    <h4>Bus 3</h4>
                                    <small>Deskripsi</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b3.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 i">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/4">
                                <div class="hover-text">
                                    <h4>Bus 4</h4>
                                    <small>Deskripsi</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b4.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 i">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/5">
                                <div class="hover-text">
                                    <h4>Bus 5</h4>
                                    <small>Deskripsi</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b5.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 p i">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/6">
                                <div class="hover-text">
                                    <h4>Bus 6</h4>
                                    <small>Deskripsi</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b6.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 p">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/7">
                                <div class="hover-text">
                                    <h4>Bus 7</h4>
                                    <small>Deskripsi</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b7.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 i">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/details/8">
                                <div class="hover-text">
                                    <h4>Bus 8</h4>
                                    <small>Deskripsi</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/b8.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    
    

@endsection
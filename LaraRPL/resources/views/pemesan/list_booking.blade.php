@extends('pemesan.main')
@section('content')
    <!-- Portfolio Section
    ==========================================-->
    <div id="daftar_bus" style="background-color:#f0ca94">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2><strong>Tipe Booking</strong></h2>
                

            <div class="categories">
                
                
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/pbooking">
                                <div class="hover-text">
                                    <h4>Personal</h4>
                                    <small>Description singkat</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/personal.png" class="img-responsive img-fluid" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/booking">
                                <div class="hover-text">
                                    <h4>Instansi</h4>
                                    <small>Description singkat</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="images/Instansi.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

               
                        </div>
                    </div>
                </div>
@endsection
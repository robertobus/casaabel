@extends('layouts.web')

@section('header-title-page')
    <div class="banner padd">
        <div class="container">
            <!-- Image -->
            <img class="img-responsive" src="img/crown-white.png" alt="" />
            <!-- Heading -->
            <h2 class="white">Contacto</h2>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@section('main-content')
<!-- Inner Content -->
<div class="inner-page padd">
<!-- Contact Us Start -->
<div class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Contact Us content -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-details">
                            <h4>Dirección</h4>
                            <i class="fa fa-map-marker br-blue"></i> <span>#407, Av. Roberto Oliver<br> Monte Grande</span>
                            <div class="clearfix"></div>
                            <i class="fa fa-envelope-o br-blue"></i> <span><a href="#">contacto@casaabel.com.ar</a></span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-details">
                            <h4>Telefonos</h4>
                            <i class="fa fa-phone br-blue"></i> <span>011-2635 3952 / 4272 9108 <br> <b>Sabrina:</b> 011-2655 3032 <br> <b>Abel:</b> 011-6305 2188 <br> <b>Nextel:</b> 380*5172</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!--/ Inner row end -->
                <!-- Contact form -->
                <div class="contact-form">
                    <h3>Escribanos</h3>
                    <form role="form">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Nombre" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Telefono" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <button class="btn btn-primary btn-sm" type="submit">Enviar</button>
                    </form>
                </div><!--/ Contact form end -->
            </div>
            <div class="col-md-6">
                <div class="map-container">
                    <iframe	src="https://maps.google.co.in/?ie=UTF8&amp;ll=-34.8215093,-58.5010478&amp;spn=0.815042,1.352692&amp;t=m&amp;z=10&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</div><!-- Contact Us End -->
</div><!-- / Inner Page Content End -->
@endsection
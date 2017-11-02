@extends('layouts.web')

@section('home-slider')
    @include('layouts.partials.web.slider')
@endsection

@section('main-content')
<div class="main-content">
    <div class="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="showcase-item">
                        <img class="img-responsive" src="{{ asset('theme_web/icons/icon-security.png') }}" alt="" />
                        <h3><a href="#">Confiabilidad</a></h3>
                        <p>Todos nuestros productos son de alta Calidad. Cuente con nuestra confianza, todos los productos estan garantizados.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="showcase-item">
                        <img class="img-responsive" src="{{ asset('theme_web/icons/icon-payment-card.png') }}" alt="" />
                        <h3><a href="#">Multiples medios de pago</a></h3>
                        <p>Contamos con tarjetas de credito, debito. Pago online por Mercado Pagos. Cheques. Consultenos.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="showcase-item">
                        <img class="img-responsive" src="{{ asset('theme_web/icons/icon-shipping.png') }}" alt="" />
                        <h3><a href="#">Envios gratuitos</a></h3>
                        <p>Contamos con envios gratuitos a toda Capital Federal y el Gran Buenos Aires, para el resto del pais consulte precio.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
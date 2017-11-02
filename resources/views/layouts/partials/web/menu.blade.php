<nav class="navbar navbar-default navbar-right" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#"><img src="{{ asset('/') }}" class="img-responsive" alt="" /> Inicio</a></li>
                <li class="dropdown hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" class="img-responsive" alt="" /> Productos <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-md">
                        <li>
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <!-- Menu Item -->
                                    <div class="menu-item">
                                        <!-- Heading -->
                                        <h3>Ladrillos</h3>
                                        <!-- Image -->
                                        <img src="{{ asset('images/ladrillo.png') }}" class="img-responsive" alt="" />
                                        <!-- Paragraph -->
                                        <p>
                                            BLOQUES ULTRALIVIANOS PARA TECHOS Y ENTREPISOS CON VIGUETAS. <br>
                                            Ideal para realizar losas livianas, reduciendo el peso propio e incrementando notablemente el nivel de aislación térmica. <br>
                                            Medidas: 1000 x 420 m/m<br>
                                            Espesores: 100, 120, 160 y 200 m/m
                                        </p>
                                        <!-- Button -->
                                        <a href="" class="btn btn-primary btn-xs">Ver más</a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <!-- Menu Item -->
                                    <div class="menu-item">
                                        <!-- Heading -->
                                        <h3>Placas</h3>
                                        <!-- Image -->
                                        <img src="{{ asset('images/plancha.png') }}" class="img-responsive" alt="" />
                                        <!-- Paragraph -->
                                        <p>
                                            PLANCHAS DE TELGOPOR <br>
                                            Ideal para aislar térmicamente muros, cubiertas inclinadas, cubiertas planas y por debajo de contrapisos.<br>
                                            DEBNSIDADES: std. 15, 20, 25 y 30kg/m3.
                                        </p>
                                        <!-- Button -->
                                        <a href="" class="btn btn-primary btn-xs">Ver más</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- Menu Item -->
                                    <div class="menu-item">
                                        <!-- Heading -->
                                        <h3>Relleno</h3>
                                        <!-- Image -->
                                        <img src="{{ asset('images/relleno.jpg') }}" class="img-responsive" alt="" />
                                        <!-- Paragraph -->
                                        <p>
                                            PERLA VIRGEN DE TELGOPOR
                                            Ideal para embalajes o rellenos.
                                        </p>
                                        <!-- Button -->
                                        <a href="" class="btn btn-primary btn-xs">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown visible-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Ladrillos</a></li>
                        <li><a href="">Placas</a></li>
                        <li><a href="">Relleno</a></li>
                    </ul>
                </li>
                <li><a href=""><img src="" class="img-responsive" alt="" /> Nosotros</a></li>
                <li><a href=""><img src="" class="img-responsive" alt="" /> Contacto</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
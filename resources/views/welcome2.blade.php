@extends('layouts.home.main2')
@section('contenido')
<div id="#top"></div>
    <section id="home">
        <div class="banner-container img_slider">
            <img src="{{asset('images/Teclado3.jpg')}}" class="sliderr" alt="banner" />
            <div class="container banner-content">
                <div id="da-slider" class="da-slider size-slider">
                    <div class="da-slide top-slider">
                        <h2>Sistemas a medida</h2>
                        <p>Soluciones personalizadas</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide top-slider">
                        <h2>Páginas web</h2>
                        <p>Tu ventana al mundo</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide top-slider">
                        <h2>Facturacion electronica</h2>
                        <p>Llevá tu empresa donde vayas</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide top-slider">
                        <h2>Marketing digital</h2>
                        <p>Destacate entre todos</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide top-slider">
                        <h2>E-Commerce</h2>
                        <p>¿Querés vender por internet?</p>
                        <div class="da-img"></div>
                    </div>
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="page-section">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="heading text-left">
                    <!-- Heading -->
                    <h2>Nuestros Servicios</h2>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-md-6 mt-5 col-xs-12">
                        <div class="col-xs-3">
                            <img src="{{asset('images/iconos_home/Sistemas a medida.svg')}}">     
                        </div>
                        <div class="col-xs-9">
                            <h3 class="color-celeste">Sistemas a Medida</h3>
                            <p>Interpretamos las ideas del cliente y desarrollamos un producto acorde a sus necesidades.</p>
                        </div>
                    </div>
                    <!-- end: -->
                    <!-- item -->
                    <div class="col-md-6 mt-5 col-xs-12">
                        <div class="col-xs-3">
                            <img src="{{asset('images/iconos_home/Web.svg')}}">
                        </div>
                        <div class="col-xs-9">
                            <h3 class="color-celeste">Páginas Web</h3>
                            <p>Creamos e impulsamos sitios web basados en la originalidad y creatividad.</p>
                        </div>
                    </div>
                    <!-- end: -->
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-md-6 mt-5 col-xs-12">
                        <div class="col-xs-3">
                            <img src="{{asset('images/iconos_home/Facturacion electronica.svg')}}">
                        </div>
                        <div class="col-xs-9">
                            <h3 class="color-celeste">Facturación Electronica</h3>
                            <p>Desarrollamos el servicio de facturación electrónica que cumple con las exigencias impuestas por AFIP.</p>
                        </div>
                    </div>
                    <!-- end: -->
                    <!-- item -->
                    <div class="col-md-6 mt-5 col-xs-12">
                        <div class="col-xs-3">
                            <img src="{{asset('images/iconos_home/Marketing digital.svg')}}">
                        </div>
                        <div class="col-xs-9">
                            <h3 class="color-celeste">Marketing Digital</h3>
                            <p>Posicionamos tu empresa en el mundo digital acorde a las nuevas tecnologías.</p>
                        </div>
                    </div>
                    <!-- end:-->
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-md-6 mt-5 col-xs-12">
                        <div class="col-xs-3">
                            <img src="{{asset('images/iconos_home/Ecommerce.svg')}}">
                        </div>
                        <div class="col-xs-9">
                            <h3 class="color-celeste">E-Commerce</h3>
                            <p>Para el desarrollo comercial de tu negocio y empresa generamos la tienda online que necesitás.</p>
                        </div>
                    </div>
                    <!-- end: -->
                    <!-- item -->
                    <div class="col-md-6 mt-5 col-xs-12">
                        <div class="col-xs-3">
                            <img src="{{asset('images/iconos_home/Movile dev.svg')}}">
                        </div>
                        <div class="col-xs-9">
                            <h3 class="color-celeste">Mobile Dev</h3>
                            <p>Posicionamos tu empresa en el mundo digital acorde a las nuevas tecnologías.</p>
                        </div>
                    </div>
                    <!-- end:-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/.NOTICIAS FONDO BLANCO-->
    <section id="clients" style="padding-bottom:50px;">
        <div id="demo" class="clients">
            <div class="container">
                <div class="heading text-center">
                    <h2>Noticias</h2>
                </div>

                <div class="row">
                    <div class="col-md-12">

                       <div class="col-md-4 col-xs-12">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{asset('estilo_nuevo/img/shop02.png')}}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>La guerra<br>Hawey</h3>
                                <a href="#" class="cta-btn">Ver completo <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-12">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{asset('estilo_nuevo/img/shop03.png')}}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Accessories<br>Collection</h3>
                                <a href="#" class="cta-btn">Ver completo <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-12">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{asset('estilo_nuevo/img/shop02.png')}}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Cameras<br>Collection</h3>
                                <a href="#" class="cta-btn">Ver completo <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.FIN NOTICIAS FONDO BLANCO-->
    @include('layouts.contacto')
@endsection

@section('js')
  <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4R_duN92jPo5Z4hFRvxxXsAvhlDNvRL0 "></script>  -->
    <script type="text/javascript">

    </script>
@endsection

</body>
</html>
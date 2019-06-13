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
                        <h2>Facturacion electrónica</h2>
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
                    <h2 class=" text-xs-center">Nuestros Servicios</h2>
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-md-6 mt-md-5 col-xs-12 pt-xs-0">
                        <a href="{{url('/sistemas-personalizados')}}" title="">
                            <div class="col-md-3 col-xs-12 img-servicios text-xs-center">
                                <img src="{{asset('images/iconos_home/Sistemas a medida.svg')}}">
                            </div>
                            <div class="col-md-9 col-xs-12 text-xs-center">
                                <h3 class="color-celeste">Sistemas a Medida</h3>
                                <p>Interpretamos las ideas del cliente y desarrollamos un producto acorde a sus necesidades.</p>
                            </div>
                        </a>
                    </div>
                    <!-- end: -->
                    <!-- item -->
                    <div class="col-md-6 mt-md-5 col-xs-12 pt-xs-0">
                        <a href="{{url('/paginas-web')}}" title="">
                            <div class="col-md-3 col-xs-12 img-servicios text-xs-center">
                                <img src="{{asset('images/iconos_home/Web.svg')}}">
                            </div>
                            <div class="col-md-9 col-xs-12 text-xs-center">
                                <h3 class="color-celeste">Páginas Web</h3>
                                <p>Creamos e impulsamos sitios web basados en la originalidad y creatividad.</p>
                            </div>
                        </a>
                    </div>
                    <!-- end: -->
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-md-6 mt-md-5 col-xs-12 pt-xs-0">
                        <a href="{{url('/facturacion-electronica')}}" title="">
                            <div class="col-md-3 col-xs-12 img-servicios text-xs-center">
                                <img src="{{asset('images/iconos_home/Facturacion electronica.svg')}}">
                            </div>
                            <div class="col-md-9 col-xs-12 text-xs-center">
                                <h3 class="color-celeste">Facturación Electronica</h3>
                                <p>Desarrollamos el servicio de facturación electrónica que cumple con las exigencias impuestas por AFIP.</p>
                            </div>
                        </a>
                    </div>
                    <!-- end: -->
                    <!-- item -->
                    <div class="col-md-6 mt-md-5 col-xs-12 pt-xs-0">
                        <a href="{{url('/marketing-digital')}}" title="">
                            <div class="col-md-3 col-xs-12 img-servicios text-xs-center">
                                <img src="{{asset('images/iconos_home/Marketing digital.svg')}}">
                            </div>
                            <div class="col-md-9 col-xs-12 text-xs-center">
                                <h3 class="color-celeste">Marketing Digital</h3>
                                <p>Posicionamos tu empresa en el mundo digital acorde a las nuevas tecnologías.</p>
                            </div>
                        </a>
                    </div>
                    <!-- end:-->
                </div>
                <div class="row">
                    <!-- item -->
                    <div class="col-md-6 mt-md-5 col-xs-12 pt-xs-0">
                        <a href="{{url('/ecommerce')}}" title="">
                            <div class="col-md-3 col-xs-12 img-servicios text-xs-center">
                                <img src="{{asset('images/iconos_home/Ecommerce.svg')}}">
                            </div>
                            <div class="col-md-9 col-xs-12 text-xs-center">
                                <h3 class="color-celeste">E-Commerce</h3>
                                <p>Para el desarrollo comercial de tu negocio y empresa generamos la tienda online que necesitás.</p>
                            </div>
                        </a>
                    </div>
                    <!-- end: -->
                    <!-- item -->
                    <div class="col-md-6 mt-md-5 col-xs-12 pt-xs-0">
                        <a href="{{url('/paginas-web')}}" title="">
                            <div class="col-md-3 col-xs-12 img-servicios text-xs-center">
                                <img src="{{asset('images/iconos_home/Movile dev.svg')}}">
                            </div>
                            <div class="col-md-9 col-xs-12 text-xs-center">
                                <h3 class="color-celeste">Mobile Dev</h3>
                                <p>Posicionamos tu empresa en el mundo digital acorde a las nuevas tecnologías.</p>
                            </div>
                        </a>
                    </div>
                    <!-- end:-->
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/.FIN NOTICIAS FONDO BLANCO-->
    <!--/.NOTICIAS FONDO BLANCO-->
    <section id="noticias" style="padding-bottom:50px;background-color: white;">
        <div id="demo" class="clients">
            <div class="container">
                <div class="heading text-center">
                    <h2>Noticias</h2>
                </div>
                <div class="text-center">
                    <h4>Por el momento no hay noticias disponibles.</h4>
                </div>
{{-- 
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
                </div> --}}
            </div>
        </div>
    </section>
    <!--/.FIN NOTICIAS FONDO BLANCO-->
    @include('layouts.contacto')
      <!--/.NOTICIAS FONDO BLANCO-->
    <section id="" style="padding-bottom:50px;">
        <div id="demo" class="clients">
            <div class="col-md-10 col-md-offset-1">
                <div class="heading text-center">
                    <h2>Nuestros clientes</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12 mb-3 mt-1">
                        <a href="{{'https://clasificate.online'}}" title="" target="_blank">
                            <div class="item-portafolio">
                                <div class="portafolio-img">
                                    <img src="{{asset('images/portfolio/clasificate.png')}}" alt="">
                                </div>
                                <div class="portafolio-titulo">
                                    <h4 class="text-center">Clasificate online</h4>
                                    <p class="text-center">Web de clasificados</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 mb-3 mt-1">
                        <a href="{{'http://www.guiaenlapampa.com.ar/'}}" title="" target="_blank">
                            <div class="item-portafolio">
                                <div class="portafolio-img">
                                    <img src="{{asset('images/portfolio/guia-en-la-pampa.png')}}" alt="">
                                </div>
                                <div class="portafolio-titulo">
                                    <h4 class="text-center">Guía en la pampa</h4>
                                    <p class="text-center">Web de noticias de La Pampa</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 mb-3 mt-1">
                        <a href="{{'https://donpedrinonline.com.ar'}}" title="" target="_blank">
                            <div class="item-portafolio">
                                <div class="portafolio-img">
                                    <img src="{{asset('images/portfolio/don-pedrin.png')}}" alt="">
                                </div>
                                <div class="portafolio-titulo">
                                    <h4 class="text-center">Don pedrín online</h4>
                                    <p class="text-center">E-commerce de supermercado</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 mb-3 mt-1">
                        <a href="{{'https://medanocortado.com.ar/'}}" title="" target="_blank">
                            <div class="item-portafolio">
                                <div class="portafolio-img">
                                    <img src="{{asset('images/portfolio/medano-cortado.png')}}" alt="">
                                </div>
                                <div class="portafolio-titulo">
                                    <h4 class="text-center">Colegio médano cortado</h4>
                                    <p class="text-center">Web y sistema para secundario</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 mb-3 mt-1">
                        <a href="{{'http://www.raisalmotos.com.ar/'}}" title="" target="_blank">
                            <div class="item-portafolio">
                                <div class="portafolio-img">
                                    <img src="{{asset('images/portfolio/raisal.png')}}" alt="">
                                </div>
                                <div class="portafolio-titulo">
                                    <h4 class="text-center">Raisal motos</h4>
                                    <p class="text-center">Landing page de concesionaria</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-12 mb-3 mt-1">
                        <a href="{{'https://libertecno.com.ar/'}}" title="" target="_blank">
                            <div class="item-portafolio">
                                <div class="portafolio-img">
                                    <img src="{{asset('images/portfolio/technologyup.png')}}" alt="">
                                </div>
                                <div class="portafolio-titulo">
                                    <h4 class="text-center">TechnologyUP</h4>
                                    <p class="text-center">E-commerce de tecnología</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
@endsection

@section('js')
  <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4R_duN92jPo5Z4hFRvxxXsAvhlDNvRL0 "></script>  -->
    <script type="text/javascript">

    </script>
@endsection

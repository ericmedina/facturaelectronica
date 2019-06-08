@extends('layouts.home.main2')
@section('title','Marketing digital')
@section('contenido')
    <div id="#top"></div>
    <section id="home" class="pc-mt-N28">
        <div class="banner-container img_slider_sub_paginas">
            <img src="{{asset('images/tecladochico2.jpg')}}" alt="banner" />
            <div class="container banner-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="titulo-banner">
                        <h2>Marketing digital</h2>
                        <p>Destacate entre todos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="page-section pt-4 pt-lg-5">
        <div class="container">
            <div class=" col-md-10 col-md-offset-1">
                <div class="col-md-8 text-left">  
                        <p>Es muy importante saber cómo invertir correctamente en el posicionamiento de tu marca, tanto en redes sociales como en buscadores. Desde PampaDev implementamos estrategias digitales para posicionar tu empresa utilizando los recursos que nos brindan las tecnologías web.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="page-section">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="heading text-left letras_grises pb-md-0">
                    <!-- Heading -->
                    <h2 class="pl-md-3 mt-md-0">Ventajas</h2>
                </div>
                <div class="row col-xs-12">
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_marketing/Visibilidad.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Visibilidad de su empresa.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_marketing/Menorcosto.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Menor costo comparado con los canales de marketing tradicional.</p>
                        </div>
                    </div>
{{--                     <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0 pt-3">
                            <img src="{{asset('images/iconos_sistemas/Disponibilidad.svg')}}">
                        </div>
                        <div class="col-xs-9">
                            <p class="letras_sistemas">Disponibilidad de la informacion en tiempo real</p>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_marketing/Captacion.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Captación de nuevos clientes y fidelización de los mismos.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_marketing/Losresultados.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Los resulados se ven en tiempo real.</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_marketing/Noexiste.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">No existe una limitación geográfica.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_marketing/Capacidad.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Capacidad de medición y análisis de todos los aspectos de la campaña.</p>
                        </div>
                    </div>
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
                    <h2></h2>
                </div>

                <div class="row">
                    <div class="col-lg-10 pc-float-none m-auto">

                       <div class="col-md-6 col-xs-12">
                        <div class="">
                            <div>
                                <h3 class="size-21">SEO</h3>                                
                            </div>
                            <div class="">
                                <p class="desarrollo_recuadro pc-saltodelinea cell-saltodelinea">¿Alguna vez pasamos a la segunda página de una búsqueda? 
                                                                 Es fundamental aparecer en los primeros puestos en los resultados de una búsqueda ya sea en Google o en otros buscadores. Por lo tanto el posicionamiento aumenta la probabilidad de que los usuarios visiten nuestro sitio.</p>                           
                            </div>
                        </div>
                        </div>
                    <!-- /shop -->

                    <!-- shop -->
                       <div class="col-md-6 col-xs-12">
                        <div class="">
                            <div>
                                <h3 class="size-21">Social media</h3>                                
                            </div>
                            <div class="">
                                <p class="desarrollo_recuadro pc-saltodelinea cell-saltodelinea">En las redes sociales no se vende. 
                                                            Pero lo cierto es que a través de estas, se logra empatizar con las personas que se encuentran al otro lado, generando así un acercamiento con nuestros clientes.</p> 
                            </div>
                        </div>
                        </div>
                    <!-- /shop -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.contacto')
@endsection
@section('js')

    <script type="text/javascript">

    </script>
@endsection

</body>
</html>
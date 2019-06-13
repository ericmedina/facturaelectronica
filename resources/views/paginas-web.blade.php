@extends('layouts.home.main2')
@section('title','Diseño de paginas Web - PampaDev')
@section('contenido')
    <div id="#top"></div>
    <section id="home" class="pc-mt-N28">
        <div class="banner-container img_slider_sub_paginas">
            <img src="{{asset('images/tecladochico2.jpg')}}" alt="banner" />
            <div class="container banner-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="titulo-banner">
                        <h2>Diseño de paginas Web</h2>
                        <p>Tu ventana al mundo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="page-section pt-4 pt-lg-5">
        <div class="container">
            <div class=" col-md-10 col-md-offset-1">
                <div class="col-md-8 text-left">  
                        <p>Programamos y diseñamos sitios web autoadministrables y adaptables a cualquier computadora o Smartphone. Nuestro principal objetivo es realizar páginas web escalables para la empresa y que brinden una excelente experiencia de usuario a los clientes.</p>
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
                            <img src="{{asset('images/iconos_web/Nuevosmercados.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Nuevos mercados con audiencia global</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_web/Aumentavisibilidad.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Aumenta la visibilidad de tu producto o servicio</p>
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
                            <img src="{{asset('images/iconos_web/Mayorvisibilidad.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Mayor visibilidad y accesibilidad las 24 HS.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_web/Serecomendado.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Sé recomendado por tus clientes con un solo click.</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_web/Bajocosto.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Bajo costo para realizar publicidades.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_web/Imagenprofesional.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Imagen profesional y moderna de la empresa.</p>
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

                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4">
                        <div>
                            <h3 class="size-21">Diseño web Responsive</h3>                                
                        </div>
                        <div class="">
                            <p class="desarrollo_recuadro">Creamos las páginas web para que puedan verse de manera óptima no sólo en cualquier PC, sino también desde cualquier dispositivo móvil como celulares y tablets. Lo que permite atraer más clientes debido a la comodidad que ésto conlleva.</p>                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h3 class="size-21">Optimizado para Buscadores</h3>                                
                        </div>
                        <div class="">
                            <p class="desarrollo_recuadro">Nuestro objetivo de realizar una página vistosa y optimizada no solo incluye a las personas que ingresen, también a los motores de búsqueda, como Google. Logrando así que la página obtenga una mejor posición en los resultados de búsquedas relacionadas.</p> 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <h3 class="size-21">Diseño Gráﬁco</h3>                            
                        </div>
                        <div class="">
                             <p class="desarrollo_recuadro">Si lo requieres te ayudamos a crear o mejorar tu imagen institucional para lograr que la página luzca realmente como una sucursal online de tu empresa.</p>                             
                        </div>
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

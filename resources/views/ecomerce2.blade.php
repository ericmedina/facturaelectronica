@extends('layouts.home.main2')
@section('title','E-Commerce')
@section('contenido')
    <div id="#top"></div>
    <section id="home" class="pc-mt-N28">
        <div class="banner-container img_slider_sub_paginas">
            <img src="{{asset('images/tecladochico2.jpg')}}" alt="banner" />
            <div class="container banner-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="titulo-banner">
                        <h2>E-Commerce</h2>
                        <p>¿Querés vender por internet?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="page-section pt-4 pt-lg-5">
        <div class="container">
            <div class=" col-md-10 col-md-offset-1">
                <div class="col-md-9 text-left">  
                        <p>El E-Commerce consiste en la distribución, venta, compra y marketing de productos o servicios a través de internet. Esto fue posible gracias al avance de la tecnología y a que las empresas busquen estar a la vanguardia y puedan ofrecer lo que hoy en días sus clientes demandan.</p>
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
                            <img src="{{asset('images/iconos_ecommerce/Limitesgeograficos.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Que los límites geográﬁcos no sean los tuyos.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_ecommerce/Diseñaestrategias.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Diseñá estrategias de marketing digital para potenciar tu empresa.</p>
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
                            <img src="{{asset('images/iconos_ecommerce/Tunegocioeninternet.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Tu negocio en internet es más rentable que uno tradicional.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_ecommerce/Lademandaonline.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">La demanda online se encuentra en crecimiento exponencial.</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_ecommerce/Facilitaelacceso.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Facilitá el acceso del cliente a tus productos.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_ecommerce/Lamayoria.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">La mayoria de las peronas realizn compras online.</p>
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
                    <div class="col-md-10 m-auto pc-float-none">

                       <div class="col-md-4 col-xs-12">
                        <div class="">
                            <div>
                                <h3 class="size-21">La vidriera de tu local en la web</h3>                                
                            </div>
                            <div class="">
                                <p class="desarrollo_recuadro">Desarrollamos una página de ventas novedosa, con el diseño a medida de tu empresa, respetado la imagen institucional de la misma. Acompañado de las estrategias de Marketing Digital actuales.</p>                           
                            </div>
                        </div>
                        </div>
                    <!-- /shop -->

                    <!-- shop -->
                       <div class="col-md-4 col-xs-12">
                        <div class="">
                            <div>
                                <h3 class="size-21">Catálogo</h3>                                
                            </div>
                            <div class="">
                                <p class="desarrollo_recuadro">Hoy en día tener tu catalogo en línea es una necesidad. Acerca tus productos a todos los canales digitales, como Facebook, twiteer, instagram. A tan solo un click poder mostrar todos tus productos o servicios.</p> 
                            </div>
                        </div>
                        </div>
                    <!-- /shop -->

                    <!-- shop -->
                       <div class="col-md-4 col-xs-12">
                        <div class="">
                            <div>
                                <h3 class="size-21">Responsive</h3>                                
                            </div>
                            <div class="">
                                 <p class="desarrollo_recuadro">Con el avance de la tecnología debemos estar preparados para acceder desde cualquier dispositivo, tanto computadoras de escritorios como notebook o dispositivos móviles. Lleva tu empresa en el bolsillo.</p>                             
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
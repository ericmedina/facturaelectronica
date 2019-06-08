@extends('layouts.home.main2')
@section('title','Sistemas a medida')
@section('contenido')
    <div id="#top"></div>
    <section id="home" class="pc-mt-N28">
        <div class="banner-container img_slider_sub_paginas">
            <img src="{{asset('images/tecladochico2.jpg')}}" alt="banner" />
            <div class="container banner-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="titulo-banner">
                        <h2>Sistemas a medida</h2>
                        <p>Soluciones personalizadas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="page-section pt-4 pt-lg-5">
        <div class="container">
            <div class=" col-md-10 col-md-offset-1">
                <div class="col-md-8 text-left">  
                        <p>Los sistemas a medida han dejado de ser un lujo o privilegio en todo el mundo, su implementación se ha convertido en una estructura fundamental en el ámbito empresarial. En un mundo tan innovador, las empresas deben ser lo más optimizadas posible, rápidas y eﬁcientes en todos sus procesos. El avance de la tecnología conllevo en brindar la solución a aquellos problemas de organización a través de sistemas innovadores y adaptables a las necesidades de cada empresa </p>
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
                            <img src="{{asset('images/iconos_sistemas/Controlefectivo.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Control efectivo de las actividades de la empresa</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_sistemas/Incrementaefectividad.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Incrementa la efectividad de los procesos de tu empresa</p>
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
                            <img src="{{asset('images/iconos_sistemas/Disminuyeerrores.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Disminuye errores, tiempo y consumo de recursos</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_sistemas/integracion.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Integracion de nuevas herramientas de vanguardia</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/.NOTICIAS FONDO BLANCO-->
    <section id="clients" style="padding-bottom:50px;">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="heading text-center">
                    <h2>Proceso</h2>
                </div>
                <div class="hide-xs">
                    <div class="proceso-1">
                        <div class="col-xs-3">
                            <p class="numero-pasos">1</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Análisis de problemas:</p>
                            <p class="descripcion-pasos">Indagamos sobre posibles falencias en los procesos para brindar una solución.</p>
                        </div>
                    </div>
                    <div class="proceso-3">
                        <div class="col-xs-3">
                            <p class="numero-pasos">3</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Desarrollo:</p>
                            <p class="descripcion-pasos">Plasmamos en un software a medida todo lo recaudado en los pasos anteriores.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12" style="height: 5px;background-color: #0094d8;"></div>
                    <div class="proceso-2">
                        <div class="col-xs-3">
                            <p class="numero-pasos">2</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Propuesta:</p>
                            <p class="descripcion-pasos">Diseñamos una propuesta de valor a aquella necesidad de tu empresa.</p>
                        </div>
                    </div>
                    <div class="proceso-4">
                        <div class="col-xs-3">
                            <p class="numero-pasos">4</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Testing:</p>
                            <p class="descripcion-pasos">Ponemos en funcionamiento y optimizamos el proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="hide-md proceso">
                    <div class="proceso-1 col-xs-12">
                        <div class="col-xs-3" style="height: 100%;">
                            <p class="numero-pasos"  style="height: 100%;">1</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Análisis de problemas:</p>
                            <p class="descripcion-pasos">Indagamos sobre posibles falencias en los procesos para brindar una solución.</p>
                        </div>
                    </div>
                    <div class="proceso-2 col-xs-12">
                        <div class="col-xs-3">
                            <p class="numero-pasos">2</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Propuesta:</p>
                            <p class="descripcion-pasos">Diseñamos una propuesta de valor a aquella necesidad de tu empresa.</p>
                        </div>
                    </div>
                    <div class="proceso-3 col-xs-12">
                        <div class="col-xs-3">
                            <p class="numero-pasos">3</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Desarrollo:</p>
                            <p class="descripcion-pasos">Plasmamos en un software a medida todo lo recaudado en los pasos anteriores.</p>
                        </div>
                    </div>
                    <div class="proceso-4 col-xs-12">
                        <div class="col-xs-3">
                            <p class="numero-pasos">4</p>
                        </div>
                        <div class="col-xs-9 pt-4">
                            <p class="titulo-pasos mb-0">Testing:</p>
                            <p class="descripcion-pasos">Ponemos en funcionamiento y optimizamos el proyecto.</p>
                        </div>
                    </div>
                </div>
                <style type="text/css" media="screen">
                    @media screen and (max-width: 600px) {
                        .proceso-1, .proceso-2, .proceso-3, .proceso-4{
                            float:none;
                            position: relative;
                            width: 100%;
                            margin-left: 0;
                            height: 120px;
                            display: block;
                            float:none;
                            clear:both;
                            overflow: hidden;
                        }
                        .proceso-1::after, .proceso-2::after, .proceso-3::after,.proceso-4::after{
                            content:"";
                            position: absolute;
                            top: 50%;
                            margin-top: -10px;
                            height: 20px;
                            width: 20px;
                            left: 0;
                            border-radius: 10px;
                            background-color: #0094d8;
                        }
                    }
                </style>
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
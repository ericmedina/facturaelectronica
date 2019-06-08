@extends('layouts.home.main2')
@section('title','Facturación Electrónica')
@section('contenido')
    <div id="#top"></div>
    <section id="home" class="pc-mt-N28">
        <div class="banner-container img_slider_sub_paginas">
            <img src="{{asset('images/tecladochico2.jpg')}}" alt="banner" />
            <div class="container banner-content">
                <div class="col-md-10 col-md-offset-1">
                    <div class="titulo-banner">
                        <h2>Facturación Electrónica</h2>
                        <p>Llevá tu necogio a donde vayas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients" class="page-section pt-4 pt-lg-5">
        <div class="container">
            <div class=" col-md-10 col-md-offset-1">
                <div class="col-md-11 text-left">  
                        <p> Proponemos optimizar los tiempos en la facturación y gestión administrativa de su empresa, desde donde quieras, de manera simple y a un bajo costo. Cumpliendo con el nuevo régimen de AFIP sobre la modalidad de facturación de los contribuyentes ofrece llevar un control de tu empresa en los procesos de administrativos, comercial y contable.</p>
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
                            <img src="{{asset('images/iconos_facturacion/Facturarapido1.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Facturá de forma rápida y simple en cumplimiento con las exigencias impuestas por AFIP.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_facturacion/Podesautomatizar.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Podés automatizar la facturación de tus servicios mensuales y el sistema facturara por vos.</p>
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
                            <img src="{{asset('images/iconos_facturacion/Registradatos.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Registrá los datos de tus clientes para facturarles. Y chequeá su historial de compras.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_facturacion/Registracompras.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Registrá tus compras, actualiza tu inventario automaticamente y las cuentas corrientes de tus proveedores.</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_facturacion/Manteneinventario1.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Mantené tu inventario actualizado a través de las compras y las ventas que realices.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12  mt-5 overflow-hidden">
                        <div class="col-lg-2 col-xs-3 p-0">
                            <img src="{{asset('images/iconos_facturacion/Obtenetulista.svg')}}">
                        </div>
                        <div class="col-xs-9 pt-md-2">
                            <p class="letras_sistemas">Obtené tu lista de precios, tus productos mas vendidos, tus cuentas corrientes y los balances de compras y ventas.</p>
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
                                <h3 class="size-21">Contable</h3>                                
                            </div>
                            <div class="">
                                <p class="desarrollo_recuadro">La obtención de los datos  de facturación necesarios para la realización de las distintas DDJJ se vuelve algo tedioso. Para esto, PampaDev ofrece un sistemas totalmente gratuito para contadores, en el cual si sus clientes facturan desde el mismo puede obtener la información correspondiente de manera muy simple y sencilla.</p>                           
                            </div>
                        </div>
                        </div>
                    <!-- /shop -->

                    <!-- shop -->
                       <div class="col-md-6 col-xs-12">
                        <div class="">
                            <div>
                                                                
                            </div>
                            <div class="pc-boton-registrarce cell-boton-registrarce mt-5">
                                <h3 class="text-center pt-5">REGISTRATE!</h3>
                                <p class="text-center pt-3 pb-4">Y OBTENE UN MES DE PRUEBA</p> 
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
<!DOCTYPE html>
<html lang="es">
<head>
   {{--  http://www.themezaa.com/html/pofo/home-classic-one-page.html --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nos dedicamos al diseño de paginas web empresariales, desarrollo sistemas de gestion y facturacion electrónica.">
    <meta name="keywords" content="Páginas web, Diseño paginas web, Desarrollo paginas web, Desarrollo sistemas de gestion, programas para pymes, facturacion electronica">
    <meta name="robots" content="index, follow">
    <meta name="author" content="pampadev.com.ar">
    <meta name="owner" content="Pampadev">

    <title>Pampadev - Sistemas de facturación electrónica online</title>                        
    <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico" />
    <!-- Bootstrap -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}?version=1.2">

</head>
<body>
    <header id="header" class="header">
        <div class="container">
            <nav class="nav">
                <div class="brand">
                    <img class="logotipo" src="{{asset('/images/Iconos pampadev/Logotipo_fondo_colores.png')}}" alt="icono pampadev">
                </div>
                <ul id="menu" class="menu">
                    <li>
                    <a href="#header" title="">Home</a>
                    </li>
                    <li>
                    <a href="" title="">Nosotros</a>
                    </li>
                    <li>
                    <a href="" title="">Servicios</a>
                    </li>
                    <li>
                    <a href="#contacto" title="">Contacto</a>
                    </li>
                    <li>
                    <a href="{{url('/register')}}" title="">Regístrate</a>
                    </li>
                    <li class="blue">
                    <a href="{{ url('/login') }}" title="">Iniciar sesión</a>
                    </li>
                </ul>
                <button class="collapse-button" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <ul id="collapsed-menu" class="collapsed-menu">
                    <li>
                    <a href="#header" title="">Home</a>
                    </li>
                    <li>
                    <a href="#quienes-somos" title="">Nosotros</a>
                    </li>
                    <li>
                    <a href="#servicios" title="">Servicios</a>
                    </li>{{-- 
                    <li>
                    <a href="" title="">Clientes</a>
                    </li> --}}
                    <li>
                    <a href="#contacto" title="">Contacto</a>
                    </li>
                    <li>
                    <a href="#planes" title="">Regístrate</a>
                    </li>
                    <li>
                    <a href="{{ url('/login') }}" title="">Iniciar sesión</a>
                    </li>
                </ul>
            </nav>
            <div id="title_header">
                <h1>Sistema de facturación online<span class="point">.</span></h1>
                <h2>LLEVÁ TU NEGOCIO A DONDE VAYAS</h2>
            </div>
            <article id="servicios-web">
                <div  id="facturacion-electronica" class="servicio">
                    <div>
                        <i class="fa fa-file-text-o"></i>
                    </div>
                    <h4>Facturación electrónica</h4>
                    <p>Facturá de forma rápida y simple en cumplimiento con las exigencias impuestas por AFIP.</p>
                </div>
                <div  id="gestion-clientes" class="servicio">
                    <div>
                    <i class="fa fa-user"></i>
                    </div>
                    <h4>Gestión de clientes</h4>
                    <p>Registrá los datos de tus clientes para facturarles. Y chequeá su historial de compras.</p>
                </div>
                <div id="seo" class="servicio">
                    <div>
                        <i class="fa fa-cubes"></i>
                    </div>
                    <h4>Control de stock</h4>
                    <p>Mantené tu inventario actualizado a través de las compras y las ventas que realices.</p>
                </div>
                <div id="e-commerce" class="servicio">
                    <div><i class="fa fa-gears"></i></div>
                    <h4>Gestión de servicios</h4>
                    <p>Podés automatizar la facturación de tus servicios mensuales y el sistema facturará por vos.</p>
                </div>
                <div id="responsive" class="servicio">
                    <div><i class="fa fa-shopping-cart"></i></div>
                        <h4>Compras</h4>
                        <p>Registrá tus compras actualizá tu automáticamente tu inventario y las cuentas corrientes de tus proveedores.</p>
                </div>
                <div  id="estadisticas" class="servicio">
                    <div><i class="fa fa-bar-chart"></i></div>
                    <h4>Estadísticas y reportes</h4>
                    <p>Obtené tu lista de precios, tus productos más vendidos, tus cuentas corrientes y los balances de compras y ventas.</p>
                </div>
            </article>
        </div>
    </header><!-- /header -->
    <section id="planes">
        <div class="container">
            <h1>¿Listo para comenzar a facturar?</h1>  
            <h4>Completá tus datos y en 24hs puedes comenzar a facturar.</h4>
            <h4>Podés usar tarjeta, RapiPago o depósito bancario a través de MercadoPago.</h4>
            <h4>Cancelá cuando quieras, no tenés un tiempo mínimo.</h4>
            <article class="row clearfix" id="plan_unico">
                <div class="col-lg-4 col-sm-12">
                    <div id="precio">
                        <h2>PLAN ÚNICO</h2>
                        <h3>$550 MENSUALES</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" id="detalle">
                    <ul>
                        <li>Facturas ilimitadas</li>
                        <li>Control de productos y servicios</li>
                        <li>Cuentas corrientes</li>
                        <li>Proveedores y compras</li>
                        <li>Soporte vía tickets</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" id="register">
                    <div id="boton_registrar">
                        <a href="{{ url('/register') }}" title="">empezá <br><span id="ahora">ahora</span></a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section id="contacto" class="clearfix">
        <div id="title_contacto" class="col-xs-12 col-md-5 col-md-offset-1">
            <h1>¿Tenés alguna duda o consulta?</h1>
            <h2>COMPLETÁ EL FORMULARIO Y TE CONTACTAREMOS EN BREVE</h2>
        </div>
        <div id="form_contacto" class="col-xs-12 col-md-6">
            <form action="{{ url('/consulta') }}" method="get" accept-charset="utf-8">
                <input type="text" name="nombre" value="" placeholder="Nombre/Razón social">
                <input type="text" name="categoria" value="" placeholder="Ingrese la categoría a la que se dedica">
                <input type="text" name="telefono" value="" placeholder="Teléfono">
                <input type="text" name="email" value="" placeholder="Email">
                <input type="text" name="localidad" value="" placeholder="Localidad">
                <textarea rows="3" name="consulta" placeholder="Consulta"></textarea>
                <div class="button_container clearfix">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>
{{--     <footer>
        <div id="datos-contacto">
            <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
            <a href="mailto:administracion@pampadev.com.ar?subject="><i class="fa fa-envelope" aria-hidden="true"></i>administracion@pampadev.com.ar</a>
            <p><i class="fa fa-mobile" aria-hidden="true"></i>+54 9 2954 589992 / +54 9 2954 363688</p>
        </div>
        <div id="social">
            <a href="http://www.facebook.com.ar/pampadev17" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
    </footer> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109285614-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109285614-1');
    </script>

    
</body>
</html>
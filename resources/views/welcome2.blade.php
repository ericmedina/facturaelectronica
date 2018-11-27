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

    <title>Pampadev - Páginas web y sistemas de gestión</title>
    
    <style type="text/css">
        .header{
            width: 100%;
            height: 105vh;
            background: url('/images/programming2.png'), black;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
        }
    </style>                            
    <link rel="icon" href="{{ asset('images/icono_fondo_blanco2.png') }}" type="image/ico" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/style.min.css')}}">

</head>
<body>
    <nav class="nav">
        <div class="brand">
            <a href="#header" title="">
                <img class="logotipo" src="{{asset('/images/Iconos pampadev/Logo tipo fondo blanco2.png')}}" alt="icono pampadev">
            </a>
        </div>
        <ul id="menu" class="menu">
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
            <a href="{{ url('/login') }}" title="">Iniciar sesión</a>
            </li>
        </ul>
    </nav>
    <header id="header" class="header">
        <div>
            <h1>Desarrollo de soluciones informáticas</h1>
            <hr>
            <p><span class="servicios-header" id="message"></span><span id="cursor" style="display:inline-block;" class="cursor">&nbsp;</span></p>
        </div>
        <i class="material-icons">keyboard_arrow_down</i>
    </header><!-- /header -->
    <section id="quienes-somos" class="">
        <div id="resumen-empresa">
            <h2 class="">PAMPA<span>dev.</span></h2>
            <p class="">Somos una empresa de desarrollo de software que busca plasmar las ideas de nuestros clientes de la manera más efectiva, óptima y  funcional posible. Ya sea para el diseño de una página web, la administración de usuarios y clientes, el control de ventas, la gestión de servicios, o la obtención de estadísticas y reportes para controlar su empresa, esto y mucho más son las bases de nuestro servicio.
            </p>
        </div>
        <div id="equipo">
            <div id="lautaro">
                <figure>
                    <img src="{{ asset('images/lautaro.jpg') }}" alt="Lautaro Alvarez">
                </figure> 
                <div class="presentacion">
                    <h4>Lautaro Alvarez</h4>
                    <h5>Analista en sistemas</h5>
                    <p>Especializado en desarrollo web.</p>
                    <p>Orientado al análisis y diseño de sistemas.</p>
                    <p>Encargado del contacto y administración de los clientes.</p>
                    <p>Desarrollador de Back-End y Web Apps.</p>
                </div>
            </div>
            <div id="eric">
                <figure>
                    <img src="{{ asset('images/Eric.jpg') }}" alt="Eric Medina">
                </figure> 
                <div class="presentacion">
                    <h4>Eric Medina</h4>
                    <h5>Analista en sistemas</h5> 
                    <p>Especializado en desarrollo web y de oficina.</p>
                    <p>Orientado a la búsqueda e inclusión de nuevas tecnologías.</p>
                    <p>Encargado del armado de la estructura de los sistemas.</p>
                    <p>Desarrollador de Front-End y bases de datos.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="servicios">
        <article id="paginas-web" class="servicios">
            <div id="web">
                <div id="web-cartel">
                    <i class="material-icons">important_devices</i>
                    <p>Desarrollamos su página web a medida y con la última tecnología del mercado.</p>
                </div>
            </div>
            <article id="web-descripcion">
                <h2>¿Por qué es importante una página web?</h2>
                <h3>Las empresas con páginas web crecen un 17%</h3>  
                <p>Una página web es tener su negocio abierto las 24 horas los 365 días del año. Ésta le ayudará a captar nuevos clientes y reforzará la imagen corporativa de su empresa, además de ser una herramienta de marketing y comunicación con sus clientes a bajo costo y con grandes beneficios.</p>
                <p>Nosotros nos enfocamos en que la experiencia del cliente, al buscar y navegar la página, sea agradable e intuitiva y que refleje, de la mejor manera posible, las cualidades de su empresa.
                </p>
            </article>
        </article>
        <article id="servicios-web">
            <div id="responsive" class="servicio">
                <i class="material-icons">important_devices</i>
                    <h4>Diseño responsive</h4>
                    <p>Logramos que sus páginas no pierdan la esencia y funcionalidad al visitarla desde distintos dispositivos como smartphones,  tablets, notebooks, PCs, etc.</p>
            </div>
            <div id="seo" class="servicio">
                <i class="material-icons">search</i>
                    <h4>Posicionamiento web</h4>
                    <p>Nuestro diseño se basa en lograr el mejor posicionamiento en los motores de búsqueda de Google, logrando ampliar las posibilidades de visitas de las páginas de nuestros clientes.</p>
            </div>
            <div id="e-commerce" class="servicio">
                <i class="material-icons">shopping_cart</i>
                <h4>E-commerce</h4>
                <p>Para aquellos clientes que deseen ampliar sus ventas a través de la web, podemos ofrecerles páginas de ventas online a medida, respetando sus diseños e ideas empresariales.  </p>
            </div>
        </article>
        <article id="sistemas-gestion" class="servicios">
            <div id="sistemas">
                <div id="sistemas-cartel">
                    <i class="material-icons">laptop_chromebook</i>
                    <p>Realizamos sistemas según las necesidades de su empresa.</p>
                </div>
            </div>
            <div id="sistemas-descripcion">
                <h2>¿Qué beneficios me da un sistema de gestión?</h2>
                <h3>Mejore la atención y aumente la productividad</h3>
                <p>Invertir en software empresarial, es invertir en sistematizar y optimizar los procesos diarios que realiza la empresa, como el control de stock, la gestión de los datos de los clientes, la facturación, la logística, etc.. Procesos que si se descontrolan, pueden generar dolores de cabeza o hasta pérdidas de dinero. Con un sistema de gestión se logra evitar estos conflictos y además optimizarlos, logrando mejorar el flujo de la empresa e incluso ayudar en el proceso de toma de decisiones basado en una adecuada administración de la información recopilada.</p>
                <p>Nosotros creamos programas que se adapten a la empresa y a sus necesidades para hacer más simple el proceso de sistematización y potenciar el funcionamiento de ésta.</p>          
            </div>
        </article>
        <article id="servicios-sistemas">
            <div  id="facturacion-electronica" class="servicio">
                <i class="material-icons">description</i>
                <h4>Facturación electrónica</h4>
                <p>De acuerdo a los nuevos reglamentos impuestos desde la AFIP, desarrollamos sistemas de facturación online que permiten realizar su factura convencional pero bajo los parámetros de AFIP, como así también llevar un control de su stock o servicio. </p>
            </div>
            <div  id="gestion-clientes" class="servicio">
                <i class="material-icons">people</i>
                <h4>Gestión de clientes</h4>
                <p>Los clientes son lo más importante para cualquier empresa, por eso nuestros sistemas cuentan con un servicio donde puede obtener todos los datos necesarios de sus clientes, mostrando así una empresa dedicada a los mismos.</p>
            </div>
            <div  id="estadisticas" class="servicio">
                <i class="material-icons">trending_up</i>
                <h4>Estadísticas y reportes</h4>
                <p>Porque consideramos de alta importancia los resultados, le ofrecemos la posibilidad de obtener estadísticas y gráficos de su funcionamiento a través del sistema y poder generar reportes que consideren necesarios. </p>
            </div>
        </article>
    </section>

    <section id="tecnologias">
        <figure>
            <img src="{{ asset('/images/bootstrap_logo.png') }}" alt="bootstrap">
        </figure>
        <figure>
            <img src="{{ asset('/images/materialize_logo.png') }}" alt="materialize">
        </figure>
        <figure>
            <img src="{{ asset('/images/laravel_logo.png') }}" alt="laravel">
        </figure>
        <figure>
            <img src="{{ asset('/images/react.png') }}" alt="react js">
        </figure>
        <figure>
            <img src="{{ asset('/images/Ruby_on_Rails-logo.png') }}" alt="Ruby on rails">
        </figure>
    </section>
    <section id="fases-desarrollo">
        <div id="idea">
            <h3>01</h3>
            <h4>Reunión y planteo de idea</h4>
            <p>El primer paso es junto al cliente, quien tiene la idea y
             las condiciones que va a enfrentar el sistema, se plantean 
                todos los casos posibles, los distintos elementos que van a intervenir,
             y el diseño que el cliente desee en su página, sistema o aplicación.</p>    
        </div>
        <div id="diseño">
            <h3>02</h3>
            <h4>Diseño y desarrollo del proyecto</h4>
            <p>Ya con la idea planteada PampaDev la lleva adelante, siempre
             manteniendo al tanto al cliente de posibles mejoras o distintos 
            caminos a seguir, buscando siempre el resultado más óptimo y eficaz posible 
            para lograr el mejor resultado.</p>
        </div>
        <div id="pruebas">
            <h3>03</h3>
            <h4>Pruebas y depuración</h4>
            <p>Esta etapa se realiza junto al cliente, es la entrega del prototipo puesto
             en marcha para buscar garantizar el correcto funcionamiento del sistema, la
              rápida respuesta, y el agrado a la vista del cliente.</p>
        </div>
        <div id="marcha">
            <h3>04</h3>
            <h4>Puesta en marcha</h4>
            <p>Una vez puesto a prueba se pone en marcha, siempre a la escucha del
             cliente y posibles mejoras que surjan con el uso diario, garantizando el
              mantenimiento correspondiente, para lograr una grata experiencia al cliente.</p>
        </div>
    </section>
    <section id="contacto" >
        <div id="datos">
        </div>
        <div id="formulario">
            <h4>Completa el formulario y te contactaremos en breve</h4>
            <h2>¿Listo para contarnos tu idea?</h2>
            <form action="{{ url('/consulta') }}" method="get" accept-charset="utf-8">
                <input type="text" name="nombre" value="" placeholder="Nombre/Razón social">
                <input type="text" name="categoria" value="" placeholder="Ingrese la categoría a la que se dedica">
                <input type="text" name="telefono" value="" placeholder="Teléfono">
                <input type="text" name="email" value="" placeholder="Email">
                <input type="text" name="localidad" value="" placeholder="Localidad">
                <textarea rows="3" name="consulta" placeholder="Consulta"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
    <footer>
        <div id="datos-contacto">
            <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
            <a href="mailto:administracion@pampadev.com.ar?subject="><i class="fa fa-envelope" aria-hidden="true"></i>administracion@pampadev.com.ar</a>
            <p><i class="fa fa-mobile" aria-hidden="true"></i>+54 9 2954 589992 / +54 9 2954 363688</p>
        </div>
        <div id="social">
            <a href="http://www.facebook.com.ar/pampadev17" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript" charset="utf-8" defer></script>
    <script src="{{ asset('js/animations.js') }}" type="text/javascript" charset="utf-8" defer></script>
    <script src="{{ asset('js/writing.min.js') }}" type="text/javascript" charset="utf-8" defer></script>
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
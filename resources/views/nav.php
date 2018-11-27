<nav class="nav">
    <div class="brand">
        <a href="#header" title="">
            <img class="logotipo" src="{{asset('/images/Iconos pampadev/icono_fondo_blanco2.png')}}" alt="icono pampadev">
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
        <a href="#planes" title="">Regístrate</a>
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
        <a href="#planes" title="">Regístrate</a>
        </li>
        <li>
        <a href="{{ url('/login') }}" title="">Iniciar sesión</a>
        </li>
    </ul>
</nav>
<div class="top_nav">
  <div class="nav_menu sombra_gris">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>
            {{ Auth::user()->razon_social }}
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="{{ url('empresas/perfil') }}">Mi perfil</a></li>
            <li><a href="{{ url('empresas/password') }}">Cambiar contraseña</a></li>
            <li><a href="{{ url('/empresas/confirmar_suspender') }}">Suspender cuenta</a></li>
           {{--  <li><a href="">Help</a></li> --}}
            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
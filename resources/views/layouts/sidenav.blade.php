
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Vista principal</a></li>
      <li><a><i class="fa fa-dollar"></i> Ventas <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('ventas.index') }}">Ver ventas</a></li>
          <li><a href="{{ route('facturas.create') }}">Nuevo comprobante</a></li>
        </ul>
      </li>
      @if(auth::user()->contrato->licencia->nombre != 'basico' && (Auth::user()->tipo_actividad == "Productos" || Auth::user()->tipo_actividad == "productos y servicios"))
      <li><a><i class="fa fa-shopping-cart"></i> Compras <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('compras.index') }}">Ver compras</a></li>
          <li><a href="{{ route('compras.create') }}">Nueva compra</a></li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->contrato->licencia->nombre != 'Basico')
      <li><a><i class="fa fa-calculator"></i> Gastos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('gastos.index') }}">Ver gastos</a></li>
          <li><a href="{{ route('gastos.create') }}">Nuevo gasto</a></li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->contrato->licencia->nombre != 'Basico' && (Auth::user()->tipo_actividad == "Productos" || Auth::user()->tipo_actividad == "productos y servicios"))
      <li><a><i class="fa fa-cubes"></i> Productos <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('productos.index') }}">Ver productos</a></li>
          <li><a href="{{ route('productos.create') }}">Nuevo producto</a></li>
          <li><a href="{{ route('remarcar') }}">Remarcar</a></li>

          <li><a href="{{ route('categoriaproducto.index') }}">Ver categorias</a></li>
          <li><a href="{{ route('categoriaproducto.create') }}">Nueva categoria</a></li>
          <li><a href="{{ route('marcas.index') }}">Ver marca</a></li>
          <li><a href="{{ route('marcas.create') }}">Nueva marca</a></li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->contrato->licencia->nombre != 'Basico' && (Auth::user()->tipo_actividad == "servicios" || Auth::user()->tipo_actividad == "productos y servicios"))
        <li><a><i class="fa fa-gears"></i> Servicios <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ route('servicios.index') }}">Ver servicios</a></li>
            <li><a href="{{ route('servicios.create') }}">Nuevo servicio</a></li>
          </ul>
        </li>
      @endif
      <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('clientes.index') }}">Ver clientes</a></li>
          <li><a href="{{ route('clientes.create') }}">Nuevo cliente</a></li>
          <li><a href="{{ route('resumen_cuenta.index') }}">Cuentas corrientes</a></li>
        </ul>
      </li>
      @if(Auth::user()->contrato->licencia->nombre != 'Basico')
      <li><a><i class="fa fa-bar-chart"></i> Estadísticas <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{url('/estadisticas/general')}}">General</a></li>
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Proveedores</a></li>
        </ul>
      </li>
      @endif
      @if(Auth::user()->contrato->licencia->nombre != 'Basico' && (Auth::user()->tipo_actividad == "Productos" || Auth::user()->tipo_actividad == "productos y servicios"))
      <li><a><i class="fa fa-truck"></i> Proveedores <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ route('proveedor.index') }}">Ver proveedores</a></li>
          <li><a href="{{ route('proveedor.create') }}">Nuevo proveedor</a></li>
          <li><a href="{{ route('proveedor.deuda') }}">Cancelar deuda</a></li>
        </ul>
      </li>
      @endif
      <li><a><i class="fa fa-file-text-o"></i>Tickets</a>
        <ul class="nav child_menu">
          <li><a href="{{ route('ticket.index') }}">Mis Tickets</a></li>
          <li><a href="{{ route('ticket.create') }}">Nuevo Ticket</a></li>
        </ul>
      </li>
      <li><a href="{{ route('pagos.index') }}"><i class="fa fa-credit-card"></i>Mis pagos</a></li>
      <li><a><i class="fa fa-user"></i> Mi cuenta <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{ url('empresas/perfil') }}">Mi perfil</a></li>
          <li><a href="{{ url('empresas/password') }}">Cambiar contraseña</a></li>
          <li><a href="{{ url('/empresas/confirmar_suspender') }}">Suspender cuenta</a></li>
          <li><a href="{{ url('/logout') }}">Cerrar sesión</a></li>
          <li><a href="{{ url('contratos/create')}}">Licencias</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
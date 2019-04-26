<div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/')}}" class="site_title"><img height="40" src="{{ asset('images/icono_fondo_blanco2.png') }}" alt="Logo pampadev"> <img height="40" src="{{ asset('images/logotipo_fondo_blanco.png') }}" alt="Icono pampadev"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->razon_social }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('layouts.sidenav')
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('layouts.topnav')
        <!-- /top navigation -->
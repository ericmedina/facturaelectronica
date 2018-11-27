<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        @include('layouts.navbars')
        <!-- page content -->
        <div class="right_col" role="main">
          @yield('contenido', '')
        </div>
        <!-- /page content -->
  
        <!-- footer content -->
        @include('layouts.footer')
        <!-- /footer content -->
      </div>
    </div> 
    @include('layouts.javascripts')
  </body>
</html>

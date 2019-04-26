<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.min.js')}}"></script>
<script src="{{asset('js/index.js')}}?v=1.0"></script>
<script type="text/javascript">
    $(document).ready(function($) {
        $(".fila-clickeable").click(function() {
            window.location = $(this).data("href");
        });
    });
  </script>
@yield('js', '')
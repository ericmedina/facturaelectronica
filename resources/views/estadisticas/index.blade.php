@extends('layouts.panel_form')
@section('title', 'Mi perfil - PampaDev')
<link href="./genetella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
@section('titulo_panel')
  <h2 class="text-center">Estadisticas generales</h2>
@endsection
@section('contenido_panel')
  
  <style type="text/css">
  @media only screen and (min-width: 1201px) {
      .margin_20{
        margin-left:20%;
      }
    }
      .margin_top_estadisticas{
        margin-top: 8px;
      }
  </style>

 <div class="container">
      <div class="col-lg-7 prueba row margin_20 margin_top_estadisticas">
        <div class="col-lg-12">
          <div class="col-lg-3">
              <label class="margin_top_estadisticas">Ventas año: </label>            
          </div>
          <div class="col-lg-5">
             <select id="select_año" class="select_año form-control" name="select_año">
                 @foreach($fechas as $fecha)
                     <option value="{{$fecha->año}}">{{$fecha->año}}</option>        
                 @endforeach
             </select>
          </div>
      
        </div>
      
      <canvas id="myChart"></canvas>
      </div>
      <div class="col-lg-7 prueba row margin_20 margin_top_estadisticas">
        <div class="col-lg-12">
          <div class="col-lg-5">
              <label class="margin_top_estadisticas">Articulos mas vendidos año: </label>
          </div>
          <div class="col-lg-5">
              <select id="select_año" class="select_año form-control" name="select_año">
                  @foreach($meses as $mes)
                      <option value="{{$mes->mes}}">{{$mes->mes}}</option>        
                  @endforeach
              </select>
          </div>
      
        </div>
      
      <canvas id="grafico_articulos"></canvas>
      </div>
 </div>
{{-- <input type="hidden" value="{{$venta->totales}}">
<input type="hidden" value="{{Carbon\Carbon::parse($venta->created_at)->format('M')}}"> --}}
 
@endsection
@section('js')
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
 <script type="text/javascript">
    $.ajax({
          url: "{{ url('/estadisticas/general/ano') }}",
          type:"post",
          data:{
            ano : $('#select_año').val(),
            _token: "{{ csrf_token() }}"
          },
              complete: function(response){
                  var ventaz=[];
                  response.responseJSON.forEach(function(venta){
                      ventaz.push(venta);

                   });
                  console.log(ventaz);
                  grafico(ventaz);

              }
        });    

    $("#select_año").on('change', function(){
      
         $.ajax({
              url: "{{ url('/estadisticas/general/ano') }}",
              type:"post",
              data:{
                ano : $('#select_año').val(),
                _token: "{{ csrf_token() }}"
              },
                  complete: function(response){
                      var ventaz=[];
                      response.responseJSON.forEach(function(venta){
                          ventaz.push(venta);
                       });
                    //  removeData(myChart);
                      myChart.destroy();
                      grafico(ventaz);
                      console.log(ventaz)
                     //myChart.update();
                     
                      
                  }
            });    
        });
function grafico(venta){
    
 
 var ctx = document.getElementById("myChart").getContext('2d');

 window.myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio" , "Julio", "Agosto" , "Septiembre", "Octubre" , "Noviembre", "Diciembre"],
        datasets: [{
            label: 'Ventas',
            data: venta,
            backgroundColor:'rgba(38, 185, 151, .6)',
            borderColor:'rgba(3,88,106,.8)',
            borderWidth: 3,
            pointBackgroundColor:'rgba(3,88,106, .8)',            

        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                }
            }]
        }
    }
});

    
}

grafico_articulos();

function grafico_articulos(){
 
 var ctx = document.getElementById("grafico_articulos").getContext('2d');

 window.grafico_articulos = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Teclado Genius", "Mouse", "Pen drive", "otra cosa", "otra cosa"],
        datasets: [{
           label: 'Vendidos',
            data: [10, 5, 100, 60, 0],
            backgroundColor: [
                'rgba(38, 185, 151, .8)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, .8)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, .8)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, .8)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, .8)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, .8)',
                'rgba(3,88,106,1)'
            ],
            borderColor: [
                'rgba(38, 185, 151, 1)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, 1)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, 1)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, 1)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, 1)',
                'rgba(3,88,106,1)',
                'rgba(38, 185, 151, 1)',
                'rgba(3,88,106,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
    }
});

    


}




 </script>
@endsection
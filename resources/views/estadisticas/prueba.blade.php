<canvas id="myChart" width="400" height="400"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" type="text/javascript" ></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 9, 20, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
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
        }
    }
});

/*------------------------- COPIA DE GRAFICOS POR SI ME MANDO UNA CAGADA------------------------





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
    type: 'bar',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio" , "Julio", "Agosto" , "Septiembre", "Octubre" , "Noviembre", "Diciembre"],
        datasets: [{
            label: 'Ventas',
            data: venta,
            backgroundColor: [
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
        }
    }
});

    
}

grafico_articulos();

function grafico_articulos(){
 
 var ctx = document.getElementById("grafico_articulos").getContext('2d');

 window.grafico_articulos = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio" , "Julio", "Agosto" , "Septiembre", "Octubre" , "Noviembre", "Diciembre"],
        datasets: [{
            label: 'vendidos',
            data: [5,10,0, 20, 190, 100],
            backgroundColor:'rgba(38, 185, 151, 1)',
            borderColor:'rgba(3,88,106,1)',
            borderWidth: 3,
            pointBackgroundColor: 'rgba(3,88,106,1)',
           
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















-------------------------------------- SALVAME PAPEEEEE-------------------------------------------------*/
</script>
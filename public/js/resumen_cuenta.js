$(document).ready(function(){
    num_comprobante();
    calcular_totales();

	$('#btn-generar-comprobante').on('click', function(){
        generar_comprobante();
	});
    $('#btn-observaciones').on('click', function(){
        $('.modal-observaciones').modal('show');
    })
    $('#boton_imprimir').on('click', function(){
        $('#form_comprobante').submit();
    });

   
   //borrar detalles
   $('#tabla-detalle').on('click', '.boton-borrar-detalle', function(){
   		tabla = $(this).parents("tbody").html();
   		fila =  '<tr>'+$(this).parents("tr").html()+'</tr>';
   		$(this).parents("tbody").html(tabla.replace(fila,''));
   		calcular_totales();
   });

});

function calcular_totales(){
	$('#tabla-iva > tbody').html('');
	filas = $('#tabla-detalle > tbody > tr').length;
	total = 0;
	for (var i = 0; i < filas; i++) {
        parcial = parseFloat($('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(3).html().replace('$',''));
    	total +=  parcial;
	}
	$('#total').val(total);
}

function generar_comprobante(){

    filas = $('#tabla-detalle > tbody > tr').length;
    detalles = new Array();
    array_detalles = new Array();
    for (var i = 0; i < filas; i++) {
        fecha = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(1).html();
        id = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(0).html();
        comprobante = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(2).html();
        total = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(3).html();
        detalles = {"fecha":fecha, "id":id, "comprobante":comprobante
                    ,"total":total.replace("$", "")};
        array_detalles.push(detalles);
        detalles = null;
    }

    $('#detalle').val(JSON.stringify(array_detalles));
    if(parseFloat($('#total').val())>100000 && $('#cuit').val() == ""){
        alert("El DNI/CUIT no puede estar vacío si el monto supera los $1000");
    }else{
        $('.modal-waiting-comprobante').modal('show');
        $.ajax({
            type:'POST',
            url: '/resumen/generate',
            data:$("#form_comprobante").serialize(),
            dataType:'json',
            complete: function(response){
                $('.modal-waiting-comprobante').modal('hide');
                $('#boton_imprimir').attr("href", '/facturas/'+$('#tipo_comprobante').val()+$('#num_comprobante').val());
                $('.modal-aprobado').modal('show');
            }
        });
    }
}

function num_comprobante(){
    $.ajax({
        type:'GET',
        url: '/facturas/num_comprobante/'+$('#tipo_comprobante').val(),
        dataType:'json',
        complete: function(response){
            $('#num_comprobante').val(response.responseText);
        }
    });
}
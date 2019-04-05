$('#boton_buscar_proveedor').on('click', function(){
	$('.modal-buscar-proveedor').modal('show');
});

$('#total').on('change', function(){
    $('#pagado').val($('#total').val());
});
$('#buscar_proveedor').on('keyup', function(){
    var fila="";
    $.ajax({
        type:'GET',
        url: '/proveedor/search/'+$('#buscar_proveedor').val(),
        complete: function(data){
            clientes = JSON.parse(data.responseText);
            clientes.forEach( function(proveedor, posicion) {
                fila = fila+ '<tr>'+
                            '<td>'+proveedor.nombre+'</td>'+
                            '<td>'+proveedor.cuit+'</td>'+
                            '<td>'+proveedor.deuda+'</td>'+
                            '<td class="hide">'+proveedor.id+'</td>'+
                            '<td><button  type="button" class="boton boton-opciones boton-agregar-proveedor">Seleccionar</button></td>'+    
                        '</tr>';

            });
            $('#tabla_clientes > tbody').html(fila);
        }
    })
});
$('#tabla_clientes').on('click', '.boton-agregar-proveedor', function(){
    $(this).parents("tr").addClass("tr-selected");
    nombre = $(this).parents("tr").find("td").eq(0).html();;
    cuit = $(this).parents("tr").find("td").eq(1).html();
    id = $(this).parents("tr").find("td").eq(3).html();
    $('#id').val(id);
    $('#proveedor').val(nombre);
    $('#cuit').val(cuit);
    $('.modal-buscar-proveedor').modal('hide');
});

$('#btn-guardar-compra').on('click', function(){
    filas = $('#tabla-iva > tbody > tr').length;
        iva = new Array();
        alic = new Array();
        for (var i = 0; i < filas; i++) {
            alicuota = $('#tabla-iva > tbody').find("tr").eq(i).find("td").eq(0).html();
            imp_iva = $('#tabla-iva > tbody').find("tr").eq(i).find("td").eq(1).html();
            importe_neto = $('#tabla-iva > tbody').find("tr").eq(i).find("td").eq(2).html();
            iva = {"codigo": codigo_iva(alicuota), "importe_neto":importe_neto.replace("$",""), "importe_iva" :imp_iva.replace("$", "")};
            alic.push(iva);
            iva = null;
        }
        filas = $('#tabla-detalle > tbody > tr').length;
        detalles = new Array();
        array_detalles = new Array();
        for (var i = 0; i < filas; i++) {
            detalle = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(1).html();
            cantidad = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(0).html();
            importe = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(2).html();
            total = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(3).html();
            id =    $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(5).html();
            tipo =    $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(6).html();
            detalles = {"detalle":detalle, "cantidad":cantidad, "importe":importe.replace("$", "")
                        ,"total":total.replace("$", ""), "id":id, "tipo": tipo};
            array_detalles.push(detalles);
            detalles = null;
        }

        $('#alicuotas').val(JSON.stringify(alic));
        $('#detalle').val(JSON.stringify(array_detalles));
        
        if($("#id").val()==""){
            $('#message_text').html('Debe seleccionar un proveedor antes de guardar la compra');
             $('.modal_message').modal('toggle');
        }else{
             $('#form_compra').submit();
            
        }
});





$('#buscar_producto_compra').on('click', function(){
	$('.modal-agregar-compras').modal('show');
});
$('#buscar_producto').on('keyup', function(){
    $('#tabla_productos').parents('.table-modal').removeClass('hidden');
    var fila="";
    $.ajax({
		type:'GET',
		url: '/productos/search/'+$('#buscar_producto').val(),
		complete: function(data){
			productos = JSON.parse(data.responseText);
	        productos.forEach( function(producto, posicion) {
	        	fila = fila+ '<tr>'+
	        				'<td>'+producto.codigo+'</td>'+
	        				'<td>'+producto.producto+'</td>'+
                            '<td>'+producto.precio_compra+'</td>'+
	        				'<td>'+producto.stock+'</td>'+
	        				'<td>'+producto.proveedor.nombre+'</td>'+
	        				'<td class="hide">'+producto.id+'</td>'+
	        				'<td class="hide">'+producto.iva.alicuota+'</td>'+
	        				'<td class="hide">'+producto.iva_id+'</td>'+
	        				'<td><button type="button" class="boton boton-opciones boton-agregar-producto">Seleccionar</button></td>'+	
	        			'</tr>';

	        });
	        $('#tabla_productos > tbody').html(fila);
		}
	})
});
$('#tabla_productos').on('click', '.boton-agregar-producto', function(){
	$(this).parents("tr").addClass("tr-selected");
	codigo = $(this).parents("tr").find("td").eq(0).html();;
	producto = $(this).parents("tr").find("td").eq(1).html();
	precio_compra = $(this).parents("tr").find("td").eq(2).html();
	stock = $(this).parents("tr").find("td").eq(3).html();
	id = $(this).parents("tr").find("td").eq(5).html();
	iva = $(this).parents("tr").find("td").eq(6).html();
	$('#hidden_id').val(id);
	$('#hidden_iva').val(iva);
    $('#buscar_producto').val(producto);
	$('#stock').val(stock);
	$('#precio_producto').val(precio_compra);
	precio = $('#precio_producto').val();
    cantidad = $('#cantidad_detalle').val();
    $('#total_detalle').val(parseFloat(cantidad*precio));
    $('#tabla_productos').parents('.table-modal').addClass('hidden');
});
$('#cantidad_detalle').on('keyup', function(){
	cantidad = $(this).val();
	precio = $('#precio_producto').val();
	$('#total_detalle').val(parseFloat(cantidad*precio));
});
$('#boton-confirmar').on('click', function(){
   	if($('#hidden_id').val() == "0"){
   		alert('Debe seleccionar un producto');
   	}else{
   		fila = $('#tabla-detalle > tbody').html(); 
   		fila = fila+'<tr>'+
        				'<td>'+$('#cantidad_detalle').val()+'</td>'+
        				'<td>'+$('#buscar_producto').val()+'</td>'+
        				'<td>'+$('#precio_producto').val()+'</td>'+
        				'<td>'+$('#total_detalle').val()+'</td>'+
                        '<td class="hide">'+$("#hidden_iva").val()+'</td>'+
                        '<td class="hide">'+$('#hidden_id').val()+'</td>'+
        				'<td><button type="button" class="boton boton-cancelar boton-borrar-detalle">Borrar</button></td>'+	
        			'</tr>';
         $('#tabla-detalle > tbody').html(fila);
         calcular_totales();
         $('#cantidad_detalle').val('1');
         $('#total_detalle').val('0');
         $('#precio_producto').val('0');
         $('#hidden_id').val("0");
         $('#hidden_iva').val("");
         $('#buscar_producto').val('');
         $('#tabla_productos tbody > tr').remove();
         $('#buscar_producto').focus();
   	}
});
function calcular_totales(){
	$('#tabla-iva > tbody').html('');
	filas = $('#tabla-detalle > tbody > tr').length;
	total = 0;
	iva = new Array();
	importe_iva2 = parseFloat(0);
	importe_iva = parseFloat(0);
	subtotal = parseFloat(0);
	subtotal2 = parseFloat(0);
	for (var i = 0; i < filas; i++) {
		parcial = parseFloat($('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(3).html());
    	total +=  parcial;
    	alic = parseFloat($('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(4).html().replace('%',''));
    	alicuota = $('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(4).html();
    	subtotal = parcial/((alic/100)+1);
    	subtotal2 += parcial/((alic/100)+1);
    	importe_iva = parcial-subtotal;
    	importe_iva2 += parcial-subtotal;
    	if( iva[alicuota] == null){
    		iva[alicuota] = {"importe_iva":0, "importe_neto":0};
    	}
    	iva[alicuota] = {"importe_iva":parseFloat(iva[alicuota].importe_iva)+importe_iva, "importe_neto": parseFloat(iva[alicuota].importe_neto)+subtotal};
	}
	fila_iva = "";
	for(key in iva){
		fila_iva+= '<tr><td>'+key+'</td><td>$'+iva[key].importe_iva.toFixed(2)+'</td><td class="hide">'+iva[key].importe_neto.toFixed(2)+'</td></tr>';
	}
	$('#tabla-iva > tbody').html(fila_iva);
	$('#subtotal').val(subtotal2.toFixed(2));
	$('#importe_iva').val(importe_iva2.toFixed(2));
	$('#total').val(total);
    $('#pagado').val(total);
}


function codigo_iva(alicuota){
    switch (alicuota) {
        case "21%":
            return 5;
            break;
        case "10.5%":
            return 4;
            break;
        case "No Gravado":
            return 1;
            break;
        case "Exento":
            return 2;
            break;
        case "0%":
            return 3;
            break;
        case "27%":
            return 6;
            break;
    }
}

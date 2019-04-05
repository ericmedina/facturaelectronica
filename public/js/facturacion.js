$(document).ready(function(){
    //-------------------------------------------------------
    //EVENTOS FACTURACION CREATE
    //-------------------------------------------------------
    //CHECK NUMERACION COMPROBANTE
        num_comprobante();
    //ENVIAR DATOS DE FACTURA A AFIP
        $('#btn-generar-comprobante').on('click', function(){
            if($('#total').val() == '0' || $('#total').val() == '' || $('#tabla-detalle > tbody > tr').length <=0){
                $('.modal_message #message_title').html('Error');
                $('.modal_message #message_text').html('Por favor complete todos los campos');
                $('.modal_message').modal('show');
            }else{
                if($('#tipo_comprobante').val() == "NCA" || $('#tipo_comprobante').val() == "NCB" || $('#tipo_comprobante').val() == "NCC"){
                    $('.modal-assoc').modal('show');
                }else{
                    generar_comprobante();
                }
            }
        });
    //ENVIAR DATOS DE FACTURA SI ES NOTA DE CREDITO
        $('#btn_assoc').on('click', function(){
            generar_comprobante();
        });
    //ABRIR DIALOG OBSERVACIONES
        $('#btn-observaciones').on('click', function(){
            $('.modal-observaciones').modal('show');
        })
    //IMPRIMIR COMPROBANTE
        $('#boton_imprimir').on('click', function(){
            window.location.href = "/facturas/create";
        });
    //BOTON ENVIAR POR MAIL
        $('#boton_sendMail').on('click', function(){
            $.ajax({
                type:'GET',
                url: '/cliente/email/',
                data:{
                    cuit : $('#cuit').val()
                },
                dataType:'json',
                complete: function(response){
                    if(response.responseText == '' || response.responseText == null){
                        $('.modal-email').modal('toggle')
                    }else{
                        $('#email').val(response.responseText);
                        $('.modal-email').modal('toggle');
                    }
                }
            })
        })
        $('#btn_email').on('click', function(){
            if($('#email').val() == ''){
                $('.modal_message #message_title').html('Error');
                $('.modal_message #message_text').html('Por favor complete todos los campos');
                $('.modal_message').modal('show');
            }else{
                window.location.href= '/factura/send-mail/'+$('#btn_email').data('venta')+"/?email="+$('#email').val();
            }
        });
    //ABRIR DIALOG PRODUCTOS
        $('#boton-modal-producto').on('click', function(){
            $('.modal-agregar-producto').modal('show');
            $('#buscar_producto').focus();
        });
        $('.modal-agregar-producto').on('shown.bs.modal', function() {
            $('#buscar_producto').focus();
        });
    //ABRIR DIALOG SERVICIO
        $('#boton-modal-servicio').on('click', function(){
            $('.modal-agregar-servicio').modal('show');
            $('#buscar_servicio').focus();
        });
        $('.modal-agregar-servicio').on('shown.bs.modal', function() {
            $('#buscar_servicio').focus();
        });
    //AGREGAR DIALOG DESCRIPCION
        $('#boton-modal-descripcion').on('click', function(){
            $('.modal-agregar-descripcion').modal('show');
            $('#descripcion').focus();
        });
        $('.modal-agregar-descripcion').on('shown.bs.modal', function() {
            $('#descripcion').focus();
        });
    //CHEQUEAR NUMERO COMPROBANTE SEGUN EL TIPO DE CBTE
        $('#tipo_comprobante').on('change', function(){
            num_comprobante();
        });
    //CAMBIAR TIPO DE COMPROBANTE SEGUN RESPONSABILIDAD DE IVA
        $('#resp_iva').on('change', function(){
            switch ($(this).val()) {
                case "IVA Responsable Inscripto":
                    $('#tipo_comprobante').val("A");
                    break;
                case "Responsable Monotributo":
                    $('#tipo_comprobante').val("B");
                    break;
                case "IVA Responsable Inscripto":
                    $('#tipo_comprobante').val("B");
                    break;
                case "Consumidor Final":
                    $('#tipo_comprobante').val("B");
                    break;
                case "IVA Sujeto Exento":
                    $('#tipo_comprobante').val("B");
                    break;
                case "Monotributista Social":
                    $('#tipo_comprobante').val("B");
                    break;
                case "IVA Responsable No Inscripto":
                    $('#tipo_comprobante').val("B");
                    break;
            }
            num_comprobante();
        });
    //ABRIR DIALOG DE BUSCAR CLIENTE
        $('#boton-buscar-cliente').on('click', function(){
            $('.modal-buscar-cliente').modal('show');
            $('#buscar_cliente').focus();
        });
        $('.modal-buscar-cliente').on('shown.bs.modal', function() {
            $('#buscar_cliente').focus();
        });
    //BUSCAR CLIENTE
        $('#buscar_cliente').on('keyup', function(){
            var fila="";
            $.ajax({
                type:'GET',
                url: '/clientes/search/'+$('#buscar_cliente').val(),
                complete: function(data){
                    clientes = JSON.parse(data.responseText);
                    clientes.forEach( function(cliente, posicion) {
                        fila = fila+ '<tr>'+
                                    '<td data-label="Nombre">'+cliente.nombre+'</td>'+
                                    '<td data-label="CUIT">'+cliente.cuit+'</td>'+
                                    '<td class="hide">'+cliente.localidad+'</td>'+
                                    '<td class="hide">'+cliente.direccion+'</td>'+
                                    '<td class="hide">'+cliente.responsabilidades_iva .nombre+'</td>'+
                                    '<td data-label="Acciones"><button  type="button" class="boton boton-opciones boton-agregar-cliente">Seleccionar</button></td>'+
                                '</tr>';

                    });
                    $('#tabla_clientes > tbody').html(fila);
                }
            })
        });
    //SELECCIONAR CLIENTE DE LA TABLA BUSCAR Y MOSTRARLO EN INPUTS
        $('#tabla_clientes').on('click', '.boton-agregar-cliente', function(){
            $(this).parents("tr").addClass("tr-selected");
            nombre = $(this).parents("tr").find("td").eq(0).html();;
            cuit = $(this).parents("tr").find("td").eq(1).html();
            localidad = $(this).parents("tr").find("td").eq(2).html();
            direccion = $(this).parents("tr").find("td").eq(3).html();
            iva = $(this).parents("tr").find("td").eq(4).html();
            $('#nombre').val(nombre);
            $('#cuit').val(cuit);
            $('#localidad').val(localidad);
            $('#direccion').val(direccion);
            $('#resp_iva').val(iva).change();
            $('.modal-buscar-cliente').modal('hide');
        });
	//BUSCAR PRODUCTO
    	$('#buscar_producto').on('keyup', function(){
    	    var fila="";
    	    $.ajax({
    			type:'GET',
    			url: '/productos/search/'+$('#buscar_producto').val(),
    			complete: function(data){
    				productos = JSON.parse(data.responseText);
            if (productos.length > 0) {
                $('#tabla_productos').parents('.table-modal').removeClass('hidden');
            }else{
                $('#tabla_productos').parents('.table-modal').addClass('hidden');
            }
    		        productos.forEach( function(producto, posicion) {
    		        	fila = fila+ '<tr class="fila-seleccionada">'+
    		        				'<td data-label="Codigo">'+producto.codigo+'</td>'+
    		        				'<td data-label="Producto">'+producto.producto+'</td>'+
    		        				'<td data-label="IVA">'+producto.iva.alicuota+'</td>'+
                                    '<td data-label="Precio">'+producto.precio_venta+'</td>'+
                                    '<td class="hide">'+producto.id+'</td>'+
    		        				'<td class="hide">'+producto.iva_id+'</td>'+
    		        				'<td data-label="Acciones"><button  type="button" class="boton boton-opciones boton-agregar-producto">Seleccionar</button></td>'+
    		        			'</tr>';

    		        });
    		        $('#tabla_productos > tbody').html(fila);
    			}
    		})
        });
    //SELECCIONAR PRODUCTO
        $('#tabla_productos').on('click', '.boton-agregar-producto', function(){
            codigo = $(this).parents("tr").find("td").eq(0).html();;
            producto = $(this).parents("tr").find("td").eq(1).html();
            iva = $(this).parents("tr").find("td").eq(2).html();
            iva_id = $(this).parents("tr").find("td").eq(5).html();
            precio_venta = $(this).parents("tr").find("td").eq(3).html();
            id = $(this).parents("tr").find("td").eq(4).html();
            $('#buscar_producto').val(producto);
            $('#precio_producto').val(precio_venta);
            $('#hidden_precio').val(precio_venta);
            $('#iva_producto').val(iva_id);
            $('#hidden_id').val(id);
            $('#total_detalle').val(parseFloat($('#cantidad_detalle').val()*precio_venta));
            $('#cantidad_detalle').focus();
            $('#tabla_productos').parents('.table-modal').addClass('hidden');
        });
    //MODIFICAR CANTIDAD
        $('#cantidad_detalle').on('keyup', function(){
        	cantidad = $(this).val();
        	precio = $('#precio_producto').val();
        	$('#total_detalle').val(parseFloat(cantidad*precio));
        });
    //MODIFICAR TOTAL DE DIALOG PRODUCTO
        $('#precio_producto').on('keyup', function(){
            precio = $(this).val();
            cantidad = $('#cantidad_detalle').val();
            $('#total_detalle').val(parseFloat(cantidad*precio));
        });
    //ENVIAR PRODUCTO A TABLA
        $('#boton-confirmar').on('click', function(){
            if($('#precio_producto').val() == '' || $('#cantidad_detalle').val() == '' || $('#buscar_producto').val() == ''){
                $('.modal_message #message_title').html('Error');
                $('.modal_message #message_text').html('Por favor complete todos los campos');
                $('.modal_message').modal('show');
            }else{
           		fila = $('#tabla-detalle > tbody').html();
           		fila = fila+'<tr>'+
                				'<td data-label="Cantidad">'+$('#cantidad_detalle').val()+'</td>'+
                				'<td data-label="Detalle">'+$('#buscar_producto').val()+'</td>'+
                				'<td data-label="Importe">'+$('#precio_producto').val()+'</td>'+
                				'<td data-label="Total">'+$('#total_detalle').val()+'</td>'+
                                '<td class="hide">'+$("#iva_producto option:selected").text()+'</td>'+
                                '<td class="hide">'+$('#hidden_id').val()+'</td>'+
                				'<td class="hide">producto</td>'+
                				'<td data-label="Acciones"><button type="button" class="boton boton-cancelar boton-borrar-detalle">Borrar</button></td>'+
                			'</tr>';
                 $('#tabla-detalle > tbody').html(fila);
                 calcular_totales();
                 $('#cantidad_detalle').val('1');
                 $('#total_detalle').val('0');
                 $('#precio_producto').val('');
                 $('#hidden_precio').val("");
                    $('#hidden_id').val("0");
                 $('#buscar_producto').val('');

                 $('#tabla_productos tbody > tr').remove();
                 $('#buscar_producto').focus();
                 showSuccessAlert();
            }
        });
    //BUSCAR SERVICIO
    	$('#buscar_servicio').on('keyup', function(){
    	    var fila="";
    	    $.ajax({
    			type:'GET',
    			url: '/servicios/search/'+$('#buscar_servicio').val(),
    			complete: function(data){
    				servicios = JSON.parse(data.responseText);
            if (servicios.length > 0) {
                $('#tabla_servicios').parents('.table-modal').removeClass('hidden');
            }else{
                $('#tabla_servicios').parents('.table-modal').addClass('hidden');
            }
    		        servicios.forEach( function(servicio, posicion) {
    		        	fila = fila+ '<tr>'+
    		        				'<td data-label="Descripcion">'+servicio.descripcion+'</td>'+
    		        				'<td data-label="IVA">'+servicio.iva.alicuota+'</td>'+
                                    '<td data-label="Precio">'+servicio.precio+'</td>'+
                                    '<td class="hide">'+servicio.id+'</td>'+
    		        				'<td class="hide">'+servicio.iva_id+'</td>'+
    		        				'<td data-label="Acciones"><button  type="button" class="boton boton-opciones boton-agregar-servicio">Seleccionar</button></td>'+
    		        			'</tr>';

    		        });
    		        $('#tabla_servicios > tbody').html(fila);
    			}
    		})
        });
    //SELECCIONAR SERVICIO
        $('#tabla_servicios').on('click', '.boton-agregar-servicio', function(){
            $(this).parents("tr").addClass("tr-selected");
            descripcion = $(this).parents("tr").find("td").eq(0).html();;
            iva = $(this).parents("tr").find("td").eq(1).html();
            precio_venta = $(this).parents("tr").find("td").eq(2).html();
            id= $(this).parents("tr").find("td").eq(3).html();
            iva_id= $(this).parents("tr").find("td").eq(4).html();
            $('#buscar_servicio').val(descripcion);
            $('#precio_servicio').val(precio_venta);
            $('#iva_servicio').val(iva_id);
            $('#hidden_id_servicio').val(id);
            $('#total_servicio').val(parseFloat($('#cantidad_servicio').val()*precio_venta));
            $('#cantidad_servicio').focus();
            $('#tabla_servicios').parents('.table-modal').addClass('hidden');
        });
    //MODIFICAR CANTIDAD
        $('#cantidad_servicio').on('keyup', function(){
        	cantidad = $(this).val();
        	precio = $('#precio_servicio').val();
        	$('#total_servicio').val(parseFloat(cantidad*precio));
        });
    //MODIFICAR TOTAL DIALOG SERVICIO
        $('#precio_servicio').on('keyup', function(){
            cantidad = $(this).val();
            precio = $('#cantidad_servicio').val();
            $('#total_servicio').val(parseFloat(cantidad*precio));
        });
    //ENVIAR SERVICIO A TABLA
        $('#boton_confirmar_servicio').on('click', function(){
            if($('#precio_servicio').val() == '' || $('#cantidad_servicio').val() == '' || $('#buscar_servicio').val() == ''){
                $('.modal_message #message_title').html('Error');
                $('.modal_message #message_text').html('Por favor complete todos los campos');
                $('.modal_message').modal('show');
            }else{
           		fila = $('#tabla-detalle > tbody').html();
           		fila = fila+'<tr>'+
                				'<td data-label="Cantidad">'+$('#cantidad_servicio').val()+'</td>'+
                				'<td data-label="Detalle">'+$('#buscar_servicio').val()+'</td>'+
                				'<td data-label="Importe">'+$('#precio_servicio').val()+'</td>'+
                				'<td data-label="Total">'+$('#total_servicio').val()+'</td>'+
                                '<td class="hide">'+$("#iva_servicio option:selected").text()+'</td>'+
                                '<td class="hide">'+$('#hidden_id_servicio').val()+'</td>'+
                				'<td class="hide">servicio</td>'+
                				'<td data-label="Acciones"><button type="button" class="boton boton-cancelar boton-borrar-detalle">Borrar</button></td>'+
                			'</tr>';
                 $('#tabla-detalle > tbody').html(fila);
                 calcular_totales();
                 $('#cantidad_servicio').val('1');
                 $('#total_servicio').val('0');
                 $('#precio_servicio').val('');
                 $('#buscar_servicio').val('');
                $('#hidden_precio_servicio').val("");
                $('#iva_servicio').val(5);
                $('#hidden_id_servicio').val("0");
                 $('#tabla_servicios tbody > tr').remove();
                 $('#buscar_servicio').focus();
                 showSuccessAlert();
            }
        });
    //MODIFICAR CANTIDAD DESCRIPCION
        $('#cantidad_descripcion').on('keyup', function(){
            cantidad = $(this).val();
            precio = $('#precio_descripcion').val();
            $('#total_descripcion').val(parseFloat(cantidad*precio));
        });
    //MODIFICAR TOTAL DIALOG DESCRIPCION
        $('#precio_descripcion').on('keyup', function(){
            precio = $(this).val();
            cantidad = $('#cantidad_descripcion').val();
            $('#total_descripcion').val(parseFloat(cantidad*precio));
        });
    //ENVIAR DESCRIPCION A TABLA
       $('#boton_confirmar_descripcion').on('click', function(){
            if($('#precio_descripcion').val() == '' || $('#cantidad_descripcion').val() == '' || $('#descripcion').val() == ''){
                $('.modal_message #message_title').html('Error');
                $('.modal_message #message_text').html('Por favor complete todos los campos');
                $('.modal_message').modal('show');
            }else{
                fila = $('#tabla-detalle > tbody').html();
                fila = fila+'<tr>'+
                                '<td data-label="Cantidad">'+$('#cantidad_descripcion').val()+'</td>'+
                                '<td data-label="Detalle">'+$('#descripcion').val()+'</td>'+
                                '<td data-label="Importe">'+$('#precio_descripcion').val()+'</td>'+
                                '<td data-label="Total">'+$('#total_descripcion').val()+'</td>'+
                                '<td class="hide">'+$("#iva_descripcion option:selected").text()+'</td>'+
                                '<td class="hide"></td>'+
                                '<td class="hide">descripcion</td>'+
                                '<td data-label="Acciones"><button type="button" class="boton boton-cancelar boton-borrar-detalle">Borrar</button></td>'+
                            '</tr>';
                 $('#tabla-detalle > tbody').html(fila);
                 calcular_totales();
                 $('#cantidad_descripcion').val('1');
                 $('#total_descripcion').val('0');
                 $('#precio_descripcion').val('');
                 $('#descripcion').val('');
                 $('#descripcion').focus();
                 showSuccessAlert();
            }
       });
    //BORRAR ITEMS DE LA TABLA DETALLES
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
	iva = new Array();
	importe_iva2 = parseFloat(0);
	importe_iva = parseFloat(0);
	subtotal = parseFloat(0);
	subtotal2 = parseFloat(0);
	for (var i = 0; i < filas; i++) {
        //TOTAL CADA COLUMNA
		parcial = parseFloat($('#tabla-detalle > tbody').find("tr").eq(i).find("td").eq(3).html());
        //SUMA A TOTAL ABSOLUTO
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

function generar_comprobante(){
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
        if(parseFloat($('#total').val())>100000 && $('#cuit').val() == ""){
            alert("El DNI/CUIT no puede estar vacío si el monto supera los $1000");
        }else{
            $('.modal-waiting-comprobante').modal('show');
            $.ajax({
                type:'POST',
                url: '/facturas',
                data:$("#form_comprobante").serialize(),
                dataType:'json',
                complete: function(response){
                    console
                    $('.modal-waiting-comprobante').modal('hide');
                    var cbte = JSON.parse(response.responseText);
                    var observaciones = cbte.observaciones;
                    var errores= cbte.errores;
                    var p_errores ="";
                    if(cbte.resultado == 'R'){
                        p_errores ="<div class='text-center'><i class='fa fa-times-circle'></i></div><ol>";
                        if(errores != null){
                            for(i in errores){
                                p_errores +='<li>'+errores[i]+'</li>';
                            }
                        }
                        if(observaciones != null){
                            for(i in observaciones){
                                p_errores +='<li>'+observaciones[i]+'</li>';
                            }
                        }
                        p_errores+="</ol>";
                        $('.modal-rechazado .modal-body').html(p_errores);
                        $('.modal-rechazado').modal('show');
                    }else if(cbte.resultado == 'A'){
                        $('#cae').val(cbte.cae);
                        $('#vencimiento').val(cbte.vencimiento_cae);
                        $.ajax({
                            type:'POST',
                            url: '/comprobantes',
                            data:$("#form_comprobante").serialize(),
                            dataType:'json',
                            complete: function(response){
                                p_errores = "<div class='text-center'><i class='fa fa-check-circle'></i></div>"
                                if(observaciones != null){
                                    p_errores +="<ol>"
                                    if(Object.keys(observaciones.Obs)[0] == "Code"){
                                        for(i in observaciones){
                                            p_errores +='<li>'+observaciones[i].Msg+'</li>';
                                        }
                                    }else{
                                        for(i in observaciones.Obs){
                                            p_errores +='<li>'+observaciones.Obs[i].Msg+'</li>';
                                        }
                                    }
                                    p_errores += "</ol>";
                                }
                                $('#boton_imprimir').attr("href", '/facturas/'+$('#tipo_comprobante').val()+$('#num_comprobante').val());
                                $('#btn_email').attr("data-venta", response.responseText);
                                $('.modal-aprobado .modal-body').html(p_errores);
                                $('.modal-aprobado').modal('show');
                            }
                        });
                    }
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

function showSuccessAlert(){
    $('.add-success').addClass('active');
    $('.add-success').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
        $(this).removeClass('active');
    });
    
}
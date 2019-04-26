$(document).ready(function(){
    //-------------------------------------------------------
    //EVENTOS FACTURACION CREATE
    //-------------------------------------------------------
    //CHECK NUMERACION COMPROBANTE
        num_comprobante();
    //ENVIAR DATOS DE FACTURA A AFIP
        $('#btn-generar-comprobante').on('click', function(){
            if(checkComprobante()){
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
        });
        $('.modal-agregar-producto').on('shown.bs.modal', function() {
            $('#buscar_producto').focus();
        });
        $(".modal-agregar-producto").on("hidden.bs.modal", function () {
            $('#cantidad_detalle').val('1');
            $('#total_detalle').val('0');
            $('#precio_producto').val('');
            $('#hidden_precio').val("");
            $('#hidden_id').val("0");
            $('#buscar_producto').val('');
        });
    //ABRIR DIALOG SERVICIO
        $('#boton-modal-servicio').on('click', function(){
            $('.modal-agregar-servicio').modal('show');
            $('#buscar_servicio').focus();
        });
        $('.modal-agregar-servicio').on('shown.bs.modal', function() {
            $('#buscar_servicio').focus();
        });
        $(".modal-agregar-servicio").on("hidden.bs.modal", function () {
            $('#cantidad_servicio').val('1');
            $('#total_servicio').val('0');
            $('#precio_servicio').val('');
            $('#buscar_servicio').val('');
            $('#hidden_precio_servicio').val("");
            $('#iva_servicio').val(5);
            $('#hidden_id_servicio').val("0");
        });
    //AGREGAR DIALOG DESCRIPCION
        $('#boton-modal-descripcion').on('click', function(){
            $('.modal-agregar-descripcion').modal('show');
            $('#descripcion').focus();
        });
        $('.modal-agregar-descripcion').on('shown.bs.modal', function() {
            $('#descripcion').focus();
        });
        $(".modal-agregar-descripcion").on("hidden.bs.modal", function () {
            $('#cantidad_descripcion').val('1');
            $('#total_descripcion').val('0');
            $('#precio_descripcion').val('');
            $('#descripcion').val('');
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
    //BUSCAR CLIENTE
        cliente = document.getElementById('nombre')
        autocomplete_cliente(cliente);
	//BUSCAR PRODUCTO
        
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
        if(parseFloat($('#total').val())>10000 && $('#cuit').val() == ""){
            alert("El DNI/CUIT no puede estar vacío si el monto supera los $10000");
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
$(".modal-aprobado").on("hidden.bs.modal", function () {
    location.reload(); 
});

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
function autocomplete_producto(inp) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      $.get('/productos/search/'+val).then(function(response){
          for (i = 0; i < response.length; i++) {
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<div style=''><strong>" + response[i]['producto'] + "</strong></div><div style=''>$"+response[i]['precio_venta']+"<input type='hidden' value='" + response[i]['producto'] + "'><input type='hidden' value='" + response[i]['precio_venta'] + "'><input type='hidden' value='" + response[i]['iva_id'] + "'><input type='hidden' value='" + response[i]['id'] + "'></div>";
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                console.log(this.getElementsByTagName("input"))
                $('#buscar_producto').val(this.getElementsByTagName("input")[0].value);
                $('#precio_producto').val(this.getElementsByTagName("input")[1].value);
                $('#hidden_precio').val(this.getElementsByTagName("input")[1].value);
                $('#iva_producto').val(this.getElementsByTagName("input")[2].value);
                $('#hidden_id').val(this.getElementsByTagName("input")[3].value);
                $('#total_detalle').val(parseFloat($('#cantidad_detalle').val()*this.getElementsByTagName("input")[1].value));
                $('#cantidad_detalle').focus();
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
      })
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
function autocomplete_servicio(inp) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      $.get('/servicios/search/'+val).then(function(response){
          for (i = 0; i < response.length; i++) {
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<div style=''><strong>" + response[i]['descripcion'] + "</strong></div><div style=''>$"+response[i]['precio']+"<input type='hidden' value='" + response[i]['descripcion'] + "'><input type='hidden' value='" + response[i]['precio'] + "'><input type='hidden' value='" + response[i]['iva']["alicuota"] + "'><input type='hidden' value='" + response[i]['iva_id'] + "'><input type='hidden' value='" + response[i]['id'] + "'></div>";
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                descripcion = this.getElementsByTagName("input")[0].value;
                iva = this.getElementsByTagName("input")[2].value;
                precio_venta = this.getElementsByTagName("input")[1].value;
                id= this.getElementsByTagName("input")[4].value;
                iva_id= this.getElementsByTagName("input")[3].value;
                $('#buscar_servicio').val(descripcion);
                $('#precio_servicio').val(precio_venta);
                $('#iva_servicio').val(iva_id);
                $('#hidden_id_servicio').val(id);
                $('#total_servicio').val(parseFloat($('#cantidad_servicio').val()*precio_venta));
                $('#cantidad_servicio').focus();
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
      })
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
} 
function autocomplete_cliente(inp) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      $.get('/clientes/search/'+val).then(function(response){
          for (i = 0; i < response.length; i++) {
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<div style=''><strong>" + response[i]['nombre'] +
                "</strong></div><div style=''>"+response[i]['cuit']+"<input type='hidden' value='" + response[i]['nombre'] + "'><input type='hidden' value='" + response[i]['cuit'] + "'><input type='hidden' value='" + response[i]['localidad'] + "'><input type='hidden' value='" + response[i]['direccion'] + "'><input type='hidden' value='" + response[i]['responsabilidades_iva']['nombre'] + "'><input type='hidden' value='" + response[i]['id'] + "'></div>";
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                nombre = this.getElementsByTagName("input")[0].value;
                cuit = this.getElementsByTagName("input")[1].value;
                localidad = this.getElementsByTagName("input")[2].value;
                direccion = this.getElementsByTagName("input")[3].value;
                iva = this.getElementsByTagName("input")[4].value;
                $('#nombre').val(nombre);
                $('#cuit').val(cuit);
                $('#localidad').val(localidad);
                $('#direccion').val(direccion);
                $('#resp_iva').val(iva).change();
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
      })
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
} 

function mostrarError(error){
    $('.modal_message #message_title').html('Error');
    $('.modal_message #message_text').html(error);
    $('.modal_message').modal('show');
}
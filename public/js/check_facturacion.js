function checkComprobante(){
	respuesta = true;
	tipo_comprobante = $('#tipo_comprobante').val();
	value_cuit=$('#cuit').val();
	cuit = value_cuit.replace(/\//g,"").replace(/-/g,"");
	responsabilidad_cliente = $('#resp_iva').val();
	total = $('#total').val();
	tabla =  $('#tabla-detalle > tbody > tr').length;

	//CHECKEAR SI EL CUIT ES VALIDO
	if(cuit.length == 0 || cuit.length == 8 || cuit.length == 11){
		respuesta = true;
	}else{
		mostrarError("Por favor, ingrese un cuit valido.");
		return false;
	}
	//CHECKEAR SI CONSUMIDOR FINAL NECESITA DNI
	if(tipo_comprobante == 'B' && total >= 10000 && cuit == ''){
		mostrarError("Debe ingresar un DNI/CUIT válido para montos mayores a $10000.")
		return false;
	}
	//TOTAL DEBE SER MAYO A 0
	if(tabla <= 0){
		mostrarError('Por favor ingrese detalles en el comprobante.')
		return false;
	}
	if(total > 0){
		respuesta = true;
	}else{
		mostrarError('El total debe ser mayor a $0.');
		return false;
	}
	//SI ES FACTURA A NECESITA TENER CUIT
	if((tipo_comprobante == 'A' && cuit.length == 0) || (tipo_comprobante == 'A' && cuit.length == 8) || (tipo_comprobante == 'NCA' && cuit.length == 0) || (tipo_comprobante == 'NCA' && cuit.length == 8)){
		mostrarError('Para comprobantes de tipo A necesita ingresar un CUIT válido.')
		return false
	}
	return respuesta;
}
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
    deuda = $(this).parents("tr").find("td").eq(2).html();
    id = $(this).parents("tr").find("td").eq(3).html();
    $('#id').val(id);
    $('#proveedor').val(nombre);
    $('#deuda').val(deuda);
    $('#cuit').val(cuit);
    $('.modal-buscar-proveedor').modal('hide');
});
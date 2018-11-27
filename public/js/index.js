$('.btn_eliminar').on('click', function(){
	$('#titulo_modal_eliminar').html('Eliminar '+$(this).data('nombre'));
	$('#btn_confirmar').attr('href',$(this).data('href'));
	$('.modal_eliminar').modal();
});


$('#btn-observaciones').on('click', function(){
		$('#message').addClass('alert-fixed');
		$('#message').css('display', 'block');
});
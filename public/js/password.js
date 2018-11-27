$('#guardar').on('click', function(){
	if($("#password_actual").val() == ''){
		$('.modal-body p').text("Debe ingresar la contraseña actual.");
		$('.modal_message').modal('show');
	}else if($('#nueva_password').val() != $('#repetir_password').val()){
		alert('adas');
		$('.modal-body p').text("La nueva contraseña debe ser igual en ambos campos.");
		$('.modal_message').modal('show');
	}else{
		$('#form_password').submit();
	}
});			
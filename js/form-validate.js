$(document).ready(function(){
	$(".boton_envio").click(function() {
		
		var nombre = $(".nombre").val();
			email = $(".email").val();
			validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
			mensaje = $(".mensaje").val();
		
		if (nombre == "") {
		    $(".nombre").focus();
		    return false;
		}else if(email == "" || !validacion_email.test(email)){
		    $(".email").focus();	
		    return false;
		}else if(mensaje == ""){
		    $(".mensaje").focus();
		    return false;
		}else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'nombre='+ nombre + 
						'&email=' + email + 
						'&mensaje=' + mensaje;
			$.ajax({
	    		type: "POST",
	    		url: "ajaxSubmit.php",
	    		data: datos,
	    		success: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Enviado').addClass('msg_ok');	
	    		},
				error: function() {
					$('.ajaxgif').hide();
	      			$('.msg').text('Error').addClass('msg_error');					
				}
	   		});
	 		return false;	
		}
	});
});
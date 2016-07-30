with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && usuario.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			usuario.focus();
		}
		if(ok &&nombre.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			nombre.focus();
		}
		if(ok && correo.value==""){
			ok=false;
			alert("Debe escribir su correo");
			correo.focus();
		}
		if(ok && gerencia.value==""){
			ok=false;
			alert("Debe escribir su gerencia");
			gerencia.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}
		if(ok){ submit(); }
	}
}

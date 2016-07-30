function validateForm() {
				var usuario = document.forms["form_login"]["usuario"].value;
				if (usuario == null || usuario == "") {
					alert("Ingrese su indicador");
					return false;
				}
				var contrasena = document.forms["form_login"]["contrasena"].value;
				if (contrasena == null || contrasena == "") {
					alert("Ingrese su contraseña");
					return false;
				}
			}
		
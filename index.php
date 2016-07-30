<?php 
session_start();
session_destroy();
include 'head.php'; ?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT - PDVSA, S.A :.</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cssindex.css">
	<script src="librerias/jquery/jquery.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="javascript" type="text/javascript" href="js/valida_login.js">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	<!--<link rel="stylesheet" href="librerias/fonts/font.css">
	[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div style="float:center; background-color: white; background-size: auto;
		background-size:contain;"><img id="img" src="imagenes/sgt_acceso.png"></div><br>
		<div id="login">
			<h2><span class="fontawesome-lock"></span>Bienvenido al SGT</h2>
			<form name="form_login" action="php/login.php" method="POST" onsubmit="return validateForm()">
				<fieldset>
					<p><label for="cod_usuario">Indicador</label></p>
					<p><input name="cod_usuario" type="text" id="cod_usuario" placeholder="Escriba su indicador" required</p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->
					<p><label for="psw_contrasena">Contraseña</label></p>
					<p><input name="psw_contrasena" type="password" id="psw_contrasena" required placeholder="Escriba su clave"></p> <!-- JS because of IE support; better: placeholder="password" -->
					<p><input type="submit" value="Ingresar"></p>
				</fieldset>
			</form>
		</div> <!-- end login -->
		<?php include "footer.php";
//MANUAL DE USUARIO
		?>

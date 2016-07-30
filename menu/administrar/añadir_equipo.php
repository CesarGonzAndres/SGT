<?php 
session_start();
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];

include "../../php/conexion.php";
//if(!empty($_POST)){
if(isset($_POST["cod_usuario"]) &&isset($_POST["psw_contrasena"]) &&isset($_POST["nb_usuario"]) &&isset($_POST["tlf_extension"]) &&isset($_POST["nb_gerencia"]) &&isset($_POST["id_privilegio"]) &&isset($_POST["nb_localizacion"]) &&isset($_POST["tlf_celular"])){

	if($_POST["cod_usuario"]!="" && $_POST["psw_contrasena"]!="" && $_POST["nb_usuario"]!="" && $_POST["tlf_extension"]!="" && $_POST["nb_gerencia"]!="" && $_POST["id_privilegio"]!="" && $_POST["nb_localizacion"]!="" && $_POST["tlf_celular"]!=""){

		$cod_usuario=$_POST["cod_usuario"];
		$psw_contrasena=$_POST["psw_contrasena"];
		$nb_usuario=$_POST["nb_usuario"];
		$tlf_extension=$_POST["tlf_extension"];
		$nb_gerencia=$_POST["nb_gerencia"];
		$correo=$cod_usuario . "@pdvsa.com";
		$id_privilegio=$_POST["id_privilegio"];
		$nb_localizacion=$_POST["nb_localizacion"];
		$tlf_celular=$_POST["tlf_celular"];

		$query = "INSERT INTO j100t_usuario (cod_usuario, psw_contrasena, nb_usuario,  tlf_extension, nb_gerencia, id_privilegio, nb_localizacion, tlf_celular, fe_registro) VALUES ('$cod_usuario','$psw_contrasena','$nb_usuario','$tlf_extension','$nb_gerencia','$id_privilegio','$nb_localizacion','$tlf_celular',NOW())";

		if (mysql_query($query))
		{
			echo "<h2>Usuario registrado satisfactoriamente!</h2>";
		}
		else {
			echo "Error creating database user: " . mysql_error($con);
		}
	}
}
echo '  
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT :.</title>
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<script src="librerias/jquery/jquery.min.js"></script>
	<script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
	<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Administrador: </b>';?><?php
	echo $nb_usuario;
	echo '</p><nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Registro de Equipos</a>
			</div>
			<ul class="nav navbar-nav">

			</ul>
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="../../home.php"><span class="glyphicon glyphicon-log-in"></span> Atras</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3 align="left">Rellene los campos</h3>
				<form role="form" name="login" action="" method="post" id="form_login">
					<div class="form-group">
						<label for="cod_usuario"></label>
						<input value="" type="text" class="form-control" id="cod_usuario" name="cod_usuario" placeholder="Indicador">
					</div>
					<div class="form-group">
						<label for="psw_contrasena"></label>
						<input type="password" class="form-control" id="psw_contrasena" name="psw_contrasena" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<label for="nb_usuario"></label>
						<input type="text" class="form-control" id="nb_usuario" name="nb_usuario" placeholder="Nombre y Apellido">
					</div>
					<div class="form-group">
						<label for="tlf_extension"></label>
						<input type="tel" class="form-control" id="tlf_extension" name="tlf_extension" placeholder="Extensión">
					</div>
					<div class="form-group">
						<label for="nb_gerencia"></label>
						<input type="text" class="form-control" id="nb_gerencia" name="nb_gerencia" placeholder="Gerencia">
					</div>
					<div class="form-group">
						<label for="nb_localizacion"></label>
						<input type="text" class="form-control" id="nb_localizacion" name="nb_localizacion" placeholder="Localizaciòn">
					</div>
					<div class="form-group">
						<label for="tlf_celular"></label>
						<input type="tel" class="form-control" id="tlf_celular" name="tlf_celular" placeholder="0416-1233456">
					</div>
					<div class="form-group">
						<select name="id_privilegio" id="id_privilegio" class="form-control">
							<option value="1">Administrador</option>
							<option value="4">Control y Seguimiento</option>
							<option value="3">PPyG</option>
							<option value="2">PCyG</option>
							<option value="5">RST</option>
							<option value="6">Mantenimiento</option>
							<option value="7">Invitado</option>
						</select>
					</div>
					<div>
						<button type="submit" class="btn btn-default" >Registrar</button></li>
						
					</div>
				</form>

				<script>
					function redirect(){
		// Javascript URL redirection
		window.location.replace("../../home.php");
	}
</script>
</div>
</div>
</div>
</body>
</html>
';?>
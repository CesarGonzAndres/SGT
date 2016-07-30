<?php 
session_start();

echo 
'<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT :.</title>
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<script src="librerias/jquery/jquery.min.js"></script>
	<script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="librerias/jquery/jquery-1.12.4.js"></script>
	<script src="librerias/jquery/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
</head>
<body>

	<h4>Sistema de Gestión de Taladro (SGT)</h4>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Informe Diario de Taladro y Cabillero</a>
			</div>
			<ul class="nav navbar-nav">

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

				<li><a href="../../home.php"><span class="glyphicon glyphicon-log-in"></span> Inicio</a></li>
			</ul>
		</div>
	</nav>
	<style type="text/css">
		form p {
			display: inline;
		}
	</style>
	<div class="container">
		<h3>Seleccione una fecha</h3>
		<form action="" method="POST">
			<p><b>Fecha: </b><input type="text" id="datepicker" placeholder="Click aqui"></p>
			<p style="margin-left: 15px;"><button type="submit" class="btn btn-default" style="margin-right: 6px;" >Consultar</button></p>
		</form>
	</div>';
//TITULO DEL REPORTE ... COLOCAR ESTATUS DE CIERRE DE REPORTE... COLOCAR FECHA ACTUAL EN LA ESQUINA SUPERIOR DERECHA
	?>

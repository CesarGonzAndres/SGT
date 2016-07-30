<?php 
session_start();
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];
?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT - PDVSA, S.A :.</title>
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<script src="../../librerias/jquery/jquery.min.js"></script>
	<script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../librerias/jquery/jquery-ui.css">
	<script src="../../librerias/jquery/jquery-1.12.4.js"></script>
	<script src="../../librerias/jquery/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
</head>
<body>
	<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PPyG: </b>
	<?php echo $nb_usuario; ?>
	</p><body> 

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Semaforo</a>
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
		<h3>Visualizar reporte</h3>
		<form action="" method="POST">
			<p><b>Fecha: </b><input type="text" id="datepicker" placeholder="Click aqui"></p>
			<p style="margin-left: 15px;"><button type="submit" class="btn btn-default" style="margin-right: 20px;" >Consultar</button></p>
		</form>
	</div>';





	<?php 
	include '../../footer.php';
	?>

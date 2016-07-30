<?php 
session_start();
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];
include '../../php/conexion.php';
?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT - PDVSA, S.A :.</title>
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/table.css">
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<script src="../../librerias/jquery/jquery.min.js"></script>
	<script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../librerias/jquery/jquery-ui.css">
	<script src="../../librerias/jquery/jquery-1.12.4.js"></script>
	<script src="../../librerias/jquery/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#fecha_anterior" ).datepicker({dateFormat: 'yy-mm-dd'});
			$( "#fecha_actual" ).datepicker({dateFormat: 'yy-mm-dd'});
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
			<a class="navbar-brand" href="#">Informe de Dato Variable</a>
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
	<form action="" method="post">
		
		<label for="fecha_anterior">Fecha Anterior:</label>
		<input value="" type="date" name="fecha_anterior" id="fecha_anterior" placeholder="Click aqui">
		<br>
		<br>
		<label for="fecha_actual">Fecha Actual:</label>
		<input value="" type="date" name="fecha_actual" id="fecha_actual" placeholder="Click aqui" style="margin-left:15px;">
		<br>

		<button type="submit" class="btn btn-default" style="margin-left: 20px;" >Consultar</button>
	</form>
</div>



<?php 
if(!empty($_POST)){
	if(isset($_POST["fecha_anterior"]) && isset($_POST["fecha_actual"])){
		if($_POST["fecha_anterior"]!=""&& $_POST["fecha_actual"]!=""){
			echo'
			<div class="scrollit">
				<table>
					<thead>
						<tr>
							<th>No</th>
							<th>Equipo</th>
							<th>Actividad</th>
							<th>Distrito</th>
							<th>Estatus Anterior</th>
							<th>Estatus Actual</th>
						</tr>
					</thead><tr>';


					$fecha_anterior=$_POST["fecha_anterior"];
					$fecha_actual=$_POST["fecha_actual"];
					$query= mysql_query("SELECT
						j101t_ft_equipo.cod_equipo,
						t111t_actividad_taladro.nb_actividad_taladro,
						t113t_distrito.nb_distrito,
						tnp_estatus_ppyg.nb_estatus_ppyg,
						t116t_estatus_act_equipo.nb_tipo,
						x104t_diario_ppyg.fe_reporte
						FROM
						j101t_ft_equipo
						INNER JOIN t111t_actividad_taladro ON j101t_ft_equipo.id_actividad_original = t111t_actividad_taladro.id_actividad_taladro AND j101t_ft_equipo.id_actividad_taladro = t111t_actividad_taladro.id_actividad_taladro
						INNER JOIN t113t_distrito ON j101t_ft_equipo.id_distrito = t113t_distrito.id_distrito
						INNER JOIN x104t_diario_ppyg ON x104t_diario_ppyg.id_ft_equipo = j101t_ft_equipo.id_ft_equipo
						INNER JOIN tnp_estatus_ppyg ON x104t_diario_ppyg.id_estatus_ppyg = tnp_estatus_ppyg.id_estatus_ppyg
						INNER JOIN t116t_estatus_act_equipo ON x104t_diario_ppyg.id_estatus_act_equipo = t116t_estatus_act_equipo.id_estatus_act_equipo
						WHERE
						x104t_diario_ppyg.fe_reporte >= '$fecha_anterior' AND
						x104t_diario_ppyg.fe_reporte <= '$fecha_actual'
						", $con);
					while ($fila = mysql_fetch_assoc($query)){
						$i=1;
						$id_ft_equipo=$fila['id_ft_equipo'];
						$cod_equipo=$fila['cod_equipo'];
						$nb_actividad_taladro=$fila['nb_actividad_taladro'];
						$nb_distrito=$fila['nb_distrito'];
						$nb_estatus_ppyg=$fila['nb_estatus_ppyg'];						
						$fe_inicio=$fila['fe_inicio'];
						$nb_tipo=$fila['nb_tipo'];
						$fe_reporte=$fila['fe_reporte'];						
						do{
							echo '
							<td value="">'.$i++.'</td>
							<td value="">'.$cod_equipo=$fila['cod_equipo'].'</td>
							<td value="">'.$nb_actividad_taladro=$fila['nb_actividad_taladro'].'</td>
							<td value="">'.$nb_distrito=$fila['nb_distrito'].'</td>
							<td value="">'.$nb_estatus_ppyg=$fila['nb_estatus_ppyg'].'</td>
							
							<td value="">'.$nb_tipo=$fila['nb_tipo'].'</td>


						</tr>';
					}while ($fila = mysql_fetch_assoc($query));
				}
				echo '</tr></table></div>';
			}
		}
	}








	include '../../footer.php';
	?>



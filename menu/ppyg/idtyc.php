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
			$( "#fecha" ).datepicker({dateFormat: 'yy-mm-dd'});
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
			<a class="navbar-brand" href="#">Informe Diario de Taladro y Cabillero (IDTyC)</a>
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

		<label for="tipo">Tipo de Reporte:</label>
		<select  style="margin-top:30px;" id="tipo" name="tipo">
			<option value="0">Seleccione el tipo</option>
			<?php  

			$qtipo= mysql_query("
				SELECT
				*
				FROM
				t132t_tipo_reporte_ppyg", $con);
			while ($row = mysql_fetch_assoc($qtipo)){
				$id_tipo_reporte_ppyg=$row['id_tipo_reporte_ppyg'];
				$nb_tipo_reporte_ppyg=$row['nb_tipo_reporte_ppyg'];	
				echo '<option value="'.$id_tipo_reporte_ppyg.'">'.$nb_tipo_reporte_ppyg.'</option>';
			}
			?>
		</select>
		<br>
		<label for="fecha">Fecha:</label>
		<input value="" type="date" name="fecha" id="fecha" placeholder="Click aqui">

		<button type="submit" class="btn btn-default" style="margin-left: 20px;" >Consultar</button>
	</form>
</div>



<?php 
	if(!empty($_POST)){
			if(isset($_POST["tipo"]) && isset($_POST["fecha"])){
				if($_POST["tipo"]!=""&& $_POST["fecha"]!=""){
echo'
<div class="scrollit">
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Equipo</th>
				<th>Actividad</th>
				<th>Distrito</th>
				<th>Estatus</th>
				<th>Comentario</th>
				<th>F.E.I Operaciones</th>
				<th>Plan Preliminar</th>
				<th>Dias Inactividad</th>
				<th>Ubicación</th>
				<th>Responsable</th>
			</tr>
		</thead><tr>';


					$tipo=$_POST["tipo"];
					$fecha=$_POST["fecha"];
					$query= mysql_query("SELECT
						*	
						FROM
						j101t_ft_equipo
						INNER JOIN t111t_actividad_taladro ON j101t_ft_equipo.id_actividad_taladro = t111t_actividad_taladro.id_actividad_taladro
						INNER JOIN t112t_region ON j101t_ft_equipo.id_region = t112t_region.id_region
						INNER JOIN t129t_negocio ON j101t_ft_equipo.id_negocio = t129t_negocio.id_negocio
						INNER JOIN t115t_division ON j101t_ft_equipo.id_division = t115t_division.id_division
						INNER JOIN t113t_distrito ON j101t_ft_equipo.id_distrito = t113t_distrito.id_distrito
						INNER JOIN x104t_diario_ppyg ON x104t_diario_ppyg.id_ft_equipo = j101t_ft_equipo.id_ft_equipo
						INNER JOIN tnp_estatus_ppyg ON x104t_diario_ppyg.id_estatus_ppyg = tnp_estatus_ppyg.id_estatus_ppyg
						INNER JOIN j103t_pozo ON j103t_pozo.id_ft_equipo = j101t_ft_equipo.id_ft_equipo
						INNER JOIN t130t_ambiente ON j101t_ft_equipo.id_ambiente = t130t_ambiente.id_ambiente
						INNER JOIN t131t_tipo_equipo ON j101t_ft_equipo.id_tipo_equipo = t131t_tipo_equipo.id_tipo_equipo
						WHERE
						x104t_diario_ppyg.fe_reporte = '$fecha' AND
						x104t_diario_ppyg.id_tipo_reporte_ppyg = '$tipo'", $con);
					while ($fila = mysql_fetch_assoc($query)){
						$i=1;
						$id_ft_equipo1=$fila['id_ft_equipo'];
						$cod_equipo1=$fila['cod_equipo'];
						$nb_actividad_taladro1=$fila['nb_actividad_taladro'];
						$nb_distrito1=$fila['nb_distrito'];
						$nb_estatus_ppyg1=$fila['nb_estatus_ppyg'];
						$tx_comentario1=$fila['tx_comentario'];
						$fe_inicio1=$fila['fe_inicio'];
						$fe_plan_preliminar1=$fila['fe_plan_preliminar'];
						$va_dias_inactivos1=$fila['va_dias_inactivos'];
						$nb_localizacion1=$fila['nb_localizacion'];
						$nb_responsable1=$fila['nb_responsable'];
						do{
							echo '
							<td value="">'.$i++.'</td>
							<td value="">'.$cod_equipo=$fila['cod_equipo'].'</td>
							<td value="">'.$nb_actividad_taladro=$fila['nb_actividad_taladro'].'</td>
							<td value="">'.$nb_distrito=$fila['nb_distrito'].'</td>
							<td value="">'.$nb_estatus_ppyg=$fila['nb_estatus_ppyg'].'</td>
							<td value="">'.$tx_comentario=$fila['tx_comentario'].'</td>
							<td value="">'.$fe_inicio=$fila['fe_inicio'].'</td>
							<td value="">'.$fe_plan_preliminar=$fila['fe_plan_preliminar'].'</td>
							<td value="">'.$va_dias_inactivos=$fila['va_dias_inactivos'].'</td>
							<td value="">'.$nb_localizacion=$fila['nb_localizacion'].'</td>
							<td value="">'.$nb_responsable=$fila['nb_responsable'].'</td>

						</tr>';
					}while ($fila = mysql_fetch_assoc($query));
				}
				echo '</tr></table></div>';
			}
		}
	}








include '../../footer.php';

?>

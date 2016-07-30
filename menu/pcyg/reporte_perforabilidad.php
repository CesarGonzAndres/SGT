<?php 
session_start();
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];
$id_division = $_SESSION["id_division"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT - PDVSA, S.A :.</title>
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<script src="librerias/jquery/jquery.min.js"></script>
	<script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
	<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PPyG: </b>
	<?php echo $nb_usuario; ?>
	
</p><body> 
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Informe TyC Division: <?php include '../../php/conexion.php'; $qdiv= mysql_query("SELECT
				nb_division
				FROM
				t115t_division
				WHERE
				t115t_division.id_division = '$id_division'
				", $con); while ($row = mysql_fetch_assoc($qdiv)){
				$nb_division=$row['nb_division'];} echo $nb_division; ?></a>
		</div>
		<ul class="nav navbar-nav">
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

			<li><a href="../../home.php"><span class="glyphicon glyphicon-log-in"></span> Atras</a></li>
		</ul>
	</div>
</nav>
<form>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 align="left">Rellene los campos</h3>
				<!--<label for="division">Division:</label>
				<select id="division" name="division">
					<option>LAGO</option>
					<option>COL</option>
					<option>COCC</option>
					<option>SLT</option>
				</select><br>

				<label for="distrito">Distrito:</label>
				<select id="distrito" name="distrito">
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
				</select><br> -->
				
				<label for="equipo">Equipo:</label>
				<select id="equipo" name="equipo">
					<option value="1">Equipo 1 eje.</option>
					<option value="2">Equipo 2 eje.</option>
				</select>

				<label for="fecha"></label>
				<input value="" type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">

				<label for="potencia"></label>
				<input type="text" class="form-control" id="potencia" name="potencia" placeholder="Potencia">

				<label for="actividad"></label>
				<input type="text" class="form-control" id="actividad" name="actividad" placeholder="Actividad">

				<label for="fase"></label>
				<input type="text" class="form-control" id="fase" name="fase" placeholder="Fase de Ejecución">

				<label for="negocio"></label>
				<input type="text" class="form-control" id="negocio" name="negocio" placeholder="Negocio">

				<label for="estatus"></label>
				<input type="text" class="form-control" id="estatus" name="estatus" placeholder="Estatus">

				<label for="fei_operaciones"></label>
				<input type="date" class="form-control" id="fei_operaciones" name="fei_operaciones" placeholder="F.E.I Operaciones">

				<label for="pozo"></label>
				<input type="text" class="form-control" id="pozo" name="pozo" placeholder="Pozo">

				<label for="potencial"></label>
				<input type="text" class="form-control" id="potencial" name="potencial" placeholder="Potencial BPD">

				<label for="profundidad_total"></label>
				<input type="text" class="form-control" id="profundidad_total" name="profundidad_total" placeholder="Profundidad Total PLan ft">

				<label for="profundidad_plan"></label>
				<input type="text" class="form-control" id="profundidad_plan" name="profundidad_plan" placeholder="Profundidad Planificada">

				<label for="profundidad_real"></label>
				<input type="text" class="form-control" id="profundidad_real" name="profundidad_real" placeholder="Profundidad Real">

				<label for="tnp"></label>
				<input type="text" class="form-control" id="tnp" name="tnp" placeholder="Tiempo No Productivo">

				<label for="tnp_logistica"></label>
				<input type="text" class="form-control" id="tnp_logistica" name="tnp_logistica" placeholder="Hrs - Tnp (Logistica)">

				<label for="tnp_hoyo"></label>
				<input type="text" class="form-control" id="tnp_hoyo" name="tnp_hoyo" placeholder="Hrs - Tnp (Hoyo)">

				<label for="tnp_superficie"></label>
				<input type="text" class="form-control" id="tnp_superficie" name="tnp_superficie" placeholder="Hrs - Tnp (Superficie)">

				<label for="tnp_causas_externas"></label>
				<input type="text" class="form-control" id="tnp_causas_externas" name="tnp_causas_externas" placeholder="Hrs - Tnp (Causas Externas)">

				<div>
					<textarea name="comentario" id="comentario" rows="4" cols="40" placeholder="Comentario"></textarea> 
					<span id="comentarioclear" class="glyphicon glyphicon-remove-circle"></span>

					<script>
						$("#comentarioclear").click(function(){
							$("#comentario").val('Escribe un Comentario');
						});
					</script> 



					<button type="button" onclick"redirect()" class="btn btn-default" style="margin-right: 6px; margin-left: 1px; width: 200;" onclick="redirect()">Atras</button>

					<script>
						function redirect(){
							window.location.replace("../../home.php");
						}   
					</script>

					<div>
						<button type="submit" class="btn btn-default" style="margin-right: 15px; width: 200;" >Registrar</button>
					</div>
				</form>
</div></div></div></div>
		
			</body>


			<?php 
			
//TITULO DEL REPORTE ... COLOCAR ESTATUS DE CIERRE DE REPORTE... COLOCAR FECHA ACTUAL EN LA ESQUINA SUPERIOR DERECHA
			?>















		<?php /*PERFORABILIDAD PARA LOS INGENIEROS CON CADA CAMPO
				

			<?php 
session_start();
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];
?>

<!DOCTYPE html>
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
	<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PPyG: </b>
	<?php echo $nb_usuario; ?>
	
</p><body> 
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Informe de Perforabilidad</a>
		</div>
		<ul class="nav navbar-nav">
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

			<li><a href="../../home.php"><span class="glyphicon glyphicon-log-in"></span> Atras</a></li>
		</ul>
	</div>
</nav>
<form>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 align="left">Rellene los campos</h3>


				<!--<label for="division">Division:</label>
				<select id="division" name="division">
					<option>LAGO</option>
					<option>COL</option>
					<option>COCC</option>
					<option>SLT</option>
				</select><br>

				<label for="distrito">Distrito:</label>
				<select id="distrito" name="distrito">
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
					<option>PRETROZAMORA</option>
				</select><br> -->

				<label for="equipo">Equipo:</label>
				<select id="equipo" name="equipo">
					<option value="1">Equipo 1 eje.</option>
					<option value="2">Equipo 2 eje.</option>
				</select>

				<label for="fecha"></label>
				<input value="" type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">

				<label for="potencia"></label>
				<input type="text" class="form-control" id="potencia" name="potencia" placeholder="Potencia">

				<label for="actividad"></label>
				<input type="text" class="form-control" id="actividad" name="actividad" placeholder="Actividad">

				<label for="fase"></label>
				<input type="text" class="form-control" id="fase" name="fase" placeholder="Fase de Ejecución">

				<label for="negocio"></label>
				<input type="text" class="form-control" id="negocio" name="negocio" placeholder="Negocio">

				<label for="estatus"></label>
				<input type="text" class="form-control" id="estatus" name="estatus" placeholder="Estatus">

				<label for="fei_operaciones"></label>
				<input type="date" class="form-control" id="fei_operaciones" name="fei_operaciones" placeholder="F.E.I Operaciones">

				<label for="pozo"></label>
				<input type="text" class="form-control" id="pozo" name="pozo" placeholder="Pozo">

				<label for="potencial"></label>
				<input type="text" class="form-control" id="potencial" name="potencial" placeholder="Potencial BPD">

				<label for="profundidad_total"></label>
				<input type="text" class="form-control" id="profundidad_total" name="profundidad_total" placeholder="Profundidad Total PLan ft">

				<label for="profundidad_plan"></label>
				<input type="text" class="form-control" id="profundidad_plan" name="profundidad_plan" placeholder="Profundidad Planificada">

				<label for="profundidad_real"></label>
				<input type="text" class="form-control" id="profundidad_real" name="profundidad_real" placeholder="Profundidad Real">

				<label for="tnp"></label>
				<input type="text" class="form-control" id="tnp" name="tnp" placeholder="Tiempo No Productivo">

				<label for="tnp_logistica"></label>
				<input type="text" class="form-control" id="tnp_logistica" name="tnp_logistica" placeholder="Hrs - Tnp (Logistica)">

				<label for="tnp_hoyo"></label>
				<input type="text" class="form-control" id="tnp_hoyo" name="tnp_hoyo" placeholder="Hrs - Tnp (Hoyo)">

				<label for="tnp_superficie"></label>
				<input type="text" class="form-control" id="tnp_superficie" name="tnp_superficie" placeholder="Hrs - Tnp (Superficie)">

				<label for="tnp_causas_externas"></label>
				<input type="text" class="form-control" id="tnp_causas_externas" name="tnp_causas_externas" placeholder="Hrs - Tnp (Causas Externas)">

				<div>
					<textarea name="comentario" id="comentario" rows="4" cols="40" placeholder="Comentario"></textarea> 
					<span id="comentarioclear" class="glyphicon glyphicon-remove-circle"></span>

					<script>
						$("#comentarioclear").click(function(){
							$("#comentario").val('Escribe un Comentario');
						});
					</script> 



					<button type="button" onclick"redirect()" class="btn btn-default" style="margin-right: 6px; margin-left: 1px; width: 200;" onclick="redirect()">Atras</button>

					<script>
						function redirect(){
							window.location.replace("../../home.php");
						}   
					</script>

					<div>
						<button type="submit" class="btn btn-default" style="margin-right: 15px; width: 200;" >Registrar</button>
					</div>
				</form>

			</div>
		</div>
	</div>
	<div>
		<div>
			<div>
			</body>


			<?php 
			include_once '../../footer.php';
//TITULO DEL REPORTE ... COLOCAR ESTATUS DE CIERRE DE REPORTE... COLOCAR FECHA ACTUAL EN LA ESQUINA SUPERIOR DERECHA
			?>



*/
include_once '../../footer.php';
		 ?>
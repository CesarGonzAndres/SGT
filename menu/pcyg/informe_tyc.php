<?php session_start();?>
<?php
$_SESSION["nb_usuario"];
$nb_usuario = $_SESSION["nb_usuario"];
$id_division = $_SESSION["id_division"];
include '../../php/conexion.php';?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT :.</title>
	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/table.css">
	<link rel="stylesheet" type="text/css" href="../../css/home.css">
	<script src="../../librerias/jquery/jquery.min.js"></script>
	<script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../librerias/jquery/jquery-ui.css">
	<script src="../../librerias/jquery/jquery-1.12.4.js"></script>
	<script src="../../librerias/jquery/jquery-ui.js"></script>
	<script src="../../js/calendario.js"></script>
	

</head>
<body> 
	<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PPyG: </b><?php echo $nb_usuario; ?></p>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Informe TyC Division: <?php  $qdiv= mysql_query("SELECT
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
						<tr>
						</thead>
						<?php  $qequi= mysql_query("SELECT
							j101t_ft_equipo.id_ft_equipo,
							j101t_ft_equipo.cod_equipo,
							t111t_actividad_taladro.nb_actividad_taladro,
							t113t_distrito.nb_distrito,
							tnp_estatus_ppyg.nb_estatus_ppyg,
							x104t_diario_ppyg.tx_comentario,
							j103t_pozo.fe_inicio,
							j103t_pozo.fe_plan_preliminar,
							x104t_diario_ppyg.va_dias_inactivos,
							j103t_pozo.nb_localizacion,
							x104t_diario_ppyg.nb_responsable
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
							INNER JOIN t131t_tipo_equipo ON j101t_ft_equipo.id_tipo_equipo = t131t_tipo_equipo.id_tipo_equipo WHERE t115t_division.id_division = '$id_division'", $con);
						if ($row = mysql_fetch_assoc($qequi)){
							$i=1;
							$id_ft_equipo=$row['id_ft_equipo'];
							$cod_equipo=$row['cod_equipo'];
							$nb_actividad_taladro=$row['nb_actividad_taladro'];
							$nb_distrito=$row['nb_distrito'];
							$nb_estatus_ppyg=$row['nb_estatus_ppyg'];
							$tx_comentario=$row['tx_comentario'];
							$fe_inicio=$row['fe_inicio'];
							$fe_plan_preliminar=$row['fe_plan_preliminar'];
							$va_dias_inactivos=$row['va_dias_inactivos'];
							$nb_localizacion=$row['nb_localizacion'];
							$nb_responsable=$row['nb_responsable'];
							do{
								echo '
								<td value="">'.$i++.'</td>
								<td value="">'.$cod_equipo=$row['cod_equipo'].'</td>
								<td value="">'.$nb_actividad_taladro=$row['nb_actividad_taladro'].'</td>
								<td value="">'.$nb_distrito=$row['nb_distrito'].'</td>
								<td value="">'.$nb_estatus_ppyg=$row['nb_estatus_ppyg'].'</td>
								<td value="">'.$tx_comentario=$row['tx_comentario'].'</td>
								<td value="">'.$fe_inicio=$row['fe_inicio'].'</td>
								<td value="">'.$fe_plan_preliminar=$row['fe_plan_preliminar'].'</td>
								<td value="">'.$va_dias_inactivos=$row['va_dias_inactivos'].'</td>
								<td value="">'.$nb_localizacion=$row['nb_localizacion'].'</td>
								<td value="">'.$nb_responsable=$row['nb_responsable'].'</td>
								
							</tr>';
						}while ($row = mysql_fetch_assoc($qequi));
					}
					?>
				</tr>
			</table>
		</div>
		



		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 align="left">Rellene los campos</h3>
					<form>
						<fieldset>
							<label for="equipo">Equipo:</label>
							<select  style="margin-top:30px;" id="equipo" name="equipo">
								<option value="0">Seleccione el equipo</option>
								<?php  $qequi= mysql_query("SELECT
									j101t_ft_equipo.id_ft_equipo,
									j101t_ft_equipo.cod_equipo
									FROM 
									j101t_ft_equipo WHERE id_division = '$id_division'", $con);

								while ($row = mysql_fetch_assoc($qequi)){
									$id_ft_equipo=$row['id_ft_equipo'];
									$cod_equipo=$row['cod_equipo'];	
									echo '<option value="'.$id_ft_equipo.'">'.$cod_equipo.'</option>';
								}
								?>
							</select>
							<?php 

							$query= mysql_query("SELECT
								j101t_ft_equipo.id_ft_equipo,
								j101t_ft_equipo.cod_equipo,
								t111t_actividad_taladro.nb_actividad_taladro,
								t113t_distrito.nb_distrito,
								tnp_estatus_ppyg.nb_estatus_ppyg,
								x104t_diario_ppyg.tx_comentario,
								j103t_pozo.fe_inicio,
								j103t_pozo.fe_plan_preliminar,
								x104t_diario_ppyg.va_dias_inactivos,
								j103t_pozo.nb_localizacion,
								x104t_diario_ppyg.nb_responsable
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
								t115t_division.id_division = '$id_division' AND
								j101t_ft_equipo.id_ft_equipo = '$id_ft_equipo'
								", $con);
							$fila = mysql_fetch_assoc($query);

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
								

							?>		

							<script>
								$("#equipo").on("change", function(){
									var selected = $(this).val();
									$("#estatus").html("You selected: " + '<?php echo "$nb_estatus_ppyg1";?>');
									$("#fei_operaciones").html("You selected: " + '<?php echo "$fei_operaciones1";?>');
									$("#dias_inactividad").html("You selected: " + '<?php echo "$dias_inactividad1";?>');
									$("#responsable").html("You selected: " + '<?php echo "$responsable1";?>');
									$("#comentario").html("You selected: " + selected);
								})
							</script>
						</fieldset>
						
						<label for="fecha"></label>
						<input  style="margin-top:30px;" value="" type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">



						<label for="estatus"></label>
						<input type="text" class="form-control" id="estatus" name="estatus" placeholder="Estatus" value="<?php echo $nb_estatus_ppyg1; ?>">

						<label for="fei_operaciones"></label>
						<input type="text" class="form-control" id="fei_operaciones" name="fei_operaciones" placeholder="F.E.I de Operaciones">

						<label for="plan_preliminar"></label>
						<input type="text" class="form-control" id="plan_preliminar" name="plan_preliminar" placeholder="Plan Preliminar">

						<label for="fei_operaciones"></label>
						<input type="date" class="form-control" id="fei_operaciones" name="fei_operaciones" placeholder="F.E.I Operaciones">

						<label for="dias_inactividad"></label>
						<input type="text" class="form-control" id="dias_inactividad" name="dias_inactividad" placeholder="Dias de Inactividad">

						<label for="responsable"></label>
						<input type="text" class="form-control" id="responsable" name="responsable" placeholder="Responsable">


						<div style="margin-top: 15px;">
							<textarea name="comentario" id="comentario" rows="4" cols="40" placeholder="Comentario"></textarea>

						</div>

						<script>
							function redirect(){
								window.location.replace("../../home.php");
							}   
						</script>
						<div style="position: inline-block;">

							<button type="submit" class="btn btn-default" style="margin-top:15px;margin-right: 6px; margin-left: 1px; width: 200;">Registrar</button>
						</div>

					</form>
				</div></div></div></div>





















				<?php 

//TITULO DEL REPORTE ... COLOCAR ESTATUS DE CIERRE DE REPORTE... COLOCAR FECHA ACTUAL EN LA ESQUINA SUPERIOR DERECHA



				include '../../footer.php';
				?>







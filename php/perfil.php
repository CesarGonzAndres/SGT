<?php 
session_start();
$nombre=$_SESSION["nb_usuario"];
$id_usuario = $_SESSION["id_usuario"];
$id_division = $_SESSION["id_division"];
$cod_usuario = $_SESSION["cod_usuario"];
$tlf_extension = $_SESSION["tlf_extension"];
$tlf_celular = $_SESSION["tlf_celular"];
$nb_localizacion = $_SESSION["nb_localizacion"];
$nb_gerencia = $_SESSION["nb_gerencia"];

include "conexion.php";

if(!empty($_POST)){
$sql ="UPDATE j100t_usuario
SET tlf_celular='$tlf_celular',tlf_extension='$tlf_extension',nb_localizacion='$nb_localizacion',nb_gerencia='$nb_gerencia'";
mysql_select_db('sgt');
$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo '<script>alert("DATOS ACTUALIZADOS")</script';
}
?>

<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>.: SGT - PDVSA, S.A :.</title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<script src="../librerias/jquery/jquery.min.js"></script>
	<script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../librerias/jquery/jquery-ui.css">
	<script src="../librerias/jquery/jquery-1.12.4.js"></script>
	<script src="../librerias/jquery/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#datepicker" ).datepicker();
		});
	</script>
</head>
<body>
	<style type="text/css">
		legend {
			display: block;
			padding-left: 2px;
			padding-right: 2px;
			border: none;
		}	
	</style>
	<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../imagenes/membrete.png"></div><div style="clear: left;"/></h4>
	
	<p><?php echo $nombre; ?></p>
	<body> 

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="">Perfil de Usuario</a>
				</div>
				<ul class="nav navbar-nav">

				</ul>
				<ul class="nav navbar-nav navbar-right">


					<li><a href="../home.php"><span class="glyphicon glyphicon-log-in"></span> Atras</a></li>
				</ul>
			</div>
		</nav>
		<style type="text/css">
			form p {
				display: inline;
			}
		</style>		


		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3 align="left">Mi Perfil</h3>
					<form role="form" name="login" action="" method="post" id="form_login">
						<fieldset>
							<legend>Información Personal</legend>
							<div class="form-group">
								<label for="tlf_celular">Telefono Personal</label>
								<input value="<?php echo "$tlf_celular";?>" type="tel"  class="form-control" id="tlf_celular" name="tlf_celular" placeholder="">
							</div>
							<div class="form-group">
								<label for="tlf_extension">Extensión</label>
								<input value="<?php echo "$tlf_extension";?>" type="number" class="form-control" id="tlf_extension" name="tlf_extension" placeholder="Ext. PDVSA">
							</div>
							<div class="form-group">
								<label for="nb_gerencia">Gerencia</label>
								<input value="<?php echo "$nb_gerencia";?>" type="text" class="form-control" id="nb_gerencia" name="nb_gerencia" placeholder="">
							</div>
							<div class="form-group">
								<label for="nb_localizacion">Localización</label>
								<input value="<?php echo "$nb_localizacion";?>" type="text" class="form-control" id="nb_localizacion" name="nb_localizacion" placeholder="Lugar">
							</div>
							<input name="id_usuario" type="hidden" value="<?php echo '.$id_usuario.' ?>">
							<div>
								<ul class="nav navbar-nav navbar-right">



									<li><button type="submit" class="btn btn-default">Guardar</button></li>

								</ul>
							</div>

						</fieldset>
					</form>
				</div>
			</div>
		</div>


	</body>
	</html>
<?php
if(isset($_POST['update'])) {
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $id = $_POST['id'];
   $nb_usuario = $_POST['nb_usuario'];

   $sql = "UPDATE jt100t_usuario ". "SET nb_usuario = $nb_usuario ". 
   "WHERE id_usuario = $id_usuario" ;
   mysql_select_db('sgt');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not update data: ' . mysql_error());
   }
   echo "Updated data successfully\n";
   mysql_close($conn);

}else {
  
}

echo 
'<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>.: SGT :.</title>
  <link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/home.css">
  <script src="../../librerias/jquery/jquery.min.js"></script>
  <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../librerias/jquery/jquery-ui.css">
  <script src="../../librerias/jquery/jquery-1.12.4.js"></script>
  <script src="../../librerias/jquery/jquery-ui.js"></script>
  
</head>
<body>

  <div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="../../imagenes/membrete.png"></div><div style="clear: left;"/></h4>; 
  <body> 
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Actualizar usuario</a>
      </div>
      <ul class="nav navbar-nav">

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

        <li><a href="../../home.php"><span class="glyphicon glyphicon-log-in"></span> Atras</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h3>Información a Actualizar</h3>
    <form action="" method="POST">
<div class="form-group">
                  <label for="id_usuario"></label>
                  <input type="text" class="form-control" id="id_usuario" name="id_usuario" placeholder="ID user">   
               </div>

               <div class="form-group">
                 <label for="nb_usuario"></label>
                 <input type="text" class="form-control" id="nb_usuario" name="nb_usuario" placeholder="Nombre">
              </div>
            </form>
      <p style="margin-left: 15px;"><button type="submit" class="btn btn-default" style="margin-right: 20px;" >Enviar</button></p>
    </form>
  </div>';
  include '../../footer.php';
//TITULO DEL REPORTE ... COLOCAR ESTATUS DE CIERRE DE REPORTE... COLOCAR FECHA ACTUAL EN LA ESQUINA SUPERIOR DERECHA
  ?>









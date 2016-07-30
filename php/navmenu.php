<?php
//TRAE VARIABLES DE USARIO PARA USARLAS EN LA SESSION COMPI
$_SESSION['id_usuario']; // descargo id de la bd
$_SESSION['cod_usuario']; // descargo el nombre de la base de datos
$_SESSION['id_privilegio'];
$_SESSION["nb_usuario"];
$_SESSION['id_division'];
$nombre=$_SESSION["nb_usuario"];
$id_privilegio=$_SESSION['id_privilegio'];
if (isset($id_privilegio) && ($id_privilegio == '1')) {
 echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Administrador: </b>'; ?>
 <?php echo $nombre;
 echo '</p><body>
 <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">SGT</a>
     </div>
     <ul class="nav navbar-nav">
       <li class="active"><a href="home.php">Incio</a></li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Comportamiento<span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="menu/ppyg/idtyc.php">IDTYC</a></li>
           <li><a href="#">Dato Variable</a></li>
           <li><a href="#">Modulo</a></li>
           <li><a href="#">Semaforo</a></li>
           <li><a href="#">Historial</a></li>
           <li><a href="#">Indicadores Graficos</a></li>
           <li><a href="#">Seguimiento de Carga</a></li>
         </ul>
       </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Planificación<span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="menu/ppyg/idtyc.php">Secuencia</a></li>
           <li><a href="#">Ficha Técnica</a></li>
           <li><a href="#">Consolidado</a></li>
         </ul>
       </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Presupuesto<span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#">Cuentas</a></li>
           <li><a href="#">Proyectos de Inversion SAP</a></li>
           <li><a href="#">OP SAP</a></li>
         </ul>
       </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestión<span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#">TNP</a></li>
           <li><a href="#">Indicadores</a></li>
           <li><a href="#">Graficas</a></li>
           <li><a href="#">Consolidado</a></li>
         </ul>
       </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrar Usuarios<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="menu/administrar/crear_usuario.php">Crear Usuario</a></li>
            <li><a href="menu/administrar/modificar.php">Modificar Usuario</a></li>
            <li><a href="menu/administrar/eliminar_usuario.php">Eliminar Usuario</a></li>
            <li><a href="#">Consultar Usuario</a></li>
          </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrar Equipos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="menu/administrar/añadir_equipo.php">Crear Usuario</a></li>
            <li><a href="menu/administrar/modificar_equipo.php">Modificar Usuario</a></li>
            <li><a href="menu/administrar/eliminar_usuario.php">Eliminar Usuario</a></li>
            <li><a href="#">Consultar Usuario</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--  <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
      -->
      <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
  <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
</div>';
}
elseif (isset($id_privilegio) && ($id_privilegio == '2')) {
 echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PCyG: </b>'; ?>
 <?php echo $nombre;
 echo '<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SGT</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="home.php">Incio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consolidar<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu/pcyg/reporte_perforabilidad.php">Reporte de Perforabilidad</a></li>
          <li><a href="#">Corregir Reporte</a></li>
          <li><a href="#">Visualizar de Reporte</a></li>
          <li><a href="#">Base de Datos</a></li>
        </ul>
      </li>
      <li><a href="#">Contacto Soporte</a></li>
      <li><a href="#">Seguimiento de Carga</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

      <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
  <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
</div>';

}
elseif (isset($id_privilegio) && ($id_privilegio == '3')) {
  echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista PPyG: </b>'; ?>
  <?php echo $nombre;
  echo '</p><body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">SGT</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Incio</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Comportamiento<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="menu/ppyg/idtyc.php">IDTYC</a></li>
            <li><a href="menu/ppyg/dato_variable.php">Dato Variable</a></li>
            <li><a href="menu/ppyg/modulo.php">Modulo</a></li>
            <li><a href="menu/ppyg/semaforo.php">Semaforo</a></li>
            <li><a href="menu/ppyg/consultar_bd.php">Historial</a></li>
            <li><a href="menu/ppyg/desarrollo.php">Indicadores Graficos</a></li>
            <li><a href="menu/ppyg/desarrollo.php">Seguimiento de Carga</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Planificación<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="menu/ppyg/secuencia.php">Secuencia</a></li>
            <li><a href="#">Ficha Técnica</a></li>
            <li><a href="#">Consolidado</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Presupuesto<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="menu/ppyg/idtyc.php">IDTYC</a></li>
            <li><a href="#">Proyectos de Inversion SAP</a></li>
            <li><a href="#">OP SAP</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestión<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">TNP</a></li>
            <li><a href="#">Indicadores</a></li>
            <li><a href="#">Graficas</a></li>
            <li><a href="#">Consolidado</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
    <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
  </div>';
}
elseif (isset($id_privilegio) && ($id_privilegio == '4')) {
 echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Unidad de Control y Seguimiento: </b>'; ?>
 <?php echo $nombre;
 echo '<body>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SGT</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="home.php">Incio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consultar<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Visualizar Reporte</a></li>
          <li><a href="#">Modificar Reporte</a></li>
          <li><a href="#"></a></li>
          <li><a href="#">Semaforo</a></li>
          <li><a href="#">Base de Datos</a></li>
        </ul>
      </li>
      <li><a href="#">Indicadores Graficos</a></li>
      <li><a href="#">Seguimiento de Carga</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

      <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
  <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
</div>
<div>
<ul class="bxslider">
  <li><img src="imagenes/tree_root.jpg" title="Funky roots" /></li>
  <li><img src="imagenes/hill_road.jpg" title="The long and winding road" /></li>
  <li><img src="imagenes/trees.jpg" title="Happy trees" /></li>
</ul></div>
';
}
elseif (isset($id_privilegio) && ($id_privilegio == '5')) {
  echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista RST: </b>'; ?>

  <?php echo $nombre;

  echo '
  <body>
    <?php echo $_SESSION["nombre"]; ?>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-herader">
          <a class="navbar-brand" href="#">SGT</a>
        </div>
        <ul class="nav navbar-nav">

          <li class="active"><a href="home.php">Incio</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consolidar<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Carga Diaria</a></li>
              <li><a href="#">Modificar</a></li>
              <li><a href="#">Base de Datos</a></li>
            </ul>
          </li>
          <li><a href="#">Contacto Soporte</a></li>
          <li><a href="#">Seguimiento de Carga</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>

          <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
      <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
    </div>';
  }
  elseif (isset($id_privilegio) && ($id_privilegio == '6')) {
    echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Analista Mantenimiento: </b>'; ?>

    <?php echo $nombre;

    echo '

    <?php echo $_SESSION["nombre"]; ?>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">SGT</a>
        </div>
        <ul class="nav navbar-nav">

          <li class="active"><a href="home.php">Incio</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Consolidar<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Actualizar Ficha Técnica</a></li>
              <li><a href="#">Carga de Proyect</a></li>
              <li><a href="#">Base de Datos</a></li>
            </ul>
          </li>
          <li><a href="#">Secuencia Operativa</a></li>
          <li><a href="#">Contacto Soporte</a></li>
          <li><a href="#">Seguimiento de Carga</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
          <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
      <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
    </div>';
}
    elseif (isset($id_privilegio) && ($id_privilegio == '7')) {
      echo '<div style="float:left;"><h4>Sistema de Gestión de Taladro (SGT)</h4></div> <div style="float:right;"><img src="imagenes/membrete.png"></div><div style="clear: left;"/></h4><p><b>Invitado: </b>'; ?>

      <?php echo $nombre;
      echo '
      <?php echo $_SESSION["nombre"]; ?>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">SGT</a>
          </div>
          <ul class="nav navbar-nav">

            <li class="active"><a href="home.php">Incio</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">En desarrollo<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Opcion 1</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="#">Opcion 3</a></li>
              </ul>
            </li>
            <li><a href="#">En desarrollo</a></li>
            <li><a href="#">En desarrollo</a></li>
            <li><a href="#">En desarrollo</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="php/perfil.php"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
            <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h3>Reportes actualizados correspondientes a las actividades medulares de la Gerencia de Presupuesto, Planificación y Gestión región Occidente.</h3>
        <p>Contenido practico y veraz consolidado en una base de datos relacional segura y agil.</p>
      </div>';
    }	else { /*redireccionamiento javascript para atras sino tiene ningun roll asignado ESTE ELSE SINO TIENE ROLL ASIGNADO LO DEVUELVE AL INDEX COMPI*/
      echo '<script type="text/javascript">
    // Javascript URL redirection
      alert("Usted no posee un roll asignado!. Porfavor contacte al administrador del sitio");
      window.location.replace("../sgt/index.php");
    </script>';
  }
  ?>

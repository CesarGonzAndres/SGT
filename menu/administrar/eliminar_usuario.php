<?php
include "../../php/conexion.php";
$sql = mysql_query("SELECT * FROM usuario", $con) or die(mysql_error());
// mostramos los registros
while($row = mysql_fetch_array($sql)){
echo $row['nombre']." - ".$row['correo'].
// mostramos un vinculo Eliminar
// que envia via $_GET
// el ID del registro a eliminar
" - <a href='eliminar_usuario.php?id=$row[id]'>Eliminar</a>"."\n";
}

if(isset($_POST['eliminar']) && $_POST['eliminar'] == 'Eliminar'){
	
// creamos la consulta
// que eliminara el registro
// que viene via $_POST
$id_eliminar = $_POST['id'];
$sqlEliminar = mysql_query("DELETE FROM usuario
WHERE id = $id_eliminar", $con)
or die(mysql_error());
// enviamos un mensage de exito
$mensaje =  "<script> alert('El usuario ha sido eliminado!') </script>";
}
// si no ha sido enviado el formulario aun
// recogemos el ID
// del registro a eliminar
// via $_GET
elseif(isset($_GET['id'])){
$id = $_GET['id'];
// hacemos una consulta
// para mostrar el registro
// que vamos a eliminar
$sql = mysql_query("SELECT * FROM usuario
WHERE id = $id", $con)
or die(mysql_error());
$row = mysql_fetch_array($sql);
// advertimos
$mensaje = "¿Está seguro que quiere eliminar el usuario <b>$row[nombre]</b>?";
}
if(isset($mensaje)){
// mostramos el mensage
echo $mensaje;
/* creamos el formulario HTML
que enviara el ID
del registro a eliminar*/
}
?>
<?php
if (isset($mensaje) && ($mensaje) != '') {
	echo'<form name="eliminar-registro" method="post" action="">
<input name="id" type="hidden" value="'.$id.'">
<input name="eliminar" type="submit" value="Eliminar">
</form>';
}else{}

?>
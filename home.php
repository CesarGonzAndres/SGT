<?php
session_start();
include 'head.php';
include 'php/navmenu.php';  
//cierre de body tambien
//if(!isset($_SESSION["id_usuario"])) antiguo codigo pero el que sigue funciona y trae el nombre del usuario segun session 
//CHECKEAR SINO EXISTE SESION NO INGRESA AL HOME carajo!
echo '</div>';
include 'footer.php';
if(isset($_SESSION['cod_usuario']) && $_SESSION['cod_usuario'] != ""){
return $_SESSION['cod_usuario'];//traer usuario de sesion
}else{
header('Location: index.php');// redireccion 
}
?>
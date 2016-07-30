<?php
if(!empty($_POST)){
	if(isset($_POST["cod_usuario"]) && isset($_POST["psw_contrasena"])){
		if($_POST["cod_usuario"]!=""&& $_POST["psw_contrasena"]!=""){
			include "conexion.php";
			
			$id_usuario=null;
			$cod_usuario=$_POST["cod_usuario"];
			$psw_contrasena=$_POST["psw_contrasena"];
			$sql1= mysql_query("SELECT
				*
				FROM
				j100t_usuario
				WHERE
				j100t_usuario.cod_usuario = '$cod_usuario' AND
				j100t_usuario.psw_contrasena = '$psw_contrasena'", $con);
			while ($row = mysql_fetch_assoc($sql1)){
				$id_usuario=$row['id_usuario'];
				$nb_usuario=$row['nb_usuario'];
				$cod_usuario=$row['cod_usuario'];
				$id_privilegio=$row['id_privilegio']; 
				$tlf_extension=$row['tlf_extension'];
				$tlf_celular=$row['tlf_celular'];
				$nb_localizacion=$row['nb_localizacion'];
				$nb_gerencia=$row['nb_gerencia'];
				$id_division=$row['id_division'];

			}
			if($id_usuario==null){	
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["id_usuario"]=$id_usuario;
				$_SESSION["nb_usuario"]=$nb_usuario;
				$_SESSION['cod_usuario']=$cod_usuario; 
				$_SESSION['id_privilegio']=$id_privilegio;
				$_SESSION['tlf_extension']=$tlf_extension; 
				$_SESSION['tlf_celular']=$tlf_celular;
				$_SESSION['nb_localizacion']=$nb_localizacion;
				$_SESSION['nb_gerencia']=$nb_gerencia;
				$_SESSION['id_division']=$id_division;
				print "<script>window.location='../home.php';</script>";
			}
		}
	}
}


?>


<?php 
define('DB_SERVER','localhost');
define('DB_NAME','sgt');
define('DB_USER','root');
define('DB_PASS','');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('No se pudo seleccionar la base de datos' .mysql_error());
mysql_select_db(DB_NAME,$con);
mysql_set_charset('utf8');
?>
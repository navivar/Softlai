<?php
	$conexion=mysql_connect("localhost","root","ksi") or die("Error de conexion".mysql_error());
	if(!$conexion){
		header("location:verificacion.php?error=Error en la Conexion de la DB");exit();
	}
	$db=mysql_select_db("inventario") or die ("Error al seleccionar la base de datos".mysql_error());
	if(!$db){
		header("location:verificacion.php?error=Error al Seleecionar la DB");exit();
	}
?>
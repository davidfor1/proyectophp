<?php
session_start();
function Conectarse(){

$objConexion = new mysqli("localhost", "root", "", "proyectophp");

if($objConexion->connect_errno){
	echo"Error de la Conexion de Base de Datos" . $objConexion->connect_errno;
	exit();
}
else{
	return $objConexion;
}
}

?>

<?php

extract($_REQUEST);
require"Conexion.php";

$contra = $_REQUEST['contra'];
$usu = $_REQUEST['usu'];

$objConexion = Conectarse();

$sql="select * from usuarios where usuario = '$usu' and contrasena = '$contra'"; 

$resultado = $objConexion->query($sql);
$existe = $resultado->num_rows;

if($existe==1){

	$usuari=$resultado->fetch_object();
	$_SESSION['USER']=$usuari->usuario;
	header("location:FormularioPaciente.php?pag=contenido");
  }else{

         alert("Usuario o Contraseña incorrecta");

	
  }
?>
<?php  

extract($_REQUEST);

require"Conexion.php";

$objConexion = Conectarse();


   $sql="insert into pacientes(identificacion,nombres,apellidos,fechaNacimiento,sexo)
   values('$_REQUEST[identificacion]','$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[fechaNacimiento]','$_REQUEST[sexo]')";
   
   if($objConexion->query($sql))
    header("location:FormularioPaciente.php");
   else
   	header("location:FormularioPaciente.php");
   

?>

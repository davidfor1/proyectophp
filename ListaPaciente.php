<?php  

require"Conexion.php";

$objConexion = Conectarse();


   $sql="select * from pacientes";
   
   $resultado = $objConexion->query($sql);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de pacientes</title>
</head>
<body background="imagenFondo\Fondo.jpg">
	<FONT COLOR="white"</FONT><h1 align="center">LISTA DE PACIENTES</h1></FONT>

	<table width="70%" border="5" align="center">
		<tr align="center" bgcolor="$fbc88">
			<td>Identificacion</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Fecha Nacimiento</td>
			<td>Sexo</td>
		</tr>

		
		<?php 
             while ($datos= $resultado->fetch_array()) {
         ?>
              
          <tr bgcolor="#FFFFFF" class="texto" align="center">
          	<td><?php echo $datos['identificacion']?></td>
            <td><?php echo $datos['nombres']?></td>
            <td><?php echo $datos['apellidos']?></td>
            <td><?php echo $datos['fechaNacimiento']?></td>
            <td><?php echo $datos['sexo']?></td>
             </FONT>
          </tr>
          <?php
          }    
          ?>
	</table>

</body>
</html>
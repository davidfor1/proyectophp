<?php
session_start();
if(!isset($_SESSION['USER']))
header("location:Login.php?msj=Debe iniciar Sesion")
?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulario paciente</title>
</head>
<body background="imagenFondo\Fondo.jpg">
	<FONT COLOR="white"><h1 align="center">"Programando ando" David Forero</h1> </FONT>
	
  <form id="form1" name="form1" method="post" action="ValidarPaciente.php">

    <table width="30%" border="10" align="center">
      <tr bgcolor="$fbc88" class="texto">

          <td colspan="2" align="center"> REGISTRAR PACIENTE </td>
      </tr>
      
      <tr>
      	 <td width="28%" 	="right" bgcolor="#fbc88"> Identificacion</td>
      	 <td width="72%"><label for="identificacion"></label>
      	 	<input name="identificacion" type="text" id="identificacion" size="40"required/>
      	 	</td>		 
      </tr>

      <tr>
      	<td align="right" bgcolor="#fbc88"> Nombres</td>
      	<td><input name="nombres" type="text" id="nombres" size="40" required/></td>
      </tr>

       <tr>
      	<td align="right" bgcolor="#fbc88"> Apellidos</td>
      	<td><input name="apellidos" type="text" id="apellidos" size="40" required/></td>
       </tr>
       
       <tr>
      	<td align="right" bgcolor="#fbc88"> Fecha Nacimiento</td>
      	<td><input name="fechaNacimiento" type="date" id="fechaNacimiento" size="40" required/></td>
       </tr> 

       <tr>
       	<td align="right" bgcolor="#fbc88">Sexo</td>
        	<td><label for="Sexo"></label>
       		    <select name="sexo" id="sexo" style="width: 270px">
       		       <option value="Femenino">Femenino</option>	
       		      <option value="Masculino">Masculino</option>	
       		    </select>
       	    </td>    
       </tr>

       <tr bgcolor="$fbc88" class="texto"> 
          <td colspan="2" align="center" bgcolor="$fbc88"><input type="submit" name="button" id="button"value="Enviar"/></td>
       </tr>
<tr bgcolor="$fbc88" class="texto">
<td colspan="2" align="center"><a href="http://localhost/cursoPHP/ListaPaciente.php">Lista de Pacientes</a></td>
/tr>    
    </table>
  </form>
</body>
</html>

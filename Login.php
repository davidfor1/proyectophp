
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
</head>
<body background="imagenFondo\Fondo.jpg">
   
      <FONT COLOR="white"><h1 align="center">Iniciar Sesion</h1> </FONT>

	<form id="form1" name="form1" method="post" action="ControladorSesion.php">

	 <table width="10%" border="12" align="center">
      <tr bgcolor="$fbc88">

          <td colspan="2" align="center" bgcolor="$fbc88" class="texto">  lOGIN </td>
      </tr>
		
		 <tr>
      	<td align="right" bgcolor="#fbc88"> Usuario</td>
      	<td><input name="usu" type="text" id="Usuariou" size="25" required/></td>
      </tr>

       <tr>
      	<td align="right" bgcolor="#fbc88"> Contraseña</td>
      	<td><input name="contra" type="password" id="contra" size="25" required/></td>
       </tr>

        <tr bgcolor="$fbc88" class="texto"> 
          <td colspan="2" align="center" bgcolor="$fbc88"><input type="submit" name="button" id="button"value="Entrar"/></td>
       </tr>

	</table>
	

</form>

</body>
</html>
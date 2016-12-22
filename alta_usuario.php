<script Language="JavaScript">
	<!--
	function valida_campos()
	{
	if (!document.forma.nombre.value)
		{
			window.alert("Falta el nombre del abogado.");
			return (false);
		}

	if (!document.forma.direccion.value)
		{
			window.alert("Falta la dirección del abogado.");
			return (false);
		}

	if (!document.forma.telefono.value)
		{
			window.alert("Falta el teléfono del abogado.");
			return (false);
		}

	if (!document.forma.usuario.value)
		{
			window.alert("Falta el nombre de usuario del abogado.");
			return(false);
		}

	if(!document.forma.pwd.value)
		{
			window.alert("Falta el password de usuario.");
			return(false);
		}
	}
-->
</script>

<html>
<head>
<title>Sistema de Control de Juicios -Alta Usuario</title>
<link rel="stylesheet" href="style.css">
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
?>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td>Nuevo Usuario</td>
	<td><a href="modif_user.php">Modificar Usuario</a></td>
	<td><a href="del_user.php">Elimina Usuario</a></td>
	<td><a href="lecturaabogado.php">Lista abogados</td>
</tr>
<tr>
	<td colspan=4><hr></td>
</tr>
<tr>
	<td colspan=6><a href="index.html">Salir</a></td>
</tr>
</table>
</div>
</center>
<center>
	<h1>Sistema de control de Juicios</h1>
	<h3>Diaz-López, Gil-Hernández, Rodríguez Abogados</h3>
	<h4>Opciones de Administrador</h4>
	<?php echo"Nuevo Usuario"?>

<form name="forma" action="add_super_user.php?" method="post" onSubmit="return valida_campos()">
	<table>
	<tr>
	<td>Nombre Completo:</td>
	<td><input type=text name="nombre"><br></td>
	</tr>
	<tr>
	<td>Dirección:</td>
	<td><input type=text name="direccion"><br></td>
	</tr>
	<tr>
	<td>Teléfono:</td>
	<td><input type=text name="telefono"><br></td>
	</tr>
	<tr>
	<td>Nombre de usuario(sistema):</td>
	<td><input type=text name="usuario"><br></td>
	</tr>
	<tr>
	<td>Password:</td>
	<td><input type="password" name="pwd"><br></td>
	</tr>
	</table>
	<input type="submit" name"envia" value="Envia">
</form>


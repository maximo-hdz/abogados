<script language="JavaScript" type="text/javascript">
function valida_campos(){
	if (document.forma.abogado_nom.value==0){
		window.alert("Falta el nombre del abogado.");
		return false;
	}
	return true;
}
</script>
<html>
<head>
<title>Sistema de Control de Juicios -Baja Usuario</title>
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
	<td><a href="alta_usuario.php">Nuevo Usuario</td>
	<td><a href="modif_user.php">Modificar Usuario</a></td>
	<td>Elimina Usuario</td>
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
	<?php echo"Elimina Usuario"?>
<form name="forma" action="drop_super_user.php?" method="post" onSubmit="return valida_campos()">
<table>
<TR>
	<TD>Nombre completo:</TD>
	<TD><Select name="abogado_nom">
	<OPTION VALUE=0></OPTION>
	<?php	$abog=mysql_db_query("juicio_laboral","SELECT * FROM abogado");
		if (mysql_num_rows($abog)==0)
 			echo "<option value=0>No abogados</option>";
		else{
			while ($resul = mysql_fetch_array($abog))
			print "<option value=$resul[id_abogado]>$resul[nombre]</option>";
		}
	?>
	</select>
	</TD>
</TR>
</table>
<input type="submit" name"envia" value="Envia">
</form>

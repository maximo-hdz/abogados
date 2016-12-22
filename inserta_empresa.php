<script>
function valida_campos(){
	if(!document.forma.nombre.value){
		window.alert("falta el nombre de la empresa");
		return false;
	}
	if(!document.forma.direccion.value){
		window.alert("falta dirección de la empresa");
		return false;
	}
	if(!document.forma.telefono.value){
		window.alert("falta teléfono de la empresa");
		return false;
	}
return true;
}
</script>

<head>
<title>Sistema de Control de Juicios</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td><a href="demanda.php">Demanda</td>
	<td><a href="actor.php">Actor</a></td>
	<td>Empresa</td>
</tr>
<tr>
	<td colspan=4><hr></td>
</tr>
<tr>
	<td>Agrega Empresa</td>
	<td><a href="borrarempresa.php">Elimina Empresa</a></td>
	<td><a href="lecturaempresa.php">Lista Empresas</a></td>
	<td><a href="modif_empresa.php">Modifica Empresas</a></td>
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
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
echo "Agregar Empresa";
?>
<FORM name="forma" METHOD="POST" ACTION="inserta_empresa1.php" onSubmit="return valida_campos()">
<table>
<tr>
<td>Nombre</td>
<td><INPUT TYPE="TEXT" NAME="nombre"></td>
</tr>
<tr>
<td>Direcci&oacute;n</td>
<td><input type="TEXT" name="direccion"></td>
</tr>
<tr>
<td>Teléfono</td>
<td><INPUT TYPE="TEXT" NAME="telefono"></td>
</tr>
</table>
<INPUT TYPE="SUBMIT" value="Envía">
</FORM>
</BODY>
</HTML>
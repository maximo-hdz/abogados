<script>
function valida_campos(){
	if(!document.forma.nombre.value){
		window.alert("falta el nombre del actor");
		return false;
	}
	if(!document.forma.direccion.value){
		window.alert("falta dirección del actor");
		return false;
	}
	if(!document.forma.telefono.value){
		window.alert("falta teléfono del actor");
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
	<td>Actor</td>
	<td><a href="inserta_empresa.php">Empresa</a></td>
</tr>
<tr>
	<td colspan=4><hr></td>
</tr>
<tr>
	<td>Agrega Actor</td>
	<td><a href="borraractor.php">Elimina Actor</a></td>
	<td><a href="lecturaactor.php">Lista Actores</a></td>
	<td><a href="modif_actor.php">Modifica Actor</a></td>
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
echo "Agregar Actor";
?>
<FORM name="forma" METHOD="POST" ACTION="actor1.php" onSubmit="return valida_campos()">
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




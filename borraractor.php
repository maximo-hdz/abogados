<script>
function valida_campos(){
	if(document.elimina.id_actor.value==0){
		window.alert("falta actor");
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
	<td><a href="actor.php">Agrega Actor</td>
	<td>Elimina Actor</a></td>
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
echo "Elimina actor";
echo '<FORM name="elimina" METHOD="POST" ACTION="borraractor1.php" onsubmit="return valida_campos()">';
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select * From actor Order By id_actor";
$result=mysql_db_query("juicio_laboral",$sSQL);
echo '<table>';
?>
<tr><td>Nombre</td><td><select name="id_actor">
<?php
print '<option value=0></option>';
if(mysql_num_rows($result)==0){
print "<option value=0>No Actores</option>";
}
else{
	while ($row=mysql_fetch_array($result)){
		print "<option value=$row[id_actor]>$row[nombre]</option>";
	}
	mysql_free_result($result);
}
?>
</select></td></tr>
</table>
<INPUT TYPE="SUBMIT" value="Borrar">
</FORM>
</BODY>
</HTML>
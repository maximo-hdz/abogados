<script>
function valida_campos(){
	if(document.elimina.id_empresa.value==0){
		window.alert("falta empresa");
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
	<td><a href="inserta_empresa.php">Agrega Empresa</td>
	<td>Elimina Empresa</a></td>
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
echo "Elimina empresa";
echo '<FORM name="elimina" METHOD="POST" ACTION="borrarempresa1.php" onsubmit="return valida_campos()">';
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select * From empresa Order By id_empresa";
$result=mysql_db_query("juicio_laboral",$sSQL);
echo '<table>';
?>
<tr><td>Nombre</td><td><select name="id_empresa">
<?php
print '<option value=0></option>';
if(mysql_num_rows($result)==0){
print "<option value=0>No Empresas</option>";
}
else{
	while ($row=mysql_fetch_array($result)){
		print "<option value=$row[id_empresa]>$row[nombre]</option>";
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
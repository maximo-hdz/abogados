<script>
function valida_campos(){
	if(document.elimina.id_demanda.value==0){
		window.alert("falta demanda");
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
	<td>Demanda</td>
	<td><a href="actor.php">Actor</a></td>
	<td><a href="inserta_empresa.php">Empresa</a></td>
</tr>
<tr>
	<td colspan=7><hr></td>
</tr>
<tr>
	<td><a href="demanda.php">Agrega Demanda</td>
<!--	<td><a href="alta_testigo.php">Modifica Demanda</a></td> -->
	<td>Elimina Demanda</a></td>
	<td><a href="lecturademanda.php">Lista Demandas</a></td>
	<td><a href="fin_demanda.php">Finaliza Demanda</a></td>
	<td><a href="asigna.php">Asigna Demanda</a></td>
	<td><a href="lecturaasigna.php">Lista Asignadas</a></td>
</tr>
<tr>
	<td colspan=7><hr></td>
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
echo "Elimina demanda";
?>
<FORM name="elimina" METHOD="POST" ACTION="elimina_demanda2.php" onSubmit="return valida_campos()">
<table>
<tr><td>Demanda</td>
<?php
echo '<td><select name="id_demanda">';
echo '<option value=0></option>';
$sSQL="Select asunto,id_demanda From demanda Order By id_demanda";
$result=mysql_db_query("juicio_laboral",$sSQL);
if(mysql_num_rows($result)==0)
	echo "<option value=0>No demandas</option>";
else{
	while ($row=mysql_fetch_array($result)){
		print "<option value=$row[id_demanda]>$row[asunto]</option>";
	}
}
?>
</select></td></tr>
</table>
<INPUT TYPE="SUBMIT" value="Envía">
</FORM>
</BODY>
</HTML>

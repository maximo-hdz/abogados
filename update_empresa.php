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
	<td><a href="borrarempresa.php">Elimina Empresa</a></td>
	<td><a href="lecturaempresa.php">Lista Empresas</a></td>
	<td>Modifica Empresas</a></td>
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
$empresa=$_POST["empresa_nom"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$newname=$_POST["newname"];
if(mysql_db_query("juicio_laboral","UPDATE empresa SET nombre='$newname',direccion='$direccion',telefono='$telefono' where id_empresa='$empresa'")){
?>
<script>
window.alert("actualización exitosa");
window.location="modif_empresa.php";
</script>
<?php
}
else{
?>
<script>
window.alert("existe un error");
window.location="modif_empresa.php";
</script>
<?php
}
?>

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
	<td><a href="borraractor.php">Elimina Actor</a></td>
	<td><a href="lecturaactor.php">Lista Actores</a></td>
	<td>Modifica Actor</a></td>
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
$actor=$_POST["actor_nom"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$newname=$_POST["newname"];
if(mysql_db_query("juicio_laboral","UPDATE actor SET nombre='$newname',direccion='$direccion',telefono='$telefono' where id_actor='$actor'")){
?>
<script>
window.alert("actualización exitosa");
window.location="modif_actor.php";
</script>
<?php
}
else{
?>
<script>
window.alert("existe un error");
window.location="modif_actor.php";
</script>
<?php
}
?>

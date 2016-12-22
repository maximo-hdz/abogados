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
$id_empresa=$_POST[id_empresa];
$sSQL="Delete From empresa Where id_empresa='$id_empresa'";
if(mysql_db_query("juicio_laboral",$sSQL)){
?>
<script>
window.alert("eliminada exitosamente");
window.location="borrarempresa.php";
</script>
<?php
}
else{
?>
<script>
window.alert("existe un error: <?php echo mysql_errno() .' '. mysql_error();?>");
window.location="borrarempresa.php";
</script>
<?php
}
?>
</BODY>
</HTML>


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
	<td><a href="demanda.php">Agrega Demanda</a></td>
<!--	<td><a href="alta_testigo.php">Modifica Demanda</a></td> -->
	<td><a href="elimina_demanda.php">Elimina Demanda</a></td>
	<td><a href="lecturademanda.php">Lista Demandas</a></td>
	<td><a href="fin_demanda.php">Finaliza Demanda</a></td>
	<td>Asigna Demanda</td>
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
echo "Agregar Demanda";
$abogado=$_POST["abogado_nom"];
$demanda=$_POST["demanda_nom"];
if($busq=mysql_db_query("juicio_laboral","insert into demanda_abogado values($abogado,$demanda)")){
?>
<script>
window.alert("insertado exitosamente.");
window.location="asigna.php";
</script>
<?php
}
else{
?>
<script>
window.alert("el abogado ya está en la demanda.");
window.location="asigna.php";
</script>
<?php
}
?>
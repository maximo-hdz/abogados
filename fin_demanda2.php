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
	<td><a href="elimina_demanda.php">Elimina Demanda</a></td>
	<td><a href="lecturademanda.php">Lista Demandas</a></td>
	<td>Finaliza Demanda</td>
	<td><a href="asigna.php">Asigna demanda</a></td>
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
<h3>Diaz-L�pez, Gil-Hern�ndez, Rodr�guez Abogados</h3>
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
$di=$_POST["DIA"];
$me=$_POST["MES"];
$an=$_POST["ANIO"];
$id_demanda=$_POST["id_demanda"];
$fecha=$an.'-'.$me.'-'.$di;
$sSQL="Update demanda Set fecha_fin='$fecha' Where id_demanda='$id_demanda'";
if(mysql_db_query("juicio_laboral",$sSQL)){
?>
<script>
window.alert("terminada exitosamente");
window.location="fin_demanda.php";
</script>
<?php
}
else{
?>
<script>
window.alert("existe un error");
window.location="fin_demanda.php";
</script>
<?php
}
?>
</BODY>
</HTML>

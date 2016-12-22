<html>
<head>
<title>Sistema de Control de Juicios -Borrado de Usuarios</title>
<link rel="stylesheet" href="style.css">
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
$abogado=$_POST["abogado_nom"];
mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
?>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td><a href="alta_usuario.php">Nuevo Usuario</a></td>
	<td><a href="modif_user.php">Modificar Usuario</a></td>
	<td>Elimina Usuario</a></td>
	<td><a href="lecturaabogado.php">Lista abogados</td></tr>
<tr>
	<td colspan=3><hr></td>
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
	<h4>Opciones de Administrador</h4>
<?php
$busc=mysql_db_query("juicio_laboral","Select user from abogado where id_abogado='$abogado'");
while($nueva=mysql_fetch_array($busc)){
$use=$nueva[user];
}

$contadora=0;
if(mysql_db_query("mysql","delete from user where user='$use'")){
$contadora++;
}
if(mysql_db_query("mysql","flush privileges")){
$contadora++;
}
if(mysql_db_query("juicio_laboral","delete from abogado where id_abogado='$abogado'")){
$contadora++;
}
echo $contadora;
if($contadora==3){
?>
<script>
window.alert("Borrado exitoso");
window.location="del_user.php";
</script>
<?php
}
else{
?>
<script>
window.alert("existe un error: <?php echo mysql_errno() .' '. mysql_error();?>");
window.location="del_user.php";
</script>
<?php
}
?>
</body>
</html>



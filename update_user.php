<html>
<head>
<title>Sistema de Control de Juicios -Modificacion Usuario</title>
<link rel="stylesheet" href="style.css">
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
$abogado=$_POST["abogado_nom"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$usuario=$_POST["usuario"];
$password=$_POST["pwd"];
$newname=$_POST["newname"];

mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
?>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td><a href="alta_usuario.php">Nuevo Usuario</a></td>
	<td>Modificar Usuario</td>
	<td><a href="del_user.php">Elimina Usuario</a></td>
	<td><a href="lecturaabogado.php">Lista abogados</td>
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
	<h4>Opciones de Administrador</h4>

	<?php
	$abogado=(int)$abogado;
	$nueva_query=mysql_db_query("juicio_laboral","SELECT user FROM abogado WHERE id_abogado='$abogado'");
	while($anterior=mysql_fetch_array($nueva_query)){
		$userant=$anterior[user];
	}
	$contadora=0;
	if(mysql_db_query("juicio_laboral","UPDATE abogado SET nombre='$newname',direccion='$direccion',telefono='$telefono',user='$usuario',password='$password' where id_abogado='$abogado'")){
	$contadora++;
	}
	if(mysql_db_query("mysql","DELETE FROM user WHERE user='$userant'")){
	$contadora++;
	}
	if(mysql_db_query("mysql","FLUSH PRIVILEGES;")){
	$contadora++;
	}
	if(mysql_db_query("mysql","GRANT delete,insert,update,select on juicio_laboral.* to '$usuario' identified by '$password'")){
	$contadora++;
	}
	if($contadora==4){
	?>
	<script>
	window.alert("Actualización exitosa");
	window.location="modif_user.php";
	</script>
	<?php
	}
	else{
	?>
	<script>
	window.alert("Existe un error");
	window.location="modif_user.php";
	</script>
	<?php
	}
	?>


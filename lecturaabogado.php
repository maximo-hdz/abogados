<head>
<title>Sistema de Control de Juicios</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td><a href="alta_usuario.php">Nuevo Usuario</td>
	<td><a href="modif_user.php">Modificar Usuario</a></td>
	<td><a href="del_user.php">Elimina Usuario</a></td>
	<td>Lista abogados</td>
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
echo "Reporte de los Abogados (Usuarios)";
$result=mysql_db_query("juicio_laboral","select * from abogado");
//Mostramos los registros
if(mysql_num_rows($result)==0){
?>
<br>No hay abogados/usuarios</br>
<?php
}
else{
?>
<table>
<tr>
<td>ID</td>
<td>Nombre</td>
<td>Dirección</td>
<td>Teléfono</td>
<td>Nombre Usuario</td>
<td>Password</td>
</tr>
<?php
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["id_abogado"].'</td>';
echo '<td>'.$row["nombre"].'</td>';
echo '<td>'.$row["direccion"].'</td>';
echo '<td>'.$row["telefono"].'</td>';
echo '<td>'.$row["user"].'</td>';
echo '<td>'.$row["password"].'</td>';
}
mysql_free_result($result);
}
?>
</table>
</BODY>
</HTML>
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
	<td><a href="inserta_empresa.php">Agrega Empresa</a></td>
	<td><a href="borrarempresa.php">Elimina Empresa</a></td>
	<td>Lista Empresas</td>
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
echo "Reporte de las Empresas";
$result=mysql_db_query("juicio_laboral","select * from empresa");
//Mostramos los registros
if(mysql_num_rows($result)==0){
?>
<br>No hay empresas</br>
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
</tr>
<?php
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["id_empresa"].'</td>';
echo '<td>'.$row["nombre"].'</td>';
echo '<td>'.$row["direccion"].'</td>';
echo '<td>'.$row["telefono"].'</td></tr>';
}
mysql_free_result($result);
}
?>
</table>
</BODY>
</HTML>
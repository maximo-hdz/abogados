<HTML>
<HEAD>
<TITLE>lecturafiscalia.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<h1><div align="center">Lectura de la tabla de Fiscalías</div></h1>
<br>
<br>
<?
//Conexion con la base
mysql_connect("","root","default");

//Ejecutamos la sentencia SQL
$result=mysql_db_query("juicio_laboral","select * from fiscalia");
?>
<table align="center">
<tr>
<th>Id</th>
<th>Direccion</th>
<th>Teléfono</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["id_fiscalia"].'</td>';
echo '<td>'.$row["direccion"].'</td>';
echo '<td>'.$row["telefono"].'</td></tr>';
}
mysql_free_result($result)
?>
</table>

<div align="center">
<a href="fiscalia.html">Añadir un nuevo registro</a><br>
<a href="actualizafiscaliatel1.php">Actualizar telefono</a><br>
<a href="actualizafiscaliadir1.php">Actualizar direccion</a><br>
<a href="borrarfiscalia1.php">Borrar un registro</a><br>
</div>

</BODY>
</HTML>
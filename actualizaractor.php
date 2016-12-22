<HTML>
<HEAD>
<TITLE>Actualizar2.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
mysql_connect("","tu_user","tu_password");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update Clientes Set telefono='$telefono' Where nombre='$nombre'";
mysql_db_query("ejemplo",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lectura.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>


<HTML>
<HEAD>
<TITLE>fiscalia.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<?
//Conexion con la base
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];

mysql_connect("","root","default");
//Ejecucion de la sentencia SQL
mysql_db_query("juicio_laboral","insert into fiscalia (id_fiscalia,direccion,telefono)
values ('','$direccion','$telefono')");
?>
<h1><div align="center">Registro Insertado</div></h1>
<div align="center"><a href="lecturafiscalia.php">Visualizar el contenido de la base</a></div>
</BODY>
</HTML>
<HTML>
<HEAD>
<TITLE>actualizaractordir.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<?
//Conexion con la base
$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];

mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update actor Set direccion='$direccion' Where nombre='$nombre'";
mysql_db_query("juicio_laboral",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lecturaactor.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>
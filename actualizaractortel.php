<HTML>
<HEAD>
<TITLE>actualizaractortel.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<?
//Conexion con la base
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];

mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update actor Set telefono='$telefono' Where nombre='$nombre'";
mysql_db_query("juicio_laboral",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lecturaactor.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>


<HTML>
<HEAD>
<TITLE>borrarfiscalia.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<?
//Conexion con la base
$nombre=$_POST["id_fiscalia"];

mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Delete From fiscalia Where id_fiscalia='$id_fiscalia'";
mysql_db_query("juicio_laboral",$sSQL);
?>

<h1><div align="center">Registro Borrado</div></h1>
<div align="center"><a href="lecturafiscalia.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>
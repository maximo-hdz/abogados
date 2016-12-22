<HTML>
<HEAD>
<TITLE>actualizarfiscaliadir.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<?
//Conexion con la base
$id_fiscalia=$_POST["id_fiscalia"];
$direccion=$_POST["direccion"];

mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update fiscalia Set direccion='$direccion' Where id_fiscalia='$id_fiscalia'";
mysql_db_query("juicio_laboral",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lecturafiscalia.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>
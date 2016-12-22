<HTML>
<HEAD>
<TITLE>actualizarfiscaliatel.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<?
//Conexion con la base
$id_fiscalia=$_POST["id_fiscalia"];
$telefono=$_POST["telefono"];

mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update fiscalia Set telefono='$telefono' Where id_fiscalia='$id_fiscalia'";
mysql_db_query("juicio_laboral",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lecturafiscalia.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>
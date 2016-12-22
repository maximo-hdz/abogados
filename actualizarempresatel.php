<HTML>
<HEAD>
<TITLE>Actualizar2.php</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
$id_empresa=$_POST["id_empresa"];
$telefono=$_POST["telefono"];

mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update empresa Set telefono='$telefono' Where id_empresa='$id_empresa'";
mysql_db_query("juicio_laboral",$sSQL);
?>

<h1><div align="center">Registro Actualizado</div></h1>
<div align="center"><a href="lecturaempresa.php">Visualizar el contenido de la base</a></div>

</BODY>
</HTML>


<HTML>
<HEAD>
<TITLE>actualizaactordir1.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<div align="center">
<h1>Actualizar un registro</h1>
<br>

<FORM METHOD="POST" ACTION="actualizaractordir.php"> <br>;
<?
//Conexion con la base
mysql_connect("","root","default");


echo 'Nombre <br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select nombre From actor Order By nombre";
$result=mysql_db_query("juicio_laboral",$sSQL);

echo '<select name="nombre">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["nombre"];}
echo '</select>';
?>
<br>
Direccion<br>
<INPUT TYPE="TEXT" NAME="direccion"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>

</BODY>
</HTML>
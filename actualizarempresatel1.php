<HTML>
<HEAD>
<TITLE>Actualizar1.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>
<FORM METHOD="POST" ACTION="actualizarempresatel.php">Nombre<br>
<?
//Conexion con la base
mysql_connect("","root","default");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select id_empresa From empresa Order By id_empresa";
$result=mysql_db_query("juicio_laboral",$sSQL);

echo '<select name="id_empresa">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["id_empresa"];}
?>
</select>
<br>
Teléfono<br>
<INPUT TYPE="TEXT" NAME="telefono"><br>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</div>

</BODY>
</HTML>
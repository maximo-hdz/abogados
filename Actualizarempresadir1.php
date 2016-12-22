<HTML>
<HEAD>
<TITLE>Actualizarempresadir1.php</TITLE>
</HEAD>
<BODY>
<div align="center">
<h1>Actualizar un registro</h1>
<br>

<FORM METHOD="POST" ACTION="Actualizarempresadir.php"> <br>;
<?
//Conexion con la base
mysql_connect("","root","default");


echo 'Nombre <br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select id_empresa From empresa Order By id_empresa";
$result=mysql_db_query("juicio_laboral",$sSQL);

echo '<select name="id_empresa">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["id_empresa"];}
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
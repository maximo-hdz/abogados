<HTML>
<HEAD>
<TITLE>actualizarfiscaliadir1.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<div align="center">
<h1>Actualizar dirección</h1>
<br>

<FORM METHOD="POST" ACTION="actualizarfiscaliadir.php"> <br>;
<?
//Conexion con la base
mysql_connect("","root","default");


echo 'Id_Fiscalía <br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select id_fiscalia From fiscalia Order By id_fiscalia";
$result=mysql_db_query("juicio_laboral",$sSQL);

echo '<select name="id_fiscalia">';

//Generamos el menu desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["id_fiscalia"];}
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
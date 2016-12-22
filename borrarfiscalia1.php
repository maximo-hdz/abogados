<HTML>
<HEAD>
<TITLE>borrarfiscalia1.php</TITLE>
</HEAD>
<BODY bgcolor="ffcc66">
<div align="center">
<h1>Borrar un registro</h1>
<br>

<?
//Conexion con la base
mysql_connect("","root","default");

echo '<FORM METHOD="POST" ACTION="borrarfiscalia.php">Id_Fiscalia<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select id_fiscalia From fiscalia Order By id_fiscalia";
$result=mysql_db_query("juicio_laboral",$sSQL);

echo '<select name="id_fiscalia">';

//Mostramos los registros en forma de menú desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["id_fiscalia"];}
mysql_free_result($result)
?>

</select>
<br>
<INPUT TYPE="SUBMIT" value="Borrar">
</FORM>
</div>

</BODY>
</HTML>
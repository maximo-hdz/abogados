<head>
<title>Sistema de Control de Juicios</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td>Demanda</td>
	<td><a href="actor.php">Actor</a></td>
	<td><a href="inserta_empresa.php">Empresa</a></td>
</tr>
<tr>
	<td colspan=7><hr></td>
</tr>
<tr>
	<td><a href="demanda.php">Agrega Demanda</a></td>
<!--	<td><a href="alta_testigo.php">Modifica Demanda</a></td> -->
	<td><a href="elimina_demanda.php">Elimina Demanda</a></td>
	<td><a href="lecturademanda.php">Lista Demandas</a></td>
	<td><a href="fin_demanda.php">Finaliza Demanda</a></td>
	<td>Asigna Demanda</td>
	<td><a href="lecturaasigna.php">Lista Asignadas</a></td>

</tr>
<tr>
	<td colspan=7><hr></td>
</tr>
<tr>
	<td colspan=6><a href="index.html">Salir</a></td>
</tr>
</table>
</div>
</center>
<center>
<h1>Sistema de control de Juicios</h1>
<h3>Diaz-López, Gil-Hernández, Rodríguez Abogados</h3>
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
echo "Agregar Demanda";
?>

<script language="JavaScript" type="text/javascript">
function valida_campos(){
	if (document.forma1.demanda_nom.value==0){
			window.alert("Falta demanda.");
			return (false);

	}
	if (document.forma1.abogado_nom.value==0){
		window.alert("Falta abogado.");
		return (false);
	}
	return true;
}

</script>

<form name="forma1" action="asigna1.php?" method="post" onSubmit="return valida_campos();" >
<table>
<TR>
	<TD>Demanda:</TD>
	<TD><Select name="demanda_nom">
		<OPTION VALUE=0></OPTION>
		<?php
		 $dems=mysql_db_query("juicio_laboral","SELECT * FROM demanda");
			if (mysql_num_rows($dems)==0)
	 			echo "<option value=0>No demanda</option>";
			else{
				while ($resul = mysql_fetch_array($dems))
				print "<option value=$resul[id_demanda]>$resul[id_demanda]</option>";
			}
		?>
		</select>
		</TD>
</TR>
<TR>
	<TD>Abogado:</TD>
	<TD><Select name="abogado_nom">
		<OPTION VALUE=0></OPTION>
		<?php
		 $abog=mysql_db_query("juicio_laboral","SELECT * FROM abogado");
			if (mysql_num_rows($abog)==0)
	 			echo "<option value=0>No abogados</option>";
			else{
				while ($resul = mysql_fetch_array($abog))
				print "<option value=$resul[id_abogado]>$resul[nombre]</option>";
			}
		?>
		</select>
		</TD>
</TR>
</table>
<input type="Submit" name"envia" value="Envia">
</form>

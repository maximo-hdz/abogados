<head>
<title>Sistema de Control de Juicios</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td><a href="demanda.php">Demanda</td>
	<td><a href="actor.php">Actor</a></td>
	<td>Empresa</td>
</tr>
<tr>
	<td colspan=4><hr></td>
</tr>
<tr>
	<td><a href="inserta_empresa.php">Agrega Empresa</td>
	<td><a href="borrarempresa.php">Elimina Empresa</a></td>
	<td><a href="lecturaempresa.php">Lista Empresas</a></td>
	<td>Modifica Empresas</a></td>
</tr>
<tr>
	<td colspan=4><hr></td>
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

$empresa=$_POST["empresa_nom"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
?>
<script language="JavaScript" type="text/javascript">
function cambia_datos(valor) {
    if(valor!='0') {
    document.forma1.submit();
    }
}
function envia(){
if(valida_campos()){
	document.forma1.action="update_empresa.php";
	document.forma1.submit();
}
}

function valida_campos(){
	if (document.forma1.empresa_nom.value==0){
		window.alert("Falta el nombre original del abogado.");
		return (false);
	}
	if (!document.forma1.newname.value){
		window.alert("Falta el nombre nuevo del abogado.");
		return (false);

	}
	if (!document.forma1.direccion.value){
		window.alert("Falta la dirección del abogado.");
		return (false);
	}
	if (!document.forma1.telefono.value){
		window.alert("Falta el teléfono del abogado.");
		return (false);
	}
	return true;
}

</script>
<form name="forma1" action="modif_empresa.php?" method="post">
<table>
<TR>
	<TD>Nombre Empresa:</TD>
	<TD><Select name="empresa_nom" onChange="cambia_datos(this.value);">
		<OPTION VALUE=0></OPTION>
		<?php
		 $empre=mysql_db_query("juicio_laboral","SELECT * FROM empresa");
			if (mysql_num_rows($empre)==0)
	 			echo "<option value=0>No empresas</option>";
			else{
				while ($resul = mysql_fetch_array($empre))
				print "<option value=$resul[id_empresa]>$resul[nombre]</option>";
			}
		?>
		</select>
		</TD>
</TR>
<TR>
</TR>
<TD>Nombre Nuevo:</TD>
<TD><input type=text name="newname"><br></td>
<TR>
	<td>Dirección:</td>
	<td><input type=text name="direccion"><br></td>
</tr>
<tr>
	<td>Teléfono:</td>
	<td><input type=text name="telefono"><br></td>
</tr>
</table>
<input type="Button" name"envia" value="Envia" onClick="envia()">
</form>

<?php
if($empresa==""&&$direccion==""&&$telefono==""){
}
else{
$auxiliar=(int)$empresa;
$busqueda=mysql_db_query("juicio_laboral","SELECT * FROM empresa WHERE id_empresa='$auxiliar'");
while($zague=mysql_fetch_array($busqueda)){
$newname=$zague[nombre];
$dire= $zague[direccion];
$tele= $zague[telefono];
}
?>
<script>
document.forma1.newname.value="<?PHP echo $newname;?>";
document.forma1.empresa_nom.value=<?PHP echo $empresa?>;
document.forma1.direccion.value="<?PHP echo $dire;?>";
document.forma1.telefono.value="<?PHP echo $tele;?>";
</script>
<?php
}
?>

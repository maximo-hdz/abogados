<html>
<head>
<title>Sistema de Control de Juicios-Administrador-Modificar Usuario</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$HTTP_COOKIE_VARS["Usuario"];
$HTTP_COOKIE_VARS["Clave"];
mysql_connect("",$HTTP_COOKIE_VARS["Usuario"],$HTTP_COOKIE_VARS["Clave"]);
$abogado=$_POST["abogado_nom"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$usuario=$_POST["usuario"];
$password=$_POST["pwd"];
?>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td><a href="alta_usuario.php">Nuevo Usuario</a></td>
	<td>Modificar Usuario</td>
	<td><a href="del_user.php">Elimina Usuario</a></td>
	<td><a href="lecturaabogado.php">Lista abogados</td>
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
	<h4>Opciones de Administrador</h4>
	<?php echo"Modifica Usuario"?>

<script language="JavaScript" type="text/javascript">
function cambia_datos(valor) {
    if(valor!='0') {
    document.forma1.submit();
    }
}

function envia(){
if(valida_campos()){
	document.forma1.action="update_user.php";
	document.forma1.submit();
}
}

function valida_campos(){
	if (document.forma1.abogado_nom.value==0){
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
	if (!document.forma1.usuario.value){
		window.alert("Falta el nombre de usuario del abogado.");
		return(false);
	}
	if(!document.forma1.pwd.value){
		window.alert("Falta el password de usuario.");
		return(false);
	}
	return true;
}

</script>

<form name="forma1" action="modif_user.php?" method="post">
<table>
<TR>
	<TD>Nombre Completo:</TD>
	<TD><Select name="abogado_nom" onChange="cambia_datos(this.value);">
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
<tr>
	<td>Nombre de usuario(sistema):</td>
	<td><input type=text name="usuario"><br></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type=text name="pwd"><br></td>
</tr>
</table>
<input type="Button" name"envia" value="Envia" onClick="envia()">
</form>

<?php
if($abogado==""&&$direccion==""&&$telefono==""&&$usurario==""&&$password==""){
}
else{
$auxiliar=(int)$abogado;
$busqueda=mysql_db_query("juicio_laboral","SELECT * FROM abogado WHERE id_abogado='$auxiliar'");
while($zague=mysql_fetch_array($busqueda)){
$newname=$zague[nombre];
$user= $zague[user];
$dire= $zague[direccion];
$tele= $zague[telefono];
$password=$zague[password];
}
?>
<script>
document.forma1.newname.value="<?PHP echo $newname;?>";
document.forma1.abogado_nom.value=<?PHP echo $abogado?>;
document.forma1.direccion.value="<?PHP echo $dire;?>";
document.forma1.telefono.value="<?PHP echo $tele;?>";
document.forma1.usuario.value="<?PHP echo $user;?>";
document.forma1.pwd.value="<?PHP echo $password;?>";
</script>
<?php
}
?>

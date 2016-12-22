<?PHP
$usuario=$_POST["usuario"];
$clave=$_POST["pwd"];
SetCookie("Datos",$nva2["id_usuario"]);
SetCookie("Usuario",$usuario);
SetCookie("Clave",$clave);
?>
<head>
<title>Sistema de Control de Juicios</title>
<link rel="stylesheet" href="style.css">
</head>
<script Language="JavaScript">
<!--
function valida(){
if(document.forma.usuario.value.length==0){
alert("usuario vacio");
return (false);
}
else{
if(document.forma.pwd.value.length==0){
alert("password vacio");
return (false);
}
}
return (true);
}
-->

</script>

<?PHP $con=mysql_connect("",$usuario,$clave);
if ($con==0){
?>
<center>
<h1>Sistema de control de Juicios</h1>
<h3>Diaz-López, Gil-Hernández, Rodríguez Abogados</h3>

Usuario o Password Invalido
<form name="forma" method="post" onsubmit="return valida()" action="entrada.php">
<table>
<tr><td>Dame el nombre de usuario:</td>
<td><input type="text" name="usuario"></td>
</tr>
<tr><td>Dame el password:</td>
<td><input type="password" name="pwd"><br></td>
</tr>
</table>
<input type="submit" name"envia" value="envia">
</form>
</center>
<?PHP }
else{
	if($usuario=="root"){
	?>
	<script>
	window.location="alta_usuario.php";
	</script>
	<?php
	}
	else{
	?>
	<script>
	window.location="demanda.php";
	</script>
	<?PHP
	}
}
?>
</body>
</html>
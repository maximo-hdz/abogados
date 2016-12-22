<head>
<title>Sistema de Control de Juicios</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
<div class="default">
<table class="menu" align="center" border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
	<td>Nueva Demanda</td>
	<td><a href="alta_usuario.php">Nuevo Abogado</a></td>
	<td><a href="update_usuario.php">Modificar Abogado</a></td>
	<td><a href="alta_tribunal.php">Nuevo Tribunal</a></td>
	<td><a href="update_tribunal.php">Modificar Tribunal</a></td>
	<td><a href="alta_demanda.php">Nuevo Juicio</a></td>
</tr>
<tr>
	<td><a href="modifica_demanda.php">Modificar Juicio</a></td>
	<td><a href="alta_testigo.php">Agregar Hecho</a></td>
	<td><a href="alta_suceso.php">Nuevo Suceso</a></td>
	<td><a href="update_suceso.php">Modificar Suceso</a></td>
	<td><a href="Desp-Demanda.php">Reportes</a></td>
</tr>
<tr>
	<td colspan=6><hr></td>
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

$demanda=$_POST["demanda_nom"];
$asunto=$_POST["asunto"];
$DIA=$_POST["DIA"];
$MES=$_POST["MES"];
$ANIO=$_POST["ANIO"];
$IDActor=$_POST["IDActor"];
$IDFiscalia=$_POST["IDFiscalia"];
$IDEmpresa=$_POST["IDEmpresa"];
?>
<script language="JavaScript" type="text/javascript">
function cambia_datos(valor) {
    if(valor!='0') {
    document.forma.submit();
    }
}
function envia(){
if(valida_campos()){
	document.forma.action="modif_demanda1.php";
	document.forma.submit();
}
}

function valida_campos(){
	if (document.forma.demanda_nom.value==0){
		window.alert("Falta demanda.");
		return (false);
	}
	if (!document.forma.asunto.value){
		window.alert("Falta el asunto.");
		return (false);
	}
	if(document.forma.DIA.value==0){
		window.alert("dia de inicio vacío");
		return (false);
	}
	if(document.forma.MES.value==0){
		window.alert("mes de inicio vacío");
		return(false);
	}
	if(document.forma.ANIO.value==0){
		window.alert("Año de inicio vacío");
		return (false);
	}
	if(document.forma.MES.value==2){
		if(document.forma.ANIO.value%4==0){
			if(document.forma.DIA.value>29){
				window.alert("dia de mes inválido( debe ser menor a 30)");
				return(false);
			}
		return (true);
		}
		if(document.forma.DIA.value>28){
			window.alert("dia de mes inválido (debe ser menor a 29)");
			return(false);
		}
	}
	if(document.forma.MES.value==4||forma.MES.value==6||forma.MES.value==9||forma.MES.value==11){
		if(forma.DIA.value==31){
			window.alert("dia de mes invalido, (debe ser menor a 31)");
			return (false);
		}
	return (true);
}
if (document.forma.IDActor.value==0){
	window.alert("Falta el actor.");
	return (false);
}
if (document.forma.IDFiscalia.value==0){
	window.alert("Falta la fiscalia.");
	return (false);
}
if (document.forma.IDEmpresa.value==0){
	window.alert("Falta la empresa.");
	return(false);
}
return true;
}
</script>
<form name="forma" action="modif_demanda.php?" method="post">
<table>
<TR>
	<TD>Demanda</TD>
	<TD><Select name="demanda_nom" onChange="cambia_datos(this.value);">
		<OPTION VALUE=0></OPTION>
		<?php
		 $dem=mysql_db_query("juicio_laboral","select id_demanda from demanda");
		 $act=mysql_db_query("juicio_laboral","select nombre,id_demanda from actor,demanda where demanda.id_actor=actor.id_actor");
		 $emp=mysql_db_query("juicio_laboral","select nombre from empresa,demanda where demanda.id_empresa=empresa.id_empresa");
		 $res_act=mysql_fetch_array($act);
		 $res_emp=mysql_fetch_array($emp);
			if (mysql_num_rows($dem)==0)
	 			echo "<option value=0>No demandas</option>";
			else{
				while ($res_act=mysql_fetch_array($act)&&$res_emp=mysql_fetch_array($emp)){
					$resul=mysql_db_query($dem);
					print "<option value=$resul[id_demanda]>$res_act[nombre].' v.s '.$res_emp[nombre]</option>";
				}

			}
		?>
		</select>
		</TD>
</TR>
<tr>
<td>Asunto</td>
<td><INPUT TYPE="TEXT" NAME="asunto"></td>
</tr>
<tr>
<td>Fecha de inicio</td>
<TD><SELECT NAME="DIA">
<OPTION VALUE=0></OPTION>
<OPTION VALUE=1>01</OPTION>
<OPTION VALUE=2>02</OPTION>
<OPTION VALUE=3>03</OPTION>
<OPTION VALUE=4>04</OPTION>
<OPTION VALUE=5>05</OPTION>
<OPTION VALUE=6>06</OPTION>
<OPTION VALUE=7>07</OPTION>
<OPTION VALUE=8>08</OPTION>
<OPTION VALUE=9>09</OPTION>
<OPTION VALUE=10>10</OPTION>
<OPTION VALUE=11>11</OPTION>
<OPTION VALUE=12>12</OPTION>
<OPTION VALUE=13>13</OPTION>
<OPTION VALUE=14>14</OPTION>
<OPTION VALUE=15>15</OPTION>
<OPTION VALUE=16>16</OPTION>
<OPTION VALUE=17>17</OPTION>
<OPTION VALUE=18>18</OPTION>
<OPTION VALUE=19>19</OPTION>
<OPTION VALUE=20>20</OPTION>
<OPTION VALUE=21>21</OPTION>
<OPTION VALUE=22>22</OPTION>
<OPTION VALUE=23>23</OPTION>
<OPTION VALUE=24>24</OPTION>
<OPTION VALUE=25>25</OPTION>
<OPTION VALUE=26>26</OPTION>
<OPTION VALUE=27>27</OPTION>
<OPTION VALUE=28>28</OPTION>
<OPTION VALUE=29>29</OPTION>
<OPTION VALUE=30>30</OPTION>
<OPTION VALUE=31>31</OPTION>
</SELECT>
-
<SELECT NAME="MES">
<OPTION VALUE=0></OPTION>
<OPTION VALUE= 1>Enero</OPTION>
<OPTION VALUE=2>Febrero</OPTION>
<OPTION VALUE=3>Marzo</OPTION>
<OPTION VALUE=4>Abril</OPTION>
<OPTION VALUE=5>Mayo</OPTION>
<OPTION VALUE=6>Junio</OPTION>
<OPTION VALUE=7>Julio</OPTION>
<OPTION VALUE=8>Agosto</OPTION>
<OPTION VALUE=9>Septiembre</OPTION>
<OPTION VALUE=10>Octubre</OPTION>
<OPTION VALUE=11>Noviembre</OPTION>
<OPTION VALUE=12>Diciembre</OPTION>
</select>
-
<SELECT NAME="ANIO">
<OPTION VALUE=0></OPTION>
<OPTION VALUE=2004>2004</OPTION>
<OPTION VALUE=2003>2003</OPTION>
<OPTION VALUE=2002>2002</OPTION>
<OPTION VALUE=2001>2001</OPTION>
<OPTION VALUE=2000>2000</OPTION>
<OPTION VALUE=1999>1999</OPTION>
<OPTION VALUE=1998>1998</OPTION>
</SELECT>
</TD>
</TR>
<tr>
<td>Actor</td>
<?php
$result=mysql_db_query("juicio_laboral","Select id_actor,nombre From actor Order By id_actor");
echo '<td><select name="IDActor">';
echo "<option value=0></option>";
if (mysql_num_rows($result)==0)
	echo "<option value=0>No actores</option>";
while ($row=mysql_fetch_array($result)){
	$num=$row[id_actor];
	print "<option value=$row[id_actor]>$row[nombre]</option>";
}
echo '</select></td></tr>';
$result2=mysql_db_query("juicio_laboral","Select id_fiscalia From fiscalia Order By id_fiscalia");
echo '<tr><td>Fiscalía</td>';
echo '<td><select name="IDFiscalia">';
echo "<option value=0></option>";
if (mysql_num_rows($result2)==0)
	echo "<option value=0>No fiscalias</option>";
while ($row2=mysql_fetch_array($result2)){
	print"<option value=$row2[id_fiscalia]>$row2[id_fiscalia]</option>";
}
echo '</select></tr>';
$otra=mysql_db_query("juicio_laboral","select id_empresa,nombre from empresa order by id_empresa");
echo '<tr><td>Empresa</td>';
echo '<td><select name="IDEmpresa">';
//Generamos el menu desplegable para ID_Empresa
echo "<option value=0></option>";
if (mysql_num_rows($otra)==0)
	echo "<option value=0>No Empresas</option>";
while ($row3=mysql_fetch_array($otra)){
	print "<option value=$row3[id_empresa]>$row3[nombre]";
}
echo '</select></td></tr>';
?>
</table>
<input type="Button" name"envia" value="Envia" onClick="envia()">
</form>
<?php
if($empresa==""&&$direccion==""&&$telefono==""){
}
else{
	$auxiliar=(int)$demanda;
	$busqueda=mysql_db_query("juicio_laboral","SELECT * FROM demanda WHERE id_demanda='$auxiliar'");
	while($zague=mysql_fetch_array($busqueda)){
		$asunto=$zague[asunto];
		$IDActor=$zague[id_actor];
		$IDEmpresa=$zague[id_empresa];
	}
?>
<script>
document.forma.asunto.value="<?PHP echo $asunto;?>";
document.forma.DIA.value=<?PHP echo $DIA;?>;
document.forma.MES.value="<?PHP echo $MES;?>";
document.forma.ANIO.value="<?PHP echo $ANIO;?>";
document.forma.IDActor.value="<?PHP echo $IDActor;?>";
document.forma.IDFiscalia.value="<?PHP echo $IDFiscalia;?>";
document.forma.IDEmpresa.value="<?PHP echo $IDFiscalia;?>";
</script>
<?php
}
?>
</FORM>
</BODY>
</HTML>
<script>
function valida_campos(){
	if(document.elimina.id_demanda.value==0){
		window.alert("falta demanda");
		return false;
	}
	if(document.elimina.DIA.value==0){
		window.alert("dia de fin vacío");
		return (false);
	}
	if(document.elimina.MES.value==0){
		window.alert("mes de fin vacío");
		return(false);
	}
	if(document.elimina.ANIO.value==0){
		window.alert("Año de fin vacío");
		return (false);
	}
	if(document.elimina.MES.value==2){
		if(document.elimina.ANIO.value%4==0){
			if(document.elimina.DIA.value>29){
				window.alert("dia de mes inválido( debe ser menor a 30)");
				return(false);
			}
			return (true);
		}
		if(document.elimina.DIA.value>28){
			window.alert("dia de mes inválido (debe ser menor a 29)");
			return(false);
		}
	}
	if(document.elimina.MES.value==4||elimina.MES.value==6||elimina.MES.value==9||elimina.MES.value==11){
		if(document.elimina.value==31){
			window.alert("dia de mes invalido, (debe ser menor a 31)");
			return (false);
		}
	}
return true;
}
</script>


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
	<td><a href="demanda.php">Agrega Demanda</td>
<!--	<td><a href="alta_testigo.php">Modifica Demanda</a></td> -->
	<td><a href="elimina_demanda.php">Elimina Demanda</a></td>
	<td><a href="lecturademanda.php">Lista Demandas</a></td>
	<td>Finaliza Demanda</td>
	<td><a href="asigna.php">Asigna demanda</a></td>
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
echo "Termina demanda";
?>
<table>
<FORM name="elimina" METHOD="POST" ACTION="fin_demanda2.php" onSubmit="return valida_campos()">
<tr><td>Demanda</td>
<?php
echo '<td><select name="id_demanda">';
echo '<option value=0></option>';
$sSQL="Select asunto,id_demanda From demanda Order By id_demanda";
$result=mysql_db_query("juicio_laboral",$sSQL);
if(mysql_num_rows($result)==0)
	echo "<option value=0>No demandas</option>";
else{
	while ($row=mysql_fetch_array($result)){
		print "<option value=$row[id_demanda]>$row[asunto]</option>";
	}
}
?>
</select></td></tr>
<br>
<tr>
<td>Fecha de fin</td>
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
</table>
<INPUT TYPE="SUBMIT" value="Envía">
</FORM>
</BODY>
</HTML>

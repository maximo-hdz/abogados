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
	<td>Lista Demandas</a></td>
	<td><a href="fin_demanda.php">Finaliza Demanda</a></td>
	<td><a href="asigna.php">Asigna Demanda</a></td>
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
echo "Reporte de las Demandas";
$result=mysql_db_query("juicio_laboral","select * from demanda");
$act=mysql_db_query("juicio_laboral","select nombre from actor,demanda where demanda.id_actor=actor.id_actor");
$emp=mysql_db_query("juicio_laboral","select nombre from empresa,demanda where demanda.id_empresa=empresa.id_empresa");
$res_act=mysql_fetch_array($act);
$res_emp=mysql_fetch_array($emp);

if(mysql_num_rows($result)==0){
?>
<br>No hay demandas</br>
<?php
}
else{
?>
<table>
<tr>
<td>Id</td>
<td>Participantes</td>
<td>Asunto</td>
<td>Fecha de Inicio</td>
<td>Fecha de Fin</td>
<td>id_Actor</td>
<td>id_fiscalia</td>
<td>id_empresa</td>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["id_demanda"].'</td>';
echo '<td>'.$res_act[nombre].' v.s '.$res_emp[nombre].'</td>';
echo '<td>'.$row["asunto"].'</td>';
echo '<td>'.$row["fecha_inicio"].'</td>';
echo '<td>'.$row["fecha_fin"].'</td>';
echo '<td>'.$row["id_actor"].'</td>';
echo '<td>'.$row["id_fiscalia"].'</td>';
echo '<td>'.$row["id_empresa"].'</td></tr>';
}
mysql_free_result($result);
}
?>
</table>
</BODY>
</HTML>
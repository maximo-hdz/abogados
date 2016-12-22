<html>
<script language="JavaScript" type="text/javascript">
<!--
function cambia_datos(valor) {
    if(valor!='0') {
    	<?php
    	$val=valor;
    	$abogu =mysql_db_query("juicio_laboral","SELECT * FROM abogado");
		$auxd="";
		$auxt="";

		while ($resulu = mysql_fetch_array($abogu)){
			$auxd=$resulu[direccion];
			$auxt=$resulu[telefono];
		}
		?>
		 forma1.direccion.value="<?php echo $auxd; ?>";
		 forma1.telefono.value="<?php echo $auxt; ?>";

    }
}
//-->
</script>

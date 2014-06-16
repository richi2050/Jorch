<?php 
include "conexion.php";
//echo $_POST['prove']['id_prove'];




$sql="INSERT INTO DATOS_PROVEEDOR_PREGUNTAS 
values('',
	'".$_POST['prove']['id_prove']."',
	'".$_POST['prove']['origen']."',
	'".$_POST['prove']['origen_pais']."',
	'".$_POST['prove']['moneda']."',
	'".$_POST['prove']['moral']."')
";
//echo $sql;
$query=oci_parse($conn, $sql);
	oci_execute ($query);

$sql2="select * from DATOS_PROVEEDOR_PREGUNTAS order by id DESC";
$query2=oci_parse($conn, $sql2);
oci_execute($query2);

$resul = oci_fetch_array($query2);
//echo $resul['ID'];

$sql4="UPDATE PROVEEDORES 
set ID_BANCO='".$_POST['datos_b']['banco']."', 
SUCURSAL='".$_POST['datos_b']['sucursal']."',
TIPO_ID_FISCAL='".$_POST['datos_b']['tpo_id_fiscal']."',
TIPO_CUENTA='".$_POST['datos_b']['tpo_cta']."',
CLABE='".$_POST['datos_b']['cta_lar']."',
CUENTA_BANCARIA='".$_POST['datos_b']['cta_cor']."',
NOMBRE_ESTADO_CUENTA='".$_POST['datos_b']['nombre_2']."',
ABA='".$_POST['datos_3']['aba_bene']."',
SWIFT='".$_POST['datos_3']['aba_bene']."',
DOM_PROVEEDOR='".$_POST['datos_3']['dom_pro']."',
DOM_BANCO_BENEFICIARIO='".$_POST['datos_3']['dom_ban_bene']."',
NOMBRE_BANCO_CORRESPONSAL='".$_POST['datos_3']['nom_ban_core']."',
DOM_BANCO_CORRESPONSAL='".$_POST['datos_3']['dom_ban_core']."',
ABA_CORRESPONSAL='".$_POST['datos_3']['aba_core']."',
SWIFT_CORRESPONSAL='".$_POST['datos_3']['swin_core']."',
ACC_CORTA_CORRESP='".$_POST['datos_3']['cta_corta_corre']."',
ACC_LARGA_CORRESP='".$_POST['datos_3']['cta_larga_corre']."',
DIVISA_CORRESPONSAL='".$_POST['datos_3']['divisa']."',
TIPO_CTA_CORRESPONSAL='".$_POST['datos_3']['tpo_cta']."',
TITULAR_DETALLES_PAGO_FFC='".$_POST['datos_3']['nom_titu_FFC']."',
PAGO_AUTO_FX_DIVISA_PAGO='".$_POST['datos_3']['pago_fx_divisa']."',
PAGO_AUTO_FX_CONCEPTO_PAGO='".$_POST['datos_3']['pago_fx_concepto']."',
PAGO_AUTO_FX_SUC_BANCARIA='".$_POST['datos_3']['pago_fx_sucursal']."',
MOTIVO_ALTA='".$_POST['datos_3']['motivo_cta']."',
SUSTITUCION_CUENTA='".$_POST['datos_3']['radio']."'

WHERE FOLIO_SOLICITUD='".$_POST['prove']['id_prove']."'
" ;
$query3=oci_parse($conn, $sql4);
	oci_execute($query3);

$sql5="INSERT INTO PROVEDOR_ANEXA
values('',
	'".$_POST['prove']['id_prove']."',
	'".$_POST['datos_3']['anexa_sta_cta']."',
	'".$_POST['datos_3']['anexa_cart_banc']."',
	'".$_POST['datos_3']['anexa_wire_trans']."',
	'".$_POST['datos_3']['anexa_banc_contr']."',
	'".$_POST['datos_3']['anexa_banc_factu']."',
	'".$_POST['datos_3']['anexa_banc_otro']."'
	)";	
$query5=oci_parse($conn, $sql5);
	oci_execute($query5);


$contenido=$_POST['prove']['id_prove'];
$ruta = "archivos/".$_POST['prove']['id_prove']."_actual.txt";
//$ruta = "\\CORPSFEEUPWFWB\transPortal_oracle$\EP02_FormatoMoneda\".$_POST['prove']['id_prove']."_actual.txt";

if($_POST['datos_3']['radio'] =='SI'){
//$ruta = "\\CORPSFEEUPWFWB\transPortal_oracle$\EP02_FormatoMoneda\".$_POST['prove']['id_prove']."_actual.txt";
$ruta = "archivos/".$_POST['prove']['id_prove']."_modificado.txt";

	if(!file_exists($ruta)){
		$fp=fopen($ruta,"x");
fwrite($fp,$contenido);
fclose($fp) ;
	}
}else{
	$ruta = "archivos/".$_POST['prove']['id_prove']."_nuevo.txt";
//$ruta = "\\CORPSFEEUPWFWB\transPortal_oracle$\EP02_FormatoMoneda\".$_POST['prove']['id_prove']."_nuevo.txt";
	if(!file_exists($ruta)){
		$fp=fopen($ruta,"x");
		fwrite($fp,$contenido);
		fclose($fp); 
	}
}

	echo"<script>alert('Datos guardados');</script>";
?>
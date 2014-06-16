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

$sql4="UPDATE PROVEEDORES 
set ID_BANCO='".$_POST['datos_b']['banco']."', 
SUCURSAL='".$_POST['datos_b']['sucursal']."',
TIPO_ID_FISCAL='".$_POST['datos_b']['tpo_id_fiscal']."',
TIPO_CUENTA='".$_POST['datos_b']['tpo_cta']."',
CONVENIO_CIE='".$_POST['datos_3']['convenio']."',
REFERENCIA='".$_POST['datos_3']['referencia']."',
CLABE='".$_POST['datos_b']['cta_lar']."',
CUENTA_BANCARIA='".$_POST['datos_b']['cta_cor']."',
NOMBRE_ESTADO_CUENTA='".$_POST['datos_b']['nombre_2']."',
SWIFT='".$_POST['datos_3']['swi_bene']."',
ABA ='".$_POST['datos_3']['aba_bene']."' 
WHERE FOLIO_SOLICITUD='".$_POST['prove']['id_prove']."'
" ;
//echo $sql4;
$query3=oci_parse($conn, $sql4);
	oci_execute($query3);






	echo"<script>alert('Datos guardados');</script>";
?>
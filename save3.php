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
$sql3="INSERT INTO DATOS_PROOVEDOR 
values('',
	'".$resul['ID']."',
	'".$_POST['datos_b']['nombre']."',
	'".$_POST['datos_b']['id_fiscal']."',
	'".$_POST['datos_b']['correo']."',
	'".$_POST['datos_b']['telefono']."',
	'".$_POST['datos_b']['banco']."',
	'".$_POST['datos_b']['sucursal']."',
	'".$_POST['datos_b']['cta_cor']."',
	'".$_POST['datos_b']['cta_lar']."',
	'".$_POST['datos_b']['tpo_id_fiscal']."',
	'".$_POST['datos_b']['tpo_cta']."',
	'".$_POST['datos_b']['nombre_2']."',
	'".$_POST['datos_3']['convenio']."',
	'".$_POST['datos_3']['referencia']."',
	'".$_POST['datos_3']['nom_apo']."',
	'".$_POST['datos_3']['aba_bene']."',
	'".$_POST['datos_3']['swi_bene']."'
	)
";
$query3=oci_parse($conn, $sql3);
	oci_execute($query3);

	echo"<script>alert('Datos guardados');</script>";
?>
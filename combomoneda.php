<?php
include "conexion.php"; 
$pais =$_POST['pais'];
if($pais != ''){
	$sql="select * from moneda where id_pais=".$pais;
	$query=oci_parse($conn, $sql);
	oci_execute ($query); 
	$option="<option value=''>Seleccionar la moneda</option>";
	while($objResult = oci_fetch_array($query))  
	{  
	 $option .= "<option value='".$objResult[0]."'>".utf8_decode($objResult[2])."</option>";
	}
	echo $option;


}

?>
<?php 
include "conexion.php";

$pais=$_POST['pais'];
if($pais == 'N'){
	$sql="select * from paises where nacional='S'";
	$query=oci_parse($conn, $sql);
	oci_execute ($query); 
	$option="<option value=''>Seleccionar pais de origen</option>";
	while($objResult = oci_fetch_array($query))  
	{  
	 $option .= "<option value='".$objResult[0]."'>".utf8_encode($objResult[1])."</option>";
	}
	echo $option;
}else if($pais == 'E'){
	$sql="select * from paises where nacional='N'";
	$query=oci_parse($conn, $sql);
	oci_execute ($query); 
	$option="<option value=''>Seleccionar pais de origen</option>";
	while($objResult = oci_fetch_array($query))  
	{  
	 $option.= "<option value='".$objResult[0]."'>".$objResult[1]."</option>";
	}
	echo $option;
}
else{
	$option="<option value=''>Seleccionar pais de origen</option>";
	echo $option;
}

?>
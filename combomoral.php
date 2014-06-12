<?php 
include "conexion.php";
$moral  =$_POST['moral'];
if($moral != ''){
	echo"<option> Selecionar moral</option>
		 <option> Persona moral</option>
		 <option> Persona fisica</option>";
}else{
	echo"<option> Selecionar moral</option>";
}



?>
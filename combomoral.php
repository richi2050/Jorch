<?php 
include "conexion.php";
$moral  =$_POST['moral'];
if($moral != ''){
	echo"<option value=''> Selecionar moral</option>
		 <option value='PM'> Persona moral</option>
		 <option value='PF'> Persona fisica</option>";
}else{
	echo"<option> Selecionar moral</option>";
}



?>
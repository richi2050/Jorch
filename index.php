<?php 
if(!empty($_GET['folio'])){
	include "conexion.php";
	$sql="SELECT * FROM PROVEEDORES WHERE FOLIO_SOLICITUD='".$_GET['folio']."'";
	$query=oci_parse($conn, $sql);
	oci_execute ($query); 
	$resul = oci_fetch_array($query);  

}


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src='js/jquery-1.11.1.js'></script>
    <link rel="stylesheet" href="css/foundation/css/foundation.css" />
	

	<link rel="stylesheet" href="css/stylo.css">

	<script>
	$(document).ready(function(){
		$('#correo').blur(function(){
			var _this = $('#correo');
			var _email = $('#correo').val();
	
			var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
			var valid = re.test(_email);
	
			if(valid){
				_this.attr('style', 'background:white');
			} else {
				_this.attr('style', 'background:#FF4A4A');
			}
		});
		$('#Origencuenta').unbind().bind('change',function(){
			var pais = {pais: $('#Origencuenta').val()};
				$.ajax({
					type: 'POST',
					data: pais,
					url: 'comboPais.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#Origenpais").html(data);
					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
		});

		$('#Origenpais').unbind().bind('change',function(){
			var pais = {pais: $(this).val()};
			if(pais != ''){
				$.ajax({
					type: 'POST',
					data: pais,
					url: 'combomoneda.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#Moneda").html(data);
					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
			}
		});

		$('#Moneda').unbind().bind('change',function(){
			var moral = {moral: $(this).val()};
				$.ajax({
					type: 'POST',
					data: moral,
					url: 'combomoral.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#proveedor").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
			

		});

		$('#proveedor').unbind().bind('change',function(){

		 var prove = $(this).val(),ç
		 	nacionalidad= $('#Origencuenta').val(),
		 	pais = $('#Origenpais').val(),
		 	moneda = $('#Moneda').val();

		 	if(nacionalidad == 'N' && pais == 1 && moneda == 1 && prove =='PF'){
		 		ocultar_1();
		 	}else if(nacionalidad == 'N' && pais == 1 && moneda == 1 && prove =='PM'){
		 		ocultar_2();
		 	}else if(nacionalidad == 'N' && pais == 1 && moneda == 2 && prove =='PM'){
		 		ocultar_3();
		 	}else if(nacionalidad == 'N' && pais == 1 && moneda == 2 && prove =='PF'){
		 		ocultar_4();
		 	}else if(nacionalidad == 'E'   && prove =='PM'){
		 		ocultar_5();
		 	}else if(nacionalidad == 'E'   && prove =='PF'){
		 		ocultar_6();
		 	}else if(prove == 'default'){
		 		ocultar_all();
		 	}

		 var valor2 = $('#Origenpais').val();
			
			if(valor2 == 'AR'){
				$('#idFiscal1').removeClass('no-display');
				$('#idFiscal2').addClass('no-display');
			}else{
				$('#idFiscal2').removeClass('no-display');
				$('#idFiscal1').addClass('no-display');
			}	
		});

		/*$('#Moneda').unbind().bind('change',function(){
		 var prove = $('#proveedor').val(),ç
		 	nacionalidad= $('#Origencuenta').val(),
		 	pais = $('#Origenpais').val(),
		 	moneda = $('#Moneda').val();
		 	if(prove != ''){
		 		if(nacionalidad == 'N' && pais == 'M' && moneda == 'PN' && prove =='PF'){
			 		ocultar_1();
			 	}else if(nacionalidad == 'N' && pais == 'M' && moneda == 'PN' && prove =='PM'){
			 		ocultar_2();
			 	}else if(nacionalidad == 'N' && pais == 'M' && moneda == 'DL' && prove =='PM'){
			 		ocultar_3();
			 	}else if(nacionalidad == 'N' && pais == 'M' && moneda == 'DL' && prove =='PF'){
			 		ocultar_4();
			 	}else if(nacionalidad == 'E'  && moneda == 'PA' && prove =='PM'){
			 		ocultar_5();
			 	}else if(nacionalidad == 'E'  && moneda == 'PA' && prove =='PF'){
			 		ocultar_6();
			 	}else if(prove == 'default'){
			 		ocultar_all();
			 	}
			 	 var valor2 = $('#Origenpais').val();
			
			if(valor2 == 'AR'){
				$('#idFiscal1').removeClass('no-display');
				$('#idFiscal2').addClass('no-display');
			}else{
				$('#idFiscal2').removeClass('no-display');
				$('#idFiscal1').addClass('no-display');
			}
		 	}
		 	else{

		 	}
		});*/

		$('#bancos').unbind().bind('change',function(){
			var valor = $(this).val();
			if(valor == '2' ){
				$('#ciediv').removeClass('no-display');
			}else if(valor == '5'){
				$('#ciediv').removeClass('no-display');
			}else{
				$('#ciediv').addClass('no-display');
			}
		});


	});


var patron = new Array(2,2,2,2,2,2,2,2,2)
var patron2 = new Array(2,2,2,2,2,2,2,2,2)
	

function contador (campo, cuentacampo, limite) {
 console.log(campo);
        console.log(cuentacampo);
        console.log(limite); 
if (campo.value.length > limite) campo.value = campo.value.substring(0, limite); 
else cuentacampo.value = limite - campo.value.length; 
} 



function mascara(d,sep,pat,nums){
		if(d.valant != d.value){
			val = d.value
			largo = val.length
			val = val.split(sep)
			val2 = ''
			for(r=0;r<val.length;r++){
				val2 += val[r]	
			}
			if(nums){
				for(z=0;z<val2.length;z++){
					if(isNaN(val2.charAt(z))){
						letra = new RegExp(val2.charAt(z),"g")
						val2 = val2.replace(letra,"")
					}
				}
			}
			val = ''
			val3 = new Array()
			for(s=0; s<pat.length; s++){
				val3[s] = val2.substring(0,pat[s])
				val2 = val2.substr(pat[s])
			}
			for(q=0;q<val3.length; q++){
				if(q ==0){
					val = val3[q]
				}
				else{
					if(val3[q] != ""){
						val += sep + val3[q]
						}
				}
			}
			d.value = val
			d.valant = val
		}
}
function domicilio(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz 1234567890-#";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
function todo(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz 1234567890-";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz ";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
function fiscal(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "1234567890-";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
function numerico(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "1234567890.,";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
	
	function ocultar_all(){
		$('#PersonaFisica').addClass('no-display');
		$('#datosBancarios').addClass('no-display');
		$('#datoscolum').addClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum_3').addClass('no-display');
		$('#datoscolum_4').addClass('no-display');
	}
	function ocultar_1(){
	$.ajax({
					type: 'POST',
					//data: moral,
					url: 'combinacion1.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#datos").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
	}
	function ocultar_2(){
			$.ajax({
					type: 'POST',
					//data: moral,
					url: 'combinacion2.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#datos").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
	}
	function ocultar_3(){
		$.ajax({
					type: 'POST',
					//data: moral,
					url: 'combinacion3.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#datos").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
	}
	function ocultar_4(){
		$.ajax({
					type: 'POST',
					//data: moral,
					url: 'combinacion4.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#datos").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
	}
	function  ocultar_5() {
		$.ajax({
					type: 'POST',
					//data: moral,
					url: 'combinacion5.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#datos").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
	}
	function  ocultar_6() {
		$.ajax({
					type: 'POST',
					//data: moral,
					url: 'combinacion6.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#datos").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
	}
	</script>
</head>
<body>
	<div class="panel radius">
	<table border=0 align="center" width=750>
	  <tr>
	    <td rowspan="3" align="center" width="200"><img src="img/televisa.png" alt="" width="132" height="99"></td>
	    <td colspan="2"></td>
      </tr>
	  <tr>
	    <td colspan="2" class="title" align="center">Alta de proveedores</td>
      </tr>
	  <tr>
	    <td height="34" colspan="2" align="center"><h2> Solicitud Id: 0100</h2></td>
	    <td></td>
      </tr>
	  <tr>
	    <td></td>
	    <td colspan="2" align="center"> Personalidad Juridica: <span style="font-size: 12px">OPERACIÓN CON TERCERO NACIONAL PERSONA MORAL</span></td>
      </tr>
</table>
	<p>&nbsp;</p>


		<span class="label label-2 ">Información proporcionada por el proveedor</span>
				<table  align='center' width="70%">
					<tr>
						<td colspan='2'>
							<strong>
								Razón Social o nombre completo del Proveedor:
							</strong>
						</td>
						<td colspan='2'> 
							<?php echo $resul['NOMBRE_PROVEEDOR']?>
							</td>
					</tr>	
					<tr>
						<td colspan='2'>
							<strong>Datos Fiscales – RFC:</strong>
						</td>
						<td colspan='2'>
							<?php echo $resul['RFC']?>

						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<strong>Correo - E-mail: </strong>
						</td>
						<td colspan='2'>
							<?php echo $resul['EMAIL']?>

						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<strong>Teléfonos del Proveedor: </strong>
						</td>
						<td colspan='2'>
							<?php echo $resul['TELEFONO']?>
	
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<strong>Personalidad Jurídica:</strong>
						</td>
						<td colspan='2'>
							<?php echo utf8_encode($resul['PERSONALIDAD_JURIDICA']);?>

						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<strong>Observaciones</strong>
						</td>
						<td colspan='2'>
							Este es el texto de observación.
						</td>
					</tr>
			</table>

	<form action="" id='provedorform'>

		<span class="label label-2 ">Clasificación bancaria del proveedor</span>
	 		<table align='center' width="70%">
	 		<input type='hidden' name='id_pro' id='id_pro' value='<?php echo $_GET['folio']; ?>' >
					  <tr>
							<td>
								Cual es el origen del banco de la cuenta?
							</td>
							<td>
								<select name="Origencuenta" id="Origencuenta">
									<option value=''>Selecciona origen</option>
									<option value='N'> Nacional</option>
									<option value='E'> Extranjero </option>
								</select>
							</td>	
						</tr>
						<tr>
							<td>
								Cuál es el país de origen de la cuenta?
							</td>
							<td>
								<select id='Origenpais'>
									<option value='default'>Selecionar pais de origen</option>
								</select>
							</td>	
						</tr>
						<tr>
							<td>
								Cuál es la moneda de la cuenta?
							</td>
							<td>
								<select  id="Moneda">
									<option value='default'>Seleccionar la moneda </option>
								</select>
							</td>	
						</tr>	
						<tr>
							<td>
								Cuál es la personalidad jurídica del proveedor?
							</td>
							<td>
								<select id="proveedor">
									<option value="default">Selecionar personalidad jurídica</option>
								</select>
							</td>
						</tr>
			</table>
	</form>

<div id='datos'>
	
</div>




	







<div id='#iddivscript'></div>
</body>
</html

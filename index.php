<?php 
require "complementos.php";

//print_r($datos);
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
		$('#Origencuenta').unbind().bind('change',function(){
			var valor = $(this).val();
			if(valor == 'N'){

				$('#Origenpais').append('<option value="M">México</option>');
				$("#Origenpais").val('M').attr("selected", "selected");
				$("#Origenpais").find("option[value='default']").remove();

				$("#Moneda").append('<option value="PN">Pesos mexicanos</option><option value="DL">Dolares</option>');
				$('#Moneda').val('PN').attr("selected","selected");
				$("#Moneda").find("option[value='default']").remove();
				$("#proveedor").find("option").remove();

				$("#proveedor").append('<option value="default">Selecionar moral</option><option value="PM">Persona Moral</option><option value="PF">Persona Fisica</option>');

			}
			else if(valor == 'E'){
				$("#Origenpais").find("option[value='M']").remove();
				$("#Moneda").find("option[value='PN']").remove();
				$("#Moneda").find("option[value='DL']").remove();
				$("#Origenpais").find("option[value='default']").remove();
				$("#Moneda").append('<option value="default">Seleccionar la moneda </option>');

				$('#Origenpais').append('<option value="default">Selecionar pais de origen</option><option value="AR">Argentina</option><option value="UE">USA</option>');

					$("#Origenpais").unbind().bind('change',function(){
						var pais = $(this).val();

						if(pais == 'AR'){
							$("#Moneda").find("option").remove(); 
							$("#Moneda").append("<option value='PA'>Pesos argentinos</option><option value='DL'>Dolares</option>");
						}else if(pais == 'UE'){
							$("#Moneda").find("option").remove();

							$("#Moneda").append("<option value='DL'>Dolares</option>");
						}
					});
				$("#proveedor").find("option").remove(); 
				$("#proveedor").append('<option value="default">Selecionar moral</option><option value="PM">Persona Moral</option><option value="PF">Persona Fisica</option>');

			}else{
				$("#Origenpais").find("option[value='default']").remove();

				$('#Origenpais').append('<option value="default">Selecionar pais de origen</option>');

				$("#Origenpais").val('default').attr("selected", "selected");

				$("#Moneda").append('<option value="default">Seleccionar la moneda </option>');
				$('#Moneda').val('default').attr("selected","selected");
				
				$("#proveedor").find("option[value='default']").remove();
				$("#proveedor").append('<option value="default">Selecionar moral</option>');

				$("#Moneda").find("option[value='PN']").remove();
				$("#Moneda").find("option[value='DL']").remove();
				$("#Origenpais").find("option[value='M']").remove();
				
				$("#proveedor").find("option[value='PM']").remove();
				$("#proveedor").find("option[value='PF']").remove();
				//$("#proveedor").find("option[value='default']").remove();



			}
		});

		$('#proveedor').unbind().bind('change',function(){

		 var prove = $(this).val(),ç
		 	nacionalidad= $('#Origencuenta').val(),
		 	pais = $('#Origenpais').val(),
		 	moneda = $('#Moneda').val();

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









		/* if(prove == 'PM'){
		 	$('#PersonaMoral').removeClass('no-display');
		 	$('#PersonaFisica').addClass('no-display');
		 	$('#datosBancarios').removeClass('no-display');
		 	$('#datoscolum').removeClass('no-display');




		 }else if(prove == 'PF'){
		 	$('#PersonaFisica').removeClass('no-display');
		 	$('#PersonaMoral').addClass('no-display');
		 	$('#datosBancarios').removeClass('no-display');

		 }*/
		// alert(prove);
		});
 //setOptionsToSelect($("#bancos"), 'Seleccionar banco', <?php echo json_encode($datos); ?>);
	});
	
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
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum_3').addClass('no-display');
		$('#datoscolum_4').addClass('no-display');
		

	}

	function ocultar_2(){
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum_3').addClass('no-display');
		$('#datoscolum_4').addClass('no-display');
	}


	function ocultar_3(){
		alert('entra a este 3');
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum_1').removeClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum_3').addClass('no-display');
		$('#datoscolum_4').addClass('no-display');
		$('#datoscolum').addClass('no-display');
	}
	function ocultar_4(){
		alert('entra a este 4');
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').removeClass('no-display');
		$('#datoscolum_3').addClass('no-display');
		$('#datoscolum_4').addClass('no-display');
		$('#datoscolum').addClass('no-display');
	}
	function  ocultar_5() {
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum_3').removeClass('no-display');
		$('#datoscolum_4').addClass('no-display');
		$('#datoscolum').addClass('no-display');
	}

	function  ocultar_6() {
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum_3').addClass('no-display');
		$('#datoscolum_4').removeClass('no-display');
		$('#datoscolum').addClass('no-display');
	}



	</script>
</head>
<body>
	<div class="panel callout radius">
	<form action="">
		<table align='center'>
			<tr>
				<td>
					Cual es el origen del banco de la cuenta?
				</td>
				<td>
					<select name="Origencuenta" id="Origencuenta">
						<option value=''>Selecciona naiconalidad</option>
						<option value='N'> Nacional</option>
						<option value='E'> Extranjera </option>
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
						<option value="default">Selecionar moral</option>
					</select>
				</td>
			</tr>
		</table>
	</form>

	<table id='PersonaFisica' class='no-display' align='center'>
		 <thead>
			<tr>
				<th colspan='4' >
					<center>			
						Información proporcionada por el proveedor
					</center>
				</th>
			</tr>
		 </thead>
		<tr>
			<td colspan='2'>
				<strong>Razón Social o nombre completo del Proveedor: </strong>
			</td>
			<td colspan='2'> 
				Empresa patito</td>
		</tr>	
		<tr>
			<td colspan='2'>
				<strong>Datos Fiscales – RFC:</strong>
			</td>
			<td colspan='2'>
				RFC personal
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<strong>Correo - E-mail: </strong>
			</td>
			<td colspan='2'>
				correoejemplo@gmail.com
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<strong>Teléfonos del Proveedor: </strong>
			</td>
			<td colspan='2'>
			 7224251261
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<strong>Personalidad Jurídica:</strong>
			</td>
			<td colspan='2'>
				Personalidad juridica
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

	<div class='no-display' id='datosBancarios'>
		<thead>
		<tr>
			<th colspan='4' ><center>Datos Bancarios del Proveedor</center></th>
		</tr>
		</thead>
		<tr>
			<td>
				<label>
					Nombre de persona física/moral
				</label>
			</td>
			<td>
				<input type='text' name='nombrefisica' id='nombrefisica'>
			</td>
			<td class='required'>
				<label>id fiscal</label>
			</td>	
			<td>
				<input type='text' name='idFiscal' name='idFiscal'>
			</td>
		</tr>
		<tr>
			<td><label>correo</label></td>
			<td>
				<input type='text' name='correo' id='correo'>
			</td>

			<td>
				<label>teléfono</label></td>
			<td>
				<input type='text' name='telefono' id='telefono'>
			</td>
		</tr>
		<tr>
			<td class='required'>
				<label>Banco</label>
			</td>
			<td>
				<select id='bancos'>
				<?php foreach ($datos as $key => $value) {?>
					<option value='<?php echo $key; ?>'><?php echo $value; ?> </option>
				<?php }?>
				</select>
			</td>
			<td>
				<label> Sucursal</label>
			</td>
			<td>
				<input type='text' name='sucursal' id='sucursal'>
			</td>
		</tr>
		<tr>
			<td>
				<label > 
					Cuenta corta
				</label>
			</td>
			<td>
				<input type='text' name='cuentaCorta' id='cuentaCorta'>	
			</td>
			<td class='required'>
				<label>Cuenta larga</label>
			</td>
			<td>
				<input type='text' name='cuentaLarga' id='cuentaLarga'>		
			</td>
		</tr>
		<tr>
			<td class='required'>
				<label>
					Tipo id fiscal
				</label>
			</td>
			<td>
				<input type='text' name='idFiscal' id='idFiscal'>	
			</td>

			<td class='required'>
				<label>
					Tipo de cuenta
				</label>
			</td>
			<td>
				<select name="tipoCuenta" id="tipoCuenta">
				<?php foreach ($datosT as $dato => $value) {?>
				<option value='<?php echo $dato; ?>'><?php echo $value;?></option>

				<?php } ?>
				</select>
			</td>
		</tr>

		<tr>
			<td colspan='4'>
				Nombre de persona Física/Moral tal cuál comoaparece en el estado de cuenta 
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<input type='text' name='nombreFiscal' id='nombreFiscal' size='90'>
			</td>
		</tr>
		</div>	
	<div id='datoscolum' class='no-display'>
		<tr>
			<td class='required'> 
				<label>Convenio</label>
			</td>
			<td>
				<input type='text' name='convenio' id='convenio'>
			</td>
			<td class='required'> 
				<label>Referencia</label>
			</td>
			<td>
				<input type='text' name='referencia' id='referencia'>
			</td>
		</tr>
	</div>

	<table  align='center' id='datoscolum_1' class='no-display'>
			<tr>
				<td colspan='4'>
					Nombre del apoderado
				</td>
			</tr>
			<tr>
				<td colspan='4'>
					<input type='text' name='nombreApo' id='nombreApo' size='100'/>
				</td>
			</tr>
			<tr>	
			<td>
				Aba banco beneficiario 
			</td>
			<td>
				<input type='text' name='abaBene' id='abaBene' />
			</td>
			<td>Swift banco beneficiario</td>
			<td>
				<input type='text' name='swiBene' id='swiBene' />
			</td>
		</tr>
		<tr>
			<td class='required'>
				<label>Convenio</label>
			</td>
			<td>
				<input type='text' name='convenio' id='convenio' />
			</td>
			<td class='required'>
				<label>Referencia</label>
			</td>
			<td>
				<input type='text' name='referencia' id='referencia' />
			</td>
		</tr>
	</table>
	<table id='datoscolum_2' class='no-display' align='center'>
		<tr>	
			<td>
				Aba banco beneficiario 
			</td>
			<td>
				<input type='text' name='abaBene' id='abaBene' />
			</td>
			<td>Swift banco beneficiario</td>
			<td>
				<input type='text' name='swiBene' id='swiBene' />
			</td>
		</tr>
		<tr>
			<td class='required'>
				<label>Convenio</label>
			</td>
			<td>
				<input type='text' name='convenio' id='convenio' />
			</td>
			<td class='required'>
				<label>Referencia</label>
			</td>
			<td>
				<input type='text' name='referencia' id='referencia' />
			</td>
		</tr>
	</table>




	<table id='datoscolum_3' class='no-display' align='center'>
		<thead>
			<tr>
				<th colspan='4'>
				<center>
					Banco corresponsal o intermediario
				</center>
				</th>
			</tr>
		</thead>
		<tr>
			<td colspan='4'>
				Nombre del apoderado
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<input type='text' name='nombreApo' id='nombreApo' size='100'>
			</td>
		</tr>
		<tr>	
			<td style='width:20%'>
				Aba banco beneficiario
			</td>
			<td style='width:20%'>
				<input type='text' name='abaBene' id='abaBene'>
			</td>
			<td style='width:25%'>
				Swift banco beneficiario
			</td>
			<td style='width:20%'>
				<input type='text' name='swiBene' id='swiBene'>
			</td>
		</tr>
		<tr>
			<td>Domicilio del proveedor</td>
			<td>
				<input type='text' name='docPro' id='docPro'>
			</td>
			<td>Domicilio del banco beneficiario</td>
			<td>
				<input type='text' name='docBene' id='docBene'>
			</td>
		</tr>
		<tr>
			<td>Nombre del banco corresponsal</td>
			<td>
				<input type='text' name='banCore' id='banCore'>
			</td>
			<td>
				Domicilio banco corresponsal
			</td>
			<td>
				<input type='text' name='dombanCore' id='dombanCore'>
			</td>
		</tr>
		<tr>	
			<td>
				Aba banco corresponsal
			</td>
			<td>
				<input type='text' name='abaBene' id='abaBene'>
			</td>
			<td>Swift banco corresponsal</td>
			<td>
				<input type='text' name='swiBene' id='swiBene'>
			</td>
		</tr>
		<tr>
			<td>Cuenta corta banco corresponsal</td>
			<td>
				<input type='text' name='cuentaBancoCor' id='cuentaBancoCor'>
			</td>
			<td>
			Cuenta larga banco corresponsal	
			</td>
			<td>
				<input type='text' name='cuentaBancoLar' id='cuentaBancoLar'>
			</td>
		</tr>
		<tr>
			<td>Divisa cuenta banco corresponsal</td>
			<td>
				<input type='text' name='divBanCore' id='divBanCore'>
			</td>
			<td>
				Tipo de cuenta banco corresponsal
			</td>
			<td>
				<input type='text' name='TpoCtaBanCore' id='TpoCtaBanCore'>
			</td>
		</tr>
		<tr>
			<td>Nombre de titular detalles para pago FFC</td>
			<td>
				<input type='text' name='nomTiBanCoreFFC' id='nomTiBanCoreFFC'>
			</td>
			<td>Numero de cuenta detalles para pago FFC</td>
			<td>
				<input type='text' name='numCtaBanCoreFFC' id='numCtaBanCoreFFC'>
			</td>
		</tr>
		<tr>
			<td>Pago por auto FX-Divisa del pago</td>
			<td>
				<input type='text' name='pagfxDivisa' id='pagfxDivisa'>
			</td>
			<td>Pago por auto FX-concepto del pago</td>
			<td>
				<input type='text' name='pagfxConcepto' id='pagfxConcepto'>
				
			</td>
		</tr>
		<tr>
			<td>Pago por auto FX-sucursal del pago</td>
			<td>
				<input type='text' name='pagfxSucursal' id='pagfxSucursal'>
			</td>
			<td>Documentacion Anexa</td>
			<td>
				<input type='text' name='docAnex' id='docAnex'>
			</td>
		</tr>
		<tr>
			<td>Mótivo de origina el alta</td>
			<td>
				<input type='text' name='motAlta' id='motAlta'>
			</td>
			<td>
				¿El alta sustituye a la cuenta atual?
			</td>
			<td>
				<select name="sustituyeAlta" id="sustituyeAlta">
					<option value="SI">SI</option>
					<option value="NO">NO</option>
				</select>
			</td>
		</tr>
	</table>


	<table id='datoscolum_4' class='no-display'>
		<thead>
			<tr>
				<th colspan='4'>
				<center>
					Banco corresponsal o intermediario
				</center>
				</th>
			</tr>
		</thead>
		<tr>	
			<td style='width:20%'>
				Aba banco beneficiario
			</td>
			<td style='width:20%'>
				<input type='text' name='abaBene' id='abaBene'>
			</td>
			<td style='width:25%'>
				Swift banco beneficiario
			</td>
			<td style='width:20%'>
				<input type='text' name='swiBene' id='swiBene'>
			</td>
		</tr>
		<tr>
			<td>Domicilio del proveedor</td>
			<td>
				<input type='text' name='docPro' id='docPro'>
			</td>
			<td>Domicilio del banco beneficiario</td>
			<td>
				<input type='text' name='docBene' id='docBene'>
			</td>
		</tr>
		<tr>
			<td>Nombre del banco corresponsal</td>
			<td>
				<input type='text' name='banCore' id='banCore'>
			</td>
			<td>
				Domicilio banco corresponsal
			</td>
			<td>
				<input type='text' name='dombanCore' id='dombanCore'>
			</td>
		</tr>
		<tr>	
			<td>
				Aba banco corresponsal
			</td>
			<td>
				<input type='text' name='abaBene' id='abaBene'>
			</td>
			<td>Swift banco corresponsal</td>
			<td>
				<input type='text' name='swiBene' id='swiBene'>
			</td>
		</tr>
		<tr>
			<td>Cuenta corta banco corresponsal</td>
			<td>
				<input type='text' name='cuentaBancoCor' id='cuentaBancoCor'>
			</td>
			<td>
			Cuenta larga banco corresponsal	
			</td>
			<td>
				<input type='text' name='cuentaBancoLar' id='cuentaBancoLar'>
			</td>
		</tr>
		<tr>
			<td>Divisa cuenta banco corresponsal</td>
			<td>
				<input type='text' name='divBanCore' id='divBanCore'>
			</td>
			<td>
				Tipo de cuenta banco corresponsal
			</td>
			<td>
				<input type='text' name='TpoCtaBanCore' id='TpoCtaBanCore'>
			</td>
		</tr>
		<tr>
			<td>Nombre de titular detalles para pago FFC</td>
			<td>
				<input type='text' name='nomTiBanCoreFFC' id='nomTiBanCoreFFC'>
			</td>
			<td>Numero de cuenta detalles para pago FFC</td>
			<td>
				<input type='text' name='numCtaBanCoreFFC' id='numCtaBanCoreFFC'>
			</td>
		</tr>
		<tr>
			<td>Pago por auto FX-Divisa del pago</td>
			<td>
				<input type='text' name='pagfxDivisa' id='pagfxDivisa'>
			</td>
			<td>Pago por auto FX-concepto del pago</td>
			<td>
				<input type='text' name='pagfxConcepto' id='pagfxConcepto'>
				
			</td>
		</tr>
		<tr>
			<td>Pago por auto FX-sucursal del pago</td>
			<td>
				<input type='text' name='pagfxSucursal' id='pagfxSucursal'>
			</td>
			<td>Documentacion Anexa</td>
			<td>
				<input type='text' name='docAnex' id='docAnex'>
			</td>
		</tr>
		<tr>
			<td>Mótivo de origina el alta</td>
			<td>
				<input type='text' name='motAlta' id='motAlta'>
			</td>
			<td>
				¿El alta sustituye a la cuenta atual?
			</td>
			<td>
				<select name="sustituyeAlta" id="sustituyeAlta">
					<option value="SI">SI</option>
					<option value="NO">NO</option>
				</select>
			</td>
		</tr>
	</table>
</div>

</body>
</html>
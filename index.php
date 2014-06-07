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
	}

	function ocultar_1(){
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		

	}

	function ocultar_2(){
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').addClass('no-display');
	}


	function ocultar_3(){
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum_1').removeClass('no-display');
		$('#datoscolum_2').addClass('no-display');
		$('#datoscolum').addClass('no-display');


	}
	function ocultar_4(){
		$('#PersonaFisica').removeClass('no-display');
		$('#datosBancarios').removeClass('no-display');
		$('#datoscolum_1').addClass('no-display');
		$('#datoscolum_2').removeClass('no-display');
		$('#datoscolum').addClass('no-display');

	}


	</script>
</head>
<body>
	<table>
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

	<table id='PersonaMoral' class='no-display'>
		<tr>
			<td colspan='2'>
				Información proporcionada por el proveedor
			</td>	
		</tr>
		<tr>
			<td><strong>Razón Social o nombre completo del Proveedor: </strong></td>
			<td> Empresa patito</td>
		</tr>	
		<tr>
			<td>
				<strong>Datos Fiscales – RFC:</strong>
			</td>
			<td>
				RFC personal
			</td>
		</tr>
		<tr>
			<td>
				<strong>Correo - E-mail: </strong>
			</td>
			<td>
				correoejemplo@gmail.com
			</td>
		</tr>
		<tr>
			<td>
				<strong>Teléfonos del Proveedor: </strong>
			</td>
			<td>
			 7224251261
			</td>
		</tr>
		<tr>
			<td>
				<strong>Personalidad Jurídica:</strong>
			</td>
			<td>
				Personalidad juridica
			</td>
		</tr>
		<tr>
			<td>
				<strong>Observaciones</strong>
			</td>
			<td>
				Este es el texto de observación.
			</td>
		</tr>

	</table>

	<table id='PersonaFisica' class='no-display'>
		<tr>
			<td colspan='2'>
				Información proporcionada por el proveedor
			</td>	
		</tr>
		<tr>
			<td><strong>Razón Social o nombre completo del Proveedor: </strong></td>
			<td> Empresa patito</td>
		</tr>	
		<tr>
			<td>
				<strong>Datos Fiscales – RFC:</strong>
			</td>
			<td>
				RFC personal
			</td>
		</tr>
		<tr>
			<td>
				<strong>Correo - E-mail: </strong>
			</td>
			<td>
				correoejemplo@gmail.com
			</td>
		</tr>
		<tr>
			<td>
				<strong>Teléfonos del Proveedor: </strong>
			</td>
			<td>
			 7224251261
			</td>
		</tr>
		<tr>
			<td>
				<strong>Personalidad Jurídica:</strong>
			</td>
			<td>
				Personalidad juridica
			</td>
		</tr>
		<tr>
			<td>
				<strong>Observaciones</strong>
			</td>
			<td>
				Este es el texto de observación.
			</td>
		</tr>
	</table>
	<table class='no-display' id='datosBancarios'>
		<tr>
			<td colspan='2' >Datos Bancarios del Proveedor</td>
		</tr>
		<tr>
			<td>
				<label>
					NOMBRE DE PERSONA FÍSICA/MORAL
				</label>
			</td>
			<td>
				<input type='text' name='nombrefisica' id='nombrefisica'>
			</td>
			<td class='required'>
				<label>ID FISCAL</label>
			</td>	
			<td>
				<input type='text' name='idFiscal' name='idFiscal'>
			</td>
		</tr>
		<tr>
			<td><label>CORREO</label></td>
			<td>
				<input type='text' name='correo' id='correo'>
			</td>

			<td>
				<label>TELÉFONO</label></td>
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
	</table>
	<table id='datoscolum' class='no-display'>
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
	</table>

	<table id='datoscolum_1' class='no-display'>
		<tr>
			<td colspan='2'>
				nombre del apoderado
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<input type='text' name='nombreApo' id='nombreApo' size='100'>
			</td>
		</tr>
		<tr>	
			<td>
				Aba banco beneficiario
			</td>
			<td>
				<input type='text' name='abaBene' id='abaBene'>
			</td>
			<td>Swift banco beneficiario</td>
			<td>
				<input type='text' name='swiBene' id='swiBene'>
			</td>
		</tr>
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
	</table>

	<table id='datoscolum_2' class='no-display'>
		<tr>	
			<td>
				Aba banco beneficiario
			</td>
			<td>
				<input type='text' name='abaBene' id='abaBene'>
			</td>
			<td>Swift banco beneficiario</td>
			<td>
				<input type='text' name='swiBene' id='swiBene'>
			</td>
		</tr>
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
	</table>


</body>
</html>
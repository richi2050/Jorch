<form>
		<span class="label label-2 ">Datos Bancarios del Proveedor</span>
	<table align='center' width="70%">
				<tr>
					<td class='required'>
						<label>Banco</label>
					</td>
					<td>
						<select id='bancos'>
							<option value="0">Selecciona banco</option>
							<option value="1" id="">Banamex</option>
							<option value="2" id="">BBVA bancomer</option>
							<option value="3" id="">Santander</option>
							<option value="4" id="">Banjercito</option>
							<option value="5" id="">HSBC</option>
							<option value="6" id="">Banco del Bajio</option>
							<option value="7" id="">IXE</option>
							<option value="8" id="">Inbursa</option>
							<option value="9" id="">Internacionales</option>
							<option value="10" id="">Mifel</option>
							<option value="11" id="">ScotiABAnk</option>
							<option value="12" id="">Banregio</option>
							<option value="13" id="">Invex</option>
							<option value="14" id="">Bansi</option>
							<option value="15" id="">Afirme</option>
							<option value="16" id="">Banorte</option>
						</select>
					</td>

					<td>
						<label> Sucursal</label>
					</td>
					<td>
						<input type='text' name='sucursal' id='sucursal' onKeyPress="return soloLetras(event)">
					</td>
				</tr>
				
				<tr>
					<td>
						<label > 
							Cuenta corta
						</label>
					</td>
					<td>
						<input type='text' name='cuentaCorta' id='cuentaCorta' onKeyPress="return numerico(event)" onKeyUp="mascara(this,'-',patron2,true)">	
					</td>
					<td class='required'>
						<label>Cuenta larga</label>
					</td>
					<td>
						<input type='text' name='cuentaLarga' id='cuentaLarga' onKeyPress="return numerico(event)" onKeyUp="mascara(this,'-',patron2,true)">		
					</td>
				</tr>
				<tr id='ciediv' class="no-display">
					<td>
					CIE
					</td>
					<td>
						<input type='text' name='cie' id='cie' onKeyPress="return numerico(event)">
					</td>
				</tr>
				<tr>
					<td class='required'>
						<label>
							Tipo id fiscal
						</label>
					</td>
					<td>
						<select name='idFiscal2' id='tpo_fiscal'>
							<option value='0'>Selecciona id fiscal</option>
							<option value='1'>RFC</option>
							<option value='2'>Formato R1</option>
						</select>
					</td>

					<td class='required'>
						<label>
							Tipo de cuenta
						</label>
					</td>
					<td>
						<select name="tipoCuenta" id="tipoCuenta">
							<option value='0'>Selecciona tipo de cuenta</option>
							<option value='1'>Ahorro</option>
							<option value='2'>Inversión</option>
							<option value='3'>Corriente</option>
						</select>
					</td>
				</tr>

				<tr>
					<td colspan='4'>
						Nombre de persona Física/Moral tal cuál como aparece en el estado de cuenta 
					</td>
				</tr>
				<tr>
					<td colspan='4'>
						<input type='text' name='nombreFiscal' id='nombreFiscal' size='90' onKeyPress="return soloLetras(event)">
					</td>
				</tr>
		</table>
		</div>	
<div >
		<span class="label label-2 ">Datos requeridos para personalidad</span>

	<table  align='center' width="70%">
		<tr>	
			<td>
				ABA Banco Beneficiario 
			</td>
			<td>
				<input type='text' name='ABABene' id='ABABene' onKeyPress="return numerico(event)" />
			</td>
			<td>SWIFT Banco Beneficiario</td>
			<td>
				<input type='text' name='swiBene' id='swiBene' onKeyPress="return numerico(event)" />
			</td>
		</tr>
		<tr>
			<td class='required'>
				<label>Convenio</label>
			</td>
			<td>
				<input type='text' name='convenio' id='convenio' onKeyPress="return todo(event)" />
			</td>
			<td class='required'>
				<label>Referencia</label>
			</td>
			<td>
				<textarea name="cuentacorta3" cols="20" rows="1" maxlength="20" autofocus 
        wrap=physical id='referencia' onKeyDown= "contador(this.form.cuentacorta3,this.form.remLen3,20);" 
        ></textarea>
			</td>
		</tr>
		<tr>
		<td colspan='2'>
		<label>Dispones de los siguientes Caracteres</label>
		</td>
		<td colspan='2'>
		<input type="text" style='width:50px;' name="remLen3" size="3" maxlength="3" value="30" readonly>
		  
		</td>
		</tr>
		<tr>
			<td colspan='4'>
				<center>
          			<input type="button" value="Envio" id='envio1' OnClick="alert('Esta información sera enviada a Televisa y utilizada para el proceso de Alta de Proveedores');return true;"/>
          		</center>
			</td>
		</tr>

	</table>
</form>
<div id='data1'>
</div>
<script>
$(document).ready(function(){
$('#envio1').unbind().bind('click',function(){
$.ajax({
					type: 'POST',
					data: {
						prove:{
							id_prove: $('#id_pro').val(),
							origen: $('#Origencuenta').val(),
							origen_pais: $('#Origenpais').val(),
							moneda: $('#Moneda').val(),
							moral: $('#proveedor').val()
						},
						datos_b:{
							banco:$('#bancos').val(),
							sucursal:$('#sucursal').val(),
							cta_cor:$('#cuentaCorta').val(),
							cta_lar:$('#cuentaLarga').val(),
							tpo_id_fiscal:$('#tpo_fiscal').val(),
							tpo_cta:$('#tipoCuenta').val(),
							nombre_2:$('#nombreFiscal').val(),
						},
						datos_3:{
							aba_bene:$('#ABABene').val(),
							swi_bene:$('#swiBene').val(),
							convenio:$('#convenio').val(),
							referencia:$('#referencia').val(),

						}

					},
					url: 'save4.php',
					beforeSend: function(XMLHttpRequest) {
						//$('#transctaid').ajaxloader('show', 'tata-ajax-loader-img3');
					},success: function(data)
					{
					$("#data1").html(data);

					},complete: function(XMLHttpRequest, textStatus) {
						//$('#transctaid').ajaxloader('hide');
					},error: function(){
						alert('Ocurrió un error al cargar los conceptos de ingresos');
					}
				});
});
});

</script>
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
						<select name='idFiscal1' id='tpo_fiscal'>
							<option value='0'>Selecciona id fiscal</option>
							<option value='1'>CUIL</option>
							<option value='2'>CUIT</option>
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


	<span class="label label-2 ">Banco corresponsal o intermediario</span>
	<table  align='center' width="70%">
		<tr>
			<td colspan='2'>
				Nombre del apoderado
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<input type='text' name='nombreApo' id='nombreApo'  onkeypress="return soloLetras(event)">
			</td>
		</tr>
		<tr>	
			<td style='width:10%'>
				ABA Banco Beneficiario
			</td>
			<td style='width:10%'>
				<input type='text' name='ABABene' id='ABABene' onKeyPress="return numerico(event)" >
			</td>
		</tr>
		<tr>	
			<td >
				SWIFT Banco Beneficiario
			</td>
			<td >
				<input type='text' name='swiBene' id='swiBene'  onkeypress="return numerico(event)" >
			</td>
		</tr>
		<tr>
			<td>Domicilio del proveedor</td>
			<td>
				<input type='text' name='docPro' id='docPro' onKeyPress="return domicilio(event)">
			</td>
		</tr>
		<tr>
			<td>Domicilio del banco beneficiario</td>
			<td>
				<input type='text' name='docBene' id='docBene' onKeyPress="return domicilio(event)">
			</td>
		</tr>
		<tr>
			<td>Nombre del banco corresponsal</td>
			<td>
				<input type='text' name='banCore' id='banCore' onKeyPress="return domicilio(event)">
			</td>
		</tr>
		<tr>	
			<td>
				Domicilio Banco Corresponsal
			</td>
			<td>
				<input type='text' name='dombanCore' id='dombanCore' onKeyPress="return domicilio(event)">
			</td>
		</tr>
		<tr>	
			<td>
				ABA Banco Corresponsal
			</td>
			<td>
				<input type='text' name='ABACore' id='ABACore'  onkeypress="return numerico(event)">
			</td>
		</tr>
		<tr>
			<td>SWIFT Banco Corresponsal</td>
			<td>
				<input type='text' name='swiCore' id='swiCore' onKeyPress="return numerico(event)">
			</td>
		</tr>
		<tr>
			<td>Cuenta corta Banco Corresponsal</td>
			<td>
				<input type='text' name='cuentABAncoCor' id='cuentABAncoCor' onKeyPress="return numerico(event)" onKeyUp="mascara(this,'-',patron2,true)">
			</td>
		</tr>
		<tr>	
			<td>
			Cuenta larga Banco Corresponsal	
			</td>
			<td>
				<input type='text' name='cuentABAncoLar' id='cuentABAncoLar' onKeyPress="return numerico(event)" onKeyUp="mascara(this,'-',patron2,true)">
			</td>
		</tr>
		<tr>
			<td>Divisa cuenta Banco Corresponsal</td>
			<td>
				<input type='text' name='divBanCore' id='divBanCore'>
			</td>
		</tr>
		<tr>
			<td>
				Tipo de cuenta Banco Corresponsal
			</td>
			<td>
				<select type='text' name='TpoCtABAnCore' id='TpoCtABAnCore'>
				<option value='Ahorro'>Ahorro</option>
				<option value='Inversion'>Inversion</option>
				<option value='Corriente'>Corriente</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nombre de titular detalles para pago FFC</td>
			<td>
				<input type='text' name='nomTiBanCoreFFC' id='nomTiBanCoreFFC' onKeyPress="return soloLetras(event)">
			</td>
		</tr>
		<tr>	
			<td>Numero de cuenta detalles para pago FFC</td>
			<td>
				<input type='text' name='numCtABAnCoreFFC' id='numCtABAnCoreFFC' onKeyPress="return numerico(event)">
			</td>
		</tr>
		<tr>
			<td>Pago por auto FX-Divisa del pago</td>
			<td>
				<input type='text' name='pagfxDivisa' id='pagfxDivisa' onKeyPress="return todo(event)">
			</td>
		</tr>
		<tr>	
			<td>Pago por auto FX-concepto del pago</td>
			<td>
				<input type='text' name='pagfxConcepto' id='pagfxConcepto' onKeyPress="return numerico(event)">
				
			</td>
		</tr>
		<tr>
			<td>Pago por auto FX-sucursal del pago</td>
			<td>
				<input type='text' name='pagfxSucursal' id='pagfxSucursal'>
			</td>
		</tr>

	</table>
	<span class="label label-2 ">Otros datos</span>
	<table align="center" width="70%">
		<tr>
			<td>Documentación anexa</td>
			<td><input type="checkbox" id='sta_cta' name="estadiocu" value="S">Estado de cuenta</td>
			<td><input type="checkbox" id='cart_banc' name="estadiocu" value="S">Carta de banco</td>
			<td><input type="checkbox" id='wire_trans' name="estadiocu" value="S">Instrucciones wire transfer</td>
			<td><input type="checkbox" id='banc_contr' name="estadiocu" value="S">Contrato bancario</td>
			<td><input type="checkbox" id='factu' name="estadiocu" value="S">Factura</td>
			<td><input type="checkbox" id='otro' name="estadiocu" value="S">Otro</td>
		</tr>
		<tr>
			<td>Motivo que origina la alta</td>
			<td colspan='2'>
				<select id='motivo_cta'>
					<option value='Cuenta nueva'>Cuenta nueva</option>
					<option value='Cuenta adicional'> Cuenta adicional</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>El alta sustituye a la cuenta actual</td>
			<td>
			<input type="radio" id='radio' name="group1" value="si" checked> Si<br>
			</td>
			<td>
				<input type="radio" id='radio' name="group1" value="no" > No
			</td>
		</tr>
		<tr>
			<td colspan='7'>
				<center>
 		           <input type="button" value="Envio" id='envio1' OnClick="alert('Esta información sera enviada a Televisa y utilizada para el proceso de Alta de Proveedores');return true;"/>
        		</center>
			</td>
		</tr>
	</table>
<divn id='data1'></div>
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
							nom_apo:$('#nombreApo').val(),
							aba_bene:$('#ABABene').val(),
							swi_bene:$('#swiBene').val(),
							dom_pro:$('#docPro').val(),
							dom_ban_bene:$('#docBene').val(),
							nom_ban_core:$('#banCore').val(),
							dom_ban_core:$('#dombanCore').val(),
							aba_core:$('#ABACore').val(),
							swin_core:$('#swiCore').val(),
							cta_corta_corre:$('#cuentABAncoCor').val(),
							cta_larga_corre:$('#cuentABAncoLar').val(),
							divisa:$('#divBanCore').val(),
							tpo_cta:$('#TpoCtABAnCore').val(),
							nom_titu_FFC:$('#nomTiBanCoreFFC').val(),
							nom_cta_FFC:$('#numCtABAnCoreFFC').val(),
							pago_fx_divisa:$('#pagfxDivisa').val(),
							pago_fx_concepto:$('#pagfxConcepto').val(),
							pago_fx_sucursal:$('#pagfxSucursal').val(),
							anexa_sta_cta:$('#sta_cta').val(),
							anexa_cart_banc:$('#cart_banc').val(),
							anexa_wire_trans:$('#wire_trans').val(),
							anexa_banc_contr:$('#banc_contr').val(),
							anexa_banc_factu:$('#factu').val(),
							anexa_banc_otro:$('#otro').val(),
							motivo_cta:$('#motivo_cta').val(),
							radio:$('#radio').val(),
						}

					},
					url: 'save5.php',
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
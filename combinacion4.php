
	<div >
		<span class="label label-2 ">Datos Bancarios del Proveedor</span>
	<table align='center' width="70%">	
				<tr>
					<td>
						<label>
							Nombre de persona física/moral
						</label>
					</td>
					<td colspan='3'>
						<input name='nombrefisica' type='text' id='nombrefisica' size="60" maxlength="60" onKeyPress="return soloLetras(event)">
					</td>
		         
		      </tr>
		         <tr>   
					<td class='required'>
						<label>id fiscal</label>
					</td>	
					<td colspan='3'>
						<input type='text' name='idFiscal' name='idFiscal' onkeypress="return fiscal(event)">
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
						<select name='idFiscal1' id='idFiscal1' class="no-display">
							<option value='0'>Selecciona id fiscal</option>
							<option value='1'>CUIL</option>
							<option value='2'>CUIT</option>
						</select>
						<select name='idFiscal2' id='idFiscal2' class="no-display">
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
        wrap=physical onKeyDown= "contador(this.form.cuentacorta3,this.form.remLen3,20);" 
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
				<a href="http://10.7.39.176/onbase/TELEVISA/IniciaSolicitud/FormularioSolicitud.html">
          <input type="button" value="Envio" OnClick="alert('Esta información sera enviada a Televisa y utilizada para el proceso de Alta de Proveedores');return true;"/>
      		</a>
          </center>
			</td>
		</tr>

	</table>
	</div>
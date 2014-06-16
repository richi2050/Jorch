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
				<input type='text' name='ABABene' id='ABABene'  onkeypress="return numerico(event)">
			</td>
		</tr>
		<tr>
			<td>SWIFT Banco Corresponsal</td>
			<td>
				<input type='text' name='swiBene' id='swiBene' onKeyPress="return numerico(event)">
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
				<option value='tpoA'>Ahorro</option>
				<option value='tpoI'>Inversion</option>
				<option value='tpoI'>Corriente</option>
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
				<input type='text' name='pagfxDivisa' id='pagfxDivisa' onKeyPress="return numerico(event)">
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
			<td><input type="checkbox" name="estadiocu" value="estadiocu">Estado de cuenta</td>
			<td><input type="checkbox" name="estadiocu" value="estadiocu">Carta de banco</td>
			<td><input type="checkbox" name="estadiocu" value="estadiocu">Instrucciones wire transfer</td>
			<td><input type="checkbox" name="estadiocu" value="estadiocu">Contrato bancario</td>
			<td><input type="checkbox" name="estadiocu" value="estadiocu">Factura</td>
			<td><input type="checkbox" name="estadiocu" value="estadiocu">Otro</td>
		</tr>
		<tr>
			<td>Motivo que origina la alta</td>
			<td colspan='2'>
				<select>
					<option>Cuenta nueva</option>
					<option>Cuenta adicional</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>El alta sustituye a la cuenta actual</td>
			<td>
			<input type="radio" name="group1" value="si" checked> Si<br>
			</td>
			<td>
				<input type="radio" name="group1" value="no" > No
			</td>
		</tr>
		<tr>
			<td colspan='7'>
				<center>
				<a href="http://10.7.39.176/onbase/TELEVISA/IniciaSolicitud/FormularioSolicitud.html">
          <input type="button" value="Envio" OnClick="alert('Esta información sera enviada a Televisa y utilizada para el proceso de Alta de Proveedores');return true;"/>
      		</a>
          </center>
			</td>
		</tr>
	</table>
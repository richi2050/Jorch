<script type="text/javascript">
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
</script>

<form id='form1'>
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
						<input type='text' name='idFiscal' id='idFiscal'  onkeypress="return fiscal(event)">
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
						
						<select name='idFiscal2' id='tpo_fiscal' >
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

<span class="label label-2 ">Datos especiales </span>
	
	<table align='center' width="70%">
		<tr>
			<td class='required'> 
				<label>Convenio</label>
			</td>
			<td colspan='3'>
				<input type='text' name='convenio' id='convenio'>
			</td>
		</tr>
		<tr>	
			<td class='required'> 
				<label>Referencia</label>
			</td>
			<td colspan='3'>
				<textarea name="cuentacorta" cols="30" rows="1" maxlength="30" autofocus 
        wrap=physical id='referencia' onKeyDown= "contador(this.form.cuentacorta,this.form.remLen,30);" 
        ></textarea>   
			</td>
		</tr>
		<tr>	
			<td >
				<label>Dispones de los siguientes Caracteres</label>
			</td>
			<td colspan='3'>
				<input type="text" style='width:50px;' name="remLen" size="3" maxlength="3" value="30" readonly>
			</td>
		</tr>
		<tr>
			<td colspan='4'>
				<center>

				<a>
          <input type="button" id='envio1' value="Envio" OnClick="alert('Esta información sera enviada a Televisa y utilizada para el proceso de Alta de Proveedores');return true;"/>
      		</a>
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
							nombre:$('#nombrefisica').val(),
							id_fiscal:$('#idFiscal').val(),
							correo:$('#correo').val(),
							telefono:$('#telefono').val(),
							banco:$('#bancos').val(),
							sucursal:$('#sucursal').val(),
							cta_cor:$('#cuentaCorta').val(),
							cta_lar:$('#cuentaLarga').val(),
							tpo_id_fiscal:$('#tpo_fiscal').val(),
							tpo_cta:$('#tipoCuenta').val(),
							nombre_2:$('#nombreFiscal').val(),
						},
						datos_3:{
							convenio:$('#convenio').val(),
							referencia:$('#referencia').val(),

						}

					},
					url: 'save1.php',
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
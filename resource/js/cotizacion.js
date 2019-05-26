var precioFinal;
var plazo;
var mensualidadSinInteres;

// Ejecutar los cálculos cuando se selecciona un auto
document.getElementById('id_automovil').addEventListener('change', calculos);
// Ejecutar los cálculos cuando se escribe un descuento
document.getElementById('descuento').addEventListener('keyup', calculos);
// Ejecutar los cálculos cuando se escribe una comisión
document.getElementById('comision').addEventListener('keyup', calculos);
// Ejecutar los cálculos cuando se escribe un porcentaje de enganche
document.getElementById('enganche').addEventListener('keyup', calculos);
// Ejecutar los cálculos cuando se escribe un plazo a pagar
document.getElementById('plazo').addEventListener('keyup', calculos);

// Ejecutar los cálculos en cuanto se carga la página
calculos();

function calculos(){
	let auto = document.getElementById('id_automovil').value;
	document.getElementById('precio').selectedIndex = auto-1;

	let precio = document.getElementById('precio').value;
	let descuento = document.getElementById('descuento').value;
	let subtotal = (precio - descuento);
	document.getElementById('subtotal').value = subtotal.toFixed(2);

	let comision = document.getElementById('comision').value;
	let precioNeto = (subtotal + parseFloat(comision));
	document.getElementById('precio_neto').value = precioNeto.toFixed(2);

	let enganche = document.getElementById('enganche').value;
	let importeEnganche = (precioNeto * enganche / 100);
	document.getElementById('importeEnganche').value = importeEnganche.toFixed(2);

	precioFinal = (precioNeto - importeEnganche);
	document.getElementById('precio_final').value = precioFinal.toFixed(2);

	plazo = document.getElementById('plazo').value;
	if(plazo == 0){
		mensualidadSinInteres = (0);
	} else {
		mensualidadSinInteres = (precioFinal / plazo);
	}
	document.getElementById('mensualidad_sin_interes').value = mensualidadSinInteres.toFixed(2);
}

// Generar tabla cuando se presiona el botón
document.getElementById('generar').addEventListener('click', generarTabla);

function generarTabla(){
	// Obtener la fecha completa del campo de tipo fecha
	let fecha = document.getElementById('fecha').value;
	// Obtener el año por separado
	let anio = fecha.substring(0, 4);
	// Obtener el mes por separado
	let mes = fecha.substring(5, 7);
	// Aumentar en 1 el mes porque las mensualidades comienzan un mes después de la compra
	mes++;
	// Obtener el día por separado
	let dia = fecha.substring(8, 10);
	// Hacer una copia del día
	let diaOriginal = dia;

	// Obtener el porcentaje de tasa anual
	let tasa = document.getElementById('tasa').value;

	// Calcular el porcentaje de interes mensual a pagar
	let porcentajeInteres = (tasa / 12 / 100);
	// Obtener el interes a pagar del primer mes
	let interes = (precioFinal * porcentajeInteres);
	document.getElementById('interes').value = interes.toFixed(2);

	let mensualidadConInteres = mensualidadSinInteres + interes;
	document.getElementById('mensualidad_con_interes').value = mensualidadConInteres.toFixed(2);

	// Crear los encabezados de la tabla
	let tabla = `
		<thead>
			<tr>
				<th>
					No.
				</th>
				<th>
					Fecha
				</th>
				<th>
					Concepto
				</th>
				<th>
					Abono
				</th>
				<th>
					Interés
				</th>
				<th>
					Mensualidad
				</th>
				<th>
					Saldo
				</th>
			</tr>
		</thead>
		<tbody>`;

		//let tabla;

	let saldoRestante = precioFinal;

	// Crear una fila por cada mensualidad asignada en el plazo
	for (var i = 0; i < plazo; i++) {
		// Si el mes es el número 13, reiniciar al mes 1, y aumentar el año en 1
		if(mes == 13){
			mes = 1;
			anio++;
		}

		// Si el mes es Febrero
		if(mes == 2){
			// Si el día es mayor a 28
			if(dia > 28){
				// Si el año es bisiesto
				if((anio % 4) == 0){
					dia = 29;
				// Si el año no es bisiesto
				}else{
					dia = 28;
				}
			}
		// Si el mes es Abril, Junio, Septiembre o Noviembre (Meses con 30 días)
		}else if((mes == 4) || (mes == 6) || (mes == 9) || (mes == 11)){
			// Si el día es 31
			if(dia == 31){
				dia = 30;
			}
		}

		saldoRestante -= mensualidadSinInteres;

		// Crear cada una de las filas mensuales con cada uno de los valores calculados previamente
		tabla += `
		<tr>
			<td>
				${i+1}
			</td>
			<td>
				<input value="${dia+'/'+mes+'/'+anio}" size="10" name="fecha${i+1}">
			</td>
			<td>
				Abono de mensualidad
			</td>
			<td>
				$${mensualidadSinInteres.toFixed(2)}
			</td>
			<td>
				$${interes.toFixed(2)}
			</td>
			<td>
				$${mensualidadConInteres.toFixed(2)}
			</td>
			<td>
				<input value="$${Math.abs(saldoRestante).toFixed(2)}" size="12" name="saldo${i+1}">
			</td>
		</tr>`;

		// Aumentar el mes y regresar el día al original, para utilizarlos en la siguiente iteración
		mes++;
		dia = diaOriginal;
	}

	tabla += `</tbody>`;

	// Mostrar en la página la tabla generada
	document.getElementById('tablaPagos').innerHTML = tabla;
}
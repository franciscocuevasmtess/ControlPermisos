Runner.buttonEvents["New_Button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button';
	
	if ( !pageObj.buttonEventBefore['New_Button'] ) {
		pageObj.buttonEventBefore['New_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/**
 * ============================================================================
 * 🎯 MÓDULO: VALIDACIÓN Y CONFIRMACIÓN DE SOLICITUD - Evento: Client Before
 * Descripción: Maneja la validación de campos, fechas y confirmación antes 
 *              del envío de formularios en la plataforma Runner.
 * ============================================================================
 */


/**
 * ✅ FUNCIÓN: mostrarError
 * Propósito: Mostrar modal de error con lista de problemas detectados
 * 
 * @param {string} titulo - Título del modal (ej: "❌ Campos obligatorios")
 * @param {string} descripcion - Mensaje descriptivo del error
 * @param {Array<string>} lista - Array opcional de ítems específicos con error
 * @returns {Promise} - Promesa de SweetAlert para encadenamiento
 */
function mostrarError(titulo, descripcion, lista = [], footer = "") {
	let itemsHTML = "";
	
	// Si hay elementos en la lista, construir un <ul> con cada ítem en negrita
	if (lista.length > 0) {
		itemsHTML = "<ul style='text-align:left'>";
		lista.forEach(item => {
			itemsHTML += `<li><b>${item}</b></li>`;
		});
		itemsHTML += "</ul>";
	}
	
	// Retornar modal SweetAlert configurado para errores
	return Swal.fire({
		title: titulo,
		html: `
			<div style="text-align:left">
				<b>${descripcion}</b>
				<hr>
				${itemsHTML}
				<b>${footer}</b>
			</div>
		`,
		icon: "error",
		confirmButtonText: "Entendido"
	});
}


/**
 * ✅ FUNCIÓN: mostrarConfirmacion
 * Propósito: Mostrar modal de confirmación antes de procesar la solicitud
 * 
 * @param {string} htmlResumen - HTML con el resumen de datos a confirmar
 * @returns {Promise} - Promesa que resuelve con la decisión del usuario
 */
function mostrarConfirmacion(htmlResumen) {
	return Swal.fire({
		title: "Confirmar Solicitud",
		html: htmlResumen,
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#198754",  // Verde: acción positiva
		cancelButtonColor: "#d33",       // Rojo: cancelar
		confirmButtonText: "Sí, Confirmar",
		cancelButtonText: "Cancelar"
	});
}


/**
 * 🧩 FUNCIÓN: validarCampos
 * Propósito: Validar genéricamente que los controles tengan valor
 * 
 * @param {Array<Object>} campos - Array de objetos { control, label }
 * @returns {Array<string>} - Lista de labels de los campos vacíos
 * 
 * @example
 * validarCampos([
 *   { control: miControl, label: "Nombre" },
 *   { control: otroControl, label: "Email" }
 * ]);
 */
function validarCampos(campos) {
	let faltantes = [];

	campos.forEach(campo => {
		// 🔍 DEBUG: Log para rastrear valores durante desarrollo
		//console.log("campo.control.getvalue: " + campo.control.getValue());
		
		// Verificar si el control está vacío usando el método estándar getValue()
		if (!campo.control.getValue()) {
			faltantes.push(campo.label);
		}
	});

	return faltantes; // Array vacío = todos los campos completos
}


// ----------------------------------------------------------------------------
// 🎛️ OBTENCIÓN DE CONTROLES DEL FORMULARIO
// Se recuperan referencias a los campos para usar en validación y resumen
// ----------------------------------------------------------------------------

// 📋 Datos personales y laborales
var nombre_completo = Runner.getControl(pageid, 'nombre_completo');
var per_ci = Runner.getControl(pageid, 'per_ci');
var descripcion_dependencia = Runner.getControl(pageid, 'descripcion_dependencia');
var descripcion_tipo_vinculacion = Runner.getControl(pageid, 'descripcion_tipo_vinculacion');
var car_descri = Runner.getControl(pageid, 'car_descri');       // Cargo actual
var sed_descripcion = Runner.getControl(pageid, 'sed_descripcion'); // Sede laboral

// 🕐 Datos de fecha y hora del permiso
var hora_desde = Runner.getControl(pageid, 'hora_desde');
var hora_hasta = Runner.getControl(pageid, 'hora_hasta');
var observacion = Runner.getControl(pageid, 'observacion');
var email_jefe = Runner.getControl(pageid, 'email_jefe');
var motivo_id = Runner.getControl(pageid, 'motivo_id');

// 📅 FORMATEO DE FECHAS PARA VISUALIZACIÓN (DD/MM/YYYY)
// Nota: Los meses en JS van de 0-11, por eso se suma +1 al getMonth()

// Fecha desde
var fechaDesde = Runner.getControl(pageid, 'fecha_desde').getValue();
var fechaObjDesde = new Date(fechaDesde);
var diaDesde = ("0" + fechaObjDesde.getDate()).slice(-2);
var mesDesde = ("0" + (fechaObjDesde.getMonth() + 1)).slice(-2); // Los meses en JS van de 0 a 11
var anioDesde = fechaObjDesde.getFullYear();
var fecha_desde = diaDesde + "/" + mesDesde + "/" + anioDesde;

// Fecha hasta
var fechaHasta = Runner.getControl(pageid, 'fecha_hasta').getValue();
var fechaObjHasta = new Date(fechaHasta);
var diaHasta = ("0" + fechaObjHasta.getDate()).slice(-2);
var mesHasta = ("0" + (fechaObjHasta.getMonth() + 1)).slice(-2); // Los meses en JS van de 0 a 11
var anioHasta = fechaObjHasta.getFullYear();
var fecha_hasta = diaHasta + "/" + mesHasta + "/" + anioHasta;


// ----------------------------------------------------------------------------
// 🔐 BLOQUE DE VALIDACIONES
// Se ejecutan en orden: Perfil → Formulario → Lógica de negocio (fechas)
// ----------------------------------------------------------------------------

/**
 * 🔧 VALIDACIÓN 1: DATOS DEL PERFIL
 * Verifica que los campos críticos del perfil del usuario estén completos
 */
var faltantesPerfil = validarCampos([
	{ control: descripcion_dependencia, label: "Dependencia" },
	{ control: descripcion_tipo_vinculacion, label: "Tipo de vinculación" }
]);

if (faltantesPerfil.length > 0) {
	mostrarError(
		"❌ No es posible enviar la solicitud",
		"Faltan completar datos de tu perfil:",
		faltantesPerfil,
		"Por favor, comunícate con el área de <b>Recursos Humanos</b> para actualizar tu información."
	);
	return false; // ⛔ Detiene la ejecución si hay errores
}


/**
 * 🔧 VALIDACIÓN 2: CAMPOS DEL FORMULARIO
 * Verifica que los campos obligatorios de la solicitud estén completos
 */
var faltantesFormulario = validarCampos([
	{ control: motivo_id, label: "Tipo de permiso o justificación" },
	{ control: email_jefe, label: "Correo del superior inmediato" },
	{ control: Runner.getControl(pageid, 'fecha_desde'), label: "Fecha desde" },
	{ control: hora_desde, label: "Hora de inicio" },
	{ control: Runner.getControl(pageid, 'fecha_hasta'), label: "Fecha hasta" },
	{ control: hora_hasta, label: "Hora de fin" }
]);

if (faltantesFormulario.length > 0) {

	mostrarError(
		"❌ Campos obligatorios",
		"Falta completar los siguientes campos:",
		faltantesFormulario,
		"Por favor, completa los campos obligatorios del formulario."
	);
	return false; // ⛔ Detiene la ejecución si hay errores
}


/**
 * 🔧 VALIDACIÓN 3: LÓGICA DE FECHAS
 * Regla de negocio: La fecha de fin no puede ser anterior a la de inicio
 */
var fDesde = new Date(fechaDesde);
var fHasta = new Date(fechaHasta);
if (fHasta < fDesde) {
	mostrarError(
		"⚠️ Error en fechas",
		"La fecha de fin no puede ser menor que la fecha de inicio.",
		[],
		"Por favor, verifique las fechas ingresadas."
	);
	return false; // ⛔ Detiene la ejecución si las fechas son inválidas
}


// ----------------------------------------------------------------------------
// 🧾 CONFIRMACIÓN Y ENVÍO
// Si todas las validaciones pasan, se muestra resumen y se procesa
// ----------------------------------------------------------------------------

/**
 * 📄 CONSTRUCCIÓN DEL RESUMEN HTML
 * Se arma dinámicamente con los valores actuales de los controles
 * Nota: Se usa operador ternario para manejar posibles valores null/undefined
 */
var resumenHTML = `
<div style="text-align:left">
	<b>Número Documento:</b> ${per_ci ? per_ci.getValue() : ''} <br>
	<b>Nombre Completo:</b> ${nombre_completo ? nombre_completo.getValue() : ''} <br>
	<b>Dependencia:</b> ${descripcion_dependencia ? descripcion_dependencia.getValue() : ''} <br>
	<b>Tipo de Vinculación:</b> ${descripcion_tipo_vinculacion ? descripcion_tipo_vinculacion.getValue() : ''} <br>
	<b>Cargo Actual:</b> ${car_descri ? car_descri.getValue() : ''} <br>
	<b>Sede Laboral:</b> ${sed_descripcion ? sed_descripcion.getValue() : ''} <br>
	<hr>
	<b>ℹ️ Revise los datos antes de enviar la solicitud.</b> <br>
	<b>Tipo Permiso:</b> ${motivo_id.getDisplayValue() ? motivo_id.getDisplayValue() : ''} <br>
	<b>Desde:</b> ${fecha_desde ? fecha_desde + " - " + hora_desde.getValue() : ''} <br>
	<b>Hasta:</b> ${fecha_hasta ? fecha_hasta + " - " + hora_hasta.getValue() : ''} <br>
	<b>Observacion:</b> ${observacion.getValue()} <br>
	<b>Correo electrónico del superior inmediato:</b> ${email_jefe ? email_jefe.getValue() : ''} <br>
</div>
`;

/**
 * 🔄 FLUJO DE CONFIRMACIÓN
 * 1. Muestra modal con resumen
 * 2. Si usuario confirma → muestra "Procesando..."
 * 3. Dispara click programático en botón de guardado nativo
 */
mostrarConfirmacion(resumenHTML).then((result) => {
	if (result.isConfirmed) {
		// 🔄 Mostrar feedback visual de procesamiento
		Swal.fire({
			title: "Procesando...",
			text: "Guardando solicitud...",
			icon: "info",
			showConfirmButton: false,
			allowOutsideClick: false // Evita que el usuario cierre el modal accidentalmente
		});
		
		// ⚡ Disparar evento de guardado nativo de la plataforma
      // Nota: Esto depende de que exista un botón con id="saveButton1"
		$("#saveButton1").click();
	}
	// Si cancela, no se hace nada (el modal se cierra silenciosamente)
});

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button'] ) {
		pageObj.buttonEventAfter['New_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button" + "_" + Runner.genId();
		
		// create object
		var button_New_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button"
		});
		
		// init
		button_New_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


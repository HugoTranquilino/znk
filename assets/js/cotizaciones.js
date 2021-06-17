$(document).ready(function () {
	$("#fecha").flatpickr({
		locale: "es",
		dateFormat: "Y/m/d",
		maxDate: "today",
		locale: {
			firstDayOfWeek: 1,
			weekdays: {
				shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
				longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			},
			months: {
				shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
				longhand: ['Enero', 'Febrero', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			}
		}
	});
	const url = $("#base_url_host").val();
	const opcBlockUI = {
		message: 'Un momento, por favor...',
		css: {
			border: 'none',
			padding: '24px',
			backgroundColor: '#000',
			'-webkit-border-radius': '10px',
			'-moz-border-radius': '10px',
			opacity: .7,
			color: '#fff'
		}
	};
	$('.x-right').click(function () {
		(async () => {
			const inputOptions = new Promise((resolve) => {
				setTimeout(() => {
					resolve({
						'1': 'Gastos Médicos Mayores',
						'2': 'Hogar',
						'3': 'Auto',
						'4': 'Negocio',
						'5': 'Retiro',
						'6': 'Vida',
						'7': 'Hombre Clave'
					})
				}, 1000)
			})

			const {
				value: seguro
			} = await Swal.fire({
				title: 'Tipo de Seguro',
				width: 600,
				input: 'select',
				inputPlaceholder: 'Selecciona un tipo de Seguro',
				backdrop: `rgba(104, 104, 115,0.8)`,
				confirmButtonColor: '#00bbb5',
				inputOptions: inputOptions,
				inputValidator: (value) => {
					if (!value) {
						return 'Por favor, eligé un tipo de seguro!'
					}
				}
			})

			if (seguro && seguro > 0) {				
				$.redirect(`${url}index.php/ZnkSeguros/cotizador/`, {
					tipoSeguro: btoa(seguro)
				}, "GET");
			}
		})()
	});

	var medicosMayores = {
		rules: {
			nombre: "required",
			fecha: "required",
			nivelHospotalario: "required",
			cp: {
				required: true,
				number: true
			},
			cobertura: "required",
			genero: "required",
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			nombre: {
				required: "Por favor, dejanos tu nombre"
			},
			fecha: {
				required: "Por favor, seleccione una fecha"
			},
			nivelHospotalario: {
				required: "Por favor, seleccione un nivel hospitalario"
			},
			cp: {
				required: "Por favor, ingrese su Código Postal",
				number: "Por favor verifica el C.P ingresado"
			},
			cobertura:{
				required: "Por favor, seleccione el tipo de cobertura"
			},
			genero:{
				required: "Por favor, seleccione su genero"
			},
			email: {
				required: "Por favor, registra tu correo electrónico"
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico",
				number: "Por favor verifica el número telefonico ingresado"
			}
		},
		ignore: ":not(:visible),:disabled"
	};

	var hogarRules = {
		rules: {
			nombre: "required",
			estado: "required",
			municipio: "required",
			cp: {
				required: true,
				number: true
			},
			col: "required",
			calle: "required",
			colonia: "required",
			exterior: {
				required: true,
				number: true
			},
			tipoInmueble: "required",
			mts: {
				required: true,
				number: true
			},
			interior: {
				required: true,
				number: true
			},
			seguridad: "required",
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			nombre: {
				required: "Por favor, dejanos tu nombre."
			},
			estado: {
				required: "Por favor, seleccione un estado."
			},
			municipio: {
				required: "Por favor, seleccione un municipio."
			},
			calle: {
				required: "Por favor, agregue su calle"
			},
			cp: {
				required: "Por favor, ingrese su Código Postal.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			col: {
				required: "Por favor, ingrese su colonia."
			},
			exterior: {
				required: "Por favor, ingrese su número exterior.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			interior: {
				required: "Por favor, ingrese su número interior.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			tipoInmueble: {
				required: "Por favor seleccione su tipo de inmueble."
			},
			mts: {
				required: "Por favor, ingrese el aproximado de mts cuadrados.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			seguridad: {
				required: "Por favor, seleccione una opción."
			},
			email: {
				required: "Por favor, registra tu correo electrónico."
			}
		},
		ignore: ":not(:visible),:disabled"
	};

	var homoclaveRules = {
		rules: {
			nombre: "required",
			fecha: "required",
			genero: "required",
			fuma: "required",
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			nombre: {
				required: "Por favor, dejanos tu nombre"
			},
			fecha: {
				required: "Por favor, seleccione una fecha"
			},
			genero: {
				required: "Por favor, seleccione su genero"
			},
			fuma: "Por favor, indiquenos si fuma",
			email: {
				required: "Por favor, registra tu correo electrónico",
				email: "Por favor, verifica la información ingresada"
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico",
				number: "Por favor verifica el número telefonico ingresado"
			}
		},
		ignore: ":not(:visible),:disabled"
	}

	var vidaRules = {
		rules: {
			nombre: "required",
			fecha: "required",
			genero: "required",
			fuma: "required",
			productdeseado: "required",
			montoAsegurado: {
				required: true,
				number: true
			},
			moneda: "required",
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			nombre: {
				required: "Por favor, dejanos tu nombre"
			},
			fecha: {
				required: "Por favor, seleccione una fecha"
			},
			genero: {
				required: "Por favor, seleccione su genero"
			},
			fuma: "Por favor, indiquenos si fuma",
			productdeseado: {
				required: "Por favor, seleccione el producto que desea",
			},
			montoAsegurado: {
				required: "Por favor, ingrese el monto asegurado deseado",
				number: "Verifica la informacion ingresada"
			},
			moneda: {
				required: "Por favor, seleccione el tipo de moneda"
			},
			email: {
				required: "Por favor, registra tu correo electrónico",
				email: "Por favor, verifica la información ingresada"
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico",
				number: "Por favor verifica el número telefonico ingresado"
			}
		},
		ignore: ":not(:visible),:disabled"
	};

	var retiroRules = {
		rules: {
			nombre: "required",
			fecha: "required",
			genero: "required",
			fuma: "required",
			edad: {
				required: true,
				number: true
			},
			cantidad: {
				required: true,
				number: true
			},
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			nombre: {
				required: "Por favor, dejanos tu nombre"
			},
			fecha: {
				required: "Por favor, seleccione una fecha"
			},
			genero: {
				required: "Por favor, seleccione su genero"
			},
			fuma: "Por favor, indiquenos si fuma",
			edad: {
				required: "Por favor, dejanos tú edad",
				number: "Por favor, verifique la información ingresada"
			},
			cantidad: {
				required: "Por favor, ingrese la cantidad estimada",
				number: "Por favor, verifique la información ingresada"
			},
			email: {
				required: "Por favor, registra tu correo electrónico",
				email: "Por favor, verifica la información ingresada"
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico",
				number: "Por favor verifica el número telefonico ingresado"
			}
		},
		ignore: ":not(:visible),:disabled"
	};

	var negocioRules = {
		rules: {
			nombre: "required",
			actividadNegocio: "required",
			estado: "required",
			municipio: "required",
			cp: {
				required: true,
				number: true
			},
			col: "required",
			calle: "required",
			colonia: "required",
			exterior: {
				required: true,
				number: true
			},
			tipoInmueble: "required",
			mts: {
				required: true,
				number: true
			},
			interior: {
				required: true,
				number: true
			},
			tipoInmueble: "required",
			sumaAsegurada: {
				required: true,
				number: true
			},
			sumaAsegurada: {
				required: true,
				number: true
			},
			seguridad: "required",
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			nombre: {
				required: "Por favor, dejanos tu nombre."
			},
			actividadNegocio: {
				required: "Por favor, indicanos la actividad del negocio."
			},
			estado: {
				required: "Por favor selecciona un estado."
			},
			municipio: {
				required: "Por favor selecciona un municipio."
			},
			calle: {
				required: "Por favor, agregue su calle."
			},
			cp: {
				required: "Por favor, ingrese su Código Postal.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			col: {
				required: "Por favor, ingrese su colonia."
			},
			exterior: {
				required: "Por favor, ingrese su número exterior.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			interior: {
				required: "Por favor, ingrese su número interior.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			tipoInmueble: {
				required: "Por favor selecciona su tipo."
			},
			mts: {
				required: "Por favor, ingrese el aproximado de mts cuadrados.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			sumaAsegurada: {
				required: "Por favor, ingrese la suma asegurada deseada.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico.",
				number: "Por favor, verifique la informacion proporcionada."
			},
			seguridad: {
				required: "Por favor, seleccione una opción."
			},
			email: {
				required: "Por favor, registra tu correo electrónico.",
				email: "Por favor, verifique la informacion proporcionada."
			}
		},
		ignore: ":not(:visible),:disabled"
	};

	var autoRules = {
		rules: {
			tipoVehiculo: "required",
			modeloAuto: "required",
			marcaAuto: "required",
			submarcaAuto: "required",
			versionAuto: "required",
			estado: "required",
			municipio: "required",
			vigenciaSeguro: "required",
			formaPago: "required",
			nombre: "required",
			email: {
				required: true,
				email: true
			},
			contacto: {
				required: true,
				number: true,
				minlength: 8,
				maxlength: 10
			}
		},
		messages: {
			tipoVehiculo:{
				required: "Por favor, seleccione un tipo de vehículo"
			},
			modeloAuto:{
				required: "Por favor, seleccione el año o modelo de su vehículo"
			},
			marcaAuto:{
				required: "Por favor, seleccione la marca de sú vehículo"
			},
			submarcaAuto:{
				required: "Por favor, seleccione la submarca de sú vehículo"
			},
			versionAuto:{
				required: "Por favor, indique la versión de su vehículo"
			},
			vigenciaSeguro:{
				required: "Por favor, indique la vigencia deseada"
			},
			formaPago:{
				required: "Por favor, seleccione la forma de pago"
			},
			nombre: {
				required: "Por favor, dejanos tu nombre."
			},
			estado: {
				required: "Por favor seleccione un estado."
			},
			municipio: {
				required: "Por favor seleccione un municipio."
			},
			contacto: {
				required: "Por favor, agrega tu número telefonico",
				number: "Verifique la información ingresada"
			},
			email: {
				required: "Por favor, registra tu correo electrónico.",
				email: "Verifique la información ingresada"
			}
		},
		ignore: ":not(:visible),:disabled"
	};

	$("#consultar_medicosMayores").click(function () {
		$("#gastosMedicos").validate(medicosMayores);
		if ($("#gastosMedicos").valid()) {
			// let fechaN = $('#fecha').val();
			// if (parseFecha(fechaN) > parseFecha()) {
			//   Swal.fire(
			//     'Algo anda mal?',
			//     'Por favor, revisa tu fecha de nacimiento',
			//     'warning'
			//   )
			//   // Swal.showValidationMessage(`La fecha parece estar mal.`)
			//   return false;
			// }
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveGastosMedicos`,
				data: $("#gastosMedicos").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$("#hogarConsultar").click(function () {
		$("#hogarFrom").validate(hogarRules);
		if ($("#hogarFrom").valid()) {
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveHogar`,
				data: $("#hogarFrom").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$("#consultarhomoclave").click(function () {
		$("#homoclaveform").validate(homoclaveRules);
		if ($("#homoclaveform").valid()) {
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveHclave`,
				data: $("#homoclaveform").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$("#consultarvida").click(function () {
		$("#vidaform").validate(vidaRules);
		if ($("#vidaform").valid()) {
			// let fechaN = $('#fecha').val();
			// if (parseFecha(fechaN) > parseFecha()) {
			//   Swal.fire(
			//     'Algo anda mal?',
			//     'Por favor, revisa tu fecha de nacimiento',
			//     'warning'
			//   )
			//   // Swal.showValidationMessage(`La fecha parece estar mal.`)
			//   return false;
			// }
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveVida`,
				data: $("#vidaform").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$("#consultretiro").click(function () {
		$("#retiroform").validate(retiroRules);
		if ($("#retiroform").valid()) {
			// let fechaN = $('#fecha').val();
			// if (parseFecha(fechaN) > parseFecha()) {
			//   Swal.fire(
			//     'Algo anda mal?',
			//     'Por favor, revisa tu fecha de nacimiento',
			//     'warning'
			//   )
			//   // Swal.showValidationMessage(`La fecha parece estar mal.`)
			//   return false;
			// }
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveRetiro`,
				data: $("#retiroform").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$("#negocioConsulta").click(function () {
		$("#NegocioFrom").validate(negocioRules);
		if ($("#NegocioFrom").valid()) {
			// let fechaN = $('#fecha').val();
			// if (parseFecha(fechaN) > parseFecha()) {
			//   Swal.fire(
			//     'Algo anda mal?',
			//     'Por favor, revisa tu fecha de nacimiento',
			//     'warning'
			//   )
			//   // Swal.showValidationMessage(`La fecha parece estar mal.`)
			//   return false;
			// }
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveNegocio`,
				data: $("#NegocioFrom").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$("#consultauto").click(function(){
		$("#autoform").validate(autoRules);
		if ($("#autoform").valid()) {
			// let fechaN = $('#fecha').val();
			// if (parseFecha(fechaN) > parseFecha()) {
			//   Swal.fire(
			//     'Algo anda mal?',
			//     'Por favor, revisa tu fecha de nacimiento',
			//     'warning'
			//   )
			//   // Swal.showValidationMessage(`La fecha parece estar mal.`)
			//   return false;
			// }
			$.ajax({
				type: "POST",
				url: `${url}index.php/ZnkSeguros/saveautoform`,
				data: $("#autoform").serialize(),
				beforeSend: function () {
					$.blockUI({
						message: 'Por favor, espere...',
						css: {
							border: 'none',
							width: '27%',
							padding: '13px',
							backgroundColor: '#534f4f',
							'-webkit-border-radius': '25px',
							'-moz-border-radius': '25px',
							opacity: .9,
							color: '#fff',
							baseZ: 100
						}
					});
				},
				success: function (res) {
					console.log(res);
					// response = JSON.parse(res);
					// if(response.bandera == 'true') {
					//     var titulo  = 'Â¡Registro Exitoso!';
					//     var msg = response.data;
					//     var tipo = 'success';
					// } else {
					//     var titulo  = 'Â¡Ups!';
					//     var tipo = 'warning';
					//     var msg = response.data; 
					// }
					// swal({
					//     title: titulo,
					//     text: msg,
					//     type: tipo,
					//     confirmButtonColor: "#5e55dd",
					//     confirmButtonText: "OK! ",
					//     showLoaderOnConfirm: true
					//     }, function(isConfirm){
					//         if (isConfirm) {
					//             $.unblockUI({fadeOut: 3000});
					//             location.reload();
					//         }
					//     });
				},
				error: function (xhr) {
					console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
					$.unblockUI();
				},
				complete: function () {
					$.unblockUI();
				}
			});
		}
	});

	$(".cotizador-t").click(function () {
		Swal.fire({
			title: 'Cotiza tú seguro',
			text: 'Nuestro objetivo, es entender y satisfacer las necesidades de todos nuestros clientes.',
			imageUrl: `${url}resources/uneteAnuestroEquipo_Mesa de trabajo 1.png`,
			imageWidth: 400,
			imageHeight: 200,
			imageAlt: 'Custom image',
			backdrop: `rgba(104, 104, 115,0.8)`,
			confirmButtonColor: '#00bbb5',
		})
	});

	loadModel();

	$('#tipoVehiculo').change(function () {
		loadModel();
	});

	$('#modeloAuto').change(function (){
		loadMarca();
	});

	$('#marcaAuto').change(function (){
		loadSubmarca();
	});

	$('#submarcaAuto').change(function (){
		loadVersion();
	});

	function loadModel() {
		var tipoAuto = $('#tipoVehiculo').val();
		$.ajax({
			type: "POST",
			url: `${url}index.php/ZnkSeguros/modelo_auto`,
			data: {tipoAuto :tipoAuto},
			success: function (response) {
				$('#modeloAuto').html(response);
			},
			error: function (xhr) {
				console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
			}
		});
	}

	function loadMarca() {
		var modeloAuto = $('#modeloAuto').val();
		$.ajax({
			type: "POST",
			url: `${url}index.php/ZnkSeguros/marca_auto`,
			data: {modeloAuto :modeloAuto},
			success: function (response) {
				$('#marcaAuto').html(response);
			},
			error: function (xhr) {
				console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
			}
		});
	}

	function loadSubmarca() {
		var marcaAuto = $('#marcaAuto').val();
		$.ajax({
			type: "POST",
			url: `${url}index.php/ZnkSeguros/submarca_auto`,
			data: {marcaAuto :marcaAuto},
			success: function (response) {
				$('#submarcaAuto').html(response);
			},
			error: function (xhr) {
				console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
			}
		});
	}

	function loadVersion() {
		var submarcaAuto = $('#submarcaAuto').val();
		$.ajax({
			type: "POST",
			url: `${url}index.php/ZnkSeguros/version_auto`,
			data: {submarcaAuto :submarcaAuto},
			success: function (response) {
				$('#versionAuto').html(response);
			},
			error: function (xhr) {
				console.log('No se ha podido obtener la informaciÃ³n => ' + xhr.statusText + ' => ' + xhr.responseText);
			}
		});
	}
});



function sonLetrasSolamente(texto) {
	var regex = /^[a-zA-Z ]+$/;
	return regex.test(texto);
}

function validarEmail(valor) {
	if (valor.indexOf('@', 0) == -1 || valor.indexOf('.', 0) == -1) {
		return false;
	} else {
		return true;
	}
}

function parseFecha(fecha = null) {
	if (fecha != null) {
		var d = new Date(fecha);
		var month = d.getMonth() + 1;
		var day = d.getDate();
		var output = d.getFullYear() + '/' +
			(('' + month).length < 2 ? '0' : '') + month + '/' +
			(('' + day).length < 2 ? '0' : '') + day;
		return output;
	} else {
		var d = new Date();
		var month = d.getMonth() + 1;
		var day = d.getDate();
		var output = d.getFullYear() + '/' +
			(('' + month).length < 2 ? '0' : '') + month + '/' +
			(('' + day).length < 2 ? '0' : '') + day;
		return output;
	}

}
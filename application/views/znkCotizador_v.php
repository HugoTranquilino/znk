<!-- ======= Template======= -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="herobg d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex flex-column justify-content-center">
				<?php
                    switch($tipoSeguro){
                        case 1:?>
                            <h1 data-aos="fade-up">Seguro de Gastos Medicos Mayores</h1>
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <div class="text-center text-lg-start"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <!-- <img src="<?php echo base_url()?>assets\img\features-3.png" class="img-fluid" alt=""> -->
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid"
                                    alt="">
                            </div>
			            <?php   break;
                        case 2:?>
                            <h1 data-aos="fade-up">Seguro de Hogar</h1>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start"></div>
                            </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid"
                                alt="">
                            </div>
                        <?php   break;
                            case 4:?>
                            <h1 data-aos="fade-up">Seguro de Negocio</h1>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start"></div>
                            </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid" alt="">
                            </div>
                        <?php   break;
                        case 5:?>
                            <h1 data-aos="fade-up">Seguro de Retiro</h1>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start"></div>
                            </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid" alt="">
                            </div>
	                    <?php   break;
                        case 6:?>
                            <h1 data-aos="fade-up">Seguro de Vida</h1>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start"></div>
                            </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid" alt="">
                            </div>
	                    <?php   break;
                        case 7:?>
                            <h1 data-aos="fade-up">Seguro de Hombre Clave</h1>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start"></div>
                            </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid" alt="">
                            </div>
                        <?php   break;
                        case 3:?>
                            <h1 data-aos="fade-up">Seguro de Auto</h1>
                            <div data-aos="fade-up" data-aos-delay="600">
                                <div class="text-center text-lg-start"></div>
                            </div>
                            </div>
                            <div class="col-lg-6 herobg-img" data-aos="zoom-out" data-aos-delay="200">
                                <img src="<?php echo base_url()?>resources\uneteAnuestroEquipo_Mesa de trabajo 1.png" class="img-fluid" alt="">
                            </div>
                        <?php   break;
                            default:
                                redirect(base_url());
                            break;
                        }?>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main" style="margin-top: -200px;">
	<section id="about" class="about">
		<div class="container" data-aos="fade-under">
			<div class="row gx-0">
				<div class="container" style="max-width: 900px; min-width: 340px;">
					<div class="card">
						<div class="card-body">
							<?php
                                switch($tipoSeguro){
                                    case 1:?>
                                    <form id="gastosMedicos">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="1">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fecha" class="form-label">Fecha de Nacimiento:</label>
                                                <input type="text" class="form-control" id="fecha" name="fecha">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nivelHospotalario" class="form-label">Nivel Hospitalario:</label>
                                                <select class="form-select" name="nivelHospotalario" id="nivelHospotalario">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Alto</option>
                                                    <option value="2">Medio</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="cp" class="form-label">Código Postal:</label>
                                                <input type="text" class="form-control" id="cp" name="cp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="cobertura" class="form-label">Tipo Cobertura:</label>
                                                <select class="form-select" name="cobertura" id="cobertura"
                                                    aria-label="Floating label select cobertura">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Nacional</option>
                                                    <option value="2">Internacional</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="genero" class="form-label">Genero:</label>
                                                <select class="form-select" name="genero" id="genero">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Femenino</option>
                                                    <option value="2">Masculino</option>
                                                </select>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">

                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                        </div>
                                        <button type="button" class="btn btn-good"
                                            id="consultar_medicosMayores">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							    <?php break;
                                    case 2: ?>
                                    <form id="hogarFrom">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="2">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select class="form-select" name="estado" id="estado">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Ciudad de México</option>
                                                    <option value="2">Edo Mex</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="municipio" class="form-label">Municipio:</label>
                                                <select class="form-select" name="municipio" id="municipio">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">M1</option>
                                                    <option value="2">M2</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="cp" class="form-label">Código Postal:</label>
                                                <input type="text" class="form-control" id="cp" name="cp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="cp" class="form-label">Colonia:</label>
                                                <input type="text" class="form-control" id="col" name="col">
                                            </div>
                                            <div class="mb-3">
                                                <label for="calle" class="form-label">Calle:</label>
                                                <input type="text" class="form-control" id="calle" name="calle">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="calle" class="form-label">No. Exterior:</label>
                                                    <input type="text" class="form-control" id="exterior" name="exterior">
                                                </div>
                                                <div class="col">
                                                    <label for="calle" class="form-label">No. Interior:</label>
                                                    <input type="text" class="form-control" id="interior" name="interior">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tipoInmueble" class="form-label">Tipo Inmueble:</label>
                                                <select class="form-select" name="tipoInmueble" id="tipoInmueble">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Alto</option>
                                                    <option value="2">Medio</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mts" class="form-label">Número de Metros:</label>
                                                <input type="text" class="form-control" id="mts" name="mts">
                                            </div>
                                            <div class="mb-3">
                                                <label for="seguridad" class="form-label">Seguridad:</label>
                                                <select class="form-select" name="seguridad" id="seguridad">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Proteccion perimetral</option>
                                                    <option value="2">Alarma Local</option>
                                                </select>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">

                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-good" id="hogarConsultar">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							    <?php break; 
                                    case 3: ?>
                                    <form id="autoform">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="2">
                                            <div class="mb-3">
                                                <label for="tipoVehiculo" class="form-label">Tipo vehículo:</label>
                                                <select class="form-select" name="tipoVehiculo" id="tipoVehiculo">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Autos</option>
                                                    <option value="2">Camiones hasta 1.5 Ton</option>
                                                    <option value="3">Camiones hasta 3.5 Ton</option>
                                                </select>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="modeloAuto" class="form-label">Año o modelo del vehículo:</label>
                                                    <select class="form-select" name="modeloAuto" id="modeloAuto">
                                                        
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="marcaAuto" class="form-label">Marca:</label>
                                                    <select class="form-select" name="marcaAuto" id="marcaAuto"></select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="submarcaAuto" class="form-label">Submarca:</label>
                                                    <select class="form-select" name="submarcaAuto" id="submarcaAuto"></select>
                                                </div>
                                                <div class="col">
                                                    <label for="versionAuto" class="form-label">Versión:</label>
                                                    <select class="form-select" name="versionAuto" id="versionAuto"></select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select class="form-select" name="estado" id="estado">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Ciudad de México</option>
                                                    <option value="2">Edo Mex</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="municipio" class="form-label">Municipio:</label>
                                                <select class="form-select" name="municipio" id="municipio">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">M1</option>
                                                    <option value="2">M2</option>
                                                </select>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="vigenciaSeguro" class="form-label">Vigencia deseada:</label>
                                                    <select class="form-select" name="vigenciaSeguro" id="vigenciaSeguro">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">POR UN MES</option>
                                                        <option value="2">POR UN AÑO</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="formaPago" class="form-label">Forma de pago:</label>
                                                    <select class="form-select" name="formaPago" id="formaPago">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">CONTADO</option>
                                                        <option value="2">A CREDITO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-good" id="consultauto">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							    <?php break; 
                                    case 4: ?>
                                    <form id="NegocioFrom">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="2">
                                            <div class="mb-3">
                                                <label for="nombreNegocio" class="form-label">Nombre del Negocio:</label>
                                                <input type="text" class="form-control" id="nombreNegocio" name="nombreNegocio">
                                            </div>
                                            <div class="mb-3">
                                                <label for="actividadNegocio" class="form-label">Actividad del Negocio:</label>
                                                <input type="text" class="form-control" id="actividadNegocio"
                                                    name="actividadNegocio">
                                            </div>
                                            <div class="mb-3">
                                                <label for="estado" class="form-label">Estado</label>
                                                <select class="form-select" name="estado" id="estado">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Ciudad de México</option>
                                                    <option value="2">Edo Mex</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="municipio" class="form-label">Municipio:</label>
                                                <select class="form-select" name="municipio" id="municipio">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">M1</option>
                                                    <option value="2">M2</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="cp" class="form-label">Código Postal:</label>
                                                <input type="text" class="form-control" id="cp" name="cp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="cp" class="form-label">Colonia:</label>
                                                <input type="text" class="form-control" id="col" name="col">
                                            </div>
                                            <div class="mb-3">
                                                <label for="calle" class="form-label">Calle:</label>
                                                <input type="text" class="form-control" id="calle" name="calle">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="calle" class="form-label">No. Exterior:</label>
                                                    <input type="text" class="form-control" id="exterior" name="exterior">
                                                </div>
                                                <div class="col">
                                                    <label for="calle" class="form-label">No. Interior:</label>
                                                    <input type="text" class="form-control" id="interior" name="interior">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tipoInmueble" class="form-label">Tipo Inmueble:</label>
                                                <select class="form-select" name="tipoInmueble" id="tipoInmueble">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Alto</option>
                                                    <option value="2">Medio</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mts" class="form-label">Número de Metros:</label>
                                                <input type="text" class="form-control" id="mts" name="mts">
                                            </div>
                                            <div class="mb-3">
                                                <label for="sumaAsegurada" class="form-label">Suma Asegurada:</label>
                                                <input type="text" class="form-control" id="sumaAsegurada" name="sumaAsegurada">
                                            </div>
                                            <div class="mb-3">
                                                <label for="seguridad" class="form-label">Seguridad:</label>
                                                <select class="form-select" name="seguridad" id="seguridad">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Proteccion perimetral</option>
                                                    <option value="2">Alarma Local</option>
                                                </select>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">

                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                        </div>
                                        <button type="button" class="btn btn-good" id="negocioConsulta">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							    <?php break; 
                                    case 5: ?>
                                    <form id="retiroform">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="1">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fecha" class="form-label">Fecha de Nacimiento:</label>
                                                <input type="text" class="form-control" id="fecha" name="fecha">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="genero" class="form-label">Genero:</label>
                                                    <select class="form-select" name="genero" id="genero">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Femenino</option>
                                                        <option value="2">Masculino</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="fuma" class="form-label">Fuma:</label>
                                                    <select class="form-select" name="fuma" id="fuma">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="nivelHospotalario" class="form-label">¿A qué edad planeas tú
                                                        retiro?</label>
                                                    <input type="text" class="form-control" id="edad" name="edad">
                                                </div>
                                                <div class="col">
                                                    <label for="cp" class="form-label">¿Con cuánto dinero quisieras
                                                        retirarte?</label>
                                                    <input type="text" class="form-control" id="cantidad" name="cantidad">
                                                </div>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">

                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                        </div>
                                        <button type="button" class="btn btn-good" id="consultretiro">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							    <?php break; 
                                    case 6: ?>
                                    <form id="vidaform">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="1">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fecha" class="form-label">Fecha de Nacimiento:</label>
                                                <input type="text" class="form-control" id="fecha" name="fecha">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="genero" class="form-label">Genero:</label>
                                                    <select class="form-select" name="genero" id="genero">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Femenino</option>
                                                        <option value="2">Masculino</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="fuma" class="form-label">Fuma:</label>
                                                    <select class="form-select" name="fuma" id="fuma">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nivelHospotalario" class="form-label">Producto deseado:</label>
                                                <select class="form-select" name="productdeseado" id="productdeseado">
                                                    <option value="" selected disabled></option>
                                                    <option value="1">Proteccion</option>
                                                    <option value="2">Proteccion y ahorro</option>
                                                    <option value="3">Educacion</option>
                                                </select>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="cp" class="form-label">Suma asegurada deseada:</label>
                                                    <input type="text" class="form-control" id="montoAsegurado"
                                                        name="montoAsegurado">
                                                </div>
                                                <div class="col">
                                                    <label for="cobertura" class="form-label">Moneda:</label>
                                                    <select class="form-select" name="moneda" id="moneda"
                                                        aria-label="Floating label select cobertura">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Pesos</option>
                                                        <option value="2">Dolares</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>

                                        </div>
                                        <button type="button" class="btn btn-good" id="consultarvida">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							    <?php break; 
                                    case 7: ?>
                                    <form id="homoclaveform">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="ts" name="ts" value="1">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Completo:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fecha" class="form-label">Fecha de Nacimiento:</label>
                                                <input type="text" class="form-control" id="fecha" name="fecha">
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="genero" class="form-label">Genero:</label>
                                                    <select class="form-select" name="genero" id="genero">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Femenino</option>
                                                        <option value="2">Masculino</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="fuma" class="form-label">Fuma:</label>
                                                    <select class="form-select" name="fuma" id="fuma">
                                                        <option value="" selected disabled></option>
                                                        <option value="1">Si</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <legend>Datos de Contacto: </legend>
                                            <div class="mb-3">
                                                <label for="contacto" class="form-label">Número Telefonico:</label>
                                                <input type="text" class="form-control" id="contacto" name="contacto">
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Eléctronico:</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-good" id="consultarhomoclave">Consultar</button>
                                        <button type="reset" class="btn btn-nel" id="Cancelar">Cancelar</button>
                                    </form>
							<?php } //en switch
                            ?>
						</div>
						<!--End divFrom-->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>TRATAMIENTO DE DATOS PERSONALES. <small>Lea cuidadosamente las siguientes indicaciones</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">

		<p><span>El postulante afirma su consentimiento y autoriza el uso de datos personales expuesto en la plataforma para fines de postulación con la organización dentro del marco de Ley de Protección de datos personales 29733. Este registro se deriva al área de Gestión del Talento y se conservará posterior a la postulación.</span></p>
		<p><span>El tratamiento de datos personales de EL CANDIDATO será realizado por la UNIVERSIDAD en el marco de la Ley de Protección de Datos Personales, Ley Nº 29733. En este sentido, la UNIVERSIDAD al ser titular del banco de datos personales puede ser relevada de la obligación de confidencialidad cuando medie consentimiento previo, informado, expreso e inequívoco del titular de los datos personales, resolución judicial consentida o ejecutoriada, o cuando medien razones fundadas relativas a la defensa nacional, seguridad pública o la sanidad pública, sin perjuicio del derecho a guardar el secreto profesional.</span></p>
		<p><span>Certifico que la información proporcionada en esta plataforma es correcta y que no he ocultado intencionalmente ningún dato . Autorizo a la universidad a verificar los datos que estime necesarios y me someto a las sanciones en caso la información proporcionada fuera falsa</span></p>	

	</div>
</div>

<!-- checkbox-->
<div class="form-group row">
	<div class="col-lg-12">
		<div class="kt-checkbox-list">
			<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
				<input type="checkbox" id="aceptoTerminos" name="aceptoTerminos"> <strong>RECONOZCO HABER LEÍDO Y ACEPTADO LOS TÉRMINOS Y CONDICIONES DE LA CONVOCATORIA.</strong>
				<span></span>
			</label>
		</div>
	</div>
</div>



<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>¿HAS TRABAJADO ANTES EN LA UAP? <small>Marca la opción según sea el caso</small></h4>
	</div>
</div>


<div class="form-group row">

	<form id="form_registro" style="width: 100%;">

		<div class="col-lg-12">
			<label class="kt-option">
				<span class="kt-option__control ">
					<span class="kt-radio kt-radio--solid kt-radio--brand kt-radio--check-bold">
						<input type="radio" name="tienePeriodoEjercido" value="1">
						<span></span>
					</span>
				</span>
				<span class="kt-option__label">
					<span class="kt-option__head">
						<span class="kt-option__title">
							<strong>He ejercido docencia en la UAP en el periodo 2018</strong>
						</span>
						<span class="kt-option__focus">
							<strong>(Opción 1)</strong>
						</span>
					</span>
					<span class="kt-option__body">

						<p>Se le pedirá su codigo de docente de la UAP, en el caso que haya tenido varios periodos de docencia, ingrese el codigo más actual.</p>


						<div class="row" id="campos_si_ejercio" style="display: none;">

							<div class="col-lg-6">
								<div class="input-group">
									<div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope
										"></i></span></div>
										<input id="docCodigoDocente" name="docCodigoDocente" type="text" class="form-control" placeholder="Ingrese su codigo de docente" title="Ingrese su codigo de docente" data-dbtable="docentes">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="la la-lock"></i></span></div>
										<input id="docClaveDocente" name="docClaveDocente" type="password" class="form-control" placeholder="Ingrese una clave" title="Ingrese una clave para registrarse" data-dbtable="docentes">
									</div>
								</div>


								<div class="col-lg-6" style="margin-top: 20px;">
									<button id="registrarDocente" type="submit" class="btn btn-brand">Iniciar registro</button>
									<a href="<?php echo site_url('iniciar-sesion'); ?>" class="btn btn-outline-hover-dark">¿Tiene una cuenta? Inicie sesión</a>
								</div>

							</div>



						</span>
					</span>
				</label>
			</div>

			<div class="col-lg-12">
				<label class="kt-option">
					<span class="kt-option__control">
						<span class="kt-radio kt-radio--solid kt-radio--brand kt-radio--check-bold">
							<input checked="" type="radio" name="tienePeriodoEjercido" value="0">
							<span></span>
						</span>
					</span>
					<span class="kt-option__label">
						<span class="kt-option__head">
							<span class="kt-option__title">
								<strong>No he ejercido docencia en la UAP anteriormente</strong>
							</span>
							<span class="kt-option__focus">
								<strong>(Opción 2)</strong>
							</span>
						</span>
						<span class="kt-option__body">
							<p>Marque esta opcion si es la primera vez que va a postular a alguna convocatoria de la UAP.</p>



							<div class="row"  id="campos_no_ejercio">

								<div class="col-lg-6">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope
											"></i></span></div>
											<input id="docEmailNuevo" name="docEmailNuevo" type="text" class="form-control" placeholder="Ingrese un correo electrónico" title="Correo electrónico obligatorio" title="Ingrese un correo electrónico para registrarse" data-dbtable="docentes">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="input-group">
											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-lock"></i></span></div>
											<input id="docClaveNuevo" name="docClaveNuevo" type="password" class="form-control" placeholder="Ingrese una clave" title="Ingrese una clave para registrarse" data-dbtable="docentes">
										</div>
									</div>

									<div class="col-lg-6" style="margin-top: 20px;">
										<button id="registrarNuevo" type="submit" class="btn btn-brand">Iniciar registro</button>
										<a href="<?php echo site_url('iniciar-sesion'); ?>" class="btn btn-outline-hover-dark">¿Tiene una cuenta? Inicie sesión</a>
									</div>
								</div>


							</span>
						</span>
					</label>
				</div>

			</form>

		</div>




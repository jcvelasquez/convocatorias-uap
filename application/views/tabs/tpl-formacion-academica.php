
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>PDF REGISTRO EN SUNEDU <small style="color: red;">(ATENCIÓN: Si no cuenta con dicho archivo, no podrá continuar con el registro)</small></h4>
	</div>
</div>


<div class="form-group row">

	<div class="col-lg-12">

		<!-- inicio dropzone -->
		<div class="kt-dropzone dropzone m-dropzone--success" action="inc/api/dropzone/upload.php" id="m-dropzone-three">
			<div class="kt-dropzone__msg dz-message needsclick">
				<h3 class="kt-dropzone__msg-title">Arrastre los archivos hasta aquí o haga clic para subir archivos.</h3>
				<span class="kt-dropzone__msg-desc">Solo imágenes, pdfs y documentos word estan permitidos</span>
			</div>
		</div>
		<!-- fin de dropzone -->
		
	</div>

</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>MARCAR SEGÚN CORRESPONDA. <small>En el caso de que sean verdaderas</small></h4>
	</div>
</div>


<div class="form-group row">
	
	<div class="col-lg-6">
		<label class="kt-option">
			<span class="kt-option__control ">
				<span class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">

					<?php 

						$tieneGradoMaestro = $docente['tieneGradoMaestro']; 

						if(isset($tieneGradoMaestro)){ 

							if($tieneGradoMaestro == 1){
								echo '<input type="checkbox" name="tieneGradoMaestro" id="tieneGradoMaestro" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" checked title="Marque la opción de grado maestro">';
							}else{
								echo '<input type="checkbox" name="tieneGradoMaestro" id="tieneGradoMaestro" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" title="Marque la opción de grado maestro">';
							}

						}else{ 

							echo '<input type="checkbox" name="tieneGradoMaestro" id="tieneGradoMaestro" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" title="Marque la opción de grado maestro">';

						} 

					?>
					
					<span></span>
						
				</span>
			</span>
			<span class="kt-option__label">
				<span class="kt-option__head">
					<span class="kt-option__title">
						Cuento con un grado de maestro
					</span>
					<span class="kt-option__focus">
						(NO excluyente)
					</span>
				</span>
				<span class="kt-option__body">

				</span>
			</span>
		</label>
	</div>

	<div class="col-lg-6">
		<label class="kt-option">
			<span class="kt-option__control">
				<span class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
					<?php 
						$tieneSegEspecialidad = $docente['tieneSegEspecialidad']; 

						if(isset($tieneSegEspecialidad)){ 
							if($tieneSegEspecialidad == 1){
								echo '<input type="checkbox" name="tieneSegEspecialidad" id="tieneSegEspecialidad" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" checked>';
							}else{
								echo '<input type="checkbox" name="tieneSegEspecialidad" id="tieneSegEspecialidad" data-dbtable="indicadores" data-dbpk="indicadorId" value="1">';
							}
						}else{ 
							echo '<input type="checkbox" name="tieneSegEspecialidad" id="tieneSegEspecialidad" data-dbtable="indicadores" data-dbpk="indicadorId" value="1">';
						} 

					?>
					<span></span>
				</span>
			</span>
			<span class="kt-option__label">
				<span class="kt-option__head">
					<span class="kt-option__title">
						Cuento con segunda especialidad
					</span>
					<span class="kt-option__focus">
						(NO excluyente)
					</span>
				</span>
				<span class="kt-option__body">

				</span>
			</span>
		</label>
	</div>

</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>GRADOS ACADEMICOS <small class="kt-hidden">Puede agregar cuantos requiera.</small></h4>
	</div>
</div>


<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_grados">
			<thead>
				<tr>
					<th width="80">ID</th>
					<th>Grado Académico</th>
					<th>Especialidad</th>
					<th>Institucion</th>
					<th width="70">Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

		<!-- repeater -->
		<div id="kt_repeater_grados">
			
					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<select name="gradAcademico" id="gradAcademico" class="form-control">
									<option value="">Seleccione grado académico</option>	
									<option value="Bachiller">Bachiller</option>
									<option value="Magister">Magíster</option>
									<option value="Doctor">Doctor</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="gradEspecialidad" id="gradEspecialidad" class="form-control" placeholder="Especialidad">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="gradInstitucion" id="gradInstitucion" class="form-control" placeholder="Institucion">
							</div>
						</div>

					</div>

			<button id="grabarGrados" class="btn btn btn-primary">
					<i class="la la-plus"></i>
					<span>Agregar y grabar Grados</span>
			</button>
			
		</div>
		<!-- fin repeater -->
	</div>
</div>



<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>EXPERIENCIA EN DOCENCIA UNIVERSITARIA <small class="kt-hidden">Puede agregar cuantos requiera.</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_experiencia_docencia">
			<thead>
				<tr>
					<th width="80">ID</th>
					<th>Institución</th>
					<th>Cargo</th>
					<th>Tipo de contrato</th>
					<th>Fecha de Inicio</th>
					<th>Fecha de Fin</th>
					<th>Actualidad</th>
					<th width="70">Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->


		<div id="kt_repeater_experiencia">
<!-- 			<div data-repeater-list="">
				<div data-repeater-item=""> -->
					<div class="row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<input type="text" name="expDocInstitucion" class="form-control form-control-danger" placeholder="Institución">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control" name="cargoDocencia">
									<option value="">Seleccione un cargo</option>
									<option value="Docente_universitario">Docente universitario</option>
									<option value="Facilitador">Facilitador</option>
									<option value="Conferencista">Conferencista</option>
									<option value="Otros">Otros</option>
								</select>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control" name="tipoConDocencia"> 
									<option value="">Seleccione el tipo de contrato</option>
									<option value="Tiempo_Completo">Tiempo Completo</option>
									<option value="Tiempo_Parcial">Tiempo Parcial</option>
									<option value="Ordinario_Principal">Ordinario Principal</option>
									<option value="Ordinario_Asociado">Ordinario Asociado</option>
									<option value="Ordinario_Auxiliar">Ordinario Auxiliar</option>
									<option value="Otros">Otros</option>
								</select>
							</div>
						</div>
						<!-- <div class="col-lg-1">
							<a href="javascript:;" data-repeater-delete="" class="btn btn-remover  btn-danger btn-icon">
								<i class="la la-remove"></i>
							</a>
						</div> -->
					</div>
					<div class="row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger form-date" placeholder="Fecha Inicio" name="expDocFecInicio">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input name="expDocFecFin" type="text" class="form-control form-control-danger form-date" placeholder="Fecha Fin">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="kt-checkbox-inline">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
									<input type="checkbox" name="expDocHastaActual"> Hasta la Actualidad 
									<span></span>
								</label>
							</div>
						</div>

					</div>	

		<!-- 		</div>

			</div>
 -->
			<div data-repeater-create="" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Agregar más Experiencia</span>
				</span>
			</div>
			
		</div> 

	</div>
</div>


<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>EXPERIENCIA PROFESIONAL DE ESPECIALIZACIÓN <small></small></h4>
	</div>
</div>


<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped table-hover table-checkable" id="table_experiencia_profesional">
			<thead>
				<tr>
					<th width="80">ID</th>
					<th>Institución</th>
					<th>Tipo de Institución</th>
					<th>Cargo desempeñado</th>
					<th>Fecha de Inicio</th>
					<th>Fecha de Fin</th>
					<th>Actualidad</th>
					<th width="70">Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

		<div id="kt_repeater_especializacion">
			<!-- <div data-repeater-list="">
				<div data-repeater-item=""> -->
					<div class="row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger" placeholder="Institución" name="especInstitucion">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control" name="especTipoInstitucion">
									<option value="">Seleccione un tipo de institución</option>
									<option value="Pública">Pública</option>
									<option value="Privada">Privada</option>
									<option value="ONG">ONG</option>
									<option value="Religiosa">Religiosa</option>
									<option value="Otra">Otra</option>
								</select>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control" name="especCargo">
									<option value="">Seleccione cargo desempeñado</option>
									<option value="Director_Gerentes_de_area_o_equivalente">Director / Gerentes de área o equivalente</option>
									<option value="Jefe_de_area,proyecto_o_equivalente">Jefe de Área, Proyecto o Equivalente</option>
									<option value="Coordinador_supervisor">Coordinador / Supervisor</option>
									<option value="Analistas">Analistas</option>
									<option value="Otros">Otros</option>
								</select>

							</div>
						</div>
						<!-- <div class="col-lg-1">
							<a href="javascript:;" data-repeater-delete="" class="btn btn-remover btn-danger btn-icon">
								<i class="la la-remove"></i>
							</a>
						</div> -->
					</div>

					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger form-date" placeholder="Fecha Inicio" name="especFecInicio">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="especFecFin" class="form-control form-date form-control-danger" placeholder="Fecha Fin">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="kt-checkbox-inline">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
									<input type="checkbox" name="especHastaFecha"> Hasta la Actualidad 
									<span></span>
								</label>
							</div>
						</div>

					</div>	

		<!-- 		</div>

			</div>
 -->
			<div data-repeater-create="" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Agregar más Experiencia</span>
				</span>
			</div>
			
		</div>

	</div>

</div>
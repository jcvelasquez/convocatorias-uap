
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>PDF REGISTRO EN SUNEDU <small style="color: red;">(ATENCIÓN: Si no cuenta con dicho archivo, no podrá continuar con el registro)</small></h4>
	</div>
</div>


<div class="form-group row">

	<div class="col-lg-12">

		<!-- inicio dropzone -->
		<div id="archivoPdfSunedu" class="dropConvocatorias" data-count="1">
			<div class="kt-dropzone__msg dz-message needsclick">
				<h3 class="kt-dropzone__msg-title">Arrastre un (1) archivo PDF hasta aquí o haga clic para subir uno.</h3>
				<span class="kt-dropzone__msg-desc">Solo los archivos PDFs están permitidos. Máximo 5Mb</span>
			</div>
		</div>
		<!-- inicio dropzone -->
		
	</div>

</div>

<?php /*

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
								echo '<input type="checkbox" data-autosave="true" name="tieneGradoMaestro" id="tieneGradoMaestro" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" checked title="Marque la opción de grado maestro">';
							}else{
								echo '<input type="checkbox" data-autosave="true" name="tieneGradoMaestro" id="tieneGradoMaestro" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" title="Marque la opción de grado maestro">';
							}

						}else{ 

							echo '<input type="checkbox" data-autosave="true" name="tieneGradoMaestro" id="tieneGradoMaestro" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" title="Marque la opción de grado maestro">';

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
						<!--(NO excluyente)-->
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
								echo '<input type="checkbox" data-autosave="true" name="tieneSegEspecialidad" id="tieneSegEspecialidad" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" checked>';
							}else{
								echo '<input type="checkbox" data-autosave="true" name="tieneSegEspecialidad" id="tieneSegEspecialidad" data-dbtable="indicadores" data-dbpk="indicadorId" value="1">';
							}
						}else{ 
							echo '<input type="checkbox" data-autosave="true" name="tieneSegEspecialidad" id="tieneSegEspecialidad" data-dbtable="indicadores" data-dbpk="indicadorId" value="1">';
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
						<!--(NO excluyente)-->
					</span>
				</span>
				<span class="kt-option__body">

				</span>
			</span>
		</label>
	</div>

</div>

*/ ?>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>TITULOS PROFESIONALES <small class="kt-hidden">Puede agregar cuantos requiera.</small></h4>
	</div>
</div>


<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped table-hover table-checkable" id="table_grados">
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
						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<select name="gradAcademico" id="gradAcademico" data-autosave="false" class="form-control">
									<option value="">Seleccione grado académico</option>	
									<option value="Bachiller">Bachiller</option>
									<option value="Magister">Magíster</option>
									<option value="Doctor">Doctor</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="gradEspecialidad" data-autosave="false" id="gradEspecialidad" class="form-control" placeholder="Mención titulo">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="gradInstitucion" data-autosave="false" id="gradInstitucion" class="form-control" placeholder="Universidad">
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="gradFecha" data-autosave="false" id="gradFecha" class="form-control form-date" placeholder="dd/mm/aaaa (Obtención titulo)">
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
		<table class="table table-striped table-hover table-checkable" id="table_experiencia_docencia">
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

					<div class="row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<input type="text" name="expDocInstitucion" id="expDocInstitucion" data-autosave="false" class="form-control form-control-danger" placeholder="Institución">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control" name="cargoDocencia" id="cargoDocencia" data-autosave="false">
									<option value="">Seleccione un cargo</option>
									<option value="Rector">Rector</option>
									<option value="Vicerrector">Vicerrector</option>
									<option value="Decano_de_Facultad">Decano de Facultad</option>
									<option value="Director_de_Escuela">Director de Escuela</option>
									<option value="Coordinador_Académico">Coordinador Académico</option>
									<option value="Director_Académico">Director Académico</option>
									<option value="Director_de_Investigación">Director de Investigación</option>
									<option value="Vicerrector_de_Investigación">Vicerrector de Investigación</option>
								</select>
							</div>
						</div>

						

					</div>
					<div class="row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger form-date" placeholder="dd/mm/aaaa (Fecha de Inicio)" name="expDocFecInicio" id="expDocFecInicio" data-autosave="false">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input name="expDocFecFin" id="expDocFecFin" type="text" class="form-control form-control-danger form-date" placeholder="dd/mm/aaaa (Fecha de Fin)" data-autosave="false">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="kt-checkbox-inline">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
									<input type="checkbox" name="expDocHastaActual" id="expDocHastaActual" value="1" data-autosave="false"> Hasta la Actualidad 
									<span></span>
								</label>
							</div>
						</div>

					</div>	


			<button id="grabarExperienciaDocencia" class="btn btn btn-primary">
					<i class="la la-plus"></i>
					<span>Agregar y grabar Experiencia</span>
			</button>
			
		</div> 

	</div>
</div>


<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>EXPERIENCIA PROFESIONAL DE EN DOCENCIA <small></small></h4>
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

					<div class="row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-phone"></i>
									</span>
								</div>
								<input type="text" data-autosave="false" class="form-control form-control-danger" placeholder="Institución" name="especInstitucion" id="especInstitucion">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control" data-autosave="false" name="especTipoInstitucion" id="especTipoInstitucion">
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
								<select class="form-control" data-autosave="false" name="especCargo" id="especCargo">
									<option value="">Seleccione cargo desempeñado</option>
									<option value="Director Gerentes de area o equivalente">Director / Gerentes de área o equivalente</option>
									<option value="Jefe de area, proyecto oequivalente">Jefe de Área, Proyecto o Equivalente</option>
									<option value="Coordinador supervisor">Coordinador / Supervisor</option>
									<option value="Analistas">Analistas</option>
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
								<select class="form-control" name="tipoConDocencia" id="tipoConDocencia" data-autosave="false"> 
									<option value="">Seleccione dedicacion docente</option>
									<option value="Tiempo Completo">Docente Ordinario Principal</option>
									<option value="Tiempo Completo">Docente Ordinario Asociado</option>
									<option value="Tiempo Completo">Docente Ordinario Auxiliar</option>
									
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
								<select class="form-control" name="tipoConDocencia" id="tipoConDocencia" data-autosave="false"> 
									<option value="">Seleccione categoria docente</option>
									<option value="Tiempo Completo">Docente Ordinario Principal</option>
									<option value="Tiempo Completo">Docente Ordinario Asociado</option>
									<option value="Tiempo Completo">Docente Ordinario Auxiliar</option>
									<option value="Tiempo Completo">Docente Contratado </option>
									<option value="Tiempo Completo">Docente Extraordinario Emeritos </option>
									<option value="Tiempo Completo">Docente Extraordinario Honorarios </option>
									<option value="Tiempo Completo">Docente Extraordinario Visitantes</option>
									
									
								</select>
							</div>
						</div>
						
					</div>

					<div class="row">
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger form-date" data-autosave="false" placeholder="dd/mm/aaaa (Fecha de Inicio)" name="especFecInicio" id="especFecInicio">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="especFecFin" data-autosave="false" id="especFecFin" class="form-control form-date form-control-danger" placeholder="dd/mm/aaaa (Fecha de Fin)">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="kt-checkbox-inline">
								<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
									<input type="checkbox" name="especHastaFecha" data-autosave="false" id="especHastaFecha" value="1"> Hasta la Actualidad 
									<span></span>
								</label>
							</div>
						</div>

					</div>	


			<button id="grabarExperienciaProfesional" class="btn btn btn-primary">
					<i class="la la-plus"></i>
					<span>Agregar y grabar Experiencia</span>
			</button>
			
		</div>

	</div>

</div>
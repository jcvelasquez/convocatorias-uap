<div class="alert alert-success kt-hide" role="alert">
	<strong>Well done!</strong> You successfully read this important alert message.
</div>

<div class="alert alert-danger kt-hide" role="alert">
	<strong>Well done!</strong> You successfully read this important alert message.
</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>IDIOMAS <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>


<div class="form-group row">
	<div class="col-lg-12">


		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_idiomas">
			<thead>
				<tr>
					<th width="70">ID</th>
					<th>Centro de estudios</th>
					<th>Idioma</th>
					<th>Nivel</th>
					<th>Certificado el</th>
					<th>Archivo</th>
					<th>Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->


		<!-- inicio repeater -->
		<div id="kt_repeater_idiomas">

					<div class="row">

						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input id="idioCentroEstudios" name="idioCentroEstudios" type="text" class="form-control form-control-danger" placeholder="Centro de estudios">
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" title="idioma" id="idioNombre" name="idioNombre" data-style="btn-primary">
									<option value="">Seleccione el idioma</option>
									<option value="Inglés">Inglés</option>
									<option value="Francés">Francés</option>
									<option value="Italiano">Italiano</option>
									<option value="Italiano">Portugués</option>
									<option value="Otros">Otros</option>
								</select>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select id="idioNivel" name="idioNivel" class="form-control kt-selectpicker" title="Nivel" data-style="btn-primary">
									<option value="">Seleccione el nivel</option>
									<option value="Basico">Básico</option>
									<option value="Intermedio">Intermedio</option>
									<option value="Avanzado">Avanzado</option>
								</select>
							</div>
						</div>

					</div>


					<div class="row kt-hide" id="otrosIdiomas">

						<div class="col-lg-12">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="idioNombreOtro" id="idioNombreOtro" class="form-control form-control-danger" placeholder="Si seleccionó OTROS indique idioma">
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
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="idioRutaArchivoCertificacion" name="idioRutaArchivoCertificacion">
									<label class="custom-file-label" for="customFile">Adjuntar certificación</label>
								</div>
							</div>
						</div>


						<div class="col-lg-3">
							<div class="input-group date">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
								<input type="text" class="form-control form-date" placeholder="dd/mm/aaaa (Certificación)" id="idioFechaCertificacion" name="idioFechaCertificacion" />
							</div>
						</div>

					</div>

<!-- 

				</div>
			</div> -->
			<button class="btn btn btn-primary" id="grabarIdiomas">
					<i class="la la-plus"></i>
					<span>Agregar y grabar idioma</span>
			</button>
		</div>
		<!-- fin de repeater -->
	</div>
</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>HERRAMIENTAS INFORMATICAS <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_herramientas">
			<thead>
				<tr>
					<th width="70">ID</th>
					<th>Especialidad o curso</th>
					<th>Centro de estudios</th>
					<th>Nivel</th>
					<th>Certificado el</th>
					<th>Archivo</th>
					<th>Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

		<!-- inicio repeater -->
		<div id="kt_repeater_herramientas">
			<!-- <div data-repeater-list="">
				<div data-repeater-item="">
 -->
					<div class="row">

						<div class="col-lg-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" name="inforEspecialidadCurso" id="inforEspecialidadCurso" class="form-control form-control-danger" placeholder="Especialidad o curso">
							</div>
						</div>

					
						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" id="inforNivel" name="inforNivel" title="Nivel" data-style="btn-primary">
									<option value="">Seleccione un nivel</opion>
									<option value="Básico">Básico</option>
									<option value="Intermedio">Intermedio</option>
									<option value="Avanzado">Avanzado</option>
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
								<input type="text" id="inforCentroEstudio" name="inforCentroEstudio" class="form-control form-control-danger" placeholder="Centro de estudios">
							</div>
						</div>


					</div>


					<div class="row">

						<div class="col-lg-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="inforRutaArchivoCertificacion" id="inforRutaArchivoCertificacion">
									<label class="custom-file-label" for="customFile">Adjuntar certificación</label>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group date">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
								<input type="text" class="form-control form-date" name="inforFechaCertificacion"  placeholder="Fecha de certificación" id="inforFechaCertificacion" />
							</div>
						</div>

					</div>


<!-- 
				</div>
			</div>
			 -->
			<button id="btnGrabarHerramientas" class="btn btn btn-primary">
					<i class="la la-plus"></i>
					<span>Agregar y grabar herramienta</span>
			</button>
		</div>
		<!-- fin de repeater -->
	</div>
</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>¿TIENES EXPERIENCIA EN ESTAS HERRAMIENTAS? <small >Puedes marcar mas de una</small></h4>
	</div>
</div>


<div class="form-group row">
	<div class="col-lg-12">
		<div class="kt-checkbox-inline">
			<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
				<?php 

					$tieneExpOffice = $docente['tieneExpOffice']; 

					if(isset($tieneExpOffice)){ 
						if($tieneExpOffice == 1){
							echo '<input type="checkbox" id="tieneExpOffice" name="tieneExpOffice" data-dbtable="indicadores" value="1" data-dbpk="indicadorId" checked> Microsoft Office';
						}else{
							echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpOffice" name="tieneExpOffice" value="1" data-dbtable="indicadores"> Microsoft Office';
						}
					}else{ 
						echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpOffice" name="tieneExpOffice" value="1" data-dbtable="indicadores"> Microsoft Office';
					} 
				?>
				<span></span>
			</label>
			<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
				<?php 

					$tieneExpOfficeSuite = $docente['tieneExpOfficeSuite']; 

					if(isset($tieneExpOfficeSuite)){ 
						if($tieneExpOfficeSuite == 1){
							echo '<input type="checkbox" id="tieneExpOfficeSuite" name="tieneExpOfficeSuite" data-dbtable="indicadores" data-dbpk="indicadorId" value="1" checked> Microsoft Office 365';
						}else{
							echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpOfficeSuite" name="tieneExpOfficeSuite" data-dbtable="indicadores" value="1"> Microsoft Office 365';
						}
					}else{ 
						echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpOfficeSuite" name="tieneExpOfficeSuite" data-dbtable="indicadores" value="1"> Microsoft Office 365';
					} 
				?>
				<span></span>
			</label>
			<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand">
				<?php 

					$tieneExpBlackboard = $docente['tieneExpBlackboard']; 

					if(isset($tieneExpBlackboard)){ 
						if($tieneExpBlackboard == 1){
							echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpBlackboard" name="tieneExpBlackboard" data-dbtable="indicadores" checked value="1"> Blackboard Learn';
						}else{
							echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpBlackboard" name="tieneExpBlackboard" data-dbtable="indicadores" value="1"> Blackboard Learn';
						}
					}else{ 

						echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneExpBlackboard" name="tieneExpBlackboard" data-dbtable="indicadores" value="1"> Blackboard Learn';
					} 
				?>
				<span></span>
			</label>
		</div>
	</div>
</div>



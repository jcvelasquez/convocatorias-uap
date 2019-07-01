<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>INVESTIGACION Y PRODUCCION INTELECTUAL <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>


<div class="form-group row">
	<div class="col-lg-12">
		
		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_investigaciones">
			<thead>
				<tr>
					<th width="70">ID</th>
					<th>Título de investigación</th>
					<th>Tipo de investigación</th>
					<th>Publicado el</th>
					<th># ORCID</th>
					<th>Archivo</th>
					<th>Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

		<!-- inicio repeater -->
		<div id="kt_repeater_investigacion">

					<div class="row">

						<div class="col-lg-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" data-autosave="false" class="form-control form-control-danger" id="invesTitulo" name="invesTitulo" placeholder="Titulo de la investigación">
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" data-autosave="false" id="invesTipoPublicacion" name="invesTipoPublicacion" title="Tipo de Investigacion" data-style="btn-primary">
									<option value="">Seleccione tipo</option>
									<option value="Dos">Dos</option>
									<option value="Tres">Tres</option>
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
								<input type="text" class="form-control" data-autosave="false" id="invesNroOrcid" name="invesNroOrcid" placeholder="Código ORCID">
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
									<input type="file" class="custom-file-input" data-autosave="false" id="invesRutaArchivoInvestigacion" name="invesRutaArchivoInvestigacion">
									<label class="custom-file-label" for="invesRutaArchivoInvestigacion">Adjuntar documento sustento</label>
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
								<input type="text" data-autosave="false"class="form-control form-date" placeholder="dd/mm/aaaa (Publicación)" id="invesFecha" name="invesFecha" />
							</div>
						</div>

			</div>
			<button id="btnGrabarInvestigaciones" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Agregar y grabar investigacion</span>
				</span>
			</button>
		</div>
		<!-- fin de repeater -->
	</div>
</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>ASESORIA, DIRECCION Y JURADO DE TRABAJOS DE INVESTIGACIÓN <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_asesorias">
			<thead>
				<tr>
					<th width="70">ID</th>
					<th>Nombre de tesis</th>
					<th>Tipo de tesis</th>
					<th>Nivel</th>
					<th># RESOLUCION</th>
					<th>Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

		<!-- inicio repeater -->
		<div id="kt_repeater_asesoria">

					<div class="row">

						<div class="col-lg-12">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" data-autosave="false" name="tesNombreTesis" id="tesNombreTesis" class="form-control " placeholder="Nombre de la tesis">
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
								<select class="form-control kt-selectpicker" data-autosave="false" id="tesTipo" name="tesTipo" title="Tipo" data-style="btn-primary">
									<option value="">Seleccione tipo</option>
									<option value="Asesoría">Asesoría</option>
									<option value="Dirección">Dirección</option>
									<option value="Jurado">Jurado</option>
									<option value="Revisor">Revisor</option>
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
								<select class="form-control kt-selectpicker" data-autosave="false" id="tesNivel" name="tesNivel" title="Nivel" data-style="btn-primary">
									<option value="">Seleccione un nivel</option>
									<option value="Dos">Dos</option>
									<option value="Tres">Tres</option>
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
								<input type="text" id="tesNroResolucion" data-autosave="false" name="tesNroResolucion" class="form-control form-control-danger" placeholder="Nº Resolución">
							</div>
						</div>

					</div>

			<div id="btnGrabarAsesorias" class="btn btn btn-primary">
					<i class="la la-plus"></i>
					<span>Agregar y grabar asesoría</span>
			</div>
		</div>
		<!-- fin de repeater -->
	</div>
</div>

<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>MARCA Y COMPLETA LOS REGISTROS <small>si cuentas con los siguientos enlaces</small> </h4>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<div class="input-group">
			<?php /* ?>
			<div class="input-group-prepend">
				<span class="input-group-text">
					<label class="kt-checkbox kt-checkbox--single">
						<?php 

							$tieneRegistroDina = $docente['tieneRegistroDina']; 

							if(isset($tieneRegistroDina)){ 
								if($tieneRegistroDina == 1){
									echo '<input type="checkbox" id="tieneRegistroDina" name="tieneRegistroDina" data-dbtable="indicadores" data-autosave="true" value="1" data-dbpk="indicadorId" checked>';
								}else{
									echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneRegistroDina" name="tieneRegistroDina" data-autosave="true" value="1" data-dbtable="indicadores">';
								}
							}else{ 
								echo '<input type="checkbox" data-dbpk="indicadorId" id="tieneRegistroDina" name="tieneRegistroDina" data-autosave="true" value="1" data-dbtable="indicadores">';
							} 
						?>
						<span></span>
					</label>
				</span>
			</div>
			<?php */ ?>
			<div class="input-group-prepend">
				<span class="input-group-text">
					<i class="la la-envelope"></i>
				</span>
			</div>
			<input type="text" data-autosave="true" class="form-control" placeholder="Si cuentas con un enlace de registro DINA" id="registroDina" title="Ingrese un registro DINA si marco la opción"  name="registroDina" data-dbtable="adicionales" data-dbpk="adicionalId" value="<?php echo $docente['registroDina']; ?>" >
		</div>
	</div>
</div>

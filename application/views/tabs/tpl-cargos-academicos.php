
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>CARGOS ACADÉMICOS <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped table-hover table-checkable" id="table_cargos">
			<thead>
				<tr>
					<th width="80">ID</th>
					<th>Institución</th>
					<th>Cargo Área académica</th>
					<th>Fecha de Inicio</th>
					<th>Fecha de Fin</th>
					<th>Actualidad</th>
					<th width="70">Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

	</div>
</div>


<div id="kt_repeater_cargos">	

		<div class="row">	
			<div class="col-lg-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-phone"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control form-control-danger" placeholder="Nombre de la Institucion" name="carAcadNomInstitucion" id="carAcadNomInstitucion">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-envelope"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control form-control-danger" placeholder="Cargo del area academica" id="carAcadArea" name="carAcadArea">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3">

				<div class="input-group date">

					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-calendar-check-o"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control form-date" placeholder="dd/mm/aaaa (Inicio)" id="carAcadFecInicio" name="carAcadFecInicio" />
				</div>

			</div>
			<div class="col-lg-3">

				<div class="input-group date">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-calendar-check-o"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control form-date" placeholder="dd/mm/aaaa (Fin)" id="carAcadFecFin" name="carAcadFecFin" />
				</div>
			</div>

			<div class="col-lg-6">
				<div class="kt-checkbox-inline">
					<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
						<input type="checkbox" data-autosave="false" name="carAcadeHastaFecha" id="carAcadeHastaFecha" value="1"> Hasta la Actualidad 
						<span></span>
					</label>
				</div>
			</div>

		</div>

	<button class="btn btn btn-primary" id="btnGrabarCargos">
		<i class="la la-plus"></i>
		<span>Agregar y grabar cargos</span>
	</button>

</div>



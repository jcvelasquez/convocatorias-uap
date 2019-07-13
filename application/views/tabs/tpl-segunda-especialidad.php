
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>SEGUNDA ESPECIALIDAD <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">

		<!--begin: Datatable -->
		<table class="table table-striped table-hover table-checkable" id="table_segunda_especialidad">
			<thead>
				<tr>
					<th width="80">ID</th>
					<th>Mencion especialidad</th>
					<th>Universidad</th>
					<th>Año especialidad</th>
					<th>Resolucion Residentado</th>
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
					<input type="text" data-autosave="false" class="form-control form-control-danger" placeholder="Mencion especialidad" name="carAcadNomInstitucion" id="carAcadNomInstitucion">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-envelope"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control form-control-danger" placeholder="Universidad" id="carAcadArea" name="carAcadArea">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">

				<div class="input-group date">

					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-calendar-check-o"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control form-date" placeholder="dd/mm/aaaa (Año)" id="carAcadFecInicio" name="carAcadFecInicio" />
				</div>

			</div>


			<div class="col-lg-6">

				<div class="input-group date">

					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-calendar-check-o"></i>
						</span>
					</div>
					<input type="text" data-autosave="false" class="form-control" placeholder="dd/mm/aaaa (Año)" id="carAcadFecInicio" name="Medicos y Odontologos Resolucion Residentado" />
				</div>

			</div>
			

			

		</div>

	<button class="btn btn btn-primary" id="btnGrabarCargos">
		<i class="la la-plus"></i>
		<span>Agregar y grabar especialidad</span>
	</button>

</div>



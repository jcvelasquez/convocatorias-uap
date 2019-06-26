
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>CARGOS ACADÉMICOS <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>

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

<div id="kt_repeater_cargos">	

<!-- 		
	<div data-repeater-list="">
		<div data-repeater-item="" >
		-->
		<div class="row">	
			<div class="col-lg-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-phone"></i>
						</span>
					</div>
					<input type="text" class="form-control form-control-danger" placeholder="Nombre de la Institucion" id="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="la la-envelope"></i>
						</span>
					</div>
					<input type="text" class="form-control form-control-danger" placeholder="Cargo del area academica">
				</div>
			</div>

				<!-- <div class="col-lg-1">
					<a href="javascript:;" data-repeater-delete="" class="btn btn-remover btn-danger btn-icon">
						<i class="la la-remove"></i>
					</a>
				</div> -->

			</div>

			<div class="row">
				<div class="col-lg-3">

					<div class="input-group date">

						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="la la-calendar-check-o"></i>
							</span>
						</div>
						<input type="text" class="form-control" readonly placeholder="Fecha inicio" id="kt_datepicker_2" />
					</div>

				</div>
				<div class="col-lg-3">

					<div class="input-group date">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="la la-calendar-check-o"></i>
							</span>
						</div>
						<input type="text" class="form-control" readonly placeholder="Fecha fin" id="kt_datepicker_2" />
					</div>
				</div>

				<div class="col-lg-6">
					<div class="kt-checkbox-inline">
						<label class="kt-checkbox kt-checkbox--solid kt-checkbox--brand kt-checkbox--check-bold">
							<input type="checkbox"> Hasta la Actualidad 
							<span></span>
						</label>
					</div>
				</div>

			</div>

	<!-- 	</div>
	</div> -->
	<div data-repeater-create="" class="btn btn btn-primary">
		<span>
			<i class="la la-plus"></i>
			<span>Agregar y grabar cargos</span>
		</span>
	</div>

</div>




<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>CARGOS ACADÉMICOS <small>With faded secondary text</small></h4>
	</div>
</div>

<div id="kt_repeater_cargos">	
	<div data-repeater-list="">
		<div data-repeater-item="" >

			<div class="form-group row">	
				<div class="col-lg-6">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="la la-phone"></i>
							</span>
						</div>
						<input type="text" class="form-control form-control-danger" placeholder="Nombre de la Institucion">
					</div>
				</div>
				<div class="col-lg-5">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="la la-envelope"></i>
							</span>
						</div>
						<input type="text" class="form-control form-control-danger" placeholder="Cargo del area academica">
					</div>
				</div>

				<div class="col-lg-1">
					<a href="javascript:;" data-repeater-delete="" class="btn btn-remover btn-danger btn-icon">
						<i class="la la-remove"></i>
					</a>
				</div>

			</div>

			<div class="form-group row">
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

		</div>
	</div>
	<div data-repeater-create="" class="btn btn btn-primary">
		<span>
			<i class="la la-plus"></i>
			<span>Añadir más cargos</span>
		</span>
	</div>

</div>



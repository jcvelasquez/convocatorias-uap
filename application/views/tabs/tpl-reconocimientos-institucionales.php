
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>RECONOCIMIENTOS EDUCATIVOS Y PROFESIONALES <small class="kt-hide">With faded secondary text</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">


		<!--begin: Datatable -->
		<table class="table table-striped- table-hover table-checkable" id="table_reconocimientos">
			<thead>
				<tr>
					<th width="70">ID</th>
					<th>Premio</th>
					<th>Institución</th>
					<th>Certificado el</th>
					<th>Archivo</th>
					<th width="70">Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->


		<!-- inicio repeater -->
		<div id="kt_repeater_reconocimientos">
			<!-- <div data-repeater-list="">
				<div data-repeater-item=""> -->

					<div class="row">

						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control" title="Premio" placeholder="Premio" />
									
							</div>
							
						</div>

						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger" placeholder="Institucion">
							</div>
						</div>
<!-- 
						<div class="col-lg-1">
							<a href="javascript:;" data-repeater-delete="" class="btn btn-remover btn-danger btn-icon">
								<i class="la la-remove"></i>
							</a>
						</div> -->

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
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Adjuntar certificación</label>
								</div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="input-group date">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
								<input type="text" class="form-control" readonly placeholder="Fecha de certificación" id="kt_datepicker_2" />
							</div>
						</div>

<!-- 
					</div>

				</div> -->
			</div>
			<div data-repeater-create="" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Agregar y grabar reconocimiento</span>
				</span>
			</div>
		</div>
		<!-- fin de repeater -->
	</div>
</div>
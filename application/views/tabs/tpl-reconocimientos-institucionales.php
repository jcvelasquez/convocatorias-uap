
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
					<th>Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->


		<!-- inicio repeater -->
		<div id="kt_repeater_reconocimientos">

					<div class="row">

						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" id="recInstPremio" name="recInstPremio" class="form-control" title="Premio" placeholder="Premio o reconocimiento" />
									
							</div>
							
						</div>

						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" id="recInstitucion" name="recInstitucion" class="form-control form-control-danger" placeholder="Institucion">
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
									<input type="file" class="custom-file-input" id="recRutaArchivoCertificacion" name="recRutaArchivoCertificacion">
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
								<input type="text" class="form-control form-date" placeholder="dd/mm/aaaa (Certificación)" id="recInstFecha" name="recInstFecha" />
							</div>
						</div>

			</div>
			<button id="btnGrabarReconocimientos" class="btn btn btn-primary">
					<i class="la la-plus"></i>
					<span>Agregar y grabar reconocimiento</span>
			</button>
		</div>
		<!-- fin de repeater -->
	</div>
</div>
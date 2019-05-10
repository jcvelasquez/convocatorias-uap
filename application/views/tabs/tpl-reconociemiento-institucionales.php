<form class="kt-form">
	<div class="kt-portlet__body">
		<div class="kt-section kt-section--first">
			<h3 class="kt-section__title">Instituciones Educativas y Culturales</h3>
			<div class="kt-section__body">

				<div id="kt_repeater_3">
					<div class="form-group  row">
						<div data-repeater-list="" class="col-lg-12">
							<div data-repeater-item="" class="row kt-margin-b-10">
								<div class="col-lg-3">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle"></i></span></div>
										<select class="form-control m-select2 m-select2-general" name="param" >
											<option>Premio</option>
											<option value="AK">Palmas Magisteriales o equivalentes</option>
											<option value="AK">Premio Nacional de Cultura</option>
											<option value="AK">Doctor Honoris Causa</option>
											<option value="AK">Profesor Honorario</option>
											<option value="AK">Profesor Visitante en otra universidad</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-phone"></i>
											</span>
										</div>
										<input type="text" class="form-control form-control-danger" placeholder="Institución">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="la la-phone"></i>
											</span>
										</div>
										<input type="text" class="form-control form-control-danger" placeholder="Fecha">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle"></i></span></div>
										<select class="form-control m-select2 m-select2-general" name="param" >
											<option>Doc.Sustentatorio</option>
											<option value="AK">Resolución</option>
											<option value="AK">Diploma</option>
											<option value="AK">Constancia</option>
											<option value="AK">Oficio</option>
											<option value="AK">Otros</option>
										</select>
									</div>
								</div>
								<div class="col-lg-2">
									<a href="javascript:;" data-repeater-delete="" class="btn btn-danger btn-icon">
										<i class="la la-remove"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col">
							<div data-repeater-create="" class="btn btn btn-primary">
								<span>
									<i class="la la-plus"></i>
									<span>Añadir más Idiomas</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<h3 class="kt-section__title">Adjuntar los documentos que sustenta lo indicado anteriormente</h3>
			<div class="form-group row">
				<label class="col-form-label col-lg-3 col-sm-12">Single File Upload</label>
				<div class="col-lg-4 col-md-9 col-sm-12">
					<div class="kt-dropzone dropzone dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
						<div class="kt-dropzone__msg dz-message needsclick">
							<h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
							<span class="kt-dropzone__msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__foot">
		<div class="kt-form__actions">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<button type="reset" class="btn btn-success">Submit</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</form>
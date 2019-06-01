
<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid ">
		<h4>INSTITUCIONES EDUCATIVAS Y CULTURALES <small>With faded secondary text</small></h4>
	</div>
</div>

<div class="form-group row">
	<div class="col-lg-12">
		<!-- inicio repeater -->
		<div id="kt_repeater_reconocimientos">
			<div data-repeater-list="">
				<div data-repeater-item="">

					<div class="form-group row">

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" title="Nivel" data-style="btn-primary">
									<option>Premio</option>
									<option>Dos</option>
									<option>Tres</option>
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
								<input type="text" class="form-control form-control-danger" placeholder="Institucion">
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group date">

								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-calendar-check-o"></i>
									</span>
								</div>
								<input type="text" class="form-control" readonly placeholder="Fecha de certificación" id="kt_datepicker_2" />
							</div>
						</div>


						<div class="col-lg-1">
							<a href="javascript:;" data-repeater-delete="" class="btn btn-remover btn-danger btn-icon">
								<i class="la la-remove"></i>
							</a>
						</div>

					</div>

					<div class="form-group row">

						<div class="col-lg-4">
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


						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" title="Nivel" data-style="btn-primary">
									<option>Doc. sustentatorio</option>
									<option>Dos</option>
									<option>Tres</option>
								</select>
							</div>
						</div>

					</div>

				</div>
			</div>
			<div data-repeater-create="" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Añadir más idiomas</span>
				</span>
			</div>
		</div>
		<!-- fin de repeater -->
	</div>
</div>
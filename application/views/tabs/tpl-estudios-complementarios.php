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
					<th width="70">Acciones</th>
				</tr>
			</thead>
		</table>
		<!--end: Datatable -->

		<!-- inicio repeater -->
		<div id="kt_repeater_idiomas">

<!-- 			<div data-repeater-list="">
				<div data-repeater-item="">
 -->
					<div class="row">

						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger" placeholder="Centro de estudios">
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" title="idioma" data-style="btn-primary">
									<option value="">Seleccione el idioma</option>
									<option value="Inglés">Inglés</option>
									<option value="Francés">Francés</option>
									<option value="Italiano">Italiano</option>
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
								<select class="form-control kt-selectpicker" title="Nivel" data-style="btn-primary">
									<option value="">Seleccione el nivel</option>
									<option value="Basico">Básico</option>
									<option value="Intermedio">Intermedio</option>
									<option value="Avanzado">Avanzado</option>
								</select>
							</div>
						</div>

						<!-- <div class="col-lg-1">
							<a href="javascript:;" data-repeater-delete="" class="btn btn-remover btn-danger btn-icon">
								<i class="la la-remove"></i>
							</a>
						</div> -->

					</div>


					<div class="row kt-hide">

						<div class="col-lg-12">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger" placeholder="Si seleccionó OTROS indique idioma">
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
									<input type="file" class="custom-file-input" id="customFile">
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
								<input type="text" class="form-control" readonly placeholder="Fecha de certificación" id="kt_datepicker_2" />
							</div>
						</div>

					</div>

<!-- 

				</div>
			</div> -->
			<div data-repeater-create="" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Agregar y grabar idioma</span>
				</span>
			</div>
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
		<!-- inicio repeater -->
		<div id="kt_repeater_herramientas">
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
								<input type="text" class="form-control form-control-danger" placeholder="Especialidad o curso">
							</div>
						</div>

						<div class="col-lg-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<input type="text" class="form-control form-control-danger" placeholder="Centro de estudios">
							</div>
						</div>

						<div class="col-lg-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="la la-envelope"></i>
									</span>
								</div>
								<select class="form-control kt-selectpicker" title="Nivel" data-style="btn-primary">
									<option>Nivel</option>
									<option>Dos</option>
									<option>Tres</option>
								</select>
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

					</div>



				</div>
			</div>
			<div data-repeater-create="" class="btn btn btn-primary">
				<span>
					<i class="la la-plus"></i>
					<span>Añadir más herramientas</span>
				</span>
			</div>
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



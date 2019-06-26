 <div class="col-lg-12">
 	<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
 		
 		
 		<!-- EMPIEZA LA TABLA -->
 		<div class="kt-portlet__head kt-portlet__head--lg">
 			<div class="kt-portlet__head-label">
 				<h3 class="kt-portlet__head-title">FORMULARIO DE REGISTRO DE ESCUELAS</h3>
 			</div>
 			<div class="kt-portlet__head-toolbar">
 				<a href="<?php echo site_url('admin/escuelas'); ?>" class="btn btn-clean kt-margin-r-10">
 					<i class="la la-arrow-left"></i>
 					<span class="kt-hidden-mobile">Regresar</span>
 				</a>
 				<div class="btn-group">
 					<button type="button" class="btn btn-brand" id="btnGrabar">
 						<i class="la la-check"></i>
 						<span class="kt-hidden-mobile">Grabar</span>
 					</button>
 					<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 					</button>
 					<div class="dropdown-menu dropdown-menu-right">
 						<ul class="kt-nav">
 							<li class="kt-nav__item">
 								<a href="#" class="kt-nav__link">
 									<i class="kt-nav__link-icon flaticon2-reload"></i>
 									<span class="kt-nav__link-text">Grabar & continuar</span>
 								</a>
 							</li>
 							<li class="kt-nav__item">
 								<a href="#" class="kt-nav__link">
 									<i class="kt-nav__link-icon flaticon2-power"></i>
 									<span class="kt-nav__link-text">Grabar & salir</span>
 								</a>
 							</li>
 							<li class="kt-nav__item">
 								<a href="#" class="kt-nav__link">
 									<i class="kt-nav__link-icon flaticon2-add-1"></i>
 									<span class="kt-nav__link-text">Grabar & agregar</span>
 								</a>
 							</li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div>

 		<div class="kt-portlet__body">

 			<!--begin: FORM -->
 			<form class="kt-form" id="form_registro">
 				<div class="row">
 					<div class="col-xl-2"></div>
 					<div class="col-xl-8">
 						<div class="kt-section kt-section--first">
 							<div class="kt-section__body">
 								<div class="form-group row">
 									<label class="col-3 col-form-label">Sede de escuela</label>
 									<div class="col-9">
 										<div class="input-group">
 											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>

 											<select class="form-control" id="sedes_sedeId" name="sedes_sedeId">
 												<?php  foreach ($sedes as $sede) { ?>
													<option value="<?php echo $sede['id'] ?>"><?php echo $sede['text'] ?></option>
								         		<?php } ?>
 											</select>
 										</div>
 									<!-- 	<span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
 									</div>
 								</div>

 								<div class="form-group row">
 									<label class="col-3 col-form-label">Facultad de escuela</label>
 									<div class="col-9">
 										<div class="input-group">
 											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>

 											<select class="form-control" id="facultades_facultadId" name="facultades_facultadId">
 												<?php  foreach ($facultades as $facultad) { ?>
													<option value="<?php echo $facultad['id'] ?>"><?php echo $facultad['text'] ?></option>
								         		<?php } ?>
 											</select>
 										</div>
 									<!-- 	<span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
 									</div>
 								</div>

 								<div class="form-group row">
 									<label class="col-3 col-form-label">Nombre de escuela</label>
 									<div class="col-9">
 										<div class="input-group">
 											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
 											<input type="text" id="escuelaNombre" name="escuelaNombre" class="form-control" value="" placeholder="" aria-describedby="basic-addon1">
 										</div>
 										<!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
 									</div>
 								</div>
 								
 								<div class="form-group row">
 									<label class="col-3 col-form-label">Estado de escuela</label>
 									<div class="col-9">
 										<div class="input-group">
 											<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
 											<select class="form-control" id="escuelaEstado" name="escuelaEstado">
 												<option value="1">ACTIVO</option>
 												<option value="0">INACTIVO</option>
 											</select>
 										</div>
 										<!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
 									</div>
 								</div>
 								
 							</div>
 						</div>
 						<div class="kt-section">
 							<div class="kt-section__body">
 								<div class="form-group row">
 									<label class="col-form-label col-lg-3 col-sm-12">Cursos de la escuela</label>
 									<div class=" col-lg-9 col-md-9 col-sm-12">
 										<select class="form-control m-select2" id="select_cursos" name="param" multiple="multiple" name="select_cursos">
 											<?php  foreach ($cursos as $curso) { ?>
												<option value="<?php echo $curso['id'] ?>">
													<?php echo $curso['text'] ?>
												</option>
								         		<?php } ?>
 										</select>
 									</div>
 								</div>
 								
 							</div>
 						</div>

 					</div>
 				</div>

 				<input type="hidden" value="<?php echo $escuelaId; ?>" name="primaryKey" id="primaryKey">

 			</form>
 			<!--end: FORM -->

 		</div>
 		<!-- TERMINA LA TABLA -->
 	</div>
 </div> 




<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<?php include('header.php'); ?>

</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">


		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
							<div class="row">
				
								<div class="col-lg-12">

									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Adjusted Pills
												</h3>
											</div>
										</div>
										<div class="kt-portlet__body">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_5_1">Tratamiento de Datos Personles</a>
												</li>
												<!--Edgar-->
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_2">Información Básica</a>
												</li>
												<!---->
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_3">Formación Académica</a>
												</li>
												<!--Edgar-->
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_4">Cargo Académica</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_5">Estudio Complementario</a>
												</li>
												<!---->
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_6">Reconocimiento Institucionales</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_7">Investigación - Publicitarios</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_5_8">Curriculum Vitae</a>
												</li>
											</ul>

											<!-- tab de content-->
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_5_1" role="tabpanel">

												<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													

												</div>
												<!-- tab 3-->
												<div class="tab-pane" id="kt_tabs_5_3" role="tabpanel">

												</div>


												<!-- tab 4-->
												<div class="tab-pane" id="kt_tabs_5_4" role="tabpanel">

												</div>
												<!-- tab 7-->
												<div class="tab-pane" id="kt_tabs_5_7" role="tabpanel">
													
													<form class="kt-form">
														<div class="kt-portlet__body">
															<div class="kt-section kt-section--first">
																<h3 class="kt-section__title">Investigación y Producción Intelectual</h3>
																<div class="kt-section__body">

																	<div id="kt_repeater_6">
																		<div class="form-group  row">
																			<div data-repeater-list="" class="col-lg-12">
																				<div data-repeater-item="" class="row kt-margin-b-10">
																					<div class="col-lg-3">
																						<div class="input-group">
																							<div class="input-group-prepend">
																								<span class="input-group-text">
																									<i class="la la-phone"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control form-control-danger" placeholder="Título">
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="input-group date">
																							<input type="text" class="form-control" readonly="" placeholder="Select date &amp; time" id="kt_datetimepicker_2">
																							<div class="input-group-append">
																								<span class="input-group-text"><i class="la la-calendar-check-o glyphicon-th"></i></span>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="input-group">
																							<div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle"></i></span></div>
																							<select class="form-control m-select2 m-select2-general" name="param" >
																													<option>Tipo de Publicación</option>
																													<option value="AK">Obras de Consulta</option>
																													<option value="AK">Textos Universitarios</option>
																													<option value="AK">Obras tipo ensayo</option>
																													<option value="AK">Trabajos de investigación terminados y/o publicados en revistas especializadas</option>
																													<option value="AK">Trabajos de divulgación</option>
																													<option value="AK">Guías o módulos de aprendizaje</option>
																													<option value="AK">Artículos periodísticos en temas de especialidad</option>
																													<option value="AK">Proyectos tecnológicos aprobados</option>
																													<option value="AK">Proyectos de inversión, Patentes, Expedientes Técnicos de Proyectos</option>
																													<option value="AK">Creación Artística</option>
																													<option value="AK">Patente</option>
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
																							<input type="text" class="form-control form-control-danger" placeholder="Nro. De Registro/Nro. Resolución">
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Selecionar Archivo</label>
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
																						<span>Añadir más Investigaciones</span>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

												            </div>
											            </div>

											        </form>
													<form class="kt-form">
											            <div class="kt-portlet__body">
															<div class="kt-section kt-section--first">
																<h3 class="kt-section__title">Asesoria y Dirección de Tesis</h3>
																<div class="kt-section__body">

																	<div id="kt_repeater_15">
																		<div class="form-group  row">
																			<div data-repeater-list="" class="col-lg-12">
																				<div data-repeater-item="" class="row kt-margin-b-10">
																					<div class="col-lg-3">
																						<div class="input-group">
																							<div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle"></i></span></div>
																							<select class="form-control m-select2 m-select2-general" name="param" >
																													<option>Tipo</option>
																													<option value="AK">Obras de Consulta</option>
																													<option value="AK">Textos Universitarios</option>
																													<option value="AK">Obras tipo ensayo</option>
																													<option value="AK">Trabajos de investigación terminados y/o publicados en revistas especializadas</option>
																													<option value="AK">Trabajos de divulgación</option>
																													<option value="AK">Guías o módulos de aprendizaje</option>
																													<option value="AK">Artículos periodísticos en temas de especialidad</option>
																													<option value="AK">Proyectos tecnológicos aprobados</option>
																													<option value="AK">Proyectos de inversión, Patentes, Expedientes Técnicos de Proyectos</option>
																													<option value="AK">Creación Artística</option>
																													<option value="AK">Patente</option>
																							</select>
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="input-group">
																							<div class="input-group-prepend"><span class="input-group-text"><i class="la la-exclamation-triangle"></i></span></div>
																							<select class="form-control m-select2 m-select2-general" name="param" >
																													<option>Nivel</option>
																													<option value="AK">Obras de Consulta</option>
																													<option value="AK">Textos Universitarios</option>
																													<option value="AK">Obras tipo ensayo</option>
																													<option value="AK">Trabajos de investigación terminados y/o publicados en revistas especializadas</option>
																													<option value="AK">Trabajos de divulgación</option>
																													<option value="AK">Guías o módulos de aprendizaje</option>
																													<option value="AK">Artículos periodísticos en temas de especialidad</option>
																													<option value="AK">Proyectos tecnológicos aprobados</option>
																													<option value="AK">Proyectos de inversión, Patentes, Expedientes Técnicos de Proyectos</option>
																													<option value="AK">Creación Artística</option>
																													<option value="AK">Patente</option>
																							</select>
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="input-group">
																							<input type="text" class="form-control" name="date" placeholder="Select date" id="kt_datepicker">
																							<div class="input-group-append">
																								<span class="input-group-text">
																									<i class="la la-calendar-check-o"></i>
																								</span>
																							</div>
																						</div>
																																	
																					</div>
																					<div class="col-lg-3">
																						<div class="input-group">
																							<div class="input-group-prepend">
																								<span class="input-group-text">
																									<i class="la la-phone"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control form-control-danger" placeholder="Nro. De Resolución">
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="input-group">
																							<div class="input-group-prepend">
																								<span class="input-group-text">
																									<i class="la la-phone"></i>
																								</span>
																							</div>
																							<input type="text" class="form-control form-control-danger" placeholder="Nombre de la Tesis">
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
																						<span>Añadir más Investigaciones</span>
																					</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

												            </div>
											            </div>
													 </form>

											            
													
														<form class="kt-form">
											            <div class="kt-portlet__body">
															<div class="kt-section kt-section--first">
																<h3 class="kt-section__title">Cuentas con Registro DINA?</h3>
																<div class="kt-section__body">

																	<div id="kt_repeater_15">
																		<div class="form-group  row">
																			<div data-repeater-list="" class="col-lg-12">
																				<div data-repeater-item="" class="row kt-margin-b-10">
																					<div class="col-lg-3">
																						<div class="form-group row">
																							<div class="col-9">
																								<div class="kt-radio-inline">
																									<label class="kt-radio">
																										<input type="radio" name="radio4"> Si
																										<span></span>
																									</label>
																									<label class="kt-radio">
																										<input type="radio" name="radio4"> No
																										<span></span>
																									</label>
																								</div>
																								<span class="form-text text-muted">Marque la opcion que mas se acomode a su situacion</span>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="form-group ">
																							<div class="input-group">
																								<div class="input-group-prepend"><span class="input-group-text">@</span></div>
																								<input type="text" class="form-control" placeholder="Registre el link de su registro DINA" aria-describedby="basic-addon1">
																							</div>
																							<span class="form-text text-muted">* Campo obligatorio</span>
																						</div>
																					</div>

																				</div>
																			</div>
																		</div>
																	</div>

																</div>
															</div>
														</div>	
														</form>	

														<form class="kt-form">
											            <div class="kt-portlet__body">
															<div class="kt-section kt-section--first">
																<h3 class="kt-section__title">Cuentas con Registro REGINA?</h3>
																<div class="kt-section__body">

																	<div id="kt_repeater_15">
																		<div class="form-group  row">
																			<div data-repeater-list="" class="col-lg-12">
																				<div data-repeater-item="" class="row kt-margin-b-10">
																					<div class="col-lg-3">
																						<div class="form-group row">
																							<div class="col-9">
																								<div class="kt-radio-inline">
																									<label class="kt-radio">
																										<input type="radio" name="radio4"> Si
																										<span></span>
																									</label>
																									<label class="kt-radio">
																										<input type="radio" name="radio4"> No
																										<span></span>
																									</label>
																								</div>
																								<span class="form-text text-muted">Marque la opcion que mas se acomode a su situacion</span>
																							</div>
																						</div>
																					</div>
																					<div class="col-lg-3">
																						<div class="form-group ">
																							<div class="input-group">
																								<div class="input-group-prepend"><span class="input-group-text">@</span></div>
																								<input type="text" class="form-control" placeholder="Registre el link de su registro REGINA" aria-describedby="basic-addon1">
																							</div>
																							<span class="form-text text-muted">* Campo obligatorio</span>
																						</div>
																					</div>

																				</div>
																			</div>
																		</div>
																	</div>

																</div>
															</div>
														</div>	
														</form>	



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
												</div>

												<!-- tab 8-->
												<div class="tab-pane" id="kt_tabs_5_8" role="tabpanel">
													<div class="tab-pane" id="kt_tabs_5_2" role="tabpanel">
													
													<form class="kt-form">
														<div class="kt-portlet__body">
															<div class="kt-section kt-section--first">
																<h3 class="kt-section__title">Por Favor adjunta sus fotografía</h3>
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
													</div>

											</div>



										</div>
									<!-- cierre de contenedor -->

									</div>

									<!--end::Portlet-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

				

				</div>
			</div>
		</div>

		<!-- end:: Page -->
		

		<?php include('footer.php'); ?>

	</body>
</html>

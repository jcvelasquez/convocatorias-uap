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



												<?php include('tabs_formacion_academica.php'); ?>

											</div>
											<!-- tab 3-->
											<div class="tab-pane" id="kt_tabs_formacion_academica" role="tabpanel">

												<?php include('tabs/tpl-formacion-academica.php'); ?>
											</div>
											<!-- tab 4-->
											<div class="tab-pane" id="kt_tabs_cargos_academicos" role="tabpanel">

												<?php include('tabs/tpl-cargos-academicos.php'); ?>

											</div>
											<!-- tab 5-->
											<div class="tab-pane" id="kt_tabs_estudio_complementario" role="tabpanel">
												<?php include('tabs/tpl-estudio-complementarios.php'); ?>

											</div>

											<!-- tab 6-->
											<div class="tab-pane" id="kt_tabs_reconocimentos_institucionales" role="tabpanel">
												<? php include(''); ?>

											</div>

											<!-- tab 7-->
											<div class="tab-pane" id="kt_tabs_investigacio_publicitaria" role="tabpanel">

												<? php include(''); ?>
											</div>
											<!-- tab 8-->
											<div class="tab-pane" id="kt_tabs_curriculum_vitae" role="tabpanel">
												<? php include (''); ?>

											</div>

										</div>
												<!-- cierre de contenedor -->
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



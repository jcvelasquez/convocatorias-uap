<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<?php include('header.php'); ?>

</head>
<body>

	<div class="container-registro">

		<!--begin::Portlet-->
		<div class="kt-portlet">

			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="flaticon2-graph"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						SELECCIONA LA CONVOCATORIA A LA QUE DESEAS POSTULAR
					</h3>
				</div>
			</div>
			
			<div class="kt-portlet__body">

				<!--- -->
				<div class="form-group row">
					<div class="col-lg-12">

						<p><span>El postulante afirma su consentimiento y autoriza el uso de datos personales expuesto en la plataforma para fines de postulación con la organización dentro del marco de Ley de Protección de datos personales 29733. Este registro se deriva al área de Gestión del Talento y se conservará posterior a la postulación.</span></p>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-12">

						<!--begin: Datatable -->
						<table class="table table-striped- table-hover table-checkable" id="table_convocatorias_docentes">
							<thead>
								<tr>
									<th width="80">ID</th>
									<th>NOMBRE DE CONVOCATORIA</th>
									<th>SEDE</th>
									<th width="150">ESTADO</th>
									<th>HASTA</th>
									<th width="150"></th>
								</tr>
							</thead>
						</table>
						<!--end: Datatable -->

					</div>
				</div>
				<!-- -->

			</div>

			
		</div>
		<!--end::Portlet-->

	</div>

	
	<!-- end:: Page -->
	
	<?php include('footer.php'); ?>

	<script src="<?php echo asset_url('js/convocatorias.js'); ?>" type="text/javascript"></script>

	<script type="text/javascript">
		
		jQuery(document).ready(function() {
			ConvocatoriasDocentes.init();
		});


	</script>

</body>
</html>

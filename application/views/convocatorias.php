<section class="intro-header" style="position:relative; background-image: url(<?= asset_url('media/First-Frame.jpg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-lg-offset-2 col-md-12 col-md-offset-1">
				<div class="site-heading">
					<h1>CONVOCATORIAS</h1>
					<hr class="small">

				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-registro">

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



	<!--end::Portlet-->

</div>


<!-- end:: Page -->

<!-- <script src="<?php //echo asset_url('js/convocatorias.js'); ?>" type="text/javascript"></script>
-->
<script type="text/javascript">

	jQuery(document).ready(function() {
		ConvocatoriasDocentes.init();
	});

</script>
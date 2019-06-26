<section class="intro-header" style="position:relative; background-image: url(<?= asset_url('media/First-Frame.jpg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-lg-offset-2 col-md-12 col-md-offset-1">
				<div class="site-heading">
					<h1>ESTAS POSTULANDO A:</h1>
					<hr class="small">

				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-registro">

	<!--beging::Portlet -->
	<div class="kt-portlet">
		<div class="kt-portlet__body">
			<div class="kt-widget kt-widget--user-profile-3">
				<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
					JM
				</div>
				<div class="kt-widget__content">
					<div class="kt-widget__head">
						<h3><?php echo $convocatoria['convoNombre']; ?> </h3>
						<p><?php echo $convocatoria['convoDescripcion']; ?></p>
						<p><strong>FIN DE CONVOCATORIA</strong> <i class="flaticon2-calendar-1"></i> <?php echo $convocatoria['convoFechaFin']; ?></p>

						<a href="<?php echo site_url('convocatorias'); ?>" class="btn btn-danger btn-md btn-upper">SELECCIONAR OTRA CONVOCATORIA</a>
					</div>
					<br><br>
					<div class="kt-widget__head">
						<h3>Cursos disponibles de la convocatoria</h3>
						<p>La presente convocatoria cuenta con los siguientes cursos disponibles para su postulacion. Puede marcar mas de uno </p>
						
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

			<p>&nbsp;</p>

			<!--- -->
			<?php include('tabs/tpl-tratamiento-datos-personales.php'); ?>
			<!-- -->

		</div>

	</div>
	<!--ending::Portlet -->

</div>



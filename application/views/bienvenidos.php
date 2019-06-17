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


		<!--beging::Portlet -->
		<div class="kt-portlet">
			<div class="kt-portlet__body">

				<div class="kt-section">
					<div class="kt-section__content kt-section__content--solid ">
						<h4>ESTAS POSTULANDO A:</h4>
					</div>
				</div>

				<div class="kt-widget kt-widget--user-profile-3">
					<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
						JM
					</div>
					<div class="kt-widget__content">
						<div class="kt-widget__head">
							<h3><?php echo $convocatoria['convoNombre']; ?> </h3>
							<p><?php echo $convocatoria['convoDescripcion']; ?></p>
							<p><strong>FIN DE CONVOCATORIA</strong> <i class="flaticon2-calendar-1"></i> <?php echo $convocatoria['convoFechaFin']; ?></p>

							<a href="<?php echo site_url('/'); ?>" class="btn btn-danger btn-sm btn-upper">SELECCIONAR OTRA CONVOCATORIA</a>
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

	
	<!-- end:: Page -->
	
	<?php include('footer.php'); ?>

	<script src="<?php echo asset_url('js/bienvenidos.js'); ?>" type="text/javascript"></script>

</body>
</html>

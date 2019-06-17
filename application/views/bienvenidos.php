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
				<div class="kt-widget kt-widget--user-profile-3">
					<div class="kt-widget__top">
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
							
							<div class="kt-widget__info">
									
							</div>

							

						</div>
					</div>

				</div>
			</div>
		</div>
		<!--ending::Portlet -->

		<!--begin::Portlet-->
		<div class="kt-portlet">

	<!-- 		<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="flaticon2-graph"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Bienvenidos al registro de convocatorias de docentes
					</h3>
				</div>
			</div> -->
			
			<div class="kt-portlet__body">

				<!--- -->
				<?php include('tabs/tpl-tratamiento-datos-personales.php'); ?>
				<!-- -->

			</div>

			
		</div>
		<!--end::Portlet-->

	</div>

	
	<!-- end:: Page -->
	
	<?php include('footer.php'); ?>

	<script src="<?php echo asset_url('js/bienvenidos.js'); ?>" type="text/javascript"></script>

</body>
</html>

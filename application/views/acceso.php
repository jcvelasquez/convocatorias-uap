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
						INICIAR SESION A CONVOCATORIAS
					</h3>
				</div>
			</div>
			
			<div class="kt-portlet__body">

				<!--- -->
				<?php include('tabs/tpl-acceso-cuenta.php'); ?>
				<!-- -->

			</div>

			
		</div>
		<!--end::Portlet-->

	</div>

	
	<!-- end:: Page -->
	
	<?php include('footer.php'); ?>

	<script src="<?php echo asset_url('js/acceso.js'); ?>" type="text/javascript"></script>

</body>
</html>

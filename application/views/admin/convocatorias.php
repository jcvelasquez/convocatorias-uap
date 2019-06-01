<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>

	<?php include('header-admin.php'); ?>

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body style="background-image: url(<?php echo asset_url('media/demos/demo4/header.jpg'); ?>); background-position: center top; background-size: 100% 350px;" class="kt-page--loading-enabled kt-page--loading kt-page--fluid kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">


	<?php include('tpl-header-mobile.php'); ?>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<?php include('tpl-header.php'); ?>

				<!-- end:: Header -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
					<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

							<!-- begin:: Subheader -->
							<?php include('tpl-subheader.php'); ?>
							<!-- end:: Subheader -->

							<!-- begin:: Content -->
							<div class="kt-content kt-grid__item kt-grid__item--fluid">


								<!--Begin::Section-->
								<div class="row">
									

								</div>

								<!--End::Section-->

								<!--End::Dashboard 2-->
							</div>

							<!-- end:: Content -->
						</div>
					</div>
				</div>

				<!-- begin:: Footer -->
				<?php include('tpl-footer.php'); ?>

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<?php include('footer-admin.php'); ?>

	<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
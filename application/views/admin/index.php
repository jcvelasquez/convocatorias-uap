<!DOCTYPE html>

<html lang="en">

	<head>

		<?php $this->load->view('admin/header-admin'); ?>

	</head>

	<!-- begin::Body -->
	<body style="background-image: url(<?php echo asset_url('media/demos/demo4/header.jpg'); ?>); background-position: center top; background-size: 100% 350px;" class="kt-page--loading-enabled kt-page--loading kt-page--fluid kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<?php $this->load->view('admin/tpl-header-mobile'); ?>

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<?php $this->load->view('admin/tpl-header'); ?>

					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">


								<?php $this->load->view('admin/tpl-subheader'); ?>

								<!-- begin:: Content -->
								<div class="kt-content kt-grid__item kt-grid__item--fluid">

									<?php $this->load->view($_view); ?>

								</div>
								<!-- end:: Content -->
							</div>
						</div>
					</div>

					<!-- begin:: Footer -->
					<?php $this->load->view('admin/tpl-footer'); ?>
					<!-- end:: Footer -->

				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<?php $this->load->view('admin/footer-admin'); ?>

	</body>

	<!-- end::Body -->
</html>
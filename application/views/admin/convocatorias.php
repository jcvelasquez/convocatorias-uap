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

	<!-- begin::Page loader -->

	<!-- end::Page Loader -->

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="demo4/index.html">
				<img alt="Logo" src="<?php echo asset_url('media/logos/logo-4-sm.png'); ?>" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
		</div>
	</div>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
					<div class="kt-container">

						<!-- begin:: Brand -->
						<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
							<a class="kt-header__brand-logo" href="demo4/index.html">
								<img alt="Logo" src="<?php echo asset_url('media/logos/logo-4.png'); ?>" class="kt-header__brand-logo-default" />
								<img alt="Logo" src="<?php echo asset_url('media/logos/logo-4-sm.png'); ?>" class="kt-header__brand-logo-sticky" />
							</a>
						</div>

						<!-- end:: Brand -->

						<!-- begin: Header Menu -->
						<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						
						<?php include('tpl-menu.php'); ?>
						<!-- end: Header Menu -->

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar kt-grid__item">

							<!--begin: User bar -->
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
									<span class="kt-header__topbar-welcome">Hi,</span>
									<span class="kt-header__topbar-username">Sean</span>
									<span class="kt-header__topbar-icon"><b>S</b></span>
									<img alt="Pic" src="<?php echo asset_url('media/users/300_21.jpg'); ?>" class="kt-hidden" />
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?php echo asset_url('media/misc/bg-1.jpg'); ?>">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="<?php echo asset_url('media/users/300_25.jpg'); ?>" />

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
										</div>
										<div class="kt-user-card__name">
											Sean Stone
										</div>
										<div class="kt-user-card__badge">
											<span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
										</div>
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-calendar-3 kt-font-success"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Profile
												</div>
												<div class="kt-notification__item-time">
													Account settings and more
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-mail kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Messages
												</div>
												<div class="kt-notification__item-time">
													Inbox and tasks
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-rocket-1 kt-font-danger"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Activities
												</div>
												<div class="kt-notification__item-time">
													Logs and notifications
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-hourglass kt-font-brand"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													My Tasks
												</div>
												<div class="kt-notification__item-time">
													latest tasks and projects
												</div>
											</div>
										</a>
										<a href="#" class="kt-notification__item">
											<div class="kt-notification__item-icon">
												<i class="flaticon2-cardiogram kt-font-warning"></i>
											</div>
											<div class="kt-notification__item-details">
												<div class="kt-notification__item-title kt-font-bold">
													Billing
												</div>
												<div class="kt-notification__item-time">
													billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
												</div>
											</div>
										</a>
										<div class="kt-notification__custom kt-space-between">
											<a href="demo4/custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
											<a href="demo4/custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
										</div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>
				</div>

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
									<div class="col-xl-12">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
											<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
												<div class="kt-portlet__head-label">
													<h3 class="kt-portlet__head-title">
														Exclusive Datatable Plugin
													</h3>
												</div>
												<div class="kt-portlet__head-toolbar">
													<div class="dropdown dropdown-inline">
														<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="flaticon-more-1"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

															<!--begin::Nav-->
															<ul class="kt-nav">
																<li class="kt-nav__head">
																	Export Options
																	<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-drop"></i>
																		<span class="kt-nav__link-text">Activity</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
																		<span class="kt-nav__link-text">FAQ</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-link"></i>
																		<span class="kt-nav__link-text">Settings</span>
																	</a>
																</li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link">
																		<i class="kt-nav__link-icon flaticon2-new-email"></i>
																		<span class="kt-nav__link-text">Support</span>
																		<span class="kt-nav__link-badge">
																			<span class="kt-badge kt-badge--success">5</span>
																		</span>
																	</a>
																</li>
																<li class="kt-nav__separator"></li>
																<li class="kt-nav__foot">
																	<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
																	<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>

															<!--end::Nav-->
														</div>
													</div>
												</div>
											</div>
											<div class="kt-portlet__body kt-portlet__body--fit">

												<!--begin: Datatable -->
												<div class="kt-datatable" id="kt_datatable_latest_orders"></div>

												<!--end: Datatable -->
											</div>
										</div>
									</div>

								</div>

								<!--End::Section-->

								<!--Begin::Section-->


								<!--End::Section-->

								<!--Begin::Section-->


								<!--End::Section-->

								<!--Begin::Section-->


								<!--End::Section-->



								<!--End::Section-->

								<!--End::Dashboard 2-->
							</div>

							<!-- end:: Content -->
						</div>
					</div>
				</div>

				<!-- begin:: Footer -->
				<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer" style="background-image: url('<?php echo asset_url('media/bg/bg-2.jpg'); ?>">

					<div class="kt-footer__bottom">
						<div class="kt-container">
							<div class="kt-footer__wrapper">
								<div class="kt-footer__logo">
									<a class="kt-header__brand-logo" href="demo4/index&amp;demo=demo2.html">
										<img alt="Logo" src="<?php echo asset_url('media/logos/logo-4-sm.png'); ?>" class="kt-header__brand-logo-sticky">
									</a>
									<div class="kt-footer__copyright">
										2019&nbsp;&copy;&nbsp;
										<a href="http://keenthemes.com/metronic" target="_blank">Keenthemes</a>
									</div>
								</div>
								<div class="kt-footer__menu">
									<a href="http://keenthemes.com/metronic" target="_blank">Purchase Lisence</a>
									<a href="http://keenthemes.com/metronic" target="_blank">Team</a>
									<a href="http://keenthemes.com/metronic" target="_blank">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Quick Panel -->


	<!-- end::Quick Panel -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>


	<?php include('footer-admin.php'); ?>

	<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
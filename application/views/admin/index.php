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

		<!--begin::Base Path (base relative path for assets of this page) -->

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="<?php echo asset_url('vendors/custom/fullcalendar/fullcalendar.bundle.css'); ?>" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo asset_url('vendors/general/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?php echo asset_url('vendors/general/tether/dist/css/tether.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-select/dist/css/bootstrap-select.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/select2/dist/css/select2.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/ion-rangeslider/css/ion.rangeSlider.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/nouislider/distribute/nouislider.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/owl.carousel/dist/assets/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/owl.carousel/dist/assets/owl.theme.default.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/dropzone/dist/dropzone.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/summernote/dist/summernote.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/animate.css/animate.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/toastr/build/toastr.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/morris.js/morris.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/sweetalert2/dist/sweetalert2.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/socicon/css/socicon.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/custom/vendors/line-awesome/css/line-awesome.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/custom/vendors/flaticon/flaticon.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/custom/vendors/flaticon2/flaticon.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo asset_url('vendors/general/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo asset_url('css/demo4/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo asset_url('media/logos/favicon.ico'); ?>" />
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
							<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
								<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
									<ul class="kt-menu__nav ">
										<li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Dashboard</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item " aria-haspopup="true"><a href="demo4/index.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Default Dashboard</span></a></li>
													<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="demo4/dashboards/fluid.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Fluid Dashboard</span></a></li>
												</ul>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Pages</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Create New Post</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Generate Reports</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">2</span></span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Manage Orders</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Latest Orders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Pending Orders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Processed Orders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Delivery Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Payments</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customers</span></a></li>
															</ul>
														</div>
													</li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Customer Feedbacks</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Customer Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Supplier Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reviewed Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Resolved Feedbacks</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Feedback Reports</span></a></li>
															</ul>
														</div>
													</li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Register Member</span></a></li>
												</ul>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
											<div class="kt-menu__submenu  kt-menu__submenu--fixed kt-menu__submenu--left" style="width:1000px">
												<div class="kt-menu__subnav">
													<ul class="kt-menu__content">
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Finance Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-map"></i><span class="kt-menu__link-text">Annual Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">HR Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-clipboard"></i><span class="kt-menu__link-text">IPO Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Finance Margins</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-2"></i><span class="kt-menu__link-text">Revenue Reports</span></a></li>
															</ul>
														</li>
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Coca Cola CRM</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Delta Airlines Booking Site</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Malibu Accounting</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Vineseed Website Rewamp</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Zircon Mobile App</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Mercury CMS</span></a></li>
															</ul>
														</li>
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">HR Reports</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Directory</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Client Directory</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Salary Reports</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Staff Payslips</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Corporate Expenses</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Project Expenses</span></a></li>
															</ul>
														</li>
														<li class="kt-menu__item ">
															<h3 class="kt-menu__heading kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Reporting Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="kt-menu__inner">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Adjusments</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Sources & Mediums</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Reporting Settings</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Conversions</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Report Flows</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><span class="kt-menu__link-text">Audit & Logs</span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Apps</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">eCommerce</span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Audience</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-users"></i><span class="kt-menu__link-text">Active Users</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-interface-1"></i><span class="kt-menu__link-text">User Explorer</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-lifebuoy"></i><span class="kt-menu__link-text">Users Flows</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic-1"></i><span class="kt-menu__link-text">Market Segments</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-graphic"></i><span class="kt-menu__link-text">User Reports</span></a></li>
															</ul>
														</div>
													</li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Marketing</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Campaigns</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--success">3</span></span></a></li>
													<li class="kt-menu__item  kt-menu__item--submenu" data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a href="#" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cloud Manager</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
														<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
															<ul class="kt-menu__subnav">
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-add"></i><span class="kt-menu__link-text">File Upload</span><span class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">3</span></span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-signs-1"></i><span class="kt-menu__link-text">File Attributes</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-folder"></i><span class="kt-menu__link-text">Folders</span></a></li>
																<li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-cogwheel-2"></i><span class="kt-menu__link-text">System Settings</span></a></li>
															</ul>
														</div>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- end: Header Menu -->

							<!-- begin:: Header Topbar -->
							<div class="kt-header__topbar kt-grid__item">

								<!--begin: Search -->
								

								<!--end: Search -->

								<!--begin: Notifications -->
								

								<!--end: Notifications -->

								<!--begin: Quick actions -->
								

								<!--end: Quick actions -->

								<!--begin: Cart -->
								

								<!--end: Cart-->

								<!--begin: Quick panel toggler -->
								

								<!--end: Quick panel toggler -->

								<!--begin: Language bar -->
								

								<!--end: Language bar -->

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
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title">Dashboard</h3>
										<div class="kt-subheader__breadcrumbs">
											<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="" class="kt-subheader__breadcrumbs-link">
												Dashboard </a>
											<span class="kt-subheader__breadcrumbs-separator"></span>
											<a href="" class="kt-subheader__breadcrumbs-link">
												Fluid Dashboard </a>
										</div>
									</div>
									<div class="kt-subheader__toolbar">
										<div class="kt-subheader__wrapper">
											<a href="#" class="btn kt-subheader__btn-secondary">
												Reports
											</a>
											<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
												<a href="#" class="btn btn-danger kt-subheader__btn-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Products
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="la la-plus"></i> New Product</a>
													<a class="dropdown-item" href="#"><i class="la la-user"></i> New Order</a>
													<a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- end:: Subheader -->

								<!-- begin:: Content -->
								<div class="kt-content kt-grid__item kt-grid__item--fluid">

									<!--Begin::Dashboard 2-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-4">

											<!--begin:: Widgets/Daily Sales-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header kt-margin-b-30">
														<h3 class="kt-widget14__title">
															Daily Sales
														</h3>
														<span class="kt-widget14__desc">
															Check out each collumn for more details
														</span>
													</div>
													<div class="kt-widget14__chart" style="height:120px;">
														<canvas id="kt_chart_daily_sales"></canvas>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Daily Sales-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Profit Share-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Profit Share
														</h3>
														<span class="kt-widget14__desc">
															Profit Share between customers
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div class="kt-widget14__stat">45</div>
															<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">37% Sport Tickets</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">47% Business Events</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">19% Others</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Profit Share-->
										</div>
										<div class="col-xl-4">

											<!--begin:: Widgets/Revenue Change-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Revenue Change
														</h3>
														<span class="kt-widget14__desc">
															Revenue change breakdown by cities
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart">
															<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">+10% New York</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">-7% London</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">+20% California</span>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Revenue Change-->
										</div>
									</div>

									<!--End::Section-->

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
		<div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>
			<div class="kt-quick-panel__content">
				<div class="tab-content">
					<div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
						<div class="kt-notification">
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-line-chart kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been received
									</div>
									<div class="kt-notification__item-time">
										2 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-box-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-chart2 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Application has been approved
									</div>
									<div class="kt-notification__item-time">
										3 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-image-file kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New file has been uploaded
									</div>
									<div class="kt-notification__item-time">
										5 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-bar-chart kt-font-info"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New user feedback received
									</div>
									<div class="kt-notification__item-time">
										8 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart-2 kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										System reboot has been successfully completed
									</div>
									<div class="kt-notification__item-time">
										12 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-favourite kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New order has been placed
									</div>
									<div class="kt-notification__item-time">
										15 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item kt-notification__item--read">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-safe kt-font-primary"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Company meeting canceled
									</div>
									<div class="kt-notification__item-time">
										19 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-psd kt-font-success"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New report has been received
									</div>
									<div class="kt-notification__item-time">
										23 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-download-1 kt-font-danger"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										Finance report has been generated
									</div>
									<div class="kt-notification__item-time">
										25 hrs ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon-security kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer comment recieved
									</div>
									<div class="kt-notification__item-time">
										2 days ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification__item">
								<div class="kt-notification__item-icon">
									<i class="flaticon2-pie-chart kt-font-warning"></i>
								</div>
								<div class="kt-notification__item-details">
									<div class="kt-notification__item-title">
										New customer is registered
									</div>
									<div class="kt-notification__item-time">
										3 days ago
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
						<div class="kt-notification-v2">
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-bell kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										5 new user generated report
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-box kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										2 new items submited
									</div>
									<div class="kt-notification-v2__item-desc">
										by Grog John
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-psd kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										79 PSD files generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Reports based on sales
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-supermarket kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										$2900 worth producucts sold
									</div>
									<div class="kt-notification-v2__item-desc">
										Total 234 items
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon-paper-plane-1 kt-font-success"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-information kt-font-danger"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										Database server is down
									</div>
									<div class="kt-notification-v2__item-desc">
										10 mins ago
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-mail-1 kt-font-brand"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										System report has been generated
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
							<a href="#" class="kt-notification-v2__item">
								<div class="kt-notification-v2__item-icon">
									<i class="flaticon2-hangouts-logo kt-font-warning"></i>
								</div>
								<div class="kt-notification-v2__itek-wrapper">
									<div class="kt-notification-v2__item-title">
										4.5h-avarage response time
									</div>
									<div class="kt-notification-v2__item-desc">
										Fostest is Barry
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
						<form class="kt-form">
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Notifications:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Case Tracking:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Support Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--success kt-switch--sm">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Generate Reports:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Report Export:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" name="quick_panel_notifications_3">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Allow Data Collection:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--danger">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>
							<div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Enable Member singup:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-xs row">
								<label class="col-8 col-form-label">Allow User Feedbacks:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" name="quick_panel_notifications_5">
											<span></span>
										</label>
									</span>
								</div>
							</div>
							<div class="form-group form-group-last form-group-xs row">
								<label class="col-8 col-form-label">Enable Customer Portal:</label>
								<div class="col-4 kt-align-right">
									<span class="kt-switch kt-switch--sm kt-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
											<span></span>
										</label>
									</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		
		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		

		<!-- end::Demo Panel -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#366cf3",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo asset_url('vendors/general/jquery/dist/jquery.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/popper.js/dist/umd/popper.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/js-cookie/src/js.cookie.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/moment/min/moment.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/tooltip.js/dist/umd/tooltip.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/sticky-js/dist/sticky.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/wnumb/wNumb.js') ?>" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo asset_url('vendors/general/jquery-form/dist/jquery.form.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/block-ui/jquery.blockUI.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/bootstrap-datepicker.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/bootstrap-timepicker.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-select/dist/js/bootstrap-select.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/bootstrap-switch.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/select2/dist/js/select2.full.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/ion-rangeslider/js/ion.rangeSlider.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/typeahead.js/dist/typeahead.bundle.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/handlebars/dist/handlebars.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/inputmask/dist/jquery.inputmask.bundle.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/nouislider/distribute/nouislider.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/owl.carousel/dist/owl.carousel.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/autosize/dist/autosize.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/clipboard/dist/clipboard.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/dropzone/dist/dropzone.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/summernote/dist/summernote.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/markdown/lib/markdown.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/bootstrap-markdown.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/bootstrap-notify/bootstrap-notify.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/bootstrap-notify.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/jquery-validation/dist/jquery.validate.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/jquery-validation/dist/additional-methods.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/jquery-validation.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/toastr/build/toastr.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/raphael/raphael.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/morris.js/morris.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/chart.js/dist/Chart.bundle.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/waypoints/lib/jquery.waypoints.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/counterup/jquery.counterup.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/es6-promise-polyfill/promise.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/sweetalert2/dist/sweetalert2.min.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/js/vendors/sweetalert2.init.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/jquery.repeater/src/lib.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/jquery.repeater/src/jquery.input.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/jquery.repeater/src/repeater.js') ?>" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/general/dompurify/dist/purify.js') ?>" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo asset_url('js/demo4/scripts.bundle.js') ?>" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="<?php echo asset_url('vendors/custom/fullcalendar/fullcalendar.bundle.js') ?>" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="<?php echo asset_url('vendors/custom/gmaps/gmaps.js') ?>" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo asset_url('js/demo4/pages/dashboard.js') ?>" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
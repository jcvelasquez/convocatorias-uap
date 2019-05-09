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
										<div class="col-xl-6">

											<!--begin:: Widgets/Quick Stats-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-brand">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">570</span>
																	<span class="kt-widget26__desc">Total Sales</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_1"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">640</span>
																	<span class="kt-widget26__desc">Completed Transactions</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">234+</span>
																	<span class="kt-widget26__desc">Transactions</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">4.4M$</span>
																	<span class="kt-widget26__desc">Paid Comissions</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_4"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Quick Stats-->
										</div>
										<div class="col-xl-6">

											<!--begin:: Widgets/Order Statistics-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">
															Order Statistics
														</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
															Export
														</a>
														<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

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
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget12">
														<div class="kt-widget12__content">
															<div class="kt-widget12__item">
																<div class="kt-widget12__info">
																	<span class="kt-widget12__desc">Annual Taxes EMS</span>
																	<span class="kt-widget12__value">$400,000</span>
																</div>
																<div class="kt-widget12__info">
																	<span class="kt-widget12__desc">Finance Review Date</span>
																	<span class="kt-widget12__value">July 24,2019</span>
																</div>
															</div>
															<div class="kt-widget12__item">
																<div class="kt-widget12__info">
																	<span class="kt-widget12__desc">Avarage Revenue</span>
																	<span class="kt-widget12__value">$60M</span>
																</div>
																<div class="kt-widget12__info">
																	<span class="kt-widget12__desc">Revenue Margin</span>
																	<div class="kt-widget12__progress">
																		<div class="progress kt-progress--sm">
																			<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																		<span class="kt-widget12__stat">
																			40%
																		</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="kt-widget12__chart" style="height:250px;">
															<canvas id="kt_chart_order_statistics"></canvas>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Order Statistics-->
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

	</body>

	<!-- end::Body -->
</html>
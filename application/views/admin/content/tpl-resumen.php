<div class="row">
	<div class="col-lg-4">

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
	<div class="col-lg-4">

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
	<div class="col-lg-4">

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


<div class="row">
	<div class="col-lg-6">

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
	<div class="col-lg-6">

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
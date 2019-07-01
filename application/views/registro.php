<section class="intro-header" style="position:relative; background-image: url(<?= asset_url('media/First-Frame.jpg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-lg-offset-2 col-md-12 col-md-offset-1">
				<div class="site-heading">
					<h1>REGISTRO DE DOCENTE</h1>
					<hr class="small">

				</div>
			</div>
		</div>
	</div>
</section>

<div class="container-registro">
	<div class="kt-portlet summary">
		<div class="kt-portlet__body ">
			<div class="kt-widget kt-widget--user-profile-3">
				<div class="kt-widget__top">
					<div class="kt-widget__media kt-hidden">
						<img src="./assets/media/users/100_1.jpg" alt="image">
					</div>
					<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
						JM
					</div>
					<div class="kt-widget__content" style="padding-left: 0;">
						<div class="kt-widget__head">
							<a href="#" class="kt-widget__username">
								<?php echo $docente['docNombres']." ".$docente['docApPaterno']." ".$docente['docApMaterno']; ?>
								<i class="flaticon2-correct kt-font-success"></i>
							</a>
							<div class="kt-widget__action">
								<button type="button" class="btn btn-brand btn-sm btn-upper">VALIDAR FICHA</button> <a href="<?php echo site_url('convocatorias/cerrar-sesion'); ?>" class="btn btn-danger btn-sm btn-upper">CERRAR SESIÓN</a>
							</div>
						</div>
						<div class="kt-widget__subhead">
							<a href="#"><i class="flaticon2-new-email"></i><?php echo $docente['docEmail']; ?></a>
							<a href="#" class="kt-hidden"><i class="flaticon2-calendar-3"></i>PR Manager </a>
							<a href="#" class="kt-hidden"><i class="flaticon2-placeholder"></i>Melbourne</a>
						</div>
						<div class="kt-widget__info kt-hidden">

							<div class="kt-widget__progress">
								<div class="kt-widget__text">
									Progreso
								</div>
								<div class="progress" style="height: 5px;width: 100%;">
									<div class="progress-bar kt-bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="kt-widget__stats">
									25%
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--begin::Portlet-->
	<div class="kt-portlet form_tabs">

		<div class="kt-portlet__body">

			<!--- -->
			<div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
				<div class="kt-grid__item">

					<!--begin: Form Wizard Nav -->
					<div class="kt-wizard-v3__nav">
						<div class="kt-wizard-v3__nav-items">
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>1</span> Personal
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>2</span> Academica
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>3</span> Cargos
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>4</span> Complementarios
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>5</span> Reconocimientos
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>6</span> Publicaciones
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
							<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
								<div class="kt-wizard-v3__nav-body">
									<div class="kt-wizard-v3__nav-label">
										<span>7</span> Curriculum
									</div>
									<div class="kt-wizard-v3__nav-bar"></div>
								</div>
							</a>
						</div>
					</div>

					<!--end: Form Wizard Nav -->
				</div>
				<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">

					<!--begin: Form Wizard Form-->
					<form class="kt-form" id="kt_form">

						<!--begin: Form Wizard Step 1-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
							<?php include('tabs/tpl-informacion-personal.php'); ?>
						</div>
						<!--begin: Form Wizard Step 2-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
							<?php include('tabs/tpl-formacion-academica.php'); ?>
						</div>
						<!--begin: Form Wizard Step 3-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
							<?php include('tabs/tpl-cargos-academicos.php'); ?>
						</div>
						<!--begin: Form Wizard Step 4-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
							<?php include('tabs/tpl-estudios-complementarios.php'); ?>
						</div>
						<!--begin: Form Wizard Step 5-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
							<?php include('tabs/tpl-reconocimientos-institucionales.php'); ?>
						</div>
						<!--begin: Form Wizard Step 6-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
							<?php include('tabs/tpl-investigaciones-publicaciones.php'); ?>
						</div>
						<!--begin: Form Wizard Step 7-->
						<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
							<?php include('tabs/tpl-curriculum.php'); ?>
						</div>				

						<!--begin: Form Actions -->
						<div class="kt-form__actions">
							<div class="inside_buttons_form">
								<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
									<i class="fas fa-arrow-left"></i> Anterior
								</div>

								<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
									Submit
								</div>
								<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
									Siguiente <i class="fas fa-arrow-right"></i>
								</div>
							</div>
						</div>
						<!--end: Form Actions -->

						<input type="hidden" name="docenteId" id="docenteId" value="<?php echo $docenteId; ?>">

					</form>

					<!--end: Form Wizard Form-->
				</div>
			</div>
			<!-- -->
		</div>

	</div>
	<!--end::Portlet-->
</div>


	<!-- end:: Page -->
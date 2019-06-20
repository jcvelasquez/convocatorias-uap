<?php $url = uri_string(); ?>


<header>
	<div class="container menu">

		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="<?= site_url('/'); ?>">
				<img src="<?= asset_url('media/logos/logo-4.png'); ?>" class="img-fluid d-inline-block align-middle">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent" >
				<ul class="navbar-nav">
					<li class="nav-item <?= ($url=='')? 'active' : ''; ?>">
						<a class="nav-link" href="<?= site_url('/'); ?> ">INICIO</a>
					</li>
					<li class="nav-item <?= ($url=='concurso-de-meritos')? 'active' : ''; ?>">
						<a class="nav-link" href="<?= site_url('concurso-de-meritos'); ?> ">CONCURSO DE MÉRITOS</a>
					</li>
					<li class="nav-item <?= ($url=='cronogramas')? 'active' : ''; ?>">
						<a class="nav-link" href="<?= site_url('cronogramas'); ?> ">CRONOGRAMAS</a>
					</li>
					<li class="nav-item <?= ($url=='requisitos')? 'active' : ''; ?>">
						<a class="nav-link" href="<?= site_url('requisitos'); ?>">REQUISITOS</a>
					</li>
					<li class="nav-item <?= ($url=='plazas')? 'active' : ''; ?>">
						<a class="nav-link" href="<?= site_url('plazas'); ?>">PLAZAS</a>
					</li>
					<li class="nav-item <?= ($url=='instrucciones')? 'active' : ''; ?>">
						<a class="nav-link" href="<?= site_url('instrucciones'); ?>">INSTRUCCIONES</a>
					</li>
				</ul>
			</div>
		</nav>	
	</div>

</header>
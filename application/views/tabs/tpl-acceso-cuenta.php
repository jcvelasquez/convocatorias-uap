<form action="#" id="form_inicio">


<div class="kt-section">
	<div class="kt-section__content kt-section__content--solid">
		<h4>SISTEMA DE CONVOCATORIAS CONVUAP v1.0 <small></small></h4>
	</div>
</div>

<div class="row">

	<div class="col-lg-6">
		<div class="input-group">
			<div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope
				"></i></span></div>
				<input id="docEmail" name="docEmail" type="text" class="form-control" placeholder="Ingrese un correo electrónico" title="Correo electrónico obligatorio" title="Ingrese un correo electrónico para registrarse">
			</div>
		</div>
		<div class="col-lg-6">
			<div class="input-group">
				<div class="input-group-prepend"><span class="input-group-text"><i class="la la-lock"></i></span></div>
				<input id="docClave" name="docClave" type="password" class="form-control" placeholder="Ingrese una clave" title="Ingrese una clave para registrarse">
			</div>
		</div>

		<div class="col-lg-6" style="margin-top: 20px;">
			<button id="iniciarDocente" type="submit" class="btn btn-brand">Iniciar sesión</button>
			<a href="<?php echo site_url('convocatorias'); ?>" class="btn">¿Es nuevo? Regístrese.</a>
			<a href="#" class="btn">¿Olvido su clave?</a>
		</div>

		<div class="col-lg-6" style="margin-top: 20px; text-align: right;">
			
		</div>

	</div>

</form>
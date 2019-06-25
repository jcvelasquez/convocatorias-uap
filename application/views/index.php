<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	
	<?php $this->load->view('header'); ?>

</head>
<body>

	<?php $this->load->view('menu'); ?>

    <?php $this->load->view($_view); ?>


    <?php $this->load->view('footer'); ?>

    <?php
			if (isset($js)) {
		foreach ($js as $file) {
			echo "<script src='".asset_url($file.'?'.uniqid())."'></script>";
		}
	}
	?>

<footer class="container-fluid mt-lg-3 mt-xl-5">
  <div class="container menu">
    <div class="row"> 
      
      <!-- COLUMNA IZQUIERDA -->
      <div class="col-11 col-lg-5">
        <div class="mr-md-3 bg-footer" id="margin">
          <div style="width: 100%;">
            <p id="title-footer">CONVOCATORIAS UAP</p>
            <p><i class="fa fa-phone"></i>&nbsp;&nbsp; (+51) 989180201</p>
            <p><i class="fa fa-envelope"></i>&nbsp;&nbsp; <a href="mailto:docentes@uap.edu.pe">docentes@uap.edu.pe</a></p>
            <p><i class="fa fa-map-marker"></i>&nbsp;&nbsp; <a href="https://posgrado.uap.edu.pe/contacto">Av. Cayetano Heredia 1044 Jesús Maria, Lima</a></p>
            <p> <a href="https://www.youtube.com/channel/UCdtZFjpkXFZUm8LyefsUviQ/" target="_blank"><i class="fa fa-youtube"></i></a>&nbsp;&nbsp; <a href="https://www.facebook.com/ComunidadUAP.oficial/" target="_blank"><i class="fa fa-facebook-f"></i></a></p>
            <p><a target="_blank" href="http://reclamos.uap.edu.pe/"><i class="fa fa-book"></i>&nbsp;&nbsp;Libro de Reclamaciones</a></p>
          </div>
        </div>
      </div>
      <!-- COLUMNA IZQUIERDA --> 
      
      <!-- COLUMNA DERECHA -->
      <div class="col-11 col-lg-2 kt-hidden" id="footer-bg" style="background-image: url(https://posgrado.uap.edu.pe/wp-content/themes/posgrado/assets/img/aguila-05.png);">
        <h5>PROGRAMAS</h5><div class="menu-menu-footer-1-container"><ul id="menu-menu-footer-1" class="menu"><li id="menu-item-844" class="menu-item menu-item-type-post_type_archive menu-item-object-maestrias menu-item-844"><a href="https://posgrado.uap.edu.pe/maestrias/">Maestrias</a></li>
<li id="menu-item-845" class="menu-item menu-item-type-post_type_archive menu-item-object-doctorados menu-item-845"><a href="https://posgrado.uap.edu.pe/doctorados/">Doctorados</a></li>
</ul></div>      </div>
      <!-- COLUMNA DERECHA --> 
      
      <!-- COLUMNA DERECHA -->
      <div class="col-11 col-lg-2" id="footer-bg" style="background-image: url(https://posgrado.uap.edu.pe/wp-content/themes/posgrado/assets/img/aguila-05.png);">
              </div>
      <!-- COLUMNA DERECHA --> 
      
      <!-- COLUMNA DERECHA -->
      <div class="col-11 col-lg-3" id="footer-bg" style="background-image: url(https://posgrado.uap.edu.pe/wp-content/themes/posgrado/assets/img/aguila-05.png);">
              </div>
      <!-- COLUMNA DERECHA --> 
      
    </div>
  </div>
</footer>

</body>
</html>



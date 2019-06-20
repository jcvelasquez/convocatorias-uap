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

</body>
</html>



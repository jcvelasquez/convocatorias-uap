<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function resumen()
	{
		$data['_view'] = 'admin/content/tpl-resumen';

		$this->load->view('admin/index', $data);
	}

	/*public function convocatorias()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}*/

	public function sedes()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}


	public function listar_sedes()
	{
		$data['_view'] = 'admin/content/tpl-sedes';

		$this->load->view('admin/index', $data);
	}



}

?>
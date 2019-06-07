<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function resumen()
	{
		$data['_view'] = 'admin/content/tpl-resumen';

		$this->load->view('admin/index', $data);
	}

	public function convocatorias()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}

	public function sedes()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}

	public function convocatorias_detalle($id_convocatoria)
	{

		$this->load->model('Convocatorias_model');
	    //$convocatoria =  $this->Convocatoria_model->get_plato_by_slug($id_convocatoria);
	    
	    //$id = $convocatoria['id'];

	    //$data['convocatoria'] = $convocatoria;

		$data['_view'] = 'admin/content/tpl-convocatorias-detalle';

		$this->load->view('admin/index', $data);
	}


	public function listar_sedes()
	{
		$data['_view'] = 'admin/content/tpl-sedes';

		$this->load->view('admin/index', $data);
	}



}

?>
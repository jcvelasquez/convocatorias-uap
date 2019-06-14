<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sedes extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');

		$this->load->model('Sedes_model');	

    }


	public function index()
	{

		$data['_view'] = 'admin/content/tpl-sedes';

		$this->load->view('admin/index', $data);
	}

	public function listar()
	{

		$sedes = $this->Sedes_model->get_all_sedes();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($sedes));

	}



	public function agregar()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}

	public function actualizar($id_convocatoria)
	{

		$this->load->model('Convocatorias_model');

		$data['_view'] = 'admin/content/tpl-convocatorias-detalle';

		$this->load->view('admin/index', $data);
	}

	public function eliminar()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}




}

?>
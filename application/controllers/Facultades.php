<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facultades extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Facultades_model');	

    }


	public function index()
	{

		$data['_view'] = 'admin/content/tpl-facultades';
		$data['js'] = array('js/facultades.js');

		$this->load->view('admin/index', $data);
	}

	public function listar()
	{

		$facultades = $this->Facultades_model->get_all_facultades();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($facultades));

	}

	public function listar_select()
	{

		$escuelas = $this->Escuelas_model->get_all_escuelas_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($escuelas));

	}


	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';


		$data['sedes'] = $this->Sedes_model->get_all_sedes_select();
		$data['cursos'] = $this->Cursos_model->get_all_cursos_select();

		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}


	public function eliminar()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}

	public function get_escuela_x_id(){

		$escuelaId = $this->input->post('escuelaId');

		$data = $this->Escuelas_model->get_escuela_by_id($escuelaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

    }




}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grados extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Grados_Titulos_model');	

    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Grados_Titulos_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($grados));

	}

	public function listar_select()
	{

		$escuelas = $this->Grados_Titulos_model->get_all_escuelas_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($escuelas));

	}


	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';


		//$data['sedes'] = $this->Sedes_model->get_all_sedes_select();
		//$data['cursos'] = $this->Cursos_model->get_all_cursos_select();

		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}

	public function agregar(){

		$params = array(
			'docenteId' => $this->input->post('docenteId'),
			'gradAcademico' => $this->input->post('gradAcademico'),
			'gradEspecialidad' => $this->input->post('gradEspecialidad'),
			'gradInstitucion' => $this->input->post('gradInstitucion')
		);

		$data = $this->Grados_Titulos_model->agregar_grados($params);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}


	public function eliminar()
	{

		$gradosId = $this->input->post('gradosId');
		$data = $this->Grados_Titulos_model->eliminar_grados($gradosId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}

	public function actualizar(){

	}
/*
	public function get_escuela_x_id(){

		$escuelaId = $this->input->post('escuelaId');

		$data = $this->Escuelas_model->get_escuela_by_id($escuelaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

    }
*/



}

?>
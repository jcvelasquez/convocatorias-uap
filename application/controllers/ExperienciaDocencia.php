<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExperienciaDocencia extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Experiencia_Docencia_model');	


    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Experiencia_Docencia_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($grados));

	}

	/*public function listar_select()
	{

		$escuelas = $this->Grados_Titulos_model->get_all_escuelas_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($escuelas));

	}*/


	public function agregar_editar($escuelaId)
	{

		/*$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';


		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);*/
	}

	

    public function agregar(){

		$params = array(
			'docenteId' => $this->input->post('docenteId'),
			'expDocInstitucion' => $this->input->post('expDocInstitucion'),
			'cargoDocencia' => $this->input->post('cargoDocencia'),
			'tipoConDocencia' => $this->input->post('tipoConDocencia'),
			'expDocFecInicio' => $this->input->post('expDocFecInicio'),
			'expDocFecFin' => $this->input->post('expDocFecFin'),
			'expDocHastaActual' => $this->input->post('expDocHastaActual')
		);

		$data = $this->Experiencia_Docencia_model->agregar_experiencia_docencia($params);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}


	public function eliminar()
	{

		$experienciaId = $this->input->post('experienciaId');
		$data = $this->Experiencia_Docencia_model->eliminar_experiencia_docencia($experienciaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}




}

?>
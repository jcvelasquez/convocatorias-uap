<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExperienciaProfesional extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Experiencia_Profesional_model');	


    }


	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Experiencia_Profesional_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($grados));

	}

	


	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';
		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}

    public function agregar(){

    	$especFecInicio = formatDatepickerToMySql( $this->input->post('especFecInicio') );
    	$especFecFin = formatDatepickerToMySql( $this->input->post('especFecFin') );

		$params = array(
			'docenteId' => $this->input->post('docenteId'),
			'especInstitucion' => $this->input->post('especInstitucion'),
			'especTipoInstitucion' => $this->input->post('especTipoInstitucion'),
			'especCargo' => $this->input->post('especCargo'),
			'especFecInicio' => $especFecInicio,
			'especFecFin' => $especFecFin,
			'especHastaFecha' => $this->input->post('especHastaFecha')
		);

		$data = $this->Experiencia_Profesional_model->agregar_experiencia_profesional($params);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}


	public function eliminar()
	{

		$especializacionId = $this->input->post('especializacionId');
		$data = $this->Experiencia_Profesional_model->eliminar_experiencia_profesional($especializacionId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}




}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesorias extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Asesoria_Tesis_model');	


    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$asesorias = $this->Asesoria_Tesis_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($asesorias));

	}


	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';
		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}


	public function agregar(){

		$params = array(
			'docenteId' => $this->input->post('docenteId'),
			'tesTipo' => $this->input->post('tesTipo'),
			'tesNivel' => $this->input->post('tesNivel'),
			'tesNroResolucion' => $this->input->post('tesNroResolucion'),
			'tesNombreTesis' => $this->input->post('tesNombreTesis')
		);

		$data = $this->Asesoria_Tesis_model->agregar_asesoria_tesis($params);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}


	public function eliminar()
	{

		$tesisId = $this->input->post('tesisId');
		$data = $this->Asesoria_Tesis_model->eliminar_asesoria_tesis($tesisId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}



}

?>
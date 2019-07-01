<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Cargos_Academicos_model');	

    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$cargos = $this->Cargos_Academicos_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($cargos));

	}
/*
	public function listar_select()
	{

		$escuelas = $this->Grados_Titulos_model->get_all_escuelas_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($escuelas));

	}
*/

	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';
		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}

	public function formatDatepickerToMySql($date) {

        if ($date != FALSE) {
	        $dateArr = explode("/", $date);
	        $newDate = $dateArr[2] . '-' . $dateArr[1] . '-' . $dateArr[0];
	        return $newDate;
	    }

	    return FALSE;
	
	}

	public function agregar(){

    	$carAcadFecInicio = $this->formatDatepickerToMySql( $this->input->post('carAcadFecInicio') );
    	$carAcadFecFin = $this->formatDatepickerToMySql( $this->input->post('carAcadFecFin') );

		$params = array(
			'docenteId' => $this->input->post('docenteId'),
			'carAcadNomInstitucion' => $this->input->post('carAcadNomInstitucion'),
			'carAcadArea' => $this->input->post('carAcadArea'),
			'carAcadFecInicio' => $carAcadFecInicio,
			'carAcadFecFin' => $carAcadFecFin,
			'carAcadeHastaFecha' => $this->input->post('carAcadeHastaFecha')
		);

		$data = $this->Cargos_Academicos_model->agregar_cargos_academicos($params);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}


	public function eliminar()
	{

		$cargosId = $this->input->post('cargosId');
		$data = $this->Cargos_Academicos_model->eliminar_cargos_academicos($cargosId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}



}

?>
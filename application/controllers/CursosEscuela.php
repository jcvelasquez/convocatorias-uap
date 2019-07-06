<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CursosEscuela extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Cursos_Escuelas_model');	

    }


	public function agregar_curso()
	{

		$cursos_cursoId = $this->input->post('cursos_cursoId');
		$escuelas_escuelaId = $this->input->post('escuelas_escuelaId');

		$params = array('cursos_cursoId' => $cursos_cursoId, 'escuelas_escuelaId' => $escuelas_escuelaId);

		$data = $this->Cursos_Escuelas_model->agregar_cursos_x_escuela($params);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}


	public function eliminar_curso()
	{

		$cursos_cursoId = $this->input->post('cursos_cursoId');
		$escuelas_escuelaId = $this->input->post('escuelas_escuelaId');

		$data = $this->Cursos_Escuelas_model->eliminar_curso_x_escuelas($cursos_cursoId, $escuelas_escuelaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));
	}




}

?>
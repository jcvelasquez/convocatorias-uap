<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escuelas extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Sedes_model');	
		$this->load->model('Cursos_model');
		$this->load->model('Escuelas_model');	
		$this->load->model('Facultades_model');
		$this->load->model('Cursos_Escuelas_model');


    }


	public function index()
	{

		$data['_view'] = 'admin/content/tpl-escuelas';

		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}

	public function listar()
	{

		$escuelas = $this->Escuelas_model->get_all_escuelas();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($escuelas));

	}

	public function get_escuela_x_id(){

		$escuelaId = $this->input->post('escuelaId');

		$data = $this->Escuelas_model->get_escuela_by_id($escuelaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

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
		$data['facultades'] = $this->Facultades_model->get_all_facultades_select();
		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}

	public function agregar()
	{

		$primaryKey = $this->input->post('primaryKey');
		$sedes_sedeId = $this->input->post('sedes_sedeId');
		$facultades_facultadId = $this->input->post('facultades_facultadId');
		$escuelaNombre = $this->input->post('escuelaNombre');
		$escuelaEstado = $this->input->post('escuelaEstado');

		$params = array('sedes_sedeId' => $sedes_sedeId,
						'facultades_facultadId' => $facultades_facultadId,
						'escuelaNombre' => $escuelaNombre,
						'escuelaEstado' => $escuelaEstado); 


		$data = $this->Escuelas_model->agregar_escuelas($params);

		/*if($primaryKey == "nuevo"){

			

			foreach ($cursosXescuelas as $curso) {

				$params = array('cursos_cursoId' => $curso->id,
							'escuelas_escuelaId' => $idnew); 

				$cursos = $this->Cursos_Escuelas_model->agregar_cursos_x_escuela($primaryKey, $params);
			}

		}else{

			$data = $this->Escuelas_model->actualizar_escuelas($primaryKey, $params);

			foreach ($cursosXescuelas as $curso) {

				$params = array('cursos_cursoId' => $curso->id,
							'escuelas_escuelaId' => $primaryKey); 

				$cursos = $this->Cursos_Escuelas_model->agregar_cursos_x_escuela($primaryKey, $params);
			}

			
		}*/

		
		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));
	}


	public function eliminar()
	{
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);
	}


}

?>
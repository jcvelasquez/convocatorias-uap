<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convocatorias extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');

		$this->load->model('Convocatorias_model');
		$this->load->model('Sedes_model');	
		$this->load->model('Cursos_model');		

		

    }


	public function index()
	{

		$data['js'] = array('js/convocatorias.js');
		$data['_view'] = 'admin/content/tpl-convocatorias';

		$this->load->view('admin/index', $data);

	}

	public function listar()
	{

		$convocatorias = $this->Convocatorias_model->get_all_convocatorias();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($convocatorias));

	}

	public function agregar_editar($convocatoriaId)
	{

		$data['convocatoriaId'] = $convocatoriaId;
		$data['_view'] = 'admin/content/tpl-convocatorias-detalle';


		$data['sedes'] = $this->Sedes_model->get_all_sedes_select();
		$data['cursos'] = $this->Cursos_model->get_all_cursos_select();

		$data['js'] = array('js/convocatorias.js');

		$this->load->view('admin/index', $data);
	}

/*

	public function listar_select()
	{

		$cursos = $this->Cursos_model->get_all_cursos_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($cursos));

	}



	public function agregar()
	{
		$data['_view'] = 'admin/content/tpl-cursos-agregar';
		$data['js'] = array('js/cursos.js');

		$this->load->view('admin/index', $data);
	}

	public function actualizar($cursoId)
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

*/


}

?>
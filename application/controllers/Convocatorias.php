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

	public function listar_para_docentes()
	{

		//$data['convocatorias'] = $this->Convocatorias_model->get_all_convocatorias();
		$data['js'] = array('js/convocatorias.js');

		$this->load->view('convocatorias', $data);

		/*return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($convocatorias));*/

	}



	public function seleccionar_convocatoria($convocatoriaId)
	{

		$convocatoria = $this->Convocatorias_model->get_convocatorias_by_id($convocatoriaId);

		$this->session->set_userdata('convocatoria',$convocatoria);

		redirect('bienvenidos');
		
		//$data['_view'] = 'admin/content/tpl-convocatorias-detalle';


		//$data['sedes'] = $this->Sedes_model->get_all_sedes_select();
		//$data['cursos'] = $this->Cursos_model->get_all_cursos_select();

		//$data['js'] = array('js/convocatorias.js');

		//$this->load->view('admin/index', $data);
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

	public function get_convocatoria_x_id(){

		$convocatoriaId = $this->input->post('convocatoriaId');

		$data = $this->Convocatorias_model->get_convocatorias_by_id($convocatoriaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

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
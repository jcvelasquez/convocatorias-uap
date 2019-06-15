<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');

		$this->load->model('Usuarios_model');	

    }


	public function index()
	{

		$data['_view'] = 'admin/content/tpl-usuarios';

		$data['js'] = array('js/usuarios.js');

		$this->load->view('admin/index', $data);
	}

	public function listar()
	{

		$usuarios = $this->Usuarios_model->get_all_usuarios();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($usuarios));

	}

	public function listar_select()
	{

		$usuarios = $this->Usuarios_model->get_all_usuarios_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($usuarios));

	}



	public function agregar_editar($usuarioId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-usuarios';


		$data['sedes'] = $this->Sedes_model->get_all_sedes_select();
		//$data['roles'] = $this->Roles_model->get_all_roles_select();
		

		$data['js'] = array('js/usuarios.js');

		$this->load->view('admin/index', $data);
	}

/*

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
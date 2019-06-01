<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Registro_model');	
        $this->load->model('Departamento_model');	
		$this->load->model('Provincia_model');	
		$this->load->model('Distrito_model');
        $this->load->model('Docentes_model');
		$this->load->model('Indicadores_model');	
		

    }

	public function index()
	{

		$docente = $this->session->userdata('docente');

		if(!isset($docente)){
			redirect('/','refresh');
		}else{

			$docenteId = $this->session->userdata('docente')['docenteId'];				

			$data['docente'] = $this->Docentes_model->listar_docente_por_id($docenteId);
	     	$data['cuentaId'] =  $this->Docentes_model->generarCuentaID();
	     	$data['departamentos'] = $this->Departamento_model->get_all_departamentos();

	     	$data['randomRepeaterID'] = $this->Registro_model->randomRepeaterID();

	     	//SOLO SI EXISTE DEPARTAMENTO SELECCIONADO
	     	$idDepa = $data['docente']['ubdepartamento_idDepa'];
	     	$idProv = $data['docente']['ubprovincia_idProv'];
	     	$idDist = $data['docente']['ubdistrito_idDist'];

	     	if(isset($idProv) && $idProv != 0)
	     		$data['provincias'] = $this->Provincia_model->get_provincia_by_departamento($idDepa);

	     	if(isset($idDist) && $idDist != 0)
	     		$data['distritos'] = $this->Distrito_model->get_distritos_by_provincia($idProv);

			$this->load->view('registro', $data);

		} 
	
		
	}

	public function generarRepeaterId(){

		$randomRepeaterID = $this->Registro_model->randomRepeaterID();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($randomRepeaterID));


	}
	//RANDOM PARA LOS REPEATERS
     	

	public function grabar_campo(){

		$campo      = $this->input->post('campo');
		$valor      = $this->input->post('valor');
		$tabla      = $this->input->post('tabla');
		$docenteId  = $this->input->post('docenteId');
		$primarykey = $this->input->post('primarykey');

		$params     = array( $campo => $valor);

		//SELECCIONAR QUE TABLA SE VA A REGISTRAR
		if($tabla == "docentes"){

			$result = $this->Docentes_model->actualizar($params, $docenteId);

		}else if($tabla == "indicadores"){

			$params['docentes_docenteId'] = $docenteId;

			$result = $this->Indicadores_model->actualizar($params, $docenteId);

		} 

		//

		//COMPRUEBO SI EL EMAIL HA SIDO USADO ANTES
		if($result){

			return $this->output
					->set_content_type('application/json')
					->set_output(json_encode(array(
						'success' => true,
						'message' => "El campo se guardo correctamente."
					)));

		}else{

			return $this->output
					->set_content_type('application/json')
					->set_output(json_encode(array(
						'success' => false,
						'message' => "Hubo un error en el campo a guardar."
					)));

		}
	
		
	}	


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adicionales extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Adicionales_model');	

	}

	public function listar_archivos()
	{

		$docenteId = $this->input->post('docenteId');
		$adicionales = $this->Adicionales_model->listar_adicionales_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($adicionales));

	}

	public function agregar(){

		$fieldToUpdate = $this->input->post('fieldToUpdate');
		$pathFile = $this->input->post('pathFile');

		$config['upload_path'] = $pathFile;
		$config['allowed_types']='gif|jpg|png|png|pdf|zip|rar|word';
		$config['remove_spaces'] = TRUE;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('fileToUpload')){

			$results = array('status' => 'error', 'message' => stripslashes($this->upload->display_errors()));

			return $this->output
			->set_content_type('application/json')
			->set_output(json_encode($results));

		}else{

			$data = array('upload_data' => $this->upload->data());

			$fileToUpload = $data['upload_data']['file_name']; 

			$docenteId = $this->input->post('docenteId');
			

			$data = $this->Adicionales_model->actualizar(array('docentes_docenteId' => $docenteId, $fieldToUpdate => $fileToUpload), $docenteId);

			$results = array('status' => 'success', 'newfilename' => $fileToUpload, 'message' => 'El archivo se cargó satisfactoriamente');

			return $this->output
			->set_content_type('application/json')
			->set_output(json_encode($results));

		}

	}



	public function eliminar()
	{
		
		$docenteId = $this->input->post('docenteId');
		$archivo = $this->input->post('archivo');
		$fieldToUpdate = $this->input->post('fieldToUpdate');
		$pathFile = $this->input->post('pathFile');

		$archivo = $pathFile.$archivo;

		if(unlink($archivo)) {

			$data = $this->Adicionales_model->actualizar(array($fieldToUpdate => null), $docenteId);
			$results = array('status' => 'success', 'data' => $data);

		}else{
			$results = array('status' => 'error', 'data' => 'No se puedo eliminar el archivo, deben ser unos permisos CHMOD');
		}

		return $this->output
		->set_content_type('application/json')
		->set_output(json_encode($results));

	}



}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adicionales extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Adicionales_model');	

	}

	public function listar_archivo_sunedu()
	{

		$docenteId = $this->input->post('docenteId');

		$adicionales = $this->Adicionales_model->listar_adicionales_por_docente(20);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($adicionales));

		/*$target_dir = "./assets/uploads/adicionales/";


		$file_list = array();

		  // Target directory
		$dir = $target_dir;

		if (is_dir($dir)){

			if ($dh = opendir($dir)){

		      // Read files
				while (($file = readdir($dh)) !== false){

					if($file != '' && $file != '.' && $file != '..'){

						$file_path = $target_dir.$file;

						if(!is_dir($file_path)){

							$size = filesize($file_path);

							$file_list[] = array('name'=>$file,'size'=>$size,'path'=>$file_path);

						}
					}

				}

				closedir($dh);
			}
		}


		return $this->output->set_content_type('application/json')
							->set_output(json_encode($file_list));
		*/

	}



	


	public function agregar_sunedu(){

		$config['upload_path'] = "./assets/uploads/adicionales";
		$config['max_size']     = '4096';
		$config['allowed_types']='gif|jpg|png|png|pdf';
		$config['remove_spaces'] = TRUE;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('archivoSunedu')){

			$error = array('status' => 'error', 'error' => stripslashes($this->upload->display_errors()));

			return $this->output
			->set_content_type('application/json')
			->set_output(json_encode($error));

		}else{

			$data = array('upload_data' => $this->upload->data());

			$archivoSunedu = $data['upload_data']['file_name']; 
			$docenteId = $this->input->post('docenteId');

			$data = $this->Adicionales_model->actualizar(array('archivoSunedu' => $archivoSunedu), $docenteId);

			return $this->output
			->set_content_type('application/json')
			->set_output(json_encode($data));

		}


	}

	public function eliminar()
	{
		
		$investigacionesId = $this->input->post('investigacionesId');
		$data = $this->Adicionales_model->eliminar_investigaciones($investigacionesId);

		return $this->output
		->set_content_type('application/json')
		->set_output(json_encode($data));

	}



}

?>
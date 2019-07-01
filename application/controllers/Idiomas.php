<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idiomas extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');

		$this->load->model('Idiomas_model');	
		$this->load->library('upload');


		

    }
	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Idiomas_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($grados));

	}

	public function listar_profesional()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Experiencia_Profesional_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($grados));

	}

	public function listar_select()
	{

		$escuelas = $this->Grados_Titulos_model->get_all_escuelas_select();

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($escuelas));

	}


	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';
		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}


    public function agregar(){

    	$config['upload_path'] = "./assets/uploads/idiomas";
        $config['allowed_types']='gif|jpg|png|png|pdf';
        $config['max_size']     = '4096';
        $config['encrypt_name'] = TRUE;
         
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('idioRutaArchivoCertificacion')){

            $error = array('status' => 'error', 'error' => $this->upload->display_errors());

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($error));

       }else{

            $data = array('upload_data' => $this->upload->data());
 
            $idioRutaArchivoCertificacion = $data['upload_data']['file_name']; 

            $idioFechaCertificacion = formatDatepickerToMySql( $this->input->post('idioFechaCertificacion') );
    
             
            $params = array(
				'docenteId' => $this->input->post('docenteId'),
				'idioNombre' => $this->input->post('idioNombre'),
				'idioCentroEstudios' => $this->input->post('idioCentroEstudios'),
				'idioNivel' => $this->input->post('idioNivel'),
				'idioFechaCertificacion' => $idioFechaCertificacion,
				'idioRutaArchivoCertificacion' => $idioRutaArchivoCertificacion,
			);

			$data = $this->Idiomas_model->agregar_idiomas($params);

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($params));

        }

 
     }

     public function eliminar()
	{
		
		$idiomaId = $this->input->post('idiomaId');
		$data = $this->Idiomas_model->eliminar_idiomas($idiomaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}





}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reconocimientos extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');
		$this->load->library('upload');

		$this->load->model('Reconocimientos_Institucionales_model');	


    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Reconocimientos_Institucionales_model->listar_por_docente($docenteId);

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


		//$data['sedes'] = $this->Sedes_model->get_all_sedes_select();
		//$data['cursos'] = $this->Cursos_model->get_all_cursos_select();

		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}


	public function agregar(){

    	$config['upload_path'] = "./assets/uploads/reconocimientos";
    	$config['max_size']     = '4096';
        $config['allowed_types']='gif|jpg|png|png|pdf';
        $config['encrypt_name'] = TRUE;
         
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('recRutaArchivoCertificacion')){

            $error = array('status' => 'error', 'error' => stripslashes($this->upload->display_errors()));

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($error));

       }else{

            $data = array('upload_data' => $this->upload->data());
 
            $recRutaArchivoCertificacion = $data['upload_data']['file_name']; 

            $recInstFecha = formatDatepickerToMySql( $this->input->post('recInstFecha') );
    
             
            $params = array(
				'docenteId' => $this->input->post('docenteId'),
				'recInstPremio' => $this->input->post('recInstPremio'),
				'recInstitucion' => $this->input->post('recInstitucion'),
				'recInstFecha' => $recInstFecha,
				'recRutaArchivoCertificacion' => $recRutaArchivoCertificacion,
			);

			$data = $this->Reconocimientos_Institucionales_model->agregar_reconocimientos_institucionales($params);

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($data));

        }

 
     }

     public function eliminar()
	{
		
		$reconocimientoId = $this->input->post('reconocimientoId');
		$data = $this->Reconocimientos_Institucionales_model->eliminar_reconocimientos_institucionales($reconocimientoId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}




}

?>
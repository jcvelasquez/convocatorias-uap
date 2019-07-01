<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Herramientas extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->load->helper('url');
		//$this->load->helper('form');
		//$this->load->library('session');
		$this->load->library('upload');

		$this->load->model('Herramientas_Informaticas_model');	


    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$grados = $this->Herramientas_Informaticas_model->listar_por_docente($docenteId);

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

    	$config['upload_path'] = "./assets/uploads/herramientas";
    	$config['max_size']     = '4096';
        $config['allowed_types']='gif|jpg|png|png|pdf';
        $config['encrypt_name'] = TRUE;
         
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('inforRutaArchivoCertificacion')){

            $error = array('status' => 'error', 'error' => stripslashes($this->upload->display_errors()));

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($error));

       }else{

            $data = array('upload_data' => $this->upload->data());
 
            $inforRutaArchivoCertificacion = $data['upload_data']['file_name']; 

            $inforFechaCertificacion = formatDatepickerToMySql( $this->input->post('inforFechaCertificacion') );
    
             
            $params = array(
				'docenteId' => $this->input->post('docenteId'),
				'inforEspecialidadCurso' => $this->input->post('inforEspecialidadCurso'),
				'inforCentroEstudio' => $this->input->post('inforCentroEstudio'),
				'inforNivel' => $this->input->post('inforNivel'),
				'inforFechaCertificacion' => $inforFechaCertificacion,
				'inforRutaArchivoCertificacion' => $inforRutaArchivoCertificacion,
			);

			$data = $this->Herramientas_Informaticas_model->agregar_herramientas_informaticas($params);

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($data));

        }

 
     }

     public function eliminar()
	{
		
		$informaticaId = $this->input->post('informaticaId');
		$data = $this->Herramientas_Informaticas_model->eliminar_herramientas_informaticas($informaticaId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}




}

?>
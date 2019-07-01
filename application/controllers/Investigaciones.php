<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investigaciones extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->library('upload');
		$this->load->model('Investigaciones_Publicaciones_model');	

    }

	public function listar()
	{

		$docenteId = $this->input->post('docenteId');

		$investigaciones = $this->Investigaciones_Publicaciones_model->listar_por_docente($docenteId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($investigaciones));

	}



	public function agregar_editar($escuelaId)
	{

		$data['escuelaId'] = $escuelaId;
		$data['_view'] = 'admin/content/tpl-escuelas-detalle';
		$data['js'] = array('js/escuelas.js');

		$this->load->view('admin/index', $data);
	}


	public function agregar(){

    	$config['upload_path'] = "./assets/uploads/investigaciones";
    	$config['max_size']     = '4096';
        $config['allowed_types']='gif|jpg|png|png|pdf';
        $config['encrypt_name'] = TRUE;
         
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('invesRutaArchivoInvestigacion')){

            $error = array('status' => 'error', 'error' => stripslashes($this->upload->display_errors()));

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($error));

       }else{

            $data = array('upload_data' => $this->upload->data());
 
            $invesRutaArchivoInvestigacion = $data['upload_data']['file_name']; 

            $invesFecha = formatDatepickerToMySql( $this->input->post('invesFecha') );
    
             
            $params = array(
				'docenteId' => $this->input->post('docenteId'),
				'invesTitulo' => $this->input->post('invesTitulo'),
				'invesFecha' => $invesFecha,
				'invesTipoPublicacion' => $this->input->post('invesTipoPublicacion'),
				'invesNroOrcid' => $this->input->post('invesNroOrcid'),
				'invesRutaArchivoInvestigacion' => $invesRutaArchivoInvestigacion
			);

			$data = $this->Investigaciones_Publicaciones_model->agregar_investigaciones($params);

			return $this->output
						->set_content_type('application/json')
						->set_output(json_encode($data));

        }

 
     }

    public function eliminar()
	{
		
		$investigacionesId = $this->input->post('investigacionesId');
		$data = $this->Investigaciones_Publicaciones_model->eliminar_investigaciones($investigacionesId);

		return $this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));

	}



}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bienvenidos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Bienvenidos_model');
		$this->load->model('Docentes_model');

	}

	

	public function crearcuentaDocente()
	{

		
	}

	public function crear_cuenta_nuevo()
	{	
		
		$docEmail = $this->input->post('docEmail');
		$docClave = $this->input->post('docClave');

		$params = array(
			'docEmail' => $docEmail,
			'docClave' => $docClave,
			'ubdepartamento_idDepa' => 0,
			'ubprovincia_idProv' => 0,
			'ubdistrito_idDist' => 0,
			'docRegistradoPor' => 'WEB',
			'docCreacion' => date("Y-m-d H:i:s"),
			'docToken' => $this->token()
		);

		//COMPRUEBO SI EL EMAIL HA SIDO USADO ANTES
		$docente = $this->Bienvenidos_model->check_docente($params);	


		if (isset($docente['is_used_email']) && $docente['is_used_email'] == true) {

			return $this->output
			->set_content_type('application/json')
			->set_output(json_encode(array(
				'success' => false,
				'message' => "El correo electronico ingresado ya esta siendo usado por una cuenta existente."
			)));

		}else{

			$this->session->set_userdata('docente',$docente);
            //$this->email_welcome($docente['correo']);

			return $this->output
			->set_content_type('application/json')
			->set_output(json_encode(array(
				'success' => true,
				'message' => "Se registró correctamente su cuenta, la ventana se redireccionará automaticamente..."
			)));

		}
		
	}

	private function email_welcome($correo){

	      /*$this->load->library('email');
	      $this->email->initialize(array(
	        'protocol' => 'smtp',
	        'smtp_host' => 'smtp.sendgrid.net',
	        'smtp_user' => 'foodbox',
	        'smtp_pass' => 'Foodbox1234@',
	        'smtp_port' => 587,
	        'mailtype' => 'html',
	        'crlf' => "\r\n",
	        'newline' => "\r\n"
	      ));

	      $this->email->from('hola@foodbox.pe', 'FoodBox');
	      $this->email->to($correo);
	      // $this->email->bcc('martina.barrantes@121rm.com');
	      $this->email->subject('Bienvenido a Foodbox');

	      $file = file_get_contents(site_url('resources/emailing_template/bienvenida.html'),true);
	      $file = str_replace('{{PATH}}',base_url(), $file);

	      $this->email->message($file);
	      if($this->email->send()){
	        return TRUE;
	    }*/

	}

	private function token(){
		return sha1(uniqid(rand(),true));
	}

    /*
     * MÓDULO CERRAR SESIÓN
     */

    function iniciar_sesion(){

    	//SI EXISTE SESION REDIRIGIR
    	$docente = $this->session->userdata('docente');

		if(isset($docente)){

			redirect('convocatorias/registro');

		}else{

			if($_POST){

				$docEmail = $this->input->post('docEmail');
				$docClave = $this->input->post('docClave');

				$docente = $this->Bienvenidos_model->authentication($docEmail, $docClave);

		        if ($docente) {

			        $this->session->set_userdata('docente',$docente);
			        
			        return $this->output->set_content_type('application/json')
										->set_output(json_encode(array(
											'success' => true,
											'message' => "Inicio la sesión a su cuenta correctamente, la ventana se redireccionará automaticamente..."
										)));

		        }else{

		        	return $this->output->set_content_type('application/json')
										->set_output(json_encode(array(
											'success' => false,
											'message' => "El correo electronico o la clave son inválidos."
										)));

		        }	

			}

			//CARGO VISTA DE INICIO DE SESION
			$data['_view'] = 'acceso';
			$data['js'] = array('js/acceso.js');
			
			$this->load->view('index', $data);

		} 		

    }

    function cerrar_sesion(){
    	$this->session->unset_userdata('docente');
    	redirect('convocatorias/iniciar-sesion');
    }

	function mantener_sesion(){
    	//$this->session->unset_userdata('docente');
    	//redirect('convocatorias/iniciar-sesion');
    }

    function concurso()
	{
		$data['_view'] = 'concurso-de-meritos';
		//$data['js'] = array('js/facultades.js');
		$this->load->view('index', $data);
	}

	function requisitos()
	{
		$data['_view'] = 'requisitos';
		//$data['js'] = array('js/facultades.js');
		$this->load->view('index', $data);
	}

	function plazas()
	{
		$data['_view'] = 'plazas';
		//$data['js'] = array('js/facultades.js');
		$this->load->view('index', $data);
	}

	function inicio()
	{
		$data['_view'] = 'inicio';
		$this->load->view('index', $data);
	}

	function cronogramas()
	{
		$data['_view'] = 'cronogramas';
		$this->load->view('index', $data);
	}

	
	function instrucciones()
	{
		$data['_view'] = 'instrucciones';
		//$data['js'] = array('js/facultades.js');
		$this->load->view('index', $data);
	}

	


    


}

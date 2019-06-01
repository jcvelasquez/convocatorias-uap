<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provincia extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('Provincia_model');
    }

    public function listar_provincias_x_depa(){

      $idDepa = $this->input->post('idDepa');
         
      $data = $this->Provincia_model->get_provincia_by_departamento($idDepa);
      echo json_encode($data);
    
    }


}


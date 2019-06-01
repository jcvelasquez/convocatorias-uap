<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distrito extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('Distrito_model');
    }

    public function listar_distritos_x_prov(){

      $idProv = $this->input->post('idProv');
         
      $data = $this->Distrito_model->get_distritos_by_provincia($idProv);
      echo json_encode($data);
    
    }


}


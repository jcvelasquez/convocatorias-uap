<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('Docentes_model');
    }

    public function listar(){
      $data = $this->Docentes_model->listar();
      echo json_encode($data);
    }

    public function agregar(){

        $params = array(
            'docNroDocumento' => $this->input->post('docNroDocumento'),
            'docNacionalidad' => $this->input->post('docNacionalidad'),
            'docClave' => $this->input->post('docClave'),
            'docApPaterno' => $this->input->post('docApPaterno'),
            'docApMaterno' => $this->input->post('docApMaterno'),
            'docNombres' => $this->input->post('docNombres'),
            'docGenero' => $this->input->post('docGenero'),
            'docEmail' => $this->input->post('docEmail'),
            'docCelular' => $this->input->post('docCelular'),
            'docTelFijo' => $this->input->post('docTelFijo'),
            'docFecNacimiento' => $this->input->post('docFecNacimiento'),
            'docDepartamento' => $this->input->post('docDepartamento'),
            'docProvincia' => $this->input->post('docProvincia'),
            'docDistrito' => $this->input->post('docDistrito'),
            'docDireccion' => $this->input->post('docDireccion'),
            'docModalidad' => $this->input->post('docModalidad'),
            'tienePeriodoEjercido' => $this->input->post('tienePeriodoEjercido'),
            'docPeriodoEjercidoDesde' => $this->input->post('docPeriodoEjercidoDesde'),
            'docPeriodoEjercidoHasta' => $this->input->post('docPeriodoEjercidoHasta'),
            'tieneRegistroDina' => 0,
            'tieneRegistroRegina' =>0,
            'docFechaRegistro' => date("Y-m-d H:i:s"),
            'docRegistradoPor' => "WEB",
            'docEstadoPostulacion' => 0,
            'esValidoSunedu' => 0,
            'esValidoCurriculum' => 0,
            'esValidoEvaluacionComp' => 0,
            //'archivoDina' => $this->input->post('archivoDina'),
            //'archivoRegina' => $this->input->post('archivoRegina'),
            //'archivoEvaluacionComp' => $this->input->post('archivoEvaluacionComp'),
            //'archivoClaseModelo' => $this->input->post('archivoClaseModelo'),
            //'archivoFotografia' => $this->input->post('archivoFotografia'),
            //'archivoCV' => $this->input->post('archivoCV')            
        );

        $data = $this->Docentes_model->agregar($params);
        echo json_encode($data);

    }

    public function actualizar(){

      $params = array(
            'docNroDocumento' => $this->input->post('docNroDocumento'),
            'docNacionalidad' => $this->input->post('docNacionalidad'),
            'docClave' => $this->input->post('docClave'),
            'docApPaterno' => $this->input->post('docApPaterno'),
            'docApMaterno' => $this->input->post('docApMaterno'),
            'docNombres' => $this->input->post('docNombres'),
            'docGenero' => $this->input->post('docGenero'),
            'docEmail' => $this->input->post('docEmail'),
            'docCelular' => $this->input->post('docCelular'),
            'docTelFijo' => $this->input->post('docTelFijo'),
            'docFecNacimiento' => $this->input->post('docFecNacimiento'),
            'docDepartamento' => $this->input->post('docDepartamento'),
            'docProvincia' => $this->input->post('docProvincia'),
            'docDistrito' => $this->input->post('docDistrito'),
            'docDireccion' => $this->input->post('docDireccion'),
            'docModalidad' => $this->input->post('docModalidad'),
            'tienePeriodoEjercido' => $this->input->post('tienePeriodoEjercido'),
            'docPeriodoEjercidoDesde' => $this->input->post('docPeriodoEjercidoDesde'),
            'docPeriodoEjercidoHasta' => $this->input->post('docPeriodoEjercidoHasta'),
            'tieneRegistroDina' => $this->input->post('tieneRegistroDina'),
            'tieneRegistroRegina' => $this->input->post('tieneRegistroRegina'),
            'docFechaRegistro' => date("Y-m-d H:i:s"),
            'docRegistradoPor' => "WEB",
            'docEstadoPostulacion' => $this->input->post('docEstadoPostulacion'),
            'esValidoSunedu' => $this->input->post('esValidoSunedu'),
            'esValidoCurriculum' => $this->input->post('esValidoCurriculum'),
            'esValidoEvaluacionComp' => $this->input->post('esValidoEvaluacionComp'),
            'archivoDina' => $this->input->post('archivoDina'),
            'archivoRegina' => $this->input->post('archivoRegina'),
            'archivoEvaluacionComp' => $this->input->post('archivoEvaluacionComp'),
            'archivoClaseModelo' => $this->input->post('archivoClaseModelo'),
            'archivoFotografia' => $this->input->post('archivoFotografia'),
            'archivoCV' => $this->input->post('archivoCV')            
        );

        $data = $this->Docentes_model->actualizar($params);
        echo json_encode($data);

    }

    public function eliminar(){

      $docenteId = $this->input->post('docenteId');

      $data = $this->Docentes_model->eliminar($docenteId);
      echo json_encode($data);
    }


}


<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Grados_Titulos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function listar_por_docente($docenteId){


        $records = array();

        $this->db->select("grad.*");
        $this->db->from("grados_titulos grad");
        $this->db->where("grad.docenteId ='{$docenteId}' ");
        //$this->db->join('sedes sed', 'sed.sedeId = esc.sedes_sedeId', 'inner');        
        $query = $this->db->get();


        $records['iTotalRecords'] = $query->num_rows();
        $records['iTotalDisplayRecords'] = $query->num_rows();
        $records['sEcho'] = 0;
        $records['sColumns'] = 0;
        $records['aaData'] = $query->result_array();

        return $records;

    }

    function agregar_grados($params)
    {
        $this->db->insert('grados_titulos',$params);
        return $this->db->insert_id();
    }

    function actualizar_grados($gradosId,$params)
    {
        $this->db->where('gradosId',$escuelaId);
        return $this->db->update('grados_titulos',$params);
    }

    function eliminar_grados($gradosId)
    {
        return $this->db->delete('grados_titulos',array('gradosId' => $gradosId));
    }
    
/*
    function get_all_escuelas_select(){

        $records = array();

        $this->db->select("escuelaId as id, escuelaNombre as text");
        $this->db->from("escuelas");
        $this->db->order_by('escuelaNombre', 'asc');
        
        //$records['results'] = $this->db->get()->result_array();

        return $this->db->get()->result_array();

    }


    function get_escuela_by_id($escuelaId){

      //CONSULTO LA ESCUELA POR ID
      $this->db->select("esc.*");
      $this->db->from("escuelas esc");
      $this->db->where("esc.escuelaId ='{$escuelaId}' ");
      $records = $this->db->get()->row_array();


      //CONSULTO LOS CURSOS CREADOS PARA LA ESCUELA
      $this->db->select("cxe.cursos_cursoId as id");
      $this->db->from("cursos_x_escuela cxe");
      $this->db->where("cxe.escuelas_escuelaId ='{$escuelaId}' ");
      $cursos = $this->db->get()->result_array();

      $records['cursos'] = $cursos;

      return $records;
      
    }*/


    


}

?>
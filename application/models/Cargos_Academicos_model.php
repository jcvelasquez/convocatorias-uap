<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Cargos_Academicos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get all
    */

    function listar_por_docente($docenteId){


        $records = array();

        $this->db->select("car.cargosId, 
                           car.docenteId,
                           car.carAcadNomInstitucion,
                           car.carAcadArea,
                           DATE_FORMAT(car.carAcadFecInicio, '%d/%m/%Y') as carAcadFecInicio,
                           DATE_FORMAT(car.carAcadFecFin, '%d/%m/%Y') as carAcadFecFin,
                           car.carAcadeHastaFecha");
        $this->db->from("cargos_academicos car");
        $this->db->where("car.docenteId = {$docenteId} ");
        $query = $this->db->get();


        $records['iTotalRecords'] = $query->num_rows();
        $records['iTotalDisplayRecords'] = $query->num_rows();
        $records['sEcho'] = 0;
        $records['sColumns'] = 0;
        $records['aaData'] = $query->result_array();

        return $records;

    }

    /*
     * Get by id
    */
   
    function get_cargos_academicos_by_id($cargosId){
      $this->db->select("car.*");
      $this->db->from("cargos_academicos car");
      $this->db->where(" car.cargosId ='{$cargosId}' ");
      return $this->db->get()->row_array();
    }


    function agregar_cargos_academicos($params)
    {
        $this->db->insert('cargos_academicos',$params);
        return $this->db->insert_id();
    }

    function actualizar_cargos_academicos($cargosId,$params)
    {
        $this->db->where('cargosId',$cargosId);
        return $this->db->update('cargos_academicos',$params);
    }

    function eliminar_cargos_academicos($cargosId)
    {
        return $this->db->delete('cargos_academicos',array('cargosId'=>$cargosId));
    }


}

?>
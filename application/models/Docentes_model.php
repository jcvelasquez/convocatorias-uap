<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Docentes_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get all
    */
    function listar(){
        $this->db->order_by('convocatoriaId', 'desc');
        return $this->db->get('docentes')->result_array();
    }


    function generarCuentaID($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    /*
     * Get by id
    */
   
    function listar_docente_por_id($docenteId){
      $this->db->select("doc.*, indi.*");
      $this->db->from("docentes doc, indicadores indi");
      $this->db->where("doc.docenteId = indi.docentes_docenteId AND doc.docenteId ='{$docenteId}' ");
      return $this->db->get()->row_array();
    }

    /*
     * function to add new 
    */
    function agregar($params)
    {
        $this->db->insert('docentes',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update 
    */
    function actualizar($params, $docenteId)
    {

        $this->db->where("docenteId", $docenteId);
        return $this->db->update("docentes" ,$params);
    }

    /*
     * function to delete plato
     */
    function eliminar($docenteId)
    {
        return $this->db->delete('uap_docentes',array('docenteId'=>$docenteId));
    }


}

?>
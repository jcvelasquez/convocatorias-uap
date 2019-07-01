<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Reconocimientos_Institucionales_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get all
    */
    function get_all_reconocimientos_institucionales(){
        $this->db->order_by('reconocimientoId', 'desc');
        return $this->db->get('reconocimientos_institucionales')->result_array();
    }

    function listar_por_docente($docenteId){


        $records = array();

        $this->db->select("rec.reconocimientoId, 
                           rec.docenteId,
                           rec.recInstPremio,
                           rec.recInstitucion,
                           DATE_FORMAT(rec.recInstFecha, '%d/%m/%Y') as recInstFecha,
                           rec.recRutaArchivoCertificacion");
        $this->db->from("reconocimientos_institucionales rec");
        $this->db->where("rec.docenteId ='{$docenteId}' ");
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
   
    function get_reconocimientos_institucionales_by_id($reconocimientoId){
      $this->db->select("recins.*");
      $this->db->from("reconocimientos_institucionales recins");
      $this->db->where("recins.reconocimientoId ='{$reconocimientoId}' ");
      return $this->db->get()->row_array();
    }

    /*
     * function to add new 
    */
    function agregar_reconocimientos_institucionales($params)
    {
        $this->db->insert('reconocimientos_institucionales',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update 
    */
    function actualizar_reconocimientos_institucionales($reconocimientoId,$params)
    {
        $this->db->where('reconocimientoId',$reconocimientoId);
        return $this->db->update('reconocimientos_institucionales',$params);
    }

    /*
     * function to delete plato
     */
    function eliminar_reconocimientos_institucionales($reconocimientoId)
    {
        return $this->db->delete('reconocimientos_institucionales',array('reconocimientoId'=>$reconocimientoId));
    }


}

?>
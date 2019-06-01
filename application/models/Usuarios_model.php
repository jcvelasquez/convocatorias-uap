<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Usuarios_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get all
    */
    function get_all_usuarios(){
        $this->db->order_by('usuarioId', 'desc');
        return $this->db->get('usuarios')->result_array();
    }

    /*
     * Get by id
    */
   
    function get_usuarios_by_id($usuarioId){
      $this->db->select("usu.*");
      $this->db->from("usuarios usu");
      $this->db->where("usu.usuarioId ='{$usuarioId}' ");
      return $this->db->get()->row_array();
    }

    /*
     * function to add new 
    */
    function agregar_usuarios($params)
    {
        $this->db->insert('usuarios',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update 
    */
    function actualizar_usuarios($usuarioId,$params)
    {
        $this->db->where('usuarioId',$usuarioId);
        return $this->db->update('usuarios',$params);
    }

    /*
     * function to delete plato
     */
    function borrar_usuarios($usuarioId)
    {
        return $this->db->delete('usuarios',array('usuarioId'=>$usuarioId));
    }


}

?>
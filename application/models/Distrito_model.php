<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

  class Distrito_model extends CI_Model
  {
      function __construct()
      {
          parent::__construct();
      }

      /*
       * Get all
      */
      function get_distritos_by_provincia($idProv){

          $this->db->select("dist.*");
          $this->db->from("ubdistrito dist");
          $this->db->where("dist.idProv ='{$idProv}' ");
          $this->db->order_by('dist.idProv', 'asc');
          return $this->db->get()->result_array();


      }

      /*
       * Get by id
      */
     
      /*function get_idiomas_by_id($idiomaId){
        $this->db->select("idi.*");
        $this->db->from("idiomas idi");
        $this->db->where("idi.idiomaId ='{$idiomaId}' ");
        return $this->db->get()->row_array();
      }*/

  }

?>

<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Bienvenidos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_docente_id_from_email($docEmail) {

        $this->db->select('docenteId');
        $this->db->from('docentes');
        $this->db->where('docEmail', $docEmail);
        return $this->db->get()->row('docenteId');

    }

    function agregar_docente($params)
    {
        $this->db->insert('docentes',$params);
        return $this->db->insert_id();
    }

    function authentication($docEmail, $docClave){
        return $this->db->get_where('docentes',array('docEmail'=>$docEmail,'docClave'=> $docClave))->row_array();
    }

    function check_docente($params = array()){
		
			 $this->db->select('docenteId');
			 $this->db->from('docentes');
			 $this->db->where(array('docEmail' => $params['docEmail']));

			 $prevQuery = $this->db->get();
			 $prevCheck = $prevQuery->num_rows();
		
			 if($prevCheck > 0){

				$params['is_used_email'] = true;

			 }else{
			 	
			 	//REGISTRO EL USUARIO NUEVO
				$insert = $this->db->insert('docentes',$params);
				$docenteId = $this->db->insert_id();
				$params['docenteId'] = $docenteId;
				$params['ubdistrito_idDist'] = -1;

				if($params['docRegistradoPor'] == 'WEB'){
					 $params['docClave'] = $this->hash_password($params['docClave']);
				 }

			 }

			 return $params;
			 
	}

    function get_docente($docenteId)
    {
        return $this->db->get_where('docentes',array('docenteId'=>$docenteId))->row_array();
    }

    function resolve_user_login($docEmail, $docClave){
        $this->db->select('docClave');
        $this->db->from('docentes');
        $this->db->where('docEmail', $docEmail);
        $hash = $this->db->get()->row('docClave');

        return $this->verify_password_hash($docClave, $hash);
    }

    private function verify_password_hash($docClave, $hash) {
        return password_verify($docClave, $hash);
    }

    private function hash_password($docClave) {
        return password_hash($docClave, PASSWORD_BCRYPT);
    }

    private function token(){
        return sha1(uniqid(rand(),true));
    }


}

?>


	
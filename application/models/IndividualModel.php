<?php
class IndividualModel extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


    

    public function votoGuardar($datos){
        $res = array("error" => false,"msg" => '');
        try {
            $this->db->trans_begin();
            if($datos['pk_voto'] == 0){

                $datos['fecha_creacion'] = $this->db->query("SELECT DATE_FORMAT(NOW(),'%Y-%m-%d') AS f")->row()->f;;
                $datos['fk_usuario'] = $this->session->userdata('pb_idUsuario');
                $this->db->insert('voto',$datos);
            }else{
               
                $this->db->where("pk_voto",$datos['pk_voto']);
                $this->db->update('voto',$datos);
            }
            $this->db->trans_commit();
            $res['msg'] = 'Registro guardado correctamente';
            return $res;
        }catch (\Exception $e) {
            $this->db->trans_rollback();
            $res['error'] = true;
            $res['msg'] = 'Intente de nuevo, más tarde';
            return $res;
        }
    }


    public function validarVotoUsuario($fk_usuario,$fk_modalidad){
        $this->db->select("pk_voto,fk_modalidad,fk_usuario");
        $this->db->from("voto");
        $this->db->where("fk_usuario",$fk_usuario);
        $this->db->where("fk_modalidad",$fk_modalidad);
        //$this->db->where("(fk_usuario,$votante AND fk_modalidad,$votante)");
        $query = $this->db->get();
        return $query->row_array();
    }
}
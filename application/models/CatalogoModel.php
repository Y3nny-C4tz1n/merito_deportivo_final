<?php
class CatalogoModel extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function listEstatus(){
        try{
			$this->db->select("pk_estatus,descripcion");
			$this->db->from("cat_estatus");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listModalidad(){
        try{
			$this->db->select("pk_modalidad,descripcion");
			$this->db->from("cat_modalidad");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listPerfiles(){
        try{
			$this->db->select("pk_perfil,descripcion");
			$this->db->from("cat_perfil");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDeportista(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDconjunto(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 3');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDparalimpico(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 5');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDajedrez(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 1');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDatletismo(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 2');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDboliche(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 5');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
    public function listDesgrima(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 15');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDfisico(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 16');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDgimnasia(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 19');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDjudo(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 22');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
    public function listDkarate(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 24');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
    public function listDpesas(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 25');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
    public function listDpatines(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 28');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
    public function listDremo(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 30');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
    public function listDtriatlon(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where('fk_asociacion = 37');
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }
}
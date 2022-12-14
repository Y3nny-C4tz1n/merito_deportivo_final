<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ResultadodcController extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ResultadodcModel');
		$this->load->model('CatalogoModel');
	}
	public function index(){
		if($this->session->userdata('pb_idPerfil') != 1){
			redirect(base_url().'voto');
		}
		$datos = $this->funcionesBasicas('Resultado Deportista Conjunto');
		$datos['menu'] = "rdconjunto";
		$datos['MODALIDAD'] = $this->CatalogoModel->listModalidad();
		$this->load->view('resultado-dconjunto',$datos);
	}
	public function listRdconjunto(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array());
			die();
		}
		$filtros = array('tipo' => 'TOTAL', 'start' => '0', 'limit' => '0');
							
		$count = $this->ResultadodcModel->ResultadodcModelo($filtros);
		$tmp = $this->input->post('page');
		$page = (!empty($tmp))?$tmp:1;
		$tmp = $this->input->post('rows');
		$limit = $filtros['limit'] = (!empty($tmp))?$tmp:10;
		$start = $limit * $page - $limit;
		$start = $filtros['start'] = ($start < 0) ? 0 : $start;
		$filtros['tipo'] = 'PARCIAL';
		$sidx = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sidx'] : 'nominado';
		$sord = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sord'] : 'ASC';
		$filtros['sidx'] = $sidx;
		$filtros['sord'] = $sord;
		$dataControl = $this->ResultadodcModel->ResultadodcModelo($filtros);
		if($count > 0){
			$total_pages = ceil($count/$limit);
		}else{
			$total_pages = 0;
		}
		if ($page > $total_pages){
			$page=$total_pages;
		}
		$response = new stdClass();
		$response->page = $page;
		$response->total = $total_pages;
		$response->records = $count;
		if(count($dataControl) == 0){
			echo json_encode(array());
			die();
		}
		$i=0;
		foreach($dataControl as $row){
			$response->rows[$i]['id'] = $row['pk_voto'];
			$response->rows[$i]['cell'] = array('pk_voto' => $row['pk_voto'],
				
				 "nominado" => $row['nominado'],
				 "asociacion" => $row['asociacion'],
				  "total" => $row['total'],
			);
			$i++;
		}
		echo json_encode($response);die();
	}
	
}
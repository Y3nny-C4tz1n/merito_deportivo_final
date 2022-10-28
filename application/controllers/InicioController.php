<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InicioController extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('InicioModel');
		$this->load->model('CatalogoModel');
	}
	public function index(){
		$datos = $this->funcionesBasicas('Inicio');
		$datos['menu'] = "inicio";
		$datos['DEPORTISTA'] = $this->CatalogoModel->listDeportista();
		$datos['DCONJUNTO'] = $this->CatalogoModel->listDconjunto();
		$datos['DPARALIMPICO'] = $this->CatalogoModel->listDparalimpico();
		
		$this->load->view('inicio',$datos);
	}
	public function listVoto(){
		
		$filtros = array('tipo' => 'TOTAL', 'start' => '0', 'limit' => '0');
		$count = $this->VotoModel->VotoModelo($filtros);
		$tmp = $this->input->post('page');
		$page = (!empty($tmp))?$tmp:1;
		$tmp = $this->input->post('rows');
		$limit = $filtros['limit'] = (!empty($tmp))?$tmp:10;
		$start = $limit * $page - $limit;
		$start = $filtros['start'] = ($start < 0) ? 0 : $start;
		$filtros['tipo'] = 'PARCIAL';
		$sidx = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sidx'] : 'pk_voto';
		$sord = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sord'] : 'ASC';
		$filtros['sidx'] = $sidx;
		$filtros['sord'] = $sord;
		$dataControl = $this->InicioModel->InicioModelo($filtros);  //checar//
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
				"btnEditar" => '<button type="button" class="btn btn-labeled btn-primary btn-sm btnEditar" data-bs-toggle="modal" data-bs-target="#modalInventario" data-id="'.$row['pk_voto'].'"><span class="btn-label"><i class="bi bi-pencil"></i></span>  Editar</button>',
				"descripcion" => $row['descripcion'],
				"nombre_nominado" => $row['nombre_nominado'],
				"descripcion" => $row['descripcion'],
				"punto" => $row['punto'],
				"nombre_usuario" => $row['nombre_usuario'],
				"fecha_creacion" => $row['fecha_creacion'],	
				
			);
			$i++;
		}
		echo json_encode($response);die();
	}


	public function guardarVotoDconjunto(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');

		$fk_usuario = $this->session->userdata('pb_idUsuario');

		$pk_voto = $this->input->post('pk_voto');
		if($pk_voto == 0){
			$validarVotoUsuario = $this->InicioModel->validarVotoUsuario($fk_usuario,$fk_modalidad);
			if($validarVotoUsuario > 1){
				echo json_encode(array("error" => true,"msg" => 'Usted ya ah realizado su voto, no puede votar dos veces en la misma modalidad'));die();
			}
		}
		
		$res = $this->InicioModel->votoGuardarDconjunto($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoDparalimpico(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');

		$fk_usuario = $this->session->userdata('pb_idUsuario');

		$pk_voto = $this->input->post('pk_voto');
		if($pk_voto == 0){
			$validarVotoUsuario = $this->InicioModel->validarVotoUsuario($fk_usuario,$fk_modalidad);
			if($validarVotoUsuario > 1){
				echo json_encode(array("error" => true,"msg" => 'Usted ya ah realizado su voto, no puede votar dos veces en la misma modalidad'));die();
			}
		}
		
		$res = $this->InicioModel->votoGuardarDparalimpico($_POST);
		echo json_encode($res);die();
	}

	public function loadFormularioDajedrez(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['AJEDREZ'] = $this->CatalogoModel->listDajedrez();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/ajedrezModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDconjunto(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['DCONJUNTO'] = $this->CatalogoModel->listDconjunto();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/dconjuntoModal",$data,TRUE),"msg" => ''));die();
	}
	
	public function loadFormularioDparalimpico(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['DPARALIMPICO'] = $this->CatalogoModel->listDparalimpico();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/dparalimpicoModal",$data,TRUE),"msg" => ''));die();
	}
	
}
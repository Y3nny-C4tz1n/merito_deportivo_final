<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class IndividualController extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('IndividualModel');
		$this->load->model('CatalogoModel');
	}
	public function index(){
		$datos = $this->funcionesBasicas('Individual');
		$datos['menu'] = "individual";
		
		$this->load->view('individual',$datos);
	}

	public function guardarVoto(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->IndividualModel->votoGuardar($_POST);
		echo json_encode($res);die();
	}

	public function loadFormularioDajedrez(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['AJEDREZ'] = $this->CatalogoModel->listDajedrez();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/ajedrezModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDatletismo(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['ATLETISMO'] = $this->CatalogoModel->listDatletismo();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/atletismoModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDboliche(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['BOLICHE'] = $this->CatalogoModel->listDboliche();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/bolicheModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDesgrima(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['ESGRIMA'] = $this->CatalogoModel->listDesgrima();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/esgrimaModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDfisico(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['FISICO'] = $this->CatalogoModel->listDfisico();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/fisicoModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDgimnasia(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['GIMNASIA'] = $this->CatalogoModel->listDgimnasia();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/gimnasiaModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDjudo(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['JUDO'] = $this->CatalogoModel->listDjudo();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/judoModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDkarate(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['KARATE'] = $this->CatalogoModel->listDkarate();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/karateModal",$data,TRUE),"msg" => ''));die();
	}
	public function loadFormularioDpesas(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['PESAS'] = $this->CatalogoModel->listDpesas();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/pesasModal",$data,TRUE),"msg" => ''));die();
	}
	public function loadFormularioDpatines(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['PATINES'] = $this->CatalogoModel->listDpatines();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/patinesModal",$data,TRUE),"msg" => ''));die();
	}
	public function loadFormularioDremo(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['REMO'] = $this->CatalogoModel->listDremo();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/remoModal",$data,TRUE),"msg" => ''));die();
	}
	public function loadFormularioDtriatlon(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['TRIATLON'] = $this->CatalogoModel->listDtriatlon();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/triatlonModal",$data,TRUE),"msg" => ''));die();
	}
	
}
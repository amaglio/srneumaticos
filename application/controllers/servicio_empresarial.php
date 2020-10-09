<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicio_empresarial extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Carta_model');
		date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index()
	{	
		$datos['menu_semanales'] = $this->Carta_model->traer_ultimas_semanas();
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_servicio_empresarial',$datos);
		$this->load->view('estructura/footer');
	}

}
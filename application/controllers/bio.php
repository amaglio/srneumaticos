<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Carta_model');
		date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index()
	{	
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_bio');
		$this->load->view('estructura/footer');
	}

}
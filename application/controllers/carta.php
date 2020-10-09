<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Carta_model');
		
	}

	public function index()
	{
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_carta');
		$this->load->view('estructura/footer');
	}

	public function carnes()
	{
		// Query buscar carnes en la carta
		$datos['menus'] = $this->Carta_model->traer_menus_por_tipo('Carne');
		$datos['titulo'] = "Carnes";
		$datos['foto1'] = "carnes1.png";
		$datos['foto2'] = "carnes2.png";
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_carta',$datos);
		$this->load->view('estructura/footer');
	}

	public function pastas()
	{
		$datos['menus']= $this->Carta_model->traer_menus_por_tipo('Pastas');
		// Query buscar carnes en la carta
		$datos['titulo'] = "Pastas";
		$datos['foto1'] = "pastas1.png";
		$datos['foto2'] = "pastas2.png";
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_carta',$datos);
		$this->load->view('estructura/footer');
	}


	public function guarniciones()
	{	
		$datos['menus']= $this->Carta_model->traer_menus_por_tipo('Guarniciones');
		// Query buscar carnes en la carta
		$datos['titulo'] = "Guarniciones";
		$datos['foto1'] = "guarnicion1.png";
		$datos['foto2'] = "guarnicion2.png";
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_carta',$datos);
		$this->load->view('estructura/footer');
	}

	public function lineadietetica()
	{
		$datos['menus']= $this->Carta_model->traer_menus_por_tipo('Linea dietetica');
		// Query buscar carnes en la carta
		$datos['titulo'] = "Linea Dietetica";
		$datos['foto1'] = "lineadietetica1.png";
		$datos['foto2'] = "lineadietetica2.png";
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_carta',$datos);
		$this->load->view('estructura/footer');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */
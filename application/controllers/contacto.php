<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Carta_model');
		date_default_timezone_set('America/Argentina/Buenos_Aires'); 
	}

	public function index()
	{	
		$this->load->view('estructura/header');
		$this->load->view('cuerpo_contacto');
		$this->load->view('estructura/footer');
	}

	public function enviar_email()
	{	
		// Envio el email con el codigo
		date_default_timezone_set('America/New_York');
		$this->load->library('email','','correo');
		$nombre = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$this->correo->from('fulbitoweb@gmail.com', 'Contacto web');
		$this->correo->to("adrian.magliola@gmail.com");
		$this->correo->subject('Contacto web - Moron Catering Services');
		$this->correo->message("<h1>Nombre:".$nombre."</h1><br/>
								<h1>Email:".$email."</h1><br/>
								<h1>Mensaje:".$message."</h1> ");

		if($this->correo->send())
		{
			$mensaje_exito = "Se ha enviado un mail con su nueva clave.";
		}
		else
		{
			show_error($this->correo->print_debugger());
			$this->datos['mensaje_error'] = "Ocurrió un error al actualizar su clave, intente mas tarde.";
		}
	}

}
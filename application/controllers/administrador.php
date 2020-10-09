<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		date_default_timezone_set('America/Argentina/Buenos_Aires'); 
		$this->load->library('grocery_CRUD');
		

	}

	public function _example_output($output = null)
	{
		$this->load->view('administrador.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}


	public function menu()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('menu');
			$crud->set_relation('id_tipo','tipo_menu','descripcion');
			$crud->columns('id','id_tipo','menu','precio');

			$crud->required_fields('id_tipo','menu');
			

			$crud->display_as('id_tipo','Tipo Menu');

			$crud->set_subject('Menu');

			$output = $crud->render();

			$this->_example_output($output);

	}

	public function tipos_menu()
	{
		
			$crud = new grocery_CRUD();

			$crud->set_table('tipo_menu');
			$crud->columns('id','descripcion');
			$crud->required_fields('descripcion');

			$crud->set_subject('Tipos de comidas');

			$output = $crud->render();

			$this->_example_output($output);
	}



	public function emails()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('email');
			$crud->columns('id','email','descripcion');
			$crud->required_fields('email');

			$crud->set_subject('Emails clientes');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function semana()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('menu_semanal');
			$crud->columns('fecha_comienzo','precio');
			$crud->required_fields('fecha_comienzo');

			$output = $crud->render();

			$this->_example_output($output);
	}


	public function menu_semanal()
	{
		 
		$crud = new grocery_CRUD();

		$crud->set_table('relacion_menu_semanal');
		$crud->columns('id_semana','id_dia','id_menu');

		$crud->required_fields('id_semana','id_dia','id_menu');

		$crud->set_relation('id_semana','menu_semanal','fecha_comienzo');
		$crud->set_relation('id_dia','dias','dia');
		$crud->set_relation('id_menu','menu','menu');
		
		$crud->display_as('id_semana','Semana');
		$crud->display_as('id_menu','Menu');
		$crud->display_as('id_dia','Dia');
			
		$output = $crud->render();
		$this->_example_output($output);


		//$crud->fields('menu_semanal2', 'id_semana', 'precio' ,  'menu' , 'dia' );*/
		//echo "a";  
		/*

		$crud = new grocery_CRUD();

		$crud->set_table('relacion_menu_semanal');

		$crud->set_relation('id_semana','menu_semanal','id');
		$crud->set_relation('id_dia','dias','id');
		$crud->set_relation('id_menu','menu','id');

		$crud->columns('id_semana','id_dia','id_menu');

		$crud->required_fields('id_dia','id_menu');


		//$crud->display_as('id_tipo','Tipo Menu');

		$crud->set_subject('Menu Semanal');

		$output = $crud->render();

		$this->_example_output($output); */
		 
	}
}
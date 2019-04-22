<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->library('grocery_CRUD');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid'); //mengatur tema tabel yang disedikan grocery
			$crud->set_table('datatilang'); //mengatur nama_tabel yng akn digunakan 

			$output = $crud->render(); 

			$this->_tilang_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

		$this->_tilang_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function _tilang_output($output = null)
	{
		$this->load->view('Main.php',(array)$output);
	}
}

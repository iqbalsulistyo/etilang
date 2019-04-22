<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggar extends CI_Controller {

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

			$crud->set_theme('flexigrid');
			$crud->set_table('datatilang');
			$crud->unset_columns(array('Barang_Sitaan'));

			$crud->unset_add(); //menghilangkan action tambah data
			$crud->unset_delete(); //menghilangkan action hapus
			$crud->unset_edit(); //menghilangkan ubah

			$output = $crud->render(); //render -> menyimpulkan konfigurasi di atasnya

			$this->_beranda_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

		$this->_beranda_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function _beranda_output($output = null)
	{
		$this->load->view('admin/beranda.php',(array)$output);
	}
}

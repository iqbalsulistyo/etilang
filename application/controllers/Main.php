<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		  
		  try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid'); //mengatur tema tabel yang disedikan grocery
			$crud->set_table('datatilang'); //mengatur nama_tabel yng akn digunakan 

			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();
			$crud->unset_export();
			$crud->unset_print();

			$crud->columns('Id_Tilang', 'No_Identitas','Nama_Pelanggar','Jenis_Kelamin','Alamat',
				   'Tgl_Tilang','No_Plat','Barang_Sitaan', 'jenispelanggaran', 'Tgl_Sidang'); //kolom yang akan ditampilkan
				

			$output = $crud->render(); 

			$this->_tilang_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function _tilang_output($output = null)
	{
		$this->load->view('index.php',(array)$output);
	}
}

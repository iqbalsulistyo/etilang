<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		if($_SESSION['level'] == 1)
		{
				try{
				$crud = new grocery_CRUD();

				$crud->set_theme('flexigrid');
				$crud->set_table('users');
				$crud->columns('username','level_id'); //kolom yang akan ditampilkan
				$crud->set_relation('level_id','level','level');//menampilkan data kolom dari tabel yang berelasi (kolom FK, nama tabel, kolom tampil)   

				$crud->set_subject('Pengguna'); //menampilkan subjek
				$crud->display_as('username','Nama Pengguna');//alias tampilan kolom dari default
				$crud->display_as('level_id','Hak Akses');

				if($_SESSION['level'] == 1)
				{
					
				}
				elseif ($_SESSION['level'] == 2) 
				{
					$crud->unset_edit(); //menghilangkan action ubah
					$crud->unset_delete(); //menghilangkan action hapus

				}
				elseif ($_SESSION['level'] == 3)
				{
					$crud->unset_add();
					$crud->unset_delete();
				} 
				else
				{
					$crud->unset_add();
					$crud->unset_edit();
					$crud->unset_delete();
				}

				$output = $crud->render(); //render -> menyimpulkan konfigurasi di atasnya
				$this->_user_output($output);

			}catch(Exception $e){
				show_error($e->getMessage().' --- '.$e->getTraceAsString());
			}

			$this->_user_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		}
		else
		{
			echo "Anda Tidak Berhak Mengakses Halaman ini";
		}

		
	}

	public function _user_output($output = null)
	{
		$this->load->view('admin/user.php',(array)$output);
	}
}

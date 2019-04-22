<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tilang extends CI_Controller {

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

			$crud->set_subject('Data Tilang'); //menampilkan subjek
			//$crud->unset_edit(); //menghilangkan action ubah
			//$crud->field_type('Jenis_Kelamin','enum', array('Laki-laki', 'Perempuan'));
			$crud->field_type('Jenis_Kelamin','dropdown',array('L'=>'Laki-laki','P'=>'Perempuan'));

			//$crud->field_type('jenispelanggaran','multiselect',
					//array( "1"  => "banana", "2" => "orange", "3" => "apple"));

			$crud->set_relation_n_n('jenispelanggaran','pelanggaran', 'jenispelanggaran', 
				  'Id_Tilang', 'Jenis_Pelanggaran', 
				  'Keterangan');
			//$crud->set_relation('petugas_Id_Petugas','petugas','Nama');

			if($_SESSION['level'] == 2)
			{
				$crud->columns('Id_Tilang', 'users_id', 'No_Identitas','Nama_Pelanggar','Jenis_Kelamin','Alamat','Tgl_Tilang','No_Plat','Barang_Sitaan', 'jenispelanggaran', 'Tgl_Sidang'); //kolom yang akan ditampilkan
				$crud->unset_add_fields('Putusan', 'users_id', 'Denda','Status'); //menghilangkan fields yang tidak dibutuhkan ketika input oleh polisi
				$crud->unset_edit_fields('Putusan', 'users_id', 'Denda','Status');
				$crud->unset_delete(); //menghilangkan action hapus
				//$crud->callback_before_insert(array($this,'cek_user_before_user_save'));
				$crud->callback_before_insert(array($this,'set_id_petugas'));
			}
			elseif($_SESSION['level'] == 3)
			{
				//$crud->unset_edit_fields('Putusan');
				$crud->unset_add();
				$crud->unset_delete();

				$crud->change_field_type('Id_Tilang', 'readonly');
				$crud->change_field_type('No_Identitas', 'readonly');
				$crud->change_field_type('Nama_Pelanggar', 'readonly');
				//$crud->change_field_type('Jenis_Kelamin', 'readonly');
				$crud->change_field_type('Alamat', 'readonly');
				$crud->change_field_type('Tgl_Tilang', 'readonly');
				$crud->change_field_type('No_Plat', 'readonly');
				$crud->change_field_type('Barang_Sitaan', 'readonly');
				$crud->change_field_type('Tgl_Sidang', 'readonly');
			}
			elseif($_SESSION['level'] == 4)
			{
				//$crud->unset_edit_fields('Putusan');
				$crud->unset_add();
				$crud->unset_delete();

				$crud->unset_edit_fields('users_id','jenispelanggaran');
				$crud->change_field_type('Id_Petugas', 'readonly');
				$crud->change_field_type('No_Identitas', 'readonly');
				$crud->change_field_type('Nama_Pelanggar', 'readonly');
				$crud->change_field_type('Jenis_Kelamin', 'readonly');
				$crud->change_field_type('Alamat', 'readonly');
				$crud->change_field_type('Tgl_Tilang', 'readonly');
				$crud->change_field_type('No_Plat', 'readonly');
				$crud->change_field_type('Barang_Sitaan', 'readonly');
				$crud->change_field_type('Tgl_Sidang', 'readonly');
				$crud->change_field_type('Putusan', 'readonly');
				$crud->change_field_type('Denda', 'readonly');
			}
			

			$output = $crud->render(); 

			$this->_tilang_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

		$this->_tilang_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function set_id_petugas($post_array)
	{
		$post_array['users_id'] = $_SESSION['user_id'];
		return $post_array;
	}

	function cek_user_before_user_save($post_array){
 		$i = $this->db->where('Id_Petugas', $post_array['Id_Petugas'])->get('users')->num_rows();
 		if($i == 0 ){
  			return true;
 		}else{
  			return false;
 		}
	}

	public function _tilang_output($output = null)
	{
		$this->load->view('admin/tilang.php',(array)$output);
	}
}

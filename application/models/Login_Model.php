<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function ceklogin($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$hasil = $this->db->get('users');
		$data = $hasil->row_array();
		
		if($hasil->num_rows()>0)
		{
			$this->session->set_userdata("user_id",$data['id']);
			$this->session->set_userdata("level",$data['level_id']);

			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}
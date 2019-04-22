<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->library('grocery_CRUD'); 
	$this->load->model('login_model'); 

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
		$this->load->view('login.php');
	}

	public function ceklogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$kondisi = $this->login_model->ceklogin($username, $password);

		if($kondisi)
		{
			//echo "Login Berhasil";
			redirect(site_url('admin/beranda'));
		}
		else
		{
			redirect(site_url('account'));
			//echo "Login Gagal";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('account'));
	}
}

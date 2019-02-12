<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
		$this->load->model('Login_model');
	}
	
	public function index()
	{

	}

	public function masuk()
	{
		$this->load->view('form_login');
	}

	public function aksi_login(){
		$username =$this->input->post('username');
		$password =$this->input->post('password');

		$pengguna = $this->Login_model->datalogin($username);
		$datapengguna = $pengguna->row_array();

		$user = array(
			'username' => $username,
			'password' => md5($password));
		$cek = $this->Login_model->cek_login("users", $user)->num_rows();
		if($cek >0){
			$data_session = array(
				'username' => $datapengguna['username'],
				'nama' => $datapengguna['nama'],
				'status' => "login");
			$this->session->set_userdata($data_session);
			$url = base_url('admin/admin_tampil/');
			$nama = $this->session->userdata('username');
			$hasil = $url.$nama;
			redirect($hasil);
		}
		else{
			$this->session->set_flashdata('error',"<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
                                        <span class='badge badge-pill badge-danger'>Gagal</span>
                                        Username / Password yang anda masukkan salah!
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>");
			redirect(base_url("login/masuk"));
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
	}

	public function index()
	{
		
	}

	public function admin_tampil($username)
	{
		$data['artikel']=$this->Data_model->tampil_artikel($username);
		$this->load->view('dasbor',$data);
		if($this->session->userdata('status') !="login"){
			redirect(base_url());
		} 
	}
}
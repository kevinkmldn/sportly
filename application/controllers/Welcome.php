<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
	}

	public function index()
	{
		$data['artikel']=$this->Data_model->artikel();
		$this->load->view('utama.php',$data);
	}

	public function detail($idartikel){
		$data['artikel']=$this->Data_model->detail($idartikel);
		$this->load->view('detail',$data);
	}

	public function mencari()
	{
		$katakunci =$this->input->post('katakunci');
		$data['artikel']=$this->Data_model->hasilartikel($katakunci);
		$this->load->view('utama.php',$data);
	}

	public function sepakbola()
	{
		$data['artikel']=$this->Data_model->sepakbola();
		$this->load->view('utama.php',$data);
	}

	public function basket()
	{
		$data['artikel']=$this->Data_model->basket();
		$this->load->view('utama.php',$data);
	}

	public function bulutangkis()
	{
		$data['artikel']=$this->Data_model->bulutangkis();
		$this->load->view('utama.php',$data);
	}

	public function motogp()
	{
		$data['artikel']=$this->Data_model->motogp();
		$this->load->view('utama.php',$data);
	}

	public function voli()
	{
		$data['artikel']=$this->Data_model->voli();
		$this->load->view('utama.php',$data);
	}

	function edit($idartikel){
		$data['artikel']=$this->Data_model->update($idartikel);
		$this->load->view('form_update',$data);
	}

	function update_artikel(){
		$idartikel =$this->input->post('idartikel');
		$judul =$this->input->post('judul');
		$isi =$this->input->post('isi');
		$penulis =$this->input->post('penulis');
		$tanggal =$this->input->post('tanggal');
		$kategori =$this->input->post('kategori');
		$gambar =$this->input->post('gambar');
		$data = array(
			'idartikel' => $idartikel,
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis,
			'tanggal' => $tanggal,
			'kategori' => $kategori,
			'gambar' => $gambar
			);
			$this->Data_model->update_artikel($data, $idartikel);
			$url = base_url('admin/admin_tampil/');
			$hasil = $url.$penulis;
			redirect($hasil);

	}

	function delete($idartikel)
	{
		$data['artikel']=$this->Data_model->delete($idartikel);
		$this->Data_model->hapus_data($data,$idartikel);
		$this->session->set_userdata($data_session);
			$url = base_url('admin/admin_tampil/');
			$nama = $this->session->userdata('username');
			$hasil = $url.$nama;
			redirect($hasil);
	}

	function tambah()
	{
		$this->load->view('form_tambah');
	}

	function tambah_data()
	{
		$judul =$this->input->post('judul');
		$isi =$this->input->post('isi');
		$penulis =$this->input->post('penulis');
		$tanggal =$this->input->post('tanggal');
		$kategori =$this->input->post('kategori');
		$gambar =$this->input->post('gambar');
		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'penulis' => $penulis,
			'tanggal' => $tanggal,
			'kategori' => $kategori,
			'gambar' => $gambar
			);
			$this->Data_model->tambah_data($data);
			$url = base_url('admin/admin_tampil/');
			$hasil = $url.$penulis;
			redirect($hasil);

	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	function artikel()
	{
		$this->db->order_by('idartikel','desc');
		return $this->db->get('artikel');
	}

	function tampil_artikel($username)
	{
		$this->db->where('penulis',$username);
		$this->db->order_by('idartikel','desc');
		return $this->db->get('artikel');
	}

	function detail($idartikel)
	{
		$this->db->where('idartikel',$idartikel);
		return $this->db->get('artikel');
	}

	function hasilartikel($katakunci)
	{
		$this->db->like('judul',$katakunci);
		return $this->db->get('artikel');
	}

	function sepakbola()
	{
		$this->db->where('kategori','Sepakbola');
		return $this->db->get('artikel');
	}

	function basket()
	{
		$this->db->where('kategori','Basket');
		return $this->db->get('artikel');
	}

	function bulutangkis()
	{
		$this->db->where('kategori','Bulutangkis');
		return $this->db->get('artikel');
	}

	function motogp()
	{
		$this->db->where('kategori','MotoGP');
		return $this->db->get('artikel');
	}

	function Voli()
	{
		$this->db->where('kategori','Voli');
		return $this->db->get('artikel');
	}

	function update($idartikel)
	{
		$this->db->where('idartikel',$idartikel);
		return $this->db->get('artikel');
	}

	function update_artikel($data,$idartikel)
	{
		$this->db->where('idartikel', $idartikel);
		$this->db->set($data);
		$this->db->update('artikel');
	}

	function tambah_data($data)
	{
		$this->db->insert('artikel',$data);
	}

	function hapus_data($data,$idartikel)
	{
		$this->db->where('idartikel',$idartikel);
		$this->db->delete('artikel');
	}

	function delete($idartikel)
	{
		$this->db->where('idartikel',$idbuku);
		return $this->db->get('artikel');
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function cek_login($table,$user)
	{
		return $this->db->get_where($table,$user);
	}

	function datalogin($username)
	{
		$this->db->where('username',$username);
		return $this->db->get('users');
	}
}
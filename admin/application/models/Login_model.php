<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function loginAuth($uname,$password)
	{
		$this->db->where('admin_uname',$uname);
		$this->db->where('admin_pwd',$password);
		$res = $this->db->get('admin');
		return $res->num_rows();
	}

	public function trier_user($user)
	{
		$this->db->where('admin_uname',$user);
		$res = $this->db->get('admin');
		return $res->num_rows();
	}
}
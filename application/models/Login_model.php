<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model extends CI_Model{

		public function login($uname,$pwd)
		{
			$this->db->where('USERNAME',$uname);
			$this->db->where('PASSWORD',$pwd);
			$res = $this->db->get('user');
			return $res->num_rows();
		}
	} 
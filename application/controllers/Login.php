<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_controller
	{
		 function __construct()
		{
			parent::__construct();
			$this->load->model('Login_model');
		}

		public function userLogin()
		{
			$uname = $this->input->post('uname');
			$pwd = md5($this->input->post('pwd'));

			if ($uname != "" && $pwd != "") {
				$loginRes =$this->Login_model->login($uname,$pwd);
				if ($loginRes>0) {
					$data = "Success";
					$this->session->set_userdata('uname',$uname);
				}
				else{
					$data = "Failed";
				}
			}else{
				$data = "Blank";
			}

			echo json_encode($data);
		}

		public function logout()
		{
			$res = $this->session->sess_destroy();
			redirect('home');
		}
	}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		if ($username != "") {
			redirect('dashboard');	
		}

		$this->form_validation->set_rules('uname','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if ($this->form_validation->run() == TRUE) {
			$uname = $this->input->post('uname');
			$password = md5($this->input->post('password'));
			$result =$this->Login_model->loginAuth($uname,$password);
			if ($result>0) {
				$this->session->set_userdata('username',$uname);
				redirect('dashboard');
			}
			else{
				$this->load->view('login');
			}
		}
		else{
			$this->load->view('login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
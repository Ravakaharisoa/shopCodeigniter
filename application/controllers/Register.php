<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Register extends CI_controller
	{
		 function __construct()
		{
			parent::__construct();
			$this->load->model('Register_model');
			$this->load->model('Product_model');
		}
		public function index()
		{
			$data = [
				'categories'=>$this->Product_model->getCategories()
			];
			$this->load->view('common/header',$data);
			$this->load->view('common/sidebar',$data);
			$this->load->view('register');
			$this->load->view('common/footer');
			
		}

		public function signup()
		{
			
			$username= $this->input->post('uname');
			$fname= $this->input->post('fname');
			$lname= $this->input->post('lname');
			$email= $this->input->post('email');
			$password= $this->input->post('pwd');
			$mobile= $this->input->post('mobile');

			$this->form_validation->set_rules('uname','Username','required|is_unique[user.USERNAME]|min_length[4]');
			$this->form_validation->set_rules('fname','Firstname','required');
			$this->form_validation->set_rules('lname','Lastname','required');
			$this->form_validation->set_rules('email','Email','required|is_unique[user.EMAIL]|valid_email');
			$this->form_validation->set_rules('pwd','Password','required|alpha_numeric|min_length[5]');
			$this->form_validation->set_rules('mobile','Mobile','required|exact_length[10]');

			if ($this->form_validation->run() == FALSE) {
				$this->index();
			}else{
				$data = [
					'USERNAME'=>$username,
					'FIRSTNAME'=>$fname,
					'LASTNAME'=>$lname,
					'EMAIL'=>$email,
					'PASSWORD'=>md5($password),
					'MOBILE'=>$mobile,
					'IP'=>$this->input->ip_address()
				];
				if($this->Register_model->signupData($data)){
					$this->session->set_flashdata('signupSuccess','You have successfully register!!Please login');
					redirect('register/index');
				}
			}
		}
	}
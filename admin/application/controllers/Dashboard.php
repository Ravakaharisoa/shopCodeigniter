<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
		if (!$this->session->userdata('username')) {
			redirect('login');
		}
		$this->render_view('dashboard');
	}
}
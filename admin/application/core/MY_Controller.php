<?php 

	class MY_Controller extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
		}

		public function render_view($page = null, $data = array()){
			$this->load->view('common/header',$data);
			$this->load->view('common/sidebar',$data);
			$this->load->view('common/navbar',$data);
			$this->load->view($page, $data);
			$this->load->view('common/footer',$data);
		}

	}

?>
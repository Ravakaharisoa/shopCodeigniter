<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_controller
	{

		function __construct()
		{
			parent::__construct();
			date_default_timezone_set('Europe/Moscow');
			$this->load->model('Product_model');
		}

		public function index()
		{
			$data = [
				'categories'=>$this->Product_model->getCategories(),
				'FeatureProductsNew'=>$this->Product_model->getFeatureProduct(1,4),
				'FeatureProductsOld'=>$this->Product_model->getFeatureProduct(2,4),
				'latestProducts'=>$this->Product_model->getFeatureProduct(3,6)
			];
			$this->load->view('common/header',$data);
			$this->load->view('homebanner');
			$this->load->view('common/sidebar',$data);
			$this->load->view('home',$data);
			$this->load->view('common/footer');
		}
	}
	
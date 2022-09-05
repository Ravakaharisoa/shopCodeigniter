<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends CI_controller
	{
		function __construct()
		{
			parent::__construct();
			date_default_timezone_set('Europe/Moscow');
			$this->load->model('Product_model');
		}

		public function productDetails()
		{
			$pid = $this->input->get('pid');
			$data = [
				'categories'=>$this->Product_model->getCategories(),
				'product'=>$this->Product_model->productDetails($pid)
			];

			$this->load->view('common/header',$data);
			$this->load->view('common/sidebar',$data);
			$this->load->view('products/product_details',$data);
			$this->load->view('common/footer');
		}

		public function searchProduct()
		{
			if ($this->input->post('cat_id') != "") {
				$productCategory = $this->input->post('cat_id');
			}
			if ($this->input->get('cat_id') != "") {
				$productCategory = $this->input->get('cat_id');
			}
			$productName = $this->input->post('productName');
			$data = [
				'categories'=>$this->Product_model->getCategories(),
				'products'=>$this->Product_model->getSearchProResult($productName,$productCategory)
			];
			$this->load->view('common/header',$data);
			$this->load->view('common/sidebar',$data);
			$this->load->view('products/searchProduct',$data);
			$this->load->view('common/footer');
		}
	}

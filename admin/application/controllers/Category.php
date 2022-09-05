<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends My_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');

	}

	public function addNewCategory()
	{
		if (!$this->session->userdata('username')) {
			redirect('login');
		}else{
			$this->form_validation->set_rules('catname','Category Name','trim|required|is_unique[category.cat_name]',['is_unique'=>'This Category Name is already added!Write an another.']);
			$this->form_validation->set_rules('catdesc','Category Description','trim|required|ucfirst');
			if ($this->form_validation->run() == TRUE) {
				$data = [
					'cat_name'=>$this->input->post('catname'),
					'cat_desc' =>$this->input->post('catdesc')
				];
				if($this->Category_model->addNewCat($data)){
					$this->session->set_flashdata('success','New Category added successfully!');
					$this->allCategory();
				}
			}
			else{
				$this->render_view('category/addNewCat');
			}
			$this->render_view('category/addNewCat');
		}
	}

	public function allCategory()
	{
		if (!$this->session->userdata('username')) {
			redirect('login');
		}else{
			$data = [
				'categories'=>$this->Category_model->getAllCategory()
			];
			$this->render_view('category/allCategory',$data);
		}
	}

	public function deleteCategory()
	{
		$id = $this->input->get('cat_id');
		
		$deleteRes = $this->Category_model->deleteCat($id);

		if ($deleteRes) {
			$this->allCategory();
		}
	}

	public function editCategory()
	{
		if (!$this->session->userdata('username')) {
			redirect('login');
		}else{
			$id = $this->input->get('cat_id');
			$data =$this->Category_model->editCat($id);
			$this->render_view('category/editCat',['category'=>$data]);
		}
	}
}
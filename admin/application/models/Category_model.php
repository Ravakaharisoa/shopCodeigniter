<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
	public function addNewCat($data)
	{
		return $this->db->insert('category',$data);
	}

	public function getAllCategory()
	{
		$this->db->order_by('cat_id','desc');
		$res = $this->db->get('category');
		return $res->result();
	}

	public function deleteCat($id)
	{
		$this->db->where('cat_id',$id);
		$res = $this->db->delete('category');

		if ($res) {
			return true;
		}
		else{
			return false;
		}
	}

	public function editCat($id)
	{
		$this->db->where('cat_id',$id);
		$res = $this->db->get('category');

		return $res->row();
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Product_model extends CI_Model{
		public function getFeatureProduct($type_id,$limit)
		{
			$this->db->where('product_type',$type_id);
			$this->db->limit($limit);
			$res = $this->db->get('product');
			return $res->result();
		}

		public function productDetails($pid)
		{
			$this->db->where('product_id',$pid);
			$res = $this->db->get('product');
			return $res->row();
		}

		public function getCategories()
		{
			$res = $this->db->get('category');
			return $res->result();
		}

		public function getSearchProResult($productName,$productCategory)
		{
			if ($productName) {
				$this->db->like('product_name',$productName);
			}
			else if ($productCategory) {
				$this->db->where('cat_id',$productCategory);
			}
			$res = $this->db->get('product');
				return $res->result();
		}
	} 
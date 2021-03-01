<?php

class Product_model extends CI_Model
{

	public function __construct()
	{
		# code...
	}
	public function getOne($id)
	{
		$this->db->select('product.*,category_name');
		$this->db->from('product');
		$this->db->where('product_id', $id);

		$this->db->join('category', 'category.category1=product.category_id');
		$query = $this->db->get();
		return $query->row(0);
	}
	public function getAll()
	{

		$this->db->select('product.*,category_name');
		$this->db->from('product');

		$this->db->join('category', 'category.category1=product.category_id');
		$this->db->where('PRODUCR_ID', $id);

		$query = $this->db->get();
		return $query->result();
	}
}

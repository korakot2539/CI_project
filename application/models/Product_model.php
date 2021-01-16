<?php

 class Product_model extends CI_Model
{
	
	 public function __construct(argument)
	{
		# code...
	}
	public function getOne($id)
	{
		  $this->db->select('product.*,CATEGORY_NAME');
        $this->db->from('product');
		$this->db->where('PRODUCR_ID',$id);
      
        $this->db->join('category','category.CATEGORY_ID=product.CATEGORY_ID');
 		 $query = $this->db->get();
        return $query->row(0);
	}
	public function getAll()
	{
		
		$this->db->select('product.*,CATEGORY_NAME');
        $this->db->from('product');

        $this->db->join('category','category.CATEGORY_ID=product.CATEGORY_ID');
		$this->db->where('PRODUCR_ID',$id);
      
 		 $query = $this->db->get();
      return $query->result();
	}
	
}
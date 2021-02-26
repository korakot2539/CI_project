<?php

 class Category_model extends CI_Model
{
	
	 public function __construct()
	{
		# code...
	}
	public function getOne($id)
	{
		$this->db->select('*');
        $this->db->from('category');
		$this->db->where('category_id',$id);
      
 		 $query = $this->db->get();
        return $query->row(0);
	}
	public function getAll()
	{
		
		$this->db->select('*');
        $this->db->from('category');

 		$query = $this->db->get();
      	return $query->result();
	}
	
}
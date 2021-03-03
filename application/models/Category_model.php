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
	public function getAll($start=0 , $perpage=0, $keyword='')
	{
		
		$this->db->select('*');
        $this->db->from('category');
		if(strlen($keyword) > 0){
			$this->db->like('category_name', $keyword, 'both'); 
		}
		$this->db->limit($perpage,$start);
 		$query = $this->db->get();
      	return $query->result();
	}

	public function count($keyword='')
    {
        if(strlen($keyword) > 0){
            $this->db->like('category_name', $keyword, 'both'); 
        }
        $this->db->from('category');       

        return $this->db->count_all_results();

    }
	
}
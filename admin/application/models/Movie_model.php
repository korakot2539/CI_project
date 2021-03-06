<?php

 class Movie_model extends CI_Model
{
	
	 public function __construct()
	{
		# code...
	}
	public function getOne($id)
	{
		$this->db->select('movie.*,category_name');
        $this->db->from('movie');
		$this->db->where('movie_id',$id);
      
        $this->db->join('category','category.category_id=movie.category1');
 		 $query = $this->db->get();
        return $query->row(0);
	}

	public function getAll($start=0 , $perpage=0, $keyword='')
	{
		
		$this->db->select("	movie.*,
							category1.category_name as 'category1_name'
						  ",FALSE);
        $this->db->from('movie');
        $this->db->join("category as category1",'category1.category_id=movie.category1');

		if(strlen($keyword) > 0){
            $this->db->like('movie_name', $keyword, 'both'); 
		}
		$this->db->limit($perpage,$start);
 		$query = $this->db->get();
      	return $query->result();
	}
	
    public function count($keyword='')
    {
        if(strlen($keyword) > 0){
            $this->db->like('movie_name', $keyword, 'both'); 
        }
        $this->db->from('movie');       

        return $this->db->count_all_results();

    }
	
}
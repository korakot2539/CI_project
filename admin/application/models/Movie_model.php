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
      
        $this->db->join('category','category.category1=movie.category_id');
 		 $query = $this->db->get();
        return $query->row(0);
	}
	public function getAll()
	{
		
		$this->db->select("	movie.*,
							category1.category_name as 'category1_name',
							category2.category_name as 'category2_name',
							category3.category_name as 'category3_name',
						  ",FALSE);
        $this->db->from('movie');

        $this->db->join("category as category1",'category1.category_id=movie.category1');
        $this->db->join("category as category2",'category2.category_id=movie.category2');
        $this->db->join("category as category3",'category3.category_id=movie.category3');

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
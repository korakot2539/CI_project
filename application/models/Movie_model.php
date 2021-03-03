<?php

class Movie_model extends CI_Model
{

    public function __construct()
    {
        # code...
    }
    public function getOne($id)
    {
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->where('movie_id', $id);

        // $query = $this->db->get();
        // return $query->row(0);
    }
    public function record_count()
    {
        $this->db->from('movie');
        return $this->db->count_all_results();
    }
    public function getAll($start=0 , $perpage=0, $keyword='')
    {
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->limit($perpage,$start);
		$query = $this->db->get();
		return $query->result();
    }
    // public function getByCategory($start=0 , $perpage=0, $category='')
    public function getByCategory($category='')
	{
        $this->db->select("	movie.*,
        category1.category_name as 'category1_name'",FALSE);
        $this->db->from('movie');
        $this->db->join("category as category1",'category1.category_id=movie.category1');
        // $this->db->limit($perpage,$start);
        $this->db->where('category1',$category);
		$query = $this->db->get();
        return $query->result();

        
    }
   
    
}

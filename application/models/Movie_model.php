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
}

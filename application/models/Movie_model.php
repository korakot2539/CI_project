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
        $this->db->from('movie a');
        $this->db->join('theater b', 'b.movie_id=a.movie_id', 'left');
        $this->db->join('category c', 'c.category_id=a.category1', 'left');
        $this->db->join('theater d', 'd.movie_id=a.movie_id', 'left');
        $this->db->where('a.movie_id', $id);
        $query = $this->db->get();
        return $query->row(0);
    }

    public function record_count()
    {
        $this->db->from('movie');
        return $this->db->count_all_results();
    }

    public function getOndewithTime1($id, $time)
    {
        $this->db->select('*');
        $this->db->from('movie a');
        $this->db->join('theater b', 'b.movie_id=a.movie_id', 'left');
        $this->db->join('category c', 'c.category_id=a.category1', 'left');
        $this->db->where('a.movie_id', $id);
        $this->db->where('b.theater_time1', $time);
        $query = $this->db->get();
        return $query->row(0);
    }
    public function getPdf($id)
    {
        $this->db->select('*');
        $this->db->from('ticket a');
        $this->db->join('movie b', 'b.movie_id=a.product_id');
        $this->db->where('a.ticket_id', $id);
        $this->db->order_by("a.ticket_id", "DESC");
        $query = $this->db->get();
        return $query->row(0);
    }

    public function getUserData($id)
    {
        $this->db->select('*');
        $this->db->from('ticket a');
        $this->db->join('movie b', 'b.movie_id=a.product_id');
        $this->db->where('b.movie_id', $id);
        $this->db->order_by("a.ticket_id", "DESC");
        $query = $this->db->get();
        return $query->row(0);
    }

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

     public function getAll($start=0 , $perpage=0, $keyword='')
    {
        $this->db->select('*');
        $this->db->from('movie');
        $this->db->limit($perpage,$start);
		$query = $this->db->get();
		return $query->result();
    }

    public function CategoryName($catename='')
	{
        $this->db->select("	category.*,category_name",FALSE);
        $this->db->from('category');
        $this->db->where('category_id',$catename);
		$query = $this->db->get();
        return $query->row(0);
    }
    public function getCheckCategory()
	{
        $this->db->distinct();
        $this->db->select("movie.category1,
        category1.category_name",FALSE);
        $this->db->from('movie');
        $this->db->join("category as category1",'category1.category_id=movie.category1');
		$query = $this->db->get();
        return $query->result();
    }
}

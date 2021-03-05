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
        $this->db->where('a.movie_id', $id);


        $query = $this->db->get();
        return $query->row(0);
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

    public function getUserData($id)
    {
        $this->db->select('*');
        $this->db->from('ticket a');
        $this->db->join('movie b', 'b.movie_id=a.product_id');
        $this->db->where('b.movie_id', $id);
        $this->db->order_by("timestamp", "DESC");
        $query = $this->db->get();
        return $query->row(0);
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('movie a');
        $this->db->join('theater b', 'b.movie_id=a.movie_id');

        $query = $this->db->get();
        return $query->result();
    }
}

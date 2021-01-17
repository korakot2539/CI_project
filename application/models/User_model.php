<?php
/**
 * 
 */
class User_model extends CI_Model
{
	
	 public function __construct(argument)
	{
		# code...
	}
	public function getOne($id)
	{
		$this->db->where('USER_ID',$id);
        $query = $this->db->get('user');

        return $query->row(0);
	}
	public function getAll()
	{
		 $this->db->select(*);
        $this->db->from('user');
        $query = $this->db->get();

		return $query->result();
	}
	
}
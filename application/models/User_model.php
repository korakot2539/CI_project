<?php
/**
 * 
 */
class User_model extends CI_Model
{
	
	 public function __construct()
	{
		# code...
	}
	public function getOne($id)
	{
		$this->db->where('user_id',$id);
        $query = $this->db->get('user');

        return $query->row(0);
	}
	public function getAll()
	{
		 $this->db->select("*");
        $this->db->from('user');
        $query = $this->db->get();

		return $query->result();
	}
	public function getLogin($email)
	{
		$this->db->where('email',$email);
        $query = $this->db->get('user');

        return $query->row(0);
	}

	public function checklogin($email,$pwd)
	{
		$pwd = md5($pwd);
		
		$this->db->where('email',$email);
		$this->db->where('password',$pwd);

		$query = $this->db->get('user');

		if($query->num_rows()==0){
			return FALSE;
		}
		else{
			return $query->row(0);
		}

	}
	







	
	
}
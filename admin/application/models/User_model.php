<?php

 class User_model extends CI_Model
{
	
	 public function __construct()
	{
		# code...
	}
	public function getOne($id)
	{
		$this->db->select('user_id,email,name,phone');
        $this->db->from('user');
		$this->db->where('user_id',$id);
      
   
 		 $query = $this->db->get();
        return $query->row(0);
	}
	public function getAll( $keyword='')
	{
		
        $this->db->select('user_id,email,name,phone');
        $this->db->from('user');

		// if(strlen($keyword) > 0){
        //     $this->db->like('name', $keyword, 'both'); 
		// }
		
 		$query = $this->db->get();
      	return $query->result();
	}

	
    public function count($keyword='')
    {
        if(strlen($keyword) > 0){
            $this->db->like('name', $keyword, 'both'); 
        }
        $this->db->from('user');       

        return $this->db->count_all_results();

    }
	
}
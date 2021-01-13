<?php 

class Movie extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->load->view('selected/selected_main',$data);		 
	}

	public function addForm()
	{
	
	}

	public function addSave()
	{

	}

	public function editForm($province_id)
	{

	}

	public function editSave($province_id)
	{

	}

	public function delete($province_id)
	{

	}

}

 ?>

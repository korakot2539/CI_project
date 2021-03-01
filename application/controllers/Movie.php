<?php 

class Movie extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	

		$this->load->model('Product_model');
		$this->load->model('Movie_model');
	}

	public function index()
	{
		$this->load->view('selected/selected_main');
	}
	public function addForm()
	{
	
	}

	public function addSave()
	{

	}

	public function editForm()
	{

	}

	public function editSave()
	{

	}

	public function delete()
	{

	}

}

 ?>

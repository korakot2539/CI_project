<?php 

class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
        $data["content"] = "home/content/home";
		$this->load->view('home/home_main',$data);
	}
	
}
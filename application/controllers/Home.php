<?php

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Movie_model');
	}

	public function index()
	{
		$data['movies'] = $this->Movie_model->getAll();
		$this->load->view('home/home', $data);
	}
}

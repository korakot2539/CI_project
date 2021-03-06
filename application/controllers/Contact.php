<?php

class Contact extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Movie_model');
  }

  public function index()
  {
    $showcategorys = $this->Movie_model->getCheckCategory();
		$data['showcategorys'] = $showcategorys;
    $this->load->view('contact/contact',$data);
  }
}


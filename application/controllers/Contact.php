<?php

class Contact extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['content'] = '/home/content/contact';
    $this->load->view('home/home_main',$data);
  }

}


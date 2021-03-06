<?php

class Profile extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->model('Movie_model');
      $showcategorys = $this->Movie_model->getCheckCategory();
        $data['showcategorys'] = $showcategorys;
    $this->load->view('profile/profile');
  }

}


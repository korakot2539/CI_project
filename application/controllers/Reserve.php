<?php

class Reserve extends CI_Controller
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
        $this->load->view('reserve/reserve',$data);
    }

    public function movie_details($id)
    {
        $showcategorys = $this->Movie_model->getCheckCategory();
		$data['showcategorys'] = $showcategorys;
        $data['movies'] = $this->Movie_model->getOne($id);
        $this->load->view('reserve/reserve', $data);
    }
}

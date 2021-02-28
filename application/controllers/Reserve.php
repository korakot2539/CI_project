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
        $this->load->view('reserve/reserve');
    }

    public function movie_details($id)
    {
        $data['movies'] = $this->Movie_model->getOne($id);
        $this->load->view('reserve/reserve', $data);
    }
}

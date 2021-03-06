<?php

class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ticket_model');
        $this->load->model('Movie_model');
        $this->load->model('Ticket_model');
        $this->load->library('pdf');
    }

    public function index()
    {
        $this->load->view('ticket/ticket');
    }

    public function insert_ticket($id, $theater)
    {
        $t = time();
        $data['user_id'] = $this->session->userdata('ss_user_id');
        $data['product_id'] = $id;
        $data['theater_time'] = $theater;
        $data['timestamp'] = date("Y-m-d h:i:s", $t);
        $data['total_ticket'] = $this->session->userdata('ss_total_ticket');
        $data['total_price'] =  (int)$data['total_ticket'] * 250;
        $this->db->insert('ticket', $data);
        redirect("Ticket/ticket_details/$id/$theater");
    }

    public function ticket_details($id, $time)
    {
        $data['movies'] = $this->Movie_model->getUserData($id);
        $this->load->view('ticket/ticket', $data);
    }

    public function history($id)
    {
      $this->load->model('Movie_model');
      $showcategorys = $this->Movie_model->getCheckCategory();
      $data['showcategorys'] = $showcategorys;
      $data['tickets'] = $this->Ticket_model->getHistory($id);
      $this->load->view('history/history',$data);
    }
}

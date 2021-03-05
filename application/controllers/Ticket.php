<?php

class Ticket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Movie_model');
        $this->load->library('pdf');
    }

    public function index()
    {
        $this->load->view('ticket/ticket');
    }

    public function insert_ticket($id, $theater)
    {
        $t = time();
        $data['user_id'] = 1;
        $data['product_id'] = $id;
        $data['theater_time'] = $theater;
        $data['timestamp'] = date("Y-m-d h:i:s", $t);
        $data['total_ticket'] = $this->input->post('mylist');
        $this->db->insert('ticket', $data);
        redirect("Ticket/ticket_details/$id/$theater");
    }

    public function ticket_details($id, $time)
    {
        $data['movies'] = $this->Movie_model->getUserData($id);
        $this->load->view('ticket/ticket', $data);
    }

    public function html_to_pdf($id, $time)
    {
        $html_content = '<h3 align="center">Convert HTML to PDF in CodeIgniter using Dompdf</h3>';
        $html_content .= $this->Movie_model->getPdfForm($id);
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("" . $id . ".pdf", array("Attachment" => 0));
    }
}

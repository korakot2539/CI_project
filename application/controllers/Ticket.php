<?php
<<<<<<< HEAD

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
}
=======
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Ticket
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Ticket extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Ticket_model');
  }

  public function index($id)
  {
    $data['tickets'] = $this->Ticket_model->getHistory($id);
    $this->load->view('history/history',$data);
  }

}


/* End of file History.php */
/* Location: ./application/controllers/History.php */
>>>>>>> origin/Tai

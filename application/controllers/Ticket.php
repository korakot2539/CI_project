<?php
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

  public function index()
  {
    $data['tickets'] = $this->Ticket_model->getAll();
    $this->load->view('history/history',$data);
  }

}


/* End of file History.php */
/* Location: ./application/controllers/History.php */
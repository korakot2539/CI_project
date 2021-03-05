<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Ticket_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Ticket_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  public function getAll()
    {
        $this->db->select('t.*,u.name');
        $this->db->from('ticket t');
        $this->db->join('user u','t.user_id = u.user_id');
        
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file Ticket_model.php */
/* Location: ./application/models/Ticket_model.php */
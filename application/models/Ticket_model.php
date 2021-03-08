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

  public function getHistory($id)
  {
      $this->db->select('*');
      $this->db->from('ticket t');
      $this->db->join('movie m', 'm.movie_id=t.product_id');
      $this->db->where('t.user_id', $id);
      $this->db->order_by("t.ticket_id", "DESC");

      $query = $this->db->get();
      return $query->result();
  }

}

/* End of file Ticket_model.php */
/* Location: ./application/models/Ticket_model.php */
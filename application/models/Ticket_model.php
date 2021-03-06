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
<<<<<<< HEAD:application/models/History_model.php
        $this->db->select('h.*,u.name');
        $this->db->from('history h');
        $this->db->join('user u','h.user_id = u.user_id');
<<<<<<< HEAD

=======
        
>>>>>>> origin/Tai
=======
        $this->db->select('*');
        $this->db->from('ticket t');
        $this->db->join('movie m', 'm.movie_id=t.ticket_id');
        $this->db->where('t.user_id', $id);
        $this->db->order_by("t.ticket_id", "DESC");

>>>>>>> origin/Tai:application/models/Ticket_model.php
        $query = $this->db->get();
		return $query->result();
    }

}

/* End of file Ticket_model.php */
/* Location: ./application/models/Ticket_model.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model History_model
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

class History_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  public function getAll()
    {
        $this->db->select('h.*,u.name');
        $this->db->from('history h');
        $this->db->join('user u','h.user_id = u.user_id');
        
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file History_model.php */
/* Location: ./application/models/History_model.php */
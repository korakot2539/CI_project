<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Theme
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

class Theme extends CI_Controller
{
    
  function __construct()
	{
		parent::__construct();	
		$this->load->model('Movie_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$this->load->view('movie/theme');
	}

}


/* End of file Theme.php */
/* Location: ./application/controllers/Theme.php */
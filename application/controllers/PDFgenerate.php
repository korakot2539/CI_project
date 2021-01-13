<?php

class PDFgenerate extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
    }

    function generate()
    {
        
    }

}

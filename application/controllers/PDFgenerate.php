<?php

class PDFgenerate extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        include(APPPATH . "third_party/mpdf/mpdf.php");
    }
}

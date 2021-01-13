<?php

class Auth extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
    }

    function login()
    {

    }
    
    function jwt($user)
    {
        
    }

    function logout()
    {
        redirect();
    }

    function signup()
    {
        
    }

}

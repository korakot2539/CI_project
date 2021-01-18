<?php

class Auth extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
    }

    function loginForm()
    {
        $data["content"]="login/content/login";
        $this->load->view("login/login_main",$data);	
    }

    function login()
    {
        /*
        $userdata  = $this->User_model->getOne($user);
        if($userdata!="")
        {
            if($userdata->password==$password)
            {
                complete;
                redirect(main);
            }
        }
        incomplete;
        redirect(login);

        */
    }
    
    function jwt()
    {
        
    }

    function logout()
    {
        /*
        redirect(main);
        */
    }

    function registerForm()
    {
        $data["content"]="login/content/register";
        $this->load->view("login/login_main",$data);	
    }

    function register()
    {
        
    }

}

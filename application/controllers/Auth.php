<?php

class Auth extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model("User_model");
       
    }

    function loginForm()
    {
        $this->load->view("login/login");	
    }

    function login()
    {
        $email = $this->input->post('email');	
        $password = $this->input->post('pass');
        
        if($user = $this->User_model->checklogin($email,$password)){
            $sess_data = array(
                'ss_user_id'=> $user->user_id,
                'ss_user_email'=> $user->email,
                'ss_user_name'=> $user->name,
                'ss_user_dt'=> date('d M Y H:i:s'),
            );
            $this->session->set_userdata($sess_data);
            redirect("Home/index");
        }
        else
        {
            $this->session->set_flashdata('flash_errors', "Username or password invalid");
            $this->load->view("login/login");
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
		redirect("Home");
    }

}

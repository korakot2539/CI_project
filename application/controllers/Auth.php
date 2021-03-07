<?php

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("Movie_model");
    }

    function loginForm()
    {
        $this->load->view("login/login");
    }

    function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');

        if ($user = $this->User_model->checklogin($email, $password)) {
            
            $sess_data = array(
                'ss_user_id' => $user->user_id,
                'ss_user_email' => $user->email,
                'ss_user_name' => $user->name,
                'ss_user_dt' => date('d M Y H:i:s')
            );
            $this->session->set_userdata($sess_data);
            if (isset($_SESSION['ss_movie_id'])){
                $movie_id = $this->session->userdata('ss_movie_id');
                $theater_time = $this->session->userdata('ss_theater_time');
                redirect("Ticket/insert_ticket/$movie_id/$theater_time");
            }else{
                redirect("Home/index");
            }
           
        } else {
            $this->session->set_flashdata('flash_errors', "Username or password invalid");
            $this->load->view("login/login");
        }
    }


    function loginWithOrder($id, $theater)
    {
        if (isset($_SESSION['ss_user_id'])){
             $sess_data['ss_total_ticket'] = $this->input->post('mylist');
             
            $this->session->set_userdata($sess_data);
            redirect("Ticket/insert_ticket/$id/$theater");
        }else {
            $sess_link = array(
                'ss_movie_id' => $id,
                'ss_theater_time' => $theater,
                'ss_total_ticket' => $this->input->post('mylist'),
                'ss_total_price' => 250
            );
            
            $this->session->set_userdata($sess_link);
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/Tai
<?php
class User extends CI_Controller
{
    function __construct() {
        parent:: __construct();    
<<<<<<< HEAD

=======
>>>>>>> origin/Tai
        $this->load->model("User_model");
    }

    public function index()
    {

    }

    public function login()
<<<<<<< HEAD
    {
        $this->form_validation->set_rules("username", "Username", "required|alpha_numeric", 
                                    array(
                                        'required' => 'กรุณากรอก %s',
                                        "alpha_numeric" => "%s อนุญาตเป็นตัวเลขและภาษาอังกฤษเท่านั้น")
                                    );
        $this->form_validation->set_rules('pwd', 'Password', 'required', array('required' => 'กรุณากรอก %s'));
        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata("flash_errors", validation_errors());
            $this->load->view("login.php");
        } else {
            $username = $this->input->post("username");
            $pwd = $this->input->post("pwd");

            if ($user = $this->Admin_model->checkLogin($username,$pwd)){
                // echo $this->db->last_query();
                // echo "Login OK";
                // print_r($user);
                $sess_data = array(
                    "ss_admin_id" => $user->admin_id,
                    "ss_admin_username" => $user->username,
                    "ss_admin_fullname" => $user->fullname,
                    "ss_admin_dt" => date("d M Y H:i:s")
                );
                $this->session->set_userdata($sess_data);
                redirect("Home");
            }
            else{
                $this->session->set_flashdata("flash_errors", "Username or Password invalid");
                $this->load->view("login.php");
            }
        }
    }
=======
	{
		$this->form_validation->set_rules('username', ' รหัสผู้ใช้ ', 'required' , 
											array(
												'required'=> ' กรุณากรอก %s '
												// 'alpha_numeric'=>'%s อนุญาติภาษาอังกฤษและตัวเลขเท่านั้น'
												)
										);
		$this->form_validation->set_rules('pwd', ' รหัสผ่าน ', 'required' , 
											array('required'=> ' กรุณากรอก %s '));
		if ($this->form_validation->run() == FALSE)
        {
        	$this->session->set_flashdata('flash_errors',validation_errors());
            $this->load->view("login");
        }
        else
        {

            $email = $this->input->post('username');
            $pwd = $this->input->post('pwd');
			
            if($user = $this->User_model->checklogin($email,$pwd)){

            	$sess_data = array(
            		'user_id'=> $user->user_id,
            		'user_email'=> $user->email,
            		'user_fullname'=> $user->name,
            		'user_dt'=> date('d M Y H:i:s'),
            	);
            	$this->session->set_userdata($sess_data);
            	redirect("Home");
            }
            else
            {
            	$this->session->set_flashdata('flash_errors', "Username or password invalid");
            	$this->load->view("login");
            }
        }
		
	}

    public function logout()
    {
        $this->session->sess_destroy();

        redirect("home");
    }
}

=======
<?php
class User extends CI_Controller
{
    function __construct() {
        parent:: __construct();    
        $this->load->model("User_model");
    }

    public function index()
    {

    }

    public function login()
	{
		$this->form_validation->set_rules('username', ' รหัสผู้ใช้ ', 'required' , 
											array(
												'required'=> ' กรุณากรอก %s '
												// 'alpha_numeric'=>'%s อนุญาติภาษาอังกฤษและตัวเลขเท่านั้น'
												)
										);
		$this->form_validation->set_rules('pwd', ' รหัสผ่าน ', 'required' , 
											array('required'=> ' กรุณากรอก %s '));
		if ($this->form_validation->run() == FALSE)
        {
        	$this->session->set_flashdata('flash_errors',validation_errors());
            $this->load->view("login");
        }
        else
        {

            $email = $this->input->post('username');
            $pwd = $this->input->post('pwd');
			
            if($user = $this->User_model->checklogin($email,$pwd)){

            	$sess_data = array(
            		'user_id'=> $user->user_id,
            		'user_email'=> $user->email,
            		'user_fullname'=> $user->name,
            		'user_dt'=> date('d M Y H:i:s'),
            	);
            	$this->session->set_userdata($sess_data);
            	redirect("Home");
            }
            else
            {
            	$this->session->set_flashdata('flash_errors', "Username or password invalid");
            	$this->load->view("login");
            }
        }
		
	}
>>>>>>> origin/Tai

    public function logout()
    {
        $this->session->sess_destroy();

        redirect("home");
    }
}

<<<<<<< HEAD
=======
>>>>>>> 2701da5627522ef97a861b9f80e596e4bc109dad
>>>>>>> origin/Tai
?>
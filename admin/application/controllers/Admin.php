<?php 

class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
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
			
            if($user = $this->Admin_model->checklogin($email,$pwd)){

            	$sess_data = array(
            		'ss_admin_id'=> $user->admin_id,
            		'ss_admin_email'=> $user->email,
            		'ss_admin_fullname'=> $user->name,
            		'ss_admin_dt'=> date('d M Y H:i:s'),
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

	public function changePassword()
	{

		$this->form_validation->set_rules('old_password', ' รหัสผ่านเดิม ', 'required' , array('required'=> ' กรุณากรอก %s '));
		$this->form_validation->set_rules('new_password', ' รหัสผ่านใหม่ ', 'required|regex_match[/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])/]' , 
			array(
				'required'=> ' กรุณากรอก %s ',
				'regex_match'=>'<ol>
								<li>At least one digit [0-9]</li>
								<li>At least one lowercase character [a-z]</li>
								<li>At least one uppercase character [A-Z]</li>								
								</ol>',
			)
		);
		$this->form_validation->set_rules('confirm_password', ' ยืนยันรหัสผ่าน ', 'required|matches[new_password]' , 
							array(
								'required'=> ' กรุณากรอก %s ',
								'matches'=> ' ยืนยันรหัสไม่ตรงกับรหัสผ่านใหม่ ',
		));

		if ($this->form_validation->run() == FALSE)
        {
        	$this->session->set_flashdata('flash_errors',validation_errors());
            
            $data['content'] = "admin/changepass";
			$this->load->view("layout/main",$data);

        }
        else
        {
        	$admin_id = $this->session->userdata('ss_admin_id');	
        	$old_password = $this->input->post('old_password');
        	$new_password = $this->input->post('new_password');

        	$params['pwd'] = md5($new_password);
        	$this->db->where('admin_id',$admin_id);
        	$this->db->update('admin', $params );        	
        	redirect('Home');

        }
	}

	public function changeProfile()
	{
			$data['content'] = "admin/changeprofile";
			$this->load->view("layout/main",$data);;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("Home");
	}


}

 ?>
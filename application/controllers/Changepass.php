<?php


class Changepass extends CI_Controller
{
    
  public function __construct()
  {
	parent::__construct();
	
  }

  public function index($id)
  {


	
	$this->form_validation->set_rules('old_password', ' รหัสผ่านเก่า ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));
	$this->form_validation->set_rules('new_password', ' รหัสผ่านใหม่ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));
	$this->form_validation->set_rules('con_password', ' ยืนยันรหัสผ่านใหม่ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));
	
	$this->load->model('Movie_model');
	$this->load->model('User_model');
	
    $showcategorys = $this->Movie_model->getCheckCategory();
	$data['showcategorys'] = $showcategorys;
	
	$userdata = $this->User_model->getOne($id);
	$data['userdata'] = $userdata;

	if($this->form_validation->run() == FALSE ){
			
		// Load form
		 $data['errors'] = validation_errors();
		$this->session->set_flashdata('flash_errors',validation_errors());
		
		$userdata = $this->User_model->getOne($id);
		$data['userdata'] = $userdata;
		
		//$data['user'] = $this->User_model->getOne($id); 
		//$data['method'] = "edit";			
		$data['error'] = "";
		//$data["content"] = 'User/form';
		$this->load->view('changepass/changepass', $data);
	}
	else{
		// SAVE
		// assign to variable
		
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');
			$con_password = $this->input->post('con_password');

			if($userdata->password == md5($old_password)  ){
				if($con_password == $new_password){
					$new_password = md5($new_password);
					$params['password'] = $new_password;
					$this->db->where('user_id',$id);
					$this->db->update('user',$params);	
					$message = "บันทึกข้อมูลเรียบร้อย";
			        echo "<script type='text/javascript'>alert('$message');</script>";
					redirect("Home/index",'refresh');
				}else{
                    $message = "ยืนยันรหัสผ่านไม่ถูกต้อง";
                    echo "<script type='text/javascript'>alert('$message');</script>";
					
				}
			}
			else{
				$message = "รหัสผ่านเก่าไม่ถูกต้อง";
			
					echo "<script type='text/javascript'>alert('$message');</script>";
					redirect("Changepass/index/$userdata->user_id",'refresh');
			}
				
		
		redirect("Changepass/index/$userdata->user_id",'refresh');
		}
















  }
 


}



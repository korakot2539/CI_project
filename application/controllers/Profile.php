<?php


class Profile extends CI_Controller
{
    
  public function __construct()
  {
	parent::__construct();
	
  }

  public function index($id)
  {

	$this->form_validation->set_rules(
		'name', 
		' ชื่อ ', 
		'trim|required', 
		array('required'=> ' กรุณากรอก %s '));


	$this->form_validation->set_rules('phone', ' เบอร์ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));
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
		$this->load->view('profile/profile', $data);
	}
	else{
		// SAVE
		// assign to variable
		
		
			$old_password = $this->input->post('old_password');
			$new_password = $this->input->post('new_password');
			$con_password = $this->input->post('con_password');
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			if ($old_password == "" || $new_password==""|| $con_password ==""){
				$message = "กรุณากรอกข้อมูลให้ครบ";
					echo $strconfirm = "<script type='text/javascript'>confirm('$message');</script>";
			}
			else{
				
			
			if($userdata->password == md5($old_password)  ){
				if($con_password == $new_password){
					$message = "บันทึกข้อมูลเรียบร้อย";
					echo $strconfirm = "<script type='text/javascript'>confirm('$message');</script>";
					if($strconfirm == true){
						$message = "เย้";
						$new_password = md5($new_password);
						$params['name'] = $name;
						$params['phone'] = $phone;
						$params['password'] = $new_password;
						$this->db->where('user_id',$id);
						$this->db->update('user',$params);	
						
					}
				}else{
					$message = "ยืนยันรหัสผ่านไม่ถูกต้อง";
					
				}
			}
			else{
				$message = "รหัสผ่านเก่าไม่ถูกต้อง";
			
					echo "<script type='text/javascript'>alert('$message');</script>";
					redirect("Profile/index/$userdata->user_id",'refresh');
			}
				
		}
		redirect("Profile/index/$userdata->user_id",'refresh');
		}
















  }
  public function edit($id){
  }


}



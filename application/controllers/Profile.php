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
		if ($userdata == ""){
			$message = "ไม่ได้";
			echo $strconfirm = "<script type='text/javascript'>confirm('$message');</script>";
		}
		//$data['user'] = $this->User_model->getOne($id); 
		//$data['method'] = "edit";			
		$data['error'] = "";
		//$data["content"] = 'User/form';
		$this->load->view('profile/profile', $data);
	}
	else{
		// SAVE
		// assign to variable
		
		
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
		
			
			$params['name'] = $name;
			$params['phone'] = $phone;
		
			$this->db->where('user_id',$id);
			$this->db->update('user',$params);	
			$message = "บันทึกข้อมูลเรียบร้อย";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
			
					
				
						
						
					
				
			
			
				
		
		redirect("Profile/index/$userdata->user_id",'refresh');
		}
















  }
 


}



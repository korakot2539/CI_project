<?php 

class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->load->model('User_model');
        
      
	}

	public function index()
	{
	
		$keyword = $this->input->get('keyword');
		$data['keyword'] = $keyword;

		$config['base_url'] = base_url("User/index/");
		$config['total_rows'] = $this->User_model->count($keyword);
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$data['links'] =  $this->pagination->create_links();

		$users = $this->User_model->getAll(0,100);

		$start = $this->uri->segment(3)>0?$this->uri->segment(3):0;
		$users  = $this->User_model->getAll($start, $config['per_page'] ,$keyword);
		$data['total_rows'] = $config['total_rows'];
		$data['users'] = $users;
		$data['content'] = "user/show";
		$this->load->view("layout/main",$data);
	}

	public function add()
	{	

	
	

		$this->form_validation->set_rules('email', 'อีเมล', 'required' , array('required'=> ' กรุณากรอก %s '));
		$this->form_validation->set_rules('name', 'ชื่อ', 'required' , array('required'=> ' กรุณากรอก %s '));
		$this->form_validation->set_rules('phone', 'เบอร์โทร', 'required' , array('required'=> ' กรุณากรอก %s '));
		// $this->form_validation->set_rules('poster', 'โปสเตอร์ ', 'required' , array('required'=> ' กรุณาเลือก %s '));

		if($this->form_validation->run() == FALSE ){
			// Load form
			$this->session->set_flashdata('flash_errors',validation_errors());
			$data['email'] = ""; 
			$data['name'] = "";	
			$data['phone'] = "";
			$data['user'] = "";
			$data["content"] = 'User/form';
			$data['method'] = "add";	
			$data['error'] = "";
			$this->load->view('layout/main',$data);
		}else{
			// SAVE
				// assign to variable
				$email = $this->input->post('email');
				$name = $this->input->post('name');
				$phone = $this->input->post('phone');
				$params['email'] = $email;
				$params['name'] = $name;
				$params['phone'] = $phone;
				
				$this->db->insert('user',$params);

				$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');
				redirect("User/add");
				
			
		}
		
	}
	
	public function edit($user_id)
	{
	
		$this->form_validation->set_rules(
			'email', 
			' อีเมล ', 
			'trim|required', 
			array('required'=> ' กรุณากรอก %s '));

		$this->form_validation->set_rules('name', ' ชื่อ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));
		$this->form_validation->set_rules('phone', ' เบอร์ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));

		if($this->form_validation->run() == FALSE ){
			
			// Load form
			// $data['errors'] = validation_errors();
			$this->session->set_flashdata('flash_errors',validation_errors());
			
			$users = $this->User_model->getAll(0,100);
		
	

			$data['user'] = $this->User_model->getOne($user_id); 
			$data['method'] = "edit";			
			$data['error'] = "";
			$data["content"] = 'User/form';
			$this->load->view('layout/main',$data);
		}
		else{
			// SAVE
			// assign to variable
			
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			// Prepare Query builder
			
			$params['email'] = $email;
			$params['name'] = $name;
			$params['phone'] = $phone;
			$this->db->where('user_id',$user_id);
			$this->db->update('user',$params);

			$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');

			redirect("User/edit/$user_id",'refresh');
			}
		
	}

	public function delete($user_id)
	{
		$this->session->set_flashdata('flash_success','ข้อมูลถูกลบแล้วไม่สามารถย้อนกลับได้อีก');

		$this->db->where('user_id',$user_id);
		$this->db->delete('user');

		redirect("User/index");
	}

}
 ?>
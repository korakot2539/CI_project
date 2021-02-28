<?php 

class Category extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->load->model('Movie_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$keyword = $this->input->get('keyword');
		$data['keyword'] = $keyword;


		$config['base_url'] = base_url("Category/index/");
		$config['total_rows'] = $this->Category_model->count($keyword);
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$data['links'] =  $this->pagination->create_links();

		$movies = $this->Movie_model->getAll(0,100);

		$start = $this->uri->segment(3)>0?$this->uri->segment(3):0;
		$categories  = $this->Category_model->getAll($start, $config['per_page'] ,$keyword);
		$data['total_rows'] = $config['total_rows'];
		$data['categories'] = $categories;
		$data['content'] = "category/show";
		$this->load->view("layout/main",$data);
	}

	public function add()
	{	
		$this->form_validation->set_rules('category_name', 'ชื่อหมวดหมู่ ', 'required' , array('required'=> ' กรุณากรอก %s '));

		if($this->form_validation->run() == FALSE ){
			// Load form
			$this->session->set_flashdata('flash_errors',validation_errors());
			$data['category'] = ""; 
			$data['method'] = "add";
			$data["content"] = 'category/form';
			$this->load->view('layout/main',$data);
		}else{
			// SAVE
			// assign to variable
			$category_name = $this->input->post('category_name');
			// Prepre Query builder
			$params['category_name'] = $category_name;
			$this->db->insert('category',$params);
			$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');
			redirect("Category/");
			
		}
		
	}
	
	public function edit($category_id)
	{
		$this->form_validation->set_rules('category_name', ' ชื่อหมวดหมู่ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));

		if($this->form_validation->run() == FALSE ){
			
			// Load form
			// $data['errors'] = validation_errors();
			$this->session->set_flashdata('flash_errors',validation_errors());
			
			$data['category_id'] = $category_id; 
			$data['category'] = $this->Category_model->getOne($category_id); 
			$data['method'] = "edit";			

			$data["content"] = 'category/form';
			$this->load->view('layout/main',$data);
		}
		else{
			// SAVE
			// assign to variable
			$category_name = $this->input->post('category_name');

			// Prepare Query builder
			$params['category_name'] = $category_name;

			$this->db->where('category_id',$category_id);
			$this->db->update('category',$params);

			$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');

			redirect("Category/edit/$category_id",'refresh');
		}
	}

	public function delete($category_id)
	{
		$this->session->set_flashdata('flash_success','ข้อมูลถูกลบแล้วไม่สามารถย้อนกลับได้อีก');

		$this->db->where('category_id',$category_id);
		$this->db->delete('category');

		redirect("Category/index");
	}


}
 ?>
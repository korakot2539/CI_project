<?php 

class Movie extends CI_Controller
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


		$config['base_url'] = base_url("Movie/index/");
		$config['total_rows'] = $this->Movie_model->count($keyword);
		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		$data['links'] =  $this->pagination->create_links();

		$movies = $this->Movie_model->getAll(0,100);

		$start = $this->uri->segment(3)>0?$this->uri->segment(3):0;
		$movies  = $this->Movie_model->getAll($start, $config['per_page'] ,$keyword);
		$data['total_rows'] = $config['total_rows'];
		$data['movies'] = $movies;
		$data['content'] = "movie/show";
		$this->load->view("layout/main",$data);
	}

	public function add()
	{	
		// $this->form_validation->set_rules('province_id','จังหวัด','greater_than[0]',array('greater_than'=>'กรุณาเลือก %s'));
		$this->form_validation->set_rules('movie_name', 'ชื่อภาพยนต์ ', 'required' , array('required'=> ' กรุณากรอก %s '));

		if($this->form_validation->run() == FALSE ){
			// Load form
			// $data['errors'] = validation_errors();
			$this->session->set_flashdata('flash_errors',validation_errors());
			
			$data['movie'] = ''; 
			$data['method'] = "add";	

			$categories = $this->Category_model->getAll(0,100);
			$arr = array('--CATEGORY--');
			foreach ($categories as $category) {
				$arr[$category->category_id] = $category->category_name;
			}
			$data['categories'] = $arr;

			$data["content"] = 'movie/form';
			$this->load->view('layout/main',$data);
		}
		else{
			// SAVE
			// assign to variable
			$movie_name = $this->input->post('movie_name');

			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["poster"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["poster"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}

			// Prepare Query builder
			$params['movie_name'] = $movie_name;
			$params['poster'] = $target_file;

			$this->db->insert('movie',$params);

			$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');

			redirect("Movie/add");
		}

		
	}
	
	public function edit($amphur_id)
	{
		$this->form_validation->set_rules('province_id','จังหวัด','greater_than[0]',array('greater_than'=>'กรุณาเลือก %s'));
		$this->form_validation->set_rules(
			'amphur_code', 
			' รหัสอำเภอ ', 
			'trim|required', 
			array('required'=> ' กรุณากรอก %s '));

		$this->form_validation->set_rules('amphur_name', ' ชื่ออำเภอ ', 'required' , array('trim|required'=> ' กรุณากรอก %s '));

		if($this->form_validation->run() == FALSE ){
			
			// Load form
			// $data['errors'] = validation_errors();
			$this->session->set_flashdata('flash_errors',validation_errors());
			
			$provinces = $this->Province_model->getAll(0,100);
			$arr = array('--Province--');
			foreach ($provinces as $province) {
				$arr[$province->province_id] = $province->province_name;
			}
			$data['provinces'] = $arr;

			$data['amphur'] = $this->Amphur_model->getOne($amphur_id); 
			$data['method'] = "edit";			

			$data["content"] = 'amphur/form';
			$this->load->view('layout/main',$data);
		}
		else{
			// SAVE
			// assign to variable
			$province_id = $this->input->post('province_id');
			$amphur_code = $this->input->post('amphur_code');
			$amphur_name = $this->input->post('amphur_name');

			// Prepare Query builder
			$params['province_id'] = $province_id;
			$params['amphur_code'] = $amphur_code;
			$params['amphur_name'] = $amphur_name;

			$this->db->where('movie_id',$movie_id);
			$this->db->update('movie',$params);

			$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');

			redirect("Movie/edit/$movie_id",'refresh');
		}
	}

	public function delete($movie_id)
	{
		$this->session->set_flashdata('flash_success','ข้อมูลถูกลบแล้วไม่สามารถย้อนกลับได้อีก');

		$this->db->where('movie_id',$movie_id);
		$this->db->delete('movie');

		redirect("Movie/index");
	}

}
 ?>
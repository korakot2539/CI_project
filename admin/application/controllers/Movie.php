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

		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		$this->form_validation->set_rules('movie_name', 'ชื่อภาพยนต์ ', 'required' , array('required'=> ' กรุณากรอก %s '));
		// $this->form_validation->set_rules('poster', 'โปสเตอร์ ', 'required' , array('required'=> ' กรุณาเลือก %s '));

		if($this->form_validation->run() == FALSE ){
			// Load form
			$this->session->set_flashdata('flash_errors',validation_errors());
			$data['movie'] = ""; 
			$data['method'] = "add";	
			$data['error'] = "";

			$categories = $this->Category_model->getAll(0,100);
			$data['categories'] = $categories;

			$data["content"] = 'movie/form';
			$this->load->view('layout/main',$data);
		}else{
			// SAVE
			// assign to variable
			$movie_name = $this->input->post('movie_name');
			$movie_detail = $this->input->post('movie_detail');
			$movie_trailer = $this->input->post('movie_trailer');
			$movie_time = $this->input->post('movie_time');
			$movie_imdb = $this->input->post('movie_imdb');
			$release_year = $this->input->post('release_year');
			$category1 = $this->input->post('category1');

			$params['movie_name'] = $movie_name;
			$params['movie_detail'] = $movie_detail;
			$params['movie_trailer'] = $movie_trailer;
			$params['movie_time'] = $movie_time;
			$params['movie_imdb'] = $movie_imdb;
			$params['release_year'] = $release_year;
			$params['category1'] = $category1;

			if ( ! $this->upload->do_upload('poster'))
			{
			// no file uploaded or failed upload
				$data['error'] = $this->upload->display_errors();
				$data['movie'] = ''; 
				$data['method'] = "add";
				$data["content"] = 'movie/form';
				$this->load->view('layout/main', $data);
			}
			else{
				
				
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["poster"]["name"]);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$params['poster'] = $target_file;
			}
				// Prepre Query builder
			$this->db->insert('movie',$params);
			$this->session->set_flashdata('flash_success','ข้อมูลถูกบันทึกแล้ว');
				
			redirect("Movie/add");
		}
		
	}
	
	public function edit($movie_id)
	{
		$config['upload_path'] = "./uploads/";
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		$this->form_validation->set_rules('movie_name', 'ชื่อภาพยนต์ ', 'required' , array('required'=> ' กรุณากรอก %s '));

		if($this->form_validation->run() == FALSE ){
			
			// Load form
			$this->session->set_flashdata('flash_errors',validation_errors());
			
			$categories = $this->Category_model->getAll(0,100);
			$data['categories'] = $categories;

			$data['movie'] = $this->Movie_model->getOne($movie_id); 
			$data['method'] = "edit";	

			$data["content"] = 'movie/form';
			$this->load->view('layout/main',$data);
		}
		else{
			// SAVE
			// assign to variable
				
			$movie_name = $this->input->post('movie_name');
			$movie_detail = $this->input->post('movie_detail');
			$movie_trailer = $this->input->post('movie_trailer');
			$movie_time = $this->input->post('movie_time');
			$movie_imdb = $this->input->post('movie_imdb');
			$release_year = $this->input->post('release_year');
			$category1 = $this->input->post('category1');

			$params['movie_name'] = $movie_name;
			$params['movie_detail'] = $movie_detail;
			$params['movie_trailer'] = $movie_trailer;
			$params['movie_time'] = $movie_time;
			$params['movie_imdb'] = $movie_imdb;
			$params['release_year'] = $release_year;
			$params['category1'] = $category1;

			if ( ! $this->upload->do_upload('poster'))
			{
			// no file uploaded or failed upload
				$data['movie'] = $this->Movie_model->getOne($movie_id); 
				$data['method'] = "edit";
				$data["content"] = 'movie/form';
				$this->load->view('layout/main', $data);
			}
			else{
				

				if(!empty($_FILES['poster'])){
					#then execute this code when there is image uploaded
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["poster"]["name"]);
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$params['poster'] = $target_file;
				}			
			}
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
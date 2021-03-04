<?php

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Movie_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$config['base_url'] = base_url('Movie/page/');	
		$config['total_rows'] = $this->Movie_model->record_count();
		$config['per_page'] = 24;
		
		// bootstrap paginator
		$config['num_tag_open'] = '<li class ="paginator__item">'; 
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="paginator__item paginator__item--active"><a href="#">'; 
		$config['cur_tag_close'] = '</a></li>'; 
		$config['next_link'] = '<i class="icon ion-ios-arrow-forward"></i>'; 
		$config['prev_link'] = '<i class="icon ion-ios-arrow-back"></i>'; 
		$config['next_tag_open'] = '<li class="paginator__item paginator__item--next">'; 
		$config['next_tag_close'] = '</li>'; 
		$config['prev_tag_open'] = '<li class="paginator__item paginator__item--prev">'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['first_tag_open'] = '<li class="paginator__item paginator__item--next">'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li class="paginator__item paginator__item--prev">'; 
		$config['last_tag_close'] = '</li>';
		// bootstrap paginator

		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		$start = $this->uri->segment(3)>0?$this->uri->segment(3):0;
		$movies  = $this->Movie_model->getAll($start, $config['per_page']);
		$showcategorys = $this->Movie_model->getCheckCategory();
		$data['total_rows'] = $config['total_rows'];
		$data['movies'] = $movies;
		$data['showcategorys'] = $showcategorys;
		$this->load->view('home/home', $data);

	}
}

<?php

class PDFgenerate extends CI_Controller
{

    function __construct()
    {
		parent::__construct();
		$this->load->library('Domlib');
		$this->load->model('Movie_model');
	}

	public function index($id) {			
		// Gathering Ddata
        $userData = $this->Movie_model->getPdf($id);
		$image = $userData->poster;

		$path = base_url("admin/$image");
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $dataimg = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);

		$movie_title = $userData->movie_name;
		$theatre_time = $userData->theater_time;
		$ticket_quan = $userData->total_ticket;
		// Gathering Ddata

		// Prepareing Ddata
		$data['img'] = $base64;
		$data['movie_title'] = $movie_title;
		$data['theatre_time'] = $theatre_time;
		$data['ticket_quan'] = $ticket_quan;
		// Prepareing Ddata

		$dompdf = new Domlib();
		$this->load->view('pdftemp/pdfview',$data);
		$html = $this->output->get_output();
		$dompdf->loadHtml($html);
		$customPaper = array(0,0,600,450);
		$dompdf->set_paper($customPaper);
		// Render the HTML as PDF
		$dompdf->render();


		// Output the generated PDF to Browser
		$dompdf->stream("ticket.pdf", array("Attachment" => false));
		
	}
    
}

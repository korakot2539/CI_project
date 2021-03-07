<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PDFgenerate extends CI_Controller {

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
	public function show()
	{
				// Gathering Ddata
				$path = base_url('admin/uploads/jumanji.jpg');
				$type = pathinfo($path, PATHINFO_EXTENSION);
				$dataimg = file_get_contents($path);
				$base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
		
				$movie_title = "Wonder Women";
				$theatre_time = "14:30";
				$ticket_quan = "4";
				// Gathering Ddata
		
				// Prepareing Ddata
				$data['img'] = $base64;
				$data['movie_title'] = $movie_title;
				$data['theatre_time'] = $theatre_time;
				$data['ticket_quan'] = $ticket_quan;
				// Prepareing Ddata
		$this->load->view('pdftemp/pdfview',$data);
	}

	public function test2(){
		$dompdf = new Domlib();
		$this->load->view('pdftemp/pdfview');
		$html = $this->output->get_output();
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream("ticket.pdf", array("Attachment" => false));

	}

	function leavenotepdf($id)
    {
        $data = $this->getleavenoteData($id);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($this->leavenotetext($data));
        if($data->med_cer!=null){
            $dompdf->setPaper('A4', 'portrait');
        }else{
            $dompdf->setPaper('A5', 'landscape');
        }
        $dompdf->render();
        return $dompdf->stream('leavenote_id_'.$data->leave_note_id);

		$path = '';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $dataimg = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
		if($data->type==='sickleave'&&$data->med_cer!==''){
            $output .=    
                    '           <div style="margin:30px 30px;">
                                    ใบรับรองแพทย์ (Medical Certificate)
                                    <br>
                                    <div style="text-align:center;margin-top:20px; padding:10px;">
                                        <img  height=400px src='.$base64.'/>
                                    </div>
                                </div>
                                
                    ';
        }
		
    }
}

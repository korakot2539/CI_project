<?php

class Testpdf extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('Movie_model');
	}

	public function index($id)
	{
		$userData = $this->Movie_model->getPdf($id);
		$image = $userData->poster;
		$movie_name = $userData->movie_name;
		$time = $userData->theater_time;
		$ticket = $userData->total_ticket;
		
		$hi = "hi";
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);    	
    	$pdf->SetFont('freeserif', '', 18, '', true);  
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

        // add a page
        $pdf->AddPage();

        $html = <<<EOF
            <!-- EXAMPLE OF CSS STYLE -->
            <style>
                h1 {
                    color: navy;
                    font-family: times;
                    font-size: 24pt;
                    text-decoration: underline;
                }
                p.first {
                    color: #003300;
                    font-family: helvetica;
                    font-size: 12pt;
                }
                table{
                    border: none
                }
                p.first span {
                    color: #006600;
                    font-style: italic;
                }
                p#second {
                    color: rgb(00,63,127);
                    font-family: times;
                    font-size: 12pt;
                    text-align: justify;

                table.first {
                    color: black;
                    font-family: helvetica;
                    font-size: 16pt;
                    border: none
                }



                .lowercase {
                    text-transform: lowercase;
                }
                .uppercase {
                    text-transform: uppercase;
                }
                .capitalize {
                    text-transform: capitalize;
                }
                .target{
                    color:#00AFB5;
                    font-weight: bold;
                }
                .title{
                    font-size:18pt;
                    color:#FA5C65
                }
                .pointer{
                    color: #bfbfbf
                }
            </style>


            <br />

            <table class="first" cellpadding="4" cellspacing="6">
            <tr>
            <td class="title" width="100%" align="center"><b><h4>Movie Ticket</h4></b></td>
            </tr>
            <tr>

            <td align="left" width="100%" ><small>Title </small>$movie_name</td>
            </tr>
            <tr>
            <td align="Left" width="50%" ><small class="pointer">Time : </small><span class="target">$time</span></td>
            <td align="Rigth" width="50%" ><small class="pointer">Total tickets : </small><span class="target">$ticket</span></td>
            </tr>
            </table>
        EOF;

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        //$pdf->SetXY(110, 200);
        //$pdf->Image(), '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);

        $pdf->SetXY(85, 75);
        $pdf->Image(base_url() . 'admin/' . $image, '', '', 40, 60, '', '', 'T', false, 300, '', false, false, 1, false, false, false);


        // reset pointer to the last page
        $pdf->lastPage();

        // ---------------------------------------------------------

        //Close and output PDF document
        $pdf->Output('Movie_Ticket.pdf', 'I');
	}

	

	
}

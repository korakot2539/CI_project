<?php

class Testpdf extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('Movie_model');
	}

	public function index()
	{
		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Nicola Asuni');
		$pdf->SetTitle('TCPDF Example 009');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 009', PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
			require_once(dirname(__FILE__) . '/lang/eng.php');
			$pdf->setLanguageArray($l);
		}

		// -------------------------------------------------------------------

		// add a page
		$pdf->AddPage();

		// set JPEG quality
		$pdf->setJPEGQuality(75);

		// Image method signature:
		// Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
		$userData = $this->Movie_model->getUserData("3");
		$image = $userData->poster;
		$movie_name = $userData->movie_name;
		$time = $userData->theater_time;
		$ticket = $userData->total_ticket;
		// test fitbox with all alignment combinations

		$horizontal_alignments = array('L', 'C', 'R');
		$vertical_alignments = array('T', 'M', 'B');


		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// Stretching, position and alignment example

		$pdf->SetXY(50, 35);
		$pdf->Image(base_url() . 'admin/' . $image, '', '', 40, 60, '', '', 'T', false, 300, '', false, false, 1, false, false, false);

		// Image example with resizing
		$html = '<h2>Movie Ticket</h2>';
		$html .= '
		<div style="text-align: center" class="col-6">
		<div class="feature" margin-right:0>
		<h4 class="content__tabs" style="color:black;">' . $movie_name . '</h4>
		<span class="feature__text">' . $time . '</span>
		<span class="feature__text">' . $ticket . '</span>
		<p class="feature__text"></p><br>
		</div>
		</div>
		';
		$pdf->writeHTML($html, true, false, true, false, '');
		// -------------------------------------------------------------------

		//Close and output PDF document
		$pdf->Output('example_009.pdf', 'I');

		//============================================================+
		// END OF FILE
		//============================================================+
	}

	public function forceDownload()
	{
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetFont('freeserif', '', 8, '', true);
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		// add a page
		$pdf->AddPage();
		// set some text to print
		$txt = "Hello world ภาษาไทย";
		//Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
		// print a block of text using Write()
		$pdf->Cell(0, 0, $txt, 1, 1, 'C', 0, '', 0);
		//Close and output PDF document
		$pdf->Output('example_002.pdf', 'D');
	}

	public function html()
	{

		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetFont('freeserif', '', 8, '', true);
		$pdf->AddPage();
		$pdf->ln(10);
		// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
		// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

		// create some HTML content
		$userData = $this->Movie_model->getUserData("3");
		$image = $userData->poster;
		$movie_name = $userData->movie_name;
		$time = $userData->theater_time;
		$ticket = $userData->total_ticket;
		$html = '<h1>Product Name</h1>';
		$html .= '
			<table>
				<tr>
					<td>img src="' . base_url() . 'admin/' . $userData->poster . '" style="width:100mm;height:100mm;" /> </td>
					<td>
						<h4>Detail :  </h4>
						<p>
						
						</p>
					</td>
				</tr>
			</table>

		';
		// echo $html ;
		// exit();
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');

		$pdf->Output('example_002.pdf', 'I');
	}
}

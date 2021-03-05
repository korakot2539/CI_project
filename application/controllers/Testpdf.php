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

		//============================================================+
		// File name   : example_009.php
		// Begin       : 2008-03-04
		// Last Update : 2013-05-14
		//
		// Description : Example 009 for TCPDF class
		//               Test Image
		//
		// Author: Nicola Asuni
		//
		// (c) Copyright:
		//               Nicola Asuni
		//               Tecnick.com LTD
		//               www.tecnick.com
		//               info@tecnick.com
		//============================================================+

		/**
		 * Creates an example PDF TEST document using TCPDF
		 * @package com.tecnick.tcpdf
		 * @abstract TCPDF - Example: Test Image
		 * @author Nicola Asuni
		 * @since 2008-03-04
		 */

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

		// Example of Image from data stream ('PHP rules')
		$imgdata = base64_decode('iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABlBMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDrEX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==');

		// The '@' character is used to indicate that follows an image data stream and not an image file name
		$pdf->Image('@' . $imgdata);

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// Image example with resizing
		$pdf->Image('images/image_demo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// test fitbox with all alignment combinations

		$horizontal_alignments = array('L', 'C', 'R');
		$vertical_alignments = array('T', 'M', 'B');

		$x = 15;
		$y = 35;
		$w = 30;
		$h = 30;
		// test all combinations of alignments
		for ($i = 0; $i < 3; ++$i) {
			$fitbox = $horizontal_alignments[$i] . ' ';
			$x = 15;
			for ($j = 0; $j < 3; ++$j) {
				$fitbox[1] = $vertical_alignments[$j];
				$pdf->Rect($x, $y, $w, $h, 'F', array(), array(128, 255, 128));
				$pdf->Image('images/image_demo.jpg', $x, $y, $w, $h, 'JPG', '', '', false, 300, '', false, false, 0, $fitbox, false, false);
				$x += 32; // new column
			}
			$y += 32; // new row
		}

		$x = 115;
		$y = 35;
		$w = 25;
		$h = 50;
		for ($i = 0; $i < 3; ++$i) {
			$fitbox = $horizontal_alignments[$i] . ' ';
			$x = 115;
			for ($j = 0; $j < 3; ++$j) {
				$fitbox[1] = $vertical_alignments[$j];
				$pdf->Rect($x, $y, $w, $h, 'F', array(), array(128, 255, 255));
				$pdf->Image('images/image_demo.jpg', $x, $y, $w, $h, 'JPG', '', '', false, 300, '', false, false, 0, $fitbox, false, false);
				$x += 27; // new column
			}
			$y += 52; // new row
		}

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

		// Stretching, position and alignment example

		$pdf->SetXY(110, 200);
		$pdf->Image('/admin/uploads/Fury.png', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
		$pdf->Image('images/image_demo.jpg', '', '', 40, 40, '', '', '', false, 300, '', false, false, 1, false, false, false);

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
		$html = '<h1>Product Name</h1>';
		$html .= '
			<table>
				<tr>
					<td><img src="' . base_url("product/pro_382801.jpg") . '" style="width:100mm;height:100mm;" /> </td>
					<td>
						<h4>Detail :  </h4>
						<p>
						-
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

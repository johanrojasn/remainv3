<?php
require('fpdf/fpdf.php');

class pdf extends FPDF
{
	public function header()
	{
		$this->SetFillColor(48, 125, 243 );
		$this->Rect(0,0, 220, 50, 'F');
		$this->SetY(25);
		$this->SetFont('Arial', 'B', 30);
		$this->SetTextColor(255,255,255);
		$this->Write(5, 'RemainComputer');

	}

	public function footer()
	{
		$this->SetFillColor(48, 125, 243 );
		$this->Rect(0, 250, 220, 50, 'F');
		$this->SetY(-20);
		$this->SetFont('Arial', '', 12);
		$this->SetTextColor(255,255,255);
		$this->SetX(120);
		$this->Write(5, 'RemainComputer');
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, 'JohanRojasN21@gmail.com');
		$this->SetX(120);
		$this->Ln();
		$this->SetX(120);
		$this->Write(5, '+(51)956973863');
	}
}



$fpdf = new pdf('P','mm','letter',true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetMargins(10,30,20,20);
$fpdf->SetFont('Arial', '', 9);
$fpdf->SetTextColor(255,255,255);
$order = 999999999;
$customer = 99999999;
$order_details = 999999;

$fpdf->SetY(15);
$fpdf->SetX(120);
$fpdf->Write(5, 'DETALLES DEL ENVÍO ');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Fecha de la orden: '.'10/12/2019');
//$fpdf->Ln();
//$fpdf->SetX(120);
//$fpdf->Write(5, 'Fecha de envío: '.'Ymd_dmY($order->shipped_date)');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Dirección: '.'Lima,Peru');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Ciudad: '.'Miraflores');

$fpdf->SetTextColor(0,0,0);
//$fpdf->Image('img/2.png', 20, 55);

$fpdf->SetFont('Arial', 'B');
$fpdf->SetY(60);
$fpdf->SetX(120);
$fpdf->Write(5, 'Nombre de la Empreza');
$fpdf->SetFont('Arial', '');
//$fpdf->Ln();
//$fpdf->SetX(120);
//$fpdf->Write(5, '$customer->last_name'.', ');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Celular');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Correo');
$fpdf->Ln();
$fpdf->SetX(120);
$fpdf->Write(5, 'Direccion');

$fpdf->SetY(100);
$fpdf->SetTextColor(255,255,255);
$fpdf->SetFillColor(79,78,77);
$fpdf->Cell(60, 10, 'PRODUCTO', 0, 0, 'C', 1);
$fpdf->Cell(60, 10, 'DESCRIPCION', 0, 0, 'C', 1);
$fpdf->Cell(20, 10, 'P. UNITARIO', 0, 0, 'C', 1);
$fpdf->Cell(20, 10, 'CANTIDAD', 0, 0, 'C', 1);
$fpdf->Cell(30, 10, 'SUBTOTAL', 0, 0, 'C', 1);
$fpdf->Ln();

$fpdf->SetLineWidth(0.5);
$fpdf->SetTextColor(0,0,0);
$fpdf->SetFillColor(255,255,255);
$fpdf->SetDrawColor(80,80,80);
$total = 0;
//foreach('$order_details as $detail')
//{
//	$fpdf->Cell(60, 10, '$detail->product_name', 'B', 0, 'C', 1);
//	$fpdf->Cell(60, 10, '$detail->description', 'B', 0, 'C', 1);
//	$fpdf->Cell(20, 10, '', 'B', 0, 'C', 1);
//	$fpdf->Cell(20, 10,' doubleval($detail->quantity)', 'B', 0, 'C', 1);
//	$fpdf->Cell(30, 10, 'SetCurrency($detail->unit_price * $detail->quantity)', 'B', 0, 'C', 1);
//	$fpdf->Ln();
//	$total += $detail->unit_price * $detail->quantity;
//}
$iva = $total * 0.13;

$fpdf->SetFontSize(12);
$fpdf->Cell(120, 10, 'Observaciones', 0, 0);
$fpdf->Cell(20, 10, 'Subtotal', 0, 0,'C');
$fpdf->Cell(20, 10, '', 0, 'C');
$fpdf->Cell(30, 10, '...', 0, 0, 'C');

$fpdf->Ln();
$fpdf->Cell(120, 10, '', 0, 0);
$fpdf->Cell(20, 10, 'Igv', 0, 0,'C');
$fpdf->Cell(20, 10, '', 0, 0,'C');
$fpdf->Cell(30, 10, '...', 0, 0, 'C');

$fpdf->Ln();
$fpdf->SetTextColor(255,255,255);
$fpdf->SetFillColor(79,78,77);
$fpdf->Cell(120, 10, '', 0, 0,'C', 1);
$fpdf->Cell(20, 10, 'Total', 0, 0,'C', 1);
$fpdf->Cell(20, 10, '', 0, 0,'C',1);
$fpdf->Cell(30, 10, '...', 0, 0, 'C', 1);
$fpdf->OutPut();
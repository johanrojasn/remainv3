<?php

require('fpdf/fpdf.php');
$id = $_GET['id'];
require '../../services/controller/Config/Conexion.php';
$conexion = conexion();
$sql = "call sp_pdfdetalle('$id');";
$result = mysqli_query($conexion, $sql);
while ($ver = mysqli_fetch_row($result)) {

    $fpdf = new fpdf('P', 'mm', array(500, 500), true);

    $fpdf->AddPage('LANDSCAPE', 'A4');
    $fpdf->Ln(20);
    $fpdf->Image('../assets/img/remain.jpg', 5, 0, 30, 30, 'jpg');
    $fpdf->Ln(2);

    $fpdf->SetFont('Courier', 'B', 11);
    $fpdf->SetTextColor(110, 110, 110);
    $fpdf->Write(5, 'Remain Computer');
    $fpdf->ln(5);
    $fpdf->AliasNbPages();
    $fpdf->Write(5, 'Pagina ' . $fpdf->PageNo() . ' De ' . '{nb}');
    $fpdf->SetFont('Courier', 'B', 13);
    $fpdf->SetTextColor(110, 110, 110);
    $fpdf->ln(3);
    $fpdf->SetX(170);
    $fpdf->Write(5, 'Cliente: ' . $ver[2]);
    $fpdf->ln(5);
    $fpdf->SetX(176);
    $fpdf->Write(5, 'Fecha: ' . $ver[1]);
    $fpdf->ln(5);
    $fpdf->SetX(170);
    $fpdf->Write(5, 'Tecnico: ' . $ver[10]  );
    


    $fpdf->ln(3);
    $fpdf->SetFont('Courier', 'B', 33);
    $fpdf->SetTextColor(110, 110, 110);
    $fpdf->Write(8, 'Reporte del Servicio');
    $fpdf->SetTextColor(177, 34, 78);

    $fpdf->SetY(30);

    $fpdf->ln(35);
    $fpdf->SetFillColor(255, 255, 255);
    $fpdf->SetLineWidth(1);
    $fpdf->SetDrawColor(110, 110, 110);
    $fpdf->SetTextColor(110, 110, 110);
    $fpdf->SetFont('Courier', 'B', 7);
    $fpdf->SetX(10);
    $fpdf->Cell(150, 5, 'Ocurrencia', 'T', 0, 'C', 0);
    $fpdf->Cell(30, 5, 'Status', 'T', 0, 'C', 0);
    $fpdf->Cell(30, 5, 'Urgencia', 'T', 0, 'C', 0);
    $fpdf->Cell(50, 5, 'Tipo de Asistencia.', 'T', 0, 'C', 0);
    
     $fpdf->Ln(0.5);
     $fpdf->Cell(20, 5, '', '', 0, 'C', 0);

    $fpdf->ln();

    $i = 1;

    if ($ver[4] == "0") {
        $status = "Pendiente";
    } elseif ($ver[4] == "1") {
        $status = "Resolvido";
    };

    $fpdf->SetFont('Courier', '', 7);
    $fpdf->SetLineWidth(0.1);
    $fpdf->SetFillColor(207, 207, 207);
    $fpdf->SetTextColor(40, 40, 40, 40);
    $fpdf->SetDrawColor(255, 255, 255);
    $fpdf->Ln(0.5);

    $fpdf->Cell(150, 5, $ver[3], 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $status, 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $ver[5], 1, 0, 'C', 1);
    $fpdf->Cell(50, 5, $ver[6], 1, 0, 'C', 1);

    
 $fpdf->Ln(10);
   $fpdf->SetFillColor(80,80,80);
$fpdf->SetTextColor(255,255,255);
$fpdf->Cell(20, 5, 'Conclucion : ', 0, 0, 'L', 1);
$fpdf->Cell(250, 5,$ver[11], 0, 0, 'L', 1);
$fpdf->OutPut();     
}

$fpdf->OutPut();



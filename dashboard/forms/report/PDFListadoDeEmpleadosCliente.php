

<?php 
require('fpdf/fpdf.php');
$idCliente = $_GET['idCliente'];
require '../../services/controller/Config/Conexion.php';
$conexion = conexion();

$sql = "call sp_ListarPDFEMPCliente('$idCliente');";
$result = mysqli_query($conexion, $sql);
while($ver = mysqli_fetch_row($result)) {

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
    $fpdf->Write(5, 'Empreza: '.$ver[7] );
    $fpdf->ln(5);
    $fpdf->SetX(140);
    $fpdf->Write(5, 'Total de Empleados: '.$ver[11] );
    $fpdf->ln(5);


    $fpdf->ln(3);
    $fpdf->SetFont('Courier', 'B', 33);
    $fpdf->SetTextColor(110, 110, 110);
    $fpdf->Write(8, 'Reporte de Empleados');
    $fpdf->SetTextColor(177, 34, 78);

    $fpdf->SetY(30);

    $fpdf->ln(35);
    $fpdf->SetFillColor(255, 255, 255);
    $fpdf->SetLineWidth(1);
    $fpdf->SetDrawColor(110, 110, 110);
    $fpdf->SetTextColor(110, 110, 110);
    $fpdf->SetFont('Courier', 'B', 7);
    $fpdf->SetX(10);
    $fpdf->Cell(10, 5, '#', 'T', 0, 'C', 0);
    $fpdf->Cell(50, 5, 'Nombres', 'T', 0, 'C', 0);
    $fpdf->Cell(50, 5, 'Apellidos', 'T', 0, 'C', 0);
    $fpdf->Cell(30, 5, 'Dni', 'T', 0, 'C', 0); 
    $fpdf->Cell(30, 5, 'Celular', 'T', 0, 'C', 0);
    $fpdf->Cell(30, 5, 'Telefono', 'T', 0, 'C', 0);
    $fpdf->Cell(50, 5, 'Correo', 'T', 0, 'C', 0);
    $fpdf->Cell(30, 5, 'Cargo', 'T', 0, 'C', 0);
$fpdf->ln();

$i=1;

    $fpdf->SetFont('Courier', '',7);
    $fpdf->SetLineWidth(0.1);
    $fpdf->SetFillColor(207, 207, 207 );
    $fpdf->SetTextColor(40, 40, 40, 40);
    $fpdf->SetDrawColor(255, 255, 255);
    $fpdf->Ln(0.5);
    ///LISTADO
    $fpdf->Cell(10, 5, $i, 1, 0, 'C', 1);
    $fpdf->Cell(50, 5, $ver[1], 1, 0, 'C', 1);
    $fpdf->Cell(50, 5, $ver[2], 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $ver[3], 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $ver[4], 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $ver[5], 1, 0, 'C', 1);
    $fpdf->Cell(50, 5, $ver[6], 1, 0, 'C', 1);
    $fpdf->Cell(30, 5, $ver[9], 1, 0, 'C', 1);
    $i++;
}





$fpdf->OutPut();


$fpdf->ln();



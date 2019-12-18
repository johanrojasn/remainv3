

<?php

require('fpdf/fpdf.php');
$id = $_GET['id'];
require '../../services/controller/Config/Conexion.php';
$conexion = conexion();

$sql = "SELECT * FROM `usuariocopia` where idUsuarioAuditoria=$id";
$result = mysqli_query($conexion, $sql);
while ($ver = mysqli_fetch_row($result)) {

    $fpdf = new fpdf('P', 'mm', 'letter', true);
    $fpdf->SetMargins(5, 5, 5, 5);
    $fpdf->AddPage('portrait', array(125, 150));





    $fpdf->SetFont('Courier', 'B', 5);
    $fpdf->Cell(20, 2, 'RamainComputers');


    $fpdf->Ln(2);
    $fpdf->SetFont('Courier', '', 5);
    $fpdf->Cell(20, 2, 'Numero');

    $fpdf->Ln(2);
    $fpdf->Cell(20, 2, 'Correo');

    $fpdf->Ln(2);
    $fpdf->Cell(20, 2, 'Direccion');


//$fpdf->Image('img/2.png', 90, 0, 30);

    $fpdf->ln(15);
    $fpdf->SetFont('Courier', 'B', 17);
    $fpdf->SetTextColor(80, 80, 80);
    $fpdf->Write(10, 'Auditoria');
    $fpdf->SetTextColor(48, 125, 243);


    $fpdf->SetY(24);
    $fpdf->SetFont('Courier', '', 5);
    $fpdf->SetTextColor(0, 0, 0);
    $fpdf->SetX(75);
    $fpdf->Write(5, 'Tabla          : ' . $ver[15]);
    $fpdf->ln(3);
    $fpdf->SetX(75);
    $fpdf->Write(5, 'Sencenticas    : ' . $ver[14]);
    $fpdf->ln(3);
    $fpdf->SetX(75);
    $fpdf->Write(5, 'Usuario        : ' . $ver[1]);
    $fpdf->ln(3);
    $fpdf->SetX(75);
    $fpdf->Write(5, 'Fecha          : ' . $ver[12]);
    $fpdf->ln(3);
    $fpdf->SetX(75);
    $fpdf->Write(5, 'Hora           : ' . $ver[13]);
    $fpdf->ln(3);



    $fpdf->ln(3);
    $fpdf->SetFillColor(48, 125, 243);
    $fpdf->SetLineWidth(1);
    $fpdf->SetDrawColor(177, 34, 78);
    $fpdf->SetTextColor(177, 34, 78);
    $fpdf->Cell(45, 5, '', 'T', 0, 'C', 0);
    $fpdf->Cell(20, 5, '', 'T', 0, 'C', 0);
    $fpdf->Cell(25, 5, '', 'T', 0, 'C', 0);
    $fpdf->Cell(25, 5, '', 'T', 0, 'C', 0);
    $fpdf->ln();
    $i = 1;

    if ($ver[14] == "Registro") {
        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', 'B', 11);
        $fpdf->SetTextColor(80, 80, 80);
        $fpdf->Write(10, 'Campos Registrado');
        $fpdf->Ln(10);

        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', 'B', 5);
        $fpdf->Cell(20, 2, 'Codigo Usuario    : ' . $ver[1]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', '', 5);
        $fpdf->Cell(20, 2, 'Nombre de Usuario : ' . $ver[2]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Contraseña        : ' . $ver[3]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Empleado          : ' . $ver[4]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Perfil            : ' . $ver[5]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Estado            : ' . $ver[6]);
    } elseif ($ver[14] == "Actualizo") {
        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', 'B', 11);
        $fpdf->SetTextColor(80, 80, 80);
        $fpdf->Write(10, 'Campos Actualizados');
        $fpdf->Ln(10);


//////////////////////////////////////////////
        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', 'B', 5);
        $fpdf->Cell(20, 2, 'Codigo Usuario    : ' . $ver[1]);
//////////////////////////////////////////
        $fpdf->Ln(2);
        $fpdf->SetX(5);
        if ($ver[7] == $ver[2]) {
             $fpdf->Cell(20, 2, 'Contraseña        : ' . "Sin Cambio");
        }else{
             $fpdf->Cell(20, 2, 'Nombre de Usuario : ' . 'Se Cambio ' . $ver[7] . " Por " . $ver[2]);
        }
       
//////////////////////////////////////////////////
        $fpdf->Ln(2);
        $fpdf->SetX(5);
           if ($ver[8] == $ver[3]) {
                $fpdf->Cell(20, 2, 'Contraseña        : ' . "Sin Cambio");
           }else{
               $fpdf->Cell(20, 2, 'Contraseña        : ' . 'Se Cambio ' . $ver[8] . " Por " . $ver[3]);
           }
        
/////////////////////////////////////////////////////
        $fpdf->Ln(2);
        $fpdf->SetX(5);
        if ($ver[9] == $ver[4]) {
            $fpdf->Cell(20, 2, 'Empleado          : ' . "Sin Cambio");
        }else{
             $fpdf->Cell(20, 2, 'Empleado          : ' . 'Se Cambio ' . $ver[9] . " Por " . $ver[4]);
        }
/////////////////////////////////////////////////////
        $fpdf->Ln(2);
        $fpdf->SetX(5);
         if ($ver[10] == $ver[5]) {
              $fpdf->Cell(20, 2, 'Perfil            : ' . "Sin Cambio");
         }else{
             $fpdf->Cell(20, 2, 'Perfil            : ' . 'Se Cambio ' . $ver[10] . " Por " . $ver[5]);
         }
        
/////////////////////////////////////////////////////
        $fpdf->Ln(2);
        $fpdf->SetX(5);
        if ($ver[11] == $ver[6]) {
            $fpdf->Cell(20, 2, 'Estado            : ' . "Sin Cambio");
        } else {
            $fpdf->Cell(20, 2, 'Estado            : ' . 'Se Cambio ' . $ver[11] . " Por " . $ver[6]);
            $fpdf->Ln(2);
        }
    } elseif ($ver[14] == "Elimino") {
        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', 'B', 11);
        $fpdf->SetTextColor(80, 80, 80);
        $fpdf->Write(10, 'Campos Eliminados');
        $fpdf->Ln(10);

        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', 'B', 5);
        $fpdf->Cell(20, 2, 'Codigo Usuario    : ' . $ver[1]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->SetFont('Courier', '', 5);
        $fpdf->Cell(20, 2, 'Nombre de Usuario : ' . $ver[7]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Contraseña        : ' . $ver[8]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Empleado          : ' . $ver[9]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Perfil            : ' . $ver[10]);

        $fpdf->Ln(2);
        $fpdf->SetX(5);
        $fpdf->Cell(20, 2, 'Estado            : ' . $ver[11]);
        
    }

}


$fpdf->OutPut();

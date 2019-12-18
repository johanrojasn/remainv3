<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
        $idTecnicos=$_POST['idTecnicos'];
	$nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $dni=$_POST['dni'];


	$sql="CALL sp_ActualizarTecnico('$idTecnicos','$nombres','$apellidos','$dni');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

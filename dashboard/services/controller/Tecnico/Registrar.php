<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $dni=$_POST['dni'];

	$sql="call sp_AgregarTecnico('$nombres','$apellidos','$dni');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
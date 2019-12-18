<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Cliente=$_POST['Cliente'];
        $Fecha=$_POST['Fecha'];
        $idTecnico=$_POST['idTecnico'];

	$sql="call sp_AgregarServicio('$Cliente','$Fecha','$idTecnico');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$n=$_POST['Cargo'];
	$id=$_POST['idCargo'];

	$sql="CALL sp_ActualizarCargo('$n','$id');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
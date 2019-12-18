<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$n=$_POST['Cargo'];

	$sql="call Sp_AgregarCargo('$n');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
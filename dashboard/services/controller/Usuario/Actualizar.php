<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$pa=$_POST['pass'];
	$pe=$_POST['perfil'];
	$e=$_POST['empleado'];
	$es=$_POST['estado'];
	$id=$_POST['id'];

	$sql="CALL sp_Actualizarusuario('$n','$pa','$pe','$e','$es','$id');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
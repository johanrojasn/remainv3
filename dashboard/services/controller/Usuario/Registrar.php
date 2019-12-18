<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$n=$_POST['nombre'];
	$pa=$_POST['pass'];
	$pe=$_POST['perfil'];
	$e=$_POST['empleado'];


	//$e=$_POST['estado'];


	$sql="CALL sp_Agregarusuario('$n','$pa','$e','$pe');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
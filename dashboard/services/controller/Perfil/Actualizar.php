<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Perfil2=$_POST['Perfil2'];
	$idPerfil=$_POST['idPerfil'];

	$sql="call sp_ActualizarPerfil('$Perfil2','$idPerfil');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

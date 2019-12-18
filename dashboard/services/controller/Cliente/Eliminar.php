<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idCliente=$_POST['idCliente'];

	$sql="DELETE FROM `Clientes` WHERE `idcliente`='$idCliente'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

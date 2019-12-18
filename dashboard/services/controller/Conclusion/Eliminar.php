<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idConclusion=$_POST['idConclusion'];

	$sql="DELETE FROM `conclusion` WHERE `idConclusion`='$idConclusion'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

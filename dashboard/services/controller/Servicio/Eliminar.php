
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idServicio=$_POST['idServicio'];

	$sql="DELETE FROM `Servicio` WHERE `idServicio`='$idServicio'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
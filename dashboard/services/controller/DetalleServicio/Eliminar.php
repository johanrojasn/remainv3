
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE FROM `detalleservicio` WHERE `id`='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$id=$_POST['idCargo'];

	$sql="DELETE from Cargo where idCargo='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
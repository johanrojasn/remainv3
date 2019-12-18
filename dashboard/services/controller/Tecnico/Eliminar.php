
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idTecnicos=$_POST['idTecnicos'];

	$sql="DELETE FROM `tecnicos` WHERE `idTecnicos`='$idTecnicos'";
	echo $result=mysqli_query($conexion,$sql);
 ?>

<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idEmpleado=$_POST['idEmpleado'];

	$sql="DELETE FROM `empleado` WHERE `idEmpleado`='$idEmpleado'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
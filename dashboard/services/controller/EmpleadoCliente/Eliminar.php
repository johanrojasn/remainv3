
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idClientes_Empleados=$_POST['idClientes_Empleados'];

	$sql="DELETE FROM `clientes_empleados` WHERE `idClientes_Empleados`='$idClientes_Empleados'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
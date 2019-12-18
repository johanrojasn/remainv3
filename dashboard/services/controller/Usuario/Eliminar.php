
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from usuario where idusuario='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
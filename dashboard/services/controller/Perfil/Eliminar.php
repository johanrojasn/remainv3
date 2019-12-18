
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$id=$_POST['idperfil'];

	$sql="DELETE from perfil where idPerfil='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
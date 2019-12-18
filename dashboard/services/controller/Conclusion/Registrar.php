<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idServicio=$_POST['idServicio'];
        $Comentario=$_POST['Comentario'];

	$sql="INSERT INTO `conclusion` (`idServicio`, `Comentario`) values('$idServicio','$Comentario');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
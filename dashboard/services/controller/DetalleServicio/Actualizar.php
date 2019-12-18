<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
        $Ocurrencia3=$_POST['Ocurrencia3'];
        $condicionstatus3=$_POST['condicionstatus3'];
        $idUrgencia3=$_POST['idUrgencia3'];
        $idTAsistencia3=$_POST['idTAsistencia3'];
        $sessionUser2=$_POST['sessionUser2'];
     
	$sql="CALL sp_ActualizarDetalleServicio('$id','$Ocurrencia3','$condicionstatus3','$idUrgencia3','$idTAsistencia3','$sessionUser2');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

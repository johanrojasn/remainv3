<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idServicio=$_POST['idServicio'];
        $Ocurrencia=$_POST['Ocurrencia'];
        $condicionstatus=$_POST['condicionstatus'];
        $idUrgencia=$_POST['idUrgencia'];
        $idTAsistencia=$_POST['idTAsistencia'];
        $sessionUser=$_POST['sessionUser'];
     

	$sql="call sp_AgregarDetalleServicio('$idServicio','$Ocurrencia','$condicionstatus','$idUrgencia','$idTAsistencia','$sessionUser');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
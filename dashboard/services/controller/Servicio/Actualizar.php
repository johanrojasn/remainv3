<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idServicio=$_POST['idServicio'];
        $Clientes2=$_POST['Clientes2'];
        $Fecha2=$_POST['Fecha2'];
        $idTecnico2=$_POST['idTecnico2'];
        
	$sql="CALL sp_ActualizarServicio('$idServicio','$Clientes2','$Fecha2','$idTecnico2');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

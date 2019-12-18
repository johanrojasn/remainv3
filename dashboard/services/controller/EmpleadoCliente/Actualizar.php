<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
        
        $idEmpleado=$_POST['idEmpleado'];
	$Nombres2=$_POST['Nombres2'];
        $Apellidos2=$_POST['Apellidos2'];
        $Dni2=$_POST['Dni2'];
        $Celular2=$_POST['Celular2'];
        $Telefono2=$_POST['Telefono2'];
        $Correo2=$_POST['Correo2'];
        $Cliente2=$_POST['Cliente2'];       
        $Perfil2=$_POST['Perfil2'];
        
	$sql="call sp_ActualizarEmpleadoCliente('$idEmpleado','$Nombres2','$Apellidos2','$Dni2','$Celular2','$Telefono2','$Correo2','$Cliente2','$Perfil2')";
	echo $result=mysqli_query($conexion,$sql);

 ?>

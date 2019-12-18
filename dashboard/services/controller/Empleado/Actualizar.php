<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $dni=$_POST['dni'];
        $celular=$_POST['celular'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $cargo=$_POST['cargo'];
        $idempleado=$_POST['idempleado'];

	$sql="CALL sp_ActualizarEmpleado('$nombres','$apellidos','$dni','$celular','$telefono','$correo','$cargo','$idempleado');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

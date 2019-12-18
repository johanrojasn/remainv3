<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Nombres=$_POST['Nombres'];
        $Apellidos=$_POST['Apellidos'];
        $Dni=$_POST['Dni'];
        $Celular=$_POST['Celular'];
        $Telefono=$_POST['Telefono'];
        $Correo=$_POST['Correo'];
        $Cliente=$_POST['Cliente'];       
        $Perfil=$_POST['Perfil'];
        
	$sql="Insert into clientes_empleados (`Nombres`, `Apellidos`, `Dni`, `Celular`, `Telefono`, `Correo`, `idClientes`,idCargoCliente)VALUES('$Nombres','$Apellidos','$Dni','$Celular','$Telefono','$Correo','$Cliente','$Perfil');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
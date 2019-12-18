<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Razon=$_POST['Razon'];
        $Ruc=$_POST['Ruc'];
        $Celular=$_POST['Celular'];
        $Correo=$_POST['Correo'];
        $Direccion=$_POST['Direccion'];

	$sql="Insert into clientes(nEmpreza,ruc,Celular,Correo,Direccion) values('$Razon','$Ruc','$Celular','$Correo','$Direccion');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
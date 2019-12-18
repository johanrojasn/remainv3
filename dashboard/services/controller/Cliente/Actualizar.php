<?php

require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Razon2=$_POST['Razon2'];
        $Ruc2=$_POST['Ruc2'];
        $Celular2=$_POST['Celular2'];
        $Correo2=$_POST['Correo2'];
        $Direccion2=$_POST['Direccion2'];
        $idCliente=$_POST['idCliente'];
        
        $sql="Update  clientes set nEmpreza='$Razon2',ruc='$Ruc2',Celular='$Celular2',Correo='$Correo2',Direccion='$Direccion2' where idcliente='$idCliente'";
	echo $result=mysqli_query($conexion,$sql);
        
 ?>
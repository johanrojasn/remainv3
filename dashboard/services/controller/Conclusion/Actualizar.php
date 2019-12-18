<?php

        require_once "../Config/Conexion.php";
	$conexion=conexion();
        $idServicio2=$_POST['idServicio2'];
        $Comentario2=$_POST['Comentario2'];
        $idConclusion=$_POST['idConclusion'];
        
        $sql="Update  conclusion set idServicio='$idServicio2',Comentario='$Comentario2' where idConclusion='$idConclusion'";
	echo $result=mysqli_query($conexion,$sql);
        
 ?>
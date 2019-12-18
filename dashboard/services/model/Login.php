<?php

require_once('../controller/config/conexion.php');

class Usuario {

    function ValidarCargo($usuario, $clave) {
        $cnx = new Conexion();
        $Cadena = $cnx->AbrirConexion();
        $Query = "call sp_sesionusuario('" . $usuario . "','" . $clave . "');";
        $Datos = mysqli_query($Cadena, $Query);
        if ($fila = mysqli_fetch_array($Datos)) {
            $this->ListaCargo[] = $fila;
        }

        $cnx->CerrarConexion($Cadena);
        return $this->ListaCargo;
    }

    function validarlogin($user, $pass) {

        $cnx = new Conexion();
        $Cadena = $cnx->AbrirConexion();
        $Query = "call SP_LoginPHP('" . $user . "','" . $pass . "');";
        $Result = mysqli_query($Cadena, $Query);
        $cnx->CerrarConexion($Cadena);
        return $Result;
    }

//    function validarloginCliente($user, $pass) {
//
//        $cnx = new Conexion();
//        $Cadena = $cnx->AbrirConexion();
//        $Query = "call SP_LoginCliente('" . $user . "','" . $pass . "');";
//
//        $Q2 = "call sp_buscarcliente('" . $user . "');";
//
//        $Result = mysqli_query($Cadena, $Query);
//
//        $cnx->CerrarConexion($Cadena);
//        return $Result;
//    }

}

?>
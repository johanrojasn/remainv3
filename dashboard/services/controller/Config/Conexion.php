

<?php


Class Conexion{

private $Usuario;
private $Clave;
private $Server; 
private $NombreBD;

function __construct() {
    $this->Usuario = "root";
    $this->Clave = "";
    $this->Server = "localhost";
    $this->NombreBD = "RemainComputers";
}

function AbrirConexion() {
    $cadena = mysqli_connect($this->Server, $this->Usuario, $this->Clave, $this->NombreBD);
    if ($cadena) {
        return $cadena;
    } else {
        return mysqli_error();
    }
}

function CerrarConexion($cadena) {
    mysqli_close($cadena);
    $cadena = null;
}


}
function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "remaincomputers";

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd);

    return $conexion;
    if ($mysqli->connect_errno) {
        echo "Error al conectarse con My SQL debido al error" . $mysqli->connect_error;
    }
}

?>
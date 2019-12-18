
<?php
if (isset($_POST['txtUsuario']) && isset($_POST['txtClave'])) {
    $usuario = $_POST['txtUsuario'];
    $clave = $_POST['txtClave'];
}

if ($usuario == "" && $clave == "") {
    echo'<script type="text/javascript">
    alert("Datos no definidos");
    window.location.href="../../forms/";
    </script>';
} else {

    require_once('../model/login.php');
    $objUsuario = new Usuario();
    $Result = $objUsuario->validarlogin($usuario, $clave);
    while ($file = mysqli_fetch_row($Result)) {

        if ($file[0] == -1) {


            echo'<script type="text/javascript">
    alert("Usuario: ' . $usuario . ' No Registrado ");
    window.location.href="../../forms/";
    </script>';
        }
        if ($file[0] == -2) {
            echo'<script type="text/javascript">
    alert("Contraseña Incorrecta");
    window.location.href="../../forms/";
    </script>';
        }

        if ($file[0] > 0) {
            $ListaUsu = $objUsuario->validarCargo($usuario, $clave);

            foreach ($ListaUsu as $lista) {
                session_start();
                $_SESSION['autenticado'] = "Si";
                $_SESSION['idUsuario'] = $lista[0];
                $_SESSION['Empleado'] = $lista[1];
                $_SESSION['Username'] = $lista[2];
                $_SESSION['nPerfil'] = $lista[3];

                //echo "el usuario que ingreso es ".$lista[1]." ".$lista[2];
                //$tuser= $lista[4];
                //var_dump($lista);
                /* if($lista[4]==1)
                  {
                  $_SESSION['cargo']= "Administrador";
                  }
                  else if ($lista[4]==2)
                  {
                  $_SESSION['cargo']="Almacenero";
                  } */
            }

            //buscamos en la lista el valor que nos importa que es id de perfil
            //$_SESSION['cargo'] = $file[4];
            //$cargo = $ListaUsu[4];
            //if($cargo==1)
            //{
            ?>
            <META http-equiv="Refresh" CONTENT="0; URL=../../forms/index/">
            <?php
            //}
            //else{
        }
    }
}
?>
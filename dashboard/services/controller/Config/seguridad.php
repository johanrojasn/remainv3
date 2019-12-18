<?php
session_start();


if (isset($_SESSION['autenticado']) == false) {
    //si no hay aytenticado, mostrar error y volvemos al login
    echo'<script type="text/javascript">
    alert("Seccion no Iniciada");
    window.location.href="../../forms/";
    </script>';
    exit();
} elseif ($_SESSION['autenticado'] != "Si") {
    ?>
    <META http-equiv="Refresh" CONTENT="0; URL=../../forms/index">
    <?php
}
?>
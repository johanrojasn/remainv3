<?php
session_start();
session_destroy();
 echo'<script type="text/javascript">
    alert("Cerrando Seccion...!!");
    window.location.href="../../../forms/";
    </script>';
 exit();
?>


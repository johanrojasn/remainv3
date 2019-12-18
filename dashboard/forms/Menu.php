<?php
require_once('../../services/controller/Config/seguridad.php');
require_once "../../services/controller/Config/Conexion.php";
$conexion = conexion();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Remain</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
        <!--  Social tags      -->
        <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
        <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
        <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
        <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
        <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
        <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
        <meta property="og:site_name" content="Creative Tim" />
        <!-- Bootstrap core CSS     -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <!--  Material Dashboard CSS    -->
        <link href="../assets/css/material-dashboard.css" rel="stylesheet" />
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="../assets/css/demo.css" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <link href="../assets/css/google-roboto-300-700.css" rel="stylesheet" />

        <link href="../../services/librerias/alertifyjs/css/themes/default.css" rel="stylesheet" type="text/css"/>
        <link href="../../services/librerias/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css"/>
        <script src="../../services/librerias/alertifyjs/alertify.js" type="text/javascript"></script>
        <script src="../../services/librerias/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../../services/functions/functions.js" type="text/javascript"></script>
        <script src="../assets/push.js/push.min.js"></script>

    </head>

    <body>
        <div class="wrapper">
            <div class="sidebar" data-active-color="blue" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
                <!--
            Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
            Tip 2: you can also add an image using data-image tag
            Tip 3: you can change the color of the sidebar with data-background-color="white | black"
                -->
                <div class="logo">
                    <a href="../index/Index.php" class="simple-text">
             Remain Computer
                    </a>
                </div>

                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="../assets/img/faces/User.png" />
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                                <?php echo $_SESSION['Empleado']; ?>   
                         
                                 
                                
                                <b class="caret"></b>
                            </a>
                            <input type="hidden" id="sessionUser" value="<?php echo $_SESSION['idUsuario']; ?> "/>
                            <input type="hidden" id="sessionUser2" value="<?php echo $_SESSION['idUsuario']; ?> "/>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a  href="../error404/">Pronto Perfil</a>
                                    </li>
                                    <li>
                                        <a  href="../error404/">Pronto Editar Perfil</a>
                                    </li>
                                    <li>
                                        <a  href="../error404/">Pronto Ajustes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="active">
                            <a href="../index/Index.php">
                                <i class="material-icons">dashboard</i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="collapse" href="#pagesExampless">
                                <i class="material-icons">backup</i>
                                <p>Mi Auditoria
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="pagesExampless">
                                <ul class="nav">
                                    <li>
                                        <a href="../loguser/">Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="../logservice/">Detalle Servicio</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#pagesExamples">
                                <i class="material-icons">card_travel</i>
                                <p>Mi Empresas
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="pagesExamples">
                                <ul class="nav">
                                    <li>
                                        <a href="../employes/">Empleados</a>
                                    </li>
                                    <li>
                                        <a href="../user/">Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="../position/">Cargos</a>
                                    </li>
                                    <li>
                                        <a href="../profile/">Perfiles</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a data-toggle="collapse" href="#pagesExamples2">
                                <i class="material-icons">account_box</i>
                                <p>Cliente
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="pagesExamples2">
                                <ul class="nav">
                                    <li>
                                        <a href="../client/">Empresas</a>
                                    </li>                                
                                </ul>
                                <ul class="nav">
                                    <li>
                                        <a href="../employesclient/">Empleados</a>
                                    </li>                                
                                </ul> 
                            </div>
                        </li>
                        <li class="">
                            <a data-toggle="collapse" href="#pagesServices">
                                <i class="material-icons">dns</i>
                                <p>Servicios
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <div class="collapse" id="pagesServices">
                                <ul class="nav">
                                    <li>
                                        <a href="../service/">Servicio</a>
                                    </li>
                                    <li>
                                        <a href="../serviceDetail/">Detalle Servicio</a>
                                    </li>
                                    <li>
                                        <a href="../conclusion/">Conclusion</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"> Incio </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">    
                                <!--                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="material-icons">notifications</i>
                                                                    <span class="notification">5</span>
                                                                    <p class="hidden-lg hidden-md">
                                                                        Notifications
                                                                        <b class="caret"></b>
                                                                    </p>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#">Mike John responded to your email</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">You have 5 new tasks</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">You're now friend with Andrew</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Another Notification</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Another One</a>
                                                                    </li>
                                                                </ul>
                                
                                                            </li>-->
                                <li>
                                    <a href="../../services/controller/Config/salir.php">
                                        <i class="material-icons">close</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul>

                        </div>
                    </div>
                </nav>
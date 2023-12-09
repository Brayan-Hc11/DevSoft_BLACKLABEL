<?php
class usuario{
        public function ver(){
            include("seguridad_administrador.php"); include ("conexion.php");

            $nnombre_usuario="";//inicializo las variables de usuario
            $ccorreo="";//inicializo las variables de usuario
            $ddocumento = $_SESSION["documento"];//sesion del documento, donde se guarda en la variable "ddocumento"

            //consulta a la tabla usuario
            $sql = "SELECT * FROM usuarios WHERE documento ='$ddocumento'";
            if (!$result = $db->query($sql)){
                die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
            }
        }
    }
    $final = new usuario();
    $final->ver();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
<!-- Title Page-->
        <title>Panel de control</title>
<!-- Fontfaces CSS-->
    <link href="../ADMINISTRADOR/css/font-face.css" rel="stylesheet" media="all">
    <link href="../ADMINISTRADOR/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../ADMINISTRADOR/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="Crud.css">
<!-- Bootstrap CSS-->
    <link href="../ADMINISTRADOR/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<!-- Vendor CSS-->
    <link href="../ADMINISTRADOR/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../ADMINISTRADOR/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../ADMINISTRADOR/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../ADMINISTRADOR/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../ADMINISTRADOR/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<!-- Main CSS-->
    <link href="../ADMINISTRADOR/css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">

<div class="page-wrapper">

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    
    <div class="logo">
        <a href="for_login.php"><img src="../ADMINISTRADOR/images/img_logo.png" alt="BlackLabel" width="70px"/></a>
    </div>
    
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub"><a href="vista_administrador.php"><i class="fas fa-table"></i>PANEL GENERAL</a></li>
                <li><a href="usuarios.php"><i class="fas fa-table"></i>Gestión de usuarios</a></li>
                <li><a href="roles.php"><i class="fas fa-table"></i>Gestión de roles</a></li>
                <li><a href="productos.php"><i class="fas fa-table"></i>Gestión de  productos</a></li>
                <li><a href="permisos.php"><i class="fas fa-table"></i>Gestión de  permisos</a></li>
                <li><a href="estados.php"><i class="fas fa-table"></i>Gestión de  estados</a></li>
                <li><a href="categorias.php"><i class="fas fa-table"></i>Gestión de  categorias</a></li>
            </ul>
    </nav>
</div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- PAGE CONTAINER-->
<div class="page-container">

<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" >
                </form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="../ADMINISTRADOR/images/img_usuario.png"  />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">
                                <?php echo $_SESSION["nnombre_usuario"]; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../ADMINISTRADOR/images/img_usuario.png"  />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $_SESSION["nnombre_usuario"]; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $_SESSION["ccorreo"]; ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="salir.php">
                                        <i class="zmdi zmdi-power"></i>cerrar sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->
<!-- Jquery JS-->
<script src="../ADMINISTRADOR/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../ADMINISTRADOR/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../ADMINISTRADOR/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../ADMINISTRADOR/vendor/slick/slick.min.js"></script>
<script src="../ADMINISTRADOR/vendor/wow/wow.min.js"></script>
<script src="../ADMINISTRADOR/vendor/animsition/animsition.min.js"></script>
<script src="../ADMINISTRADOR/vendor/select2/select2.min.js"></script>
<!-- Main JS-->
<script src="../ADMINISTRADOR/js/main.js"></script>
</body>
</html>
<!-- end document-->
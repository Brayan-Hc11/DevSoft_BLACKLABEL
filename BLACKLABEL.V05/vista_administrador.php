<?php

    class usuario
    {

        public function ver()

        {
            include("seguridad_administrador.php");

            include ("conexion.php");

            $nnombre_usuario="";//inicializo las variables de usuario

            $ccorreo="";//inicializo las variables de usuario

            $ddocumento = $_SESSION["documento"];//sesion del documento, donde se guarda en la variable "ddocumento"

            //consulta a la tabla usuario
            $sql = "SELECT * FROM usuarios WHERE documento ='$ddocumento'";
            if (!$result = $db->query($sql))
            {
                die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
            }

            while ($row = $result->fetch_assoc())
            {
                $nnombre_usuario=stripslashes($row["nombre_usuario"]);
                $ccorreo=stripslashes($row["correo"]);
                $_SESSION["nnombre_usuario"]=$nnombre_usuario;
                $_SESSION["ccorreo"]=$ccorreo;
                
            }//fin de la consulta


             //consulta a la tabla productos

            $iid_producto=""; //inicializo las variables de los productos
            $ccodigo_producto=""; //inicializo las variables de los productos
            $nnombre_producto=""; //inicializo las variables de los productos
            $iid_categoria=""; //inicializo las variables de los productos
            $ddocumento_creador=""; //inicializo las variables de los productos
            $pprecio_producto=""; //inicializo las variables de los productos
            $iid_estado=""; //inicializo las variables de los productos

            $sql1 = "SELECT * FROM productos";
            if (!$result1 = $db->query($sql1))
            {
                die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
            }

            while ($row1 = $result1->fetch_assoc())

            {
                
                $iid_producto=stripslashes($row1["id_producto"]);
                $ccodigo_producto=stripslashes($row1["codigo_producto"]);
                $nnombre_producto=stripslashes($row1["nombre_producto"]);
                $iid_categoria=stripslashes($row1["id_categoria"]);
                $ddocumento_creador=stripslashes($row1["documento_creador"]);
                $pprecio_producto=stripslashes($row1["precio_producto"]);
                $iid_estado=stripslashes($row1["id_estado"]);

                $_SESSION["iid_producto"]=$iid_producto;
                $_SESSION["ccodigo_producto"]=$ccodigo_producto;
                $_SESSION["nnombre_producto"]=$nnombre_producto;
                $_SESSION["iid_categoria"]=$iid_categoria;
                $_SESSION["ddocumento_creador"]=$ddocumento_creador;
                $_SESSION["pprecio_producto"]=$pprecio_producto;
                $_SESSION["iid_estado"]=$iid_estado;
                
            }


            //echo "<center><p>Esta logueado $nnombre_usuario -- $ccorreo</p></center>";

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
                    <link href="css/font-face.css" rel="stylesheet" media="all">
                    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
                    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

                    <!-- Bootstrap CSS-->
                    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

                    <!-- Vendor CSS-->
                    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
                    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
                    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
                    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
                    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

                    <!-- Main CSS-->
                    <link href="css/theme.css" rel="stylesheet" media="all">

                </head>

                <body class="animsition">
                    <div class="page-wrapper">

                        <!-- HEADER MOBILE-->
                        <header class="header-mobile d-block d-lg-none">
                            <div class="header-mobile__bar">
                                <div class="container-fluid">
                                    <div class="header-mobile-inner">
                                        <a class="logo" href="for_login.php">
                                            <img src="images/img_logo.png" alt="BlackLabel" width="70px"/>
                                        </a>
                                        <button class="hamburger hamburger--slider" type="button">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <nav class="navbar-mobile">
                                <div class="container-fluid">
                                    <ul class="navbar-mobile__list list-unstyled">
                                        <li class="has-sub">
                                            <a class="js-arrow" href="vista_administrador.php">
                                                <i class="fas fa-tachometer-alt"></i>Panel</a>
                                        </li>
                                        <li>
                                            <a href="tablas.php">
                                                <i class="fas fa-table"></i>Tablas</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </header>
                        <!-- END HEADER MOBILE-->

                        <!-- MENU SIDEBAR-->
                        <aside class="menu-sidebar d-none d-lg-block">
                            <div class="logo">
                                <a href="for_login.php">
                                    <img src="images/img_logo.png" alt="BlackLabel" width="70px"/>
                                </a>
                            </div>
                            <div class="menu-sidebar__content js-scrollbar1">
                                <nav class="navbar-sidebar">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="vista_administrador.php">
                                                <i class="fas fa-tachometer-alt"></i>Panel</a>
                                        </li>
                                        <li>
                                            <a href="tablas.php">
                                                <i class="fas fa-table"></i>Tablas</a>
                                        </li>
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
                                                            <img src="images/img_usuario.png"  />
                                                        </div>
                                                        <div class="content">
                                                            <a class="js-acc-btn" href="#">
                                                            <?php echo $_SESSION["nnombre_usuario"]; ?></a>
                                                        </div>
                                                        <div class="account-dropdown js-dropdown">
                                                            <div class="info clearfix">
                                                                <div class="image">
                                                                    <a href="#">
                                                                        <img src="images/img_usuario.png"  />
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
                                                                    <i class="zmdi zmdi-power"></i>Logout</a>
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

                            <!-- MAIN CONTENT-->
                            <div class="main-content">
                                <div class="section__content section__content--p30">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="overview-wrap">
                                                    <h2 class="title-1">Vista general</h2>
                                                    <button class="au-btn au-btn-icon au-btn--blue">
                                                        <i class="zmdi zmdi-plus"></i>Agregar producto</button>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <h2 class="title-1 m-b-25">Productos</h2>
                                                <div class="table-responsive table--no-card m-b-40">
                                                    <table class="table table-borderless table-striped table-earning">
                                                        <thead>
                                                            <tr>
                                                                <th>Id producto</th>
                                                                <th>Codigo producto </th>
                                                                <th>Nombre</th>
                                                                <th class="text-right">Id categoria</th>
                                                                <th class="text-right">Documento Creador</th>
                                                                <th class="text-right">Precio Producto</th>
                                                                <th class="text-right">Id Estado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        

                                                                echo '<tr>
                                                                <td>', $_SESSION["iid_producto"], '</td> 
                                                                <td>', $_SESSION["ccodigo_producto"], '</td> 
                                                                <td>', $_SESSION["nnombre_producto"], '</td> 
                                                                <td>', $_SESSION["iid_categoria"], '</td>
                                                                <td>', $_SESSION["ddocumento_creador"], '</td> 
                                                                <td>', $_SESSION["pprecio_producto"], '</td> 
                                                                <td>', $_SESSION["iid_estado"], '</td>
                                                                </tr>';

                                                                //echo $_SESSION["iid_producto"], "id del producto" ;

                                                               /* echo" <tr> <td>", $_SESSION["iid_producto"], "</td> </tr>";*/ // imprimir las variables globales de los productos
                                                                
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <h2 class="title-1 m-b-25">Top ventas</h2>
                                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                                    <div class="au-card-inner">
                                                        <div class="table-responsive">
                                                            <table class="table table-top-countries">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>United States</td>
                                                                        <td class="text-right">$119,366.96</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Australia</td>
                                                                        <td class="text-right">$70,261.65</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>United Kingdom</td>
                                                                        <td class="text-right">$46,399.22</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Turkey</td>
                                                                        <td class="text-right">$35,364.90</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Germany</td>
                                                                        <td class="text-right">$20,366.96</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>France</td>
                                                                        <td class="text-right">$10,366.96</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Australia</td>
                                                                        <td class="text-right">$5,366.96</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Italy</td>
                                                                        <td class="text-right">$1639.32</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="copyright">
                                                    <p>Copyright © 2023 DevSoft. All rights reserved.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MAIN CONTENT-->
                            <!-- END PAGE CONTAINER-->
                        </div>

                    </div>

                    <!-- Jquery JS-->
                    <script src="vendor/jquery-3.2.1.min.js"></script>
                    <!-- Bootstrap JS-->
                    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
                    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
                    <!-- Vendor JS       -->
                    <script src="vendor/slick/slick.min.js"></script>
                    <script src="vendor/wow/wow.min.js"></script>
                    <script src="vendor/animsition/animsition.min.js"></script>
                    <script src="vendor/select2/select2.min.js"></script>

                    <!-- Main JS-->
                    <script src="js/main.js"></script>

                </body>

                </html>
                <!-- end document-->
            



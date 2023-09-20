<?php

    class usuario
    {

        public function ver()

        {
            include("seguridad_administrador.php");

            include ("conexion.php");

            $nnombre_usuario="";//inicializo las variables

            $ccorreo="";//inicializo las variables

            $ddocumento = $_SESSION["documento"];//sesion del documento, donde se guarda en la variable "ddocumento"

            //consulta 
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
                                                                <th>date</th>
                                                                <th>order ID</th>
                                                                <th>name</th>
                                                                <th class="text-right">price</th>
                                                                <th class="text-right">quantity</th>
                                                                <th class="text-right">total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2018-09-29 05:57</td>
                                                                <td>100398</td>
                                                                <td>iPhone X 64Gb Grey</td>
                                                                <td class="text-right">$999.00</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$999.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-28 01:22</td>
                                                                <td>100397</td>
                                                                <td>Samsung S8 Black</td>
                                                                <td class="text-right">$756.00</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$756.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-27 02:12</td>
                                                                <td>100396</td>
                                                                <td>Game Console Controller</td>
                                                                <td class="text-right">$22.00</td>
                                                                <td class="text-right">2</td>
                                                                <td class="text-right">$44.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-26 23:06</td>
                                                                <td>100395</td>
                                                                <td>iPhone X 256Gb Black</td>
                                                                <td class="text-right">$1199.00</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$1199.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-25 19:03</td>
                                                                <td>100393</td>
                                                                <td>USB 3.0 Cable</td>
                                                                <td class="text-right">$10.00</td>
                                                                <td class="text-right">3</td>
                                                                <td class="text-right">$30.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-29 05:57</td>
                                                                <td>100392</td>
                                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                                <td class="text-right">$199.00</td>
                                                                <td class="text-right">6</td>
                                                                <td class="text-right">$1494.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-24 19:10</td>
                                                                <td>100391</td>
                                                                <td>Camera C430W 4k</td>
                                                                <td class="text-right">$699.00</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$699.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-22 00:43</td>
                                                                <td>100393</td>
                                                                <td>USB 3.0 Cable</td>
                                                                <td class="text-right">$10.00</td>
                                                                <td class="text-right">3</td>
                                                                <td class="text-right">$30.00</td>
                                                            </tr>
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
            



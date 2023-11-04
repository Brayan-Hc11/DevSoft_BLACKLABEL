<?php

    class usuario
    {

        public function ver()

        { 
            include("seguridad_administrador.php");

            include ("conexion.php");

        
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
                    <title>Tablas</title>

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
                            <a class="logo" href="for_login.php">
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
                                            </form>
                                            <div class="header-button">
                                                <div class="account-wrap">
                                                    <div class="account-item clearfix js-item-menu">
                                                        <div class="image">
                                                            <img src="images/img_usuario.png" />
                                                        </div>
                                                        <div class="content">
                                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["nnombre_usuario"]; ?></a>
                                                        </div>
                                                        <div class="account-dropdown js-dropdown">
                                                            <div class="info clearfix">
                                                                <div class="image">
                                                                    <a href="#">
                                                                        <img src="images/img_usuario.png" />
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
                                            <div class="col-lg-9">
                                                <div class="table-responsive table--no-card m-b-30">
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
                                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
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
                                            <div class="col-lg-6">
                                                <!-- USER DATA-->
                                                <div class="user-data m-b-30">
                                                    <h3 class="title-3 m-b-30">
                                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                                    <div class="filters m-b-45">
                                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">All Properties</option>
                                                                <option value="">Products</option>
                                                                <option value="">Services</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                            <select class="js-select2 au-select-dark" name="time">
                                                                <option selected="selected">All Time</option>
                                                                <option value="">By Month</option>
                                                                <option value="">By Day</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive table-data">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>name</td>
                                                                    <td>role</td>
                                                                    <td>type</td>
                                                                    <td></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <div class="table-data__info">
                                                                            <h6>lori lynch</h6>
                                                                            <span>
                                                                                <a href="#">johndoe@gmail.com</a>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="role admin">admin</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rs-select2--trans rs-select2--sm">
                                                                            <select class="js-select2" name="property">
                                                                                <option selected="selected">Full Control</option>
                                                                                <option value="">Post</option>
                                                                                <option value="">Watch</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="more">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox" checked="checked">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <div class="table-data__info">
                                                                            <h6>lori lynch</h6>
                                                                            <span>
                                                                                <a href="#">johndoe@gmail.com</a>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="role user">user</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rs-select2--trans rs-select2--sm">
                                                                            <select class="js-select2" name="property">
                                                                                <option value="">Full Control</option>
                                                                                <option value="" selected="selected">Post</option>
                                                                                <option value="">Watch</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="more">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <div class="table-data__info">
                                                                            <h6>lori lynch</h6>
                                                                            <span>
                                                                                <a href="#">johndoe@gmail.com</a>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="role user">user</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rs-select2--trans rs-select2--sm">
                                                                            <select class="js-select2" name="property">
                                                                                <option value="">Full Control</option>
                                                                                <option value="" selected="selected">Post</option>
                                                                                <option value="">Watch</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="more">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label class="au-checkbox">
                                                                            <input type="checkbox">
                                                                            <span class="au-checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <div class="table-data__info">
                                                                            <h6>lori lynch</h6>
                                                                            <span>
                                                                                <a href="#">johndoe@gmail.com</a>
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="role member">member</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="rs-select2--trans rs-select2--sm">
                                                                            <select class="js-select2" name="property">
                                                                                <option selected="selected">Full Control</option>
                                                                                <option value="">Post</option>
                                                                                <option value="">Watch</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="more">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="user-data__footer">
                                                        <button class="au-btn au-btn-load">load more</button>
                                                    </div>
                                                </div>
                                                <!-- END USER DATA-->
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- TOP CAMPAIGN-->
                                                <div class="top-campaign">
                                                    <h3 class="title-3 m-b-30">top campaigns</h3>
                                                    <div class="table-responsive">
                                                        <table class="table table-top-campaign">
                                                            <tbody>
                                                                <tr>
                                                                    <td>1. Australia</td>
                                                                    <td>$70,261.65</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. United Kingdom</td>
                                                                    <td>$46,399.22</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. Turkey</td>
                                                                    <td>$35,364.90</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4. Germany</td>
                                                                    <td>$20,366.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5. France</td>
                                                                    <td>$10,366.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. Turkey</td>
                                                                    <td>$35,364.90</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4. Germany</td>
                                                                    <td>$20,366.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5. France</td>
                                                                    <td>$10,366.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. Turkey</td>
                                                                    <td>$35,364.90</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4. Germany</td>
                                                                    <td>$20,366.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5. France</td>
                                                                    <td>$10,366.96</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4. Germany</td>
                                                                    <td>$20,366.96</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--  END TOP CAMPAIGN-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE -->
                                                <h3 class="title-5 m-b-35">data table</h3>
                                                <div class="table-data__tool">
                                                    <div class="table-data__tool-left">
                                                        <div class="rs-select2--light rs-select2--md">
                                                            <select class="js-select2" name="property">
                                                                <option selected="selected">All Properties</option>
                                                                <option value="">Option 1</option>
                                                                <option value="">Option 2</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                        <div class="rs-select2--light rs-select2--sm">
                                                            <select class="js-select2" name="time">
                                                                <option selected="selected">Today</option>
                                                                <option value="">3 Days</option>
                                                                <option value="">1 Week</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                        <button class="au-btn-filter">
                                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                                    </div>
                                                    <div class="table-data__tool-right">
                                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                                            <select class="js-select2" name="type">
                                                                <option selected="selected">Export</option>
                                                                <option value="">Option 1</option>
                                                                <option value="">Option 2</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-responsive table-responsive-data2">
                                                    <table class="table table-data2">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <label class="au-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="au-checkmark"></span>
                                                                    </label>
                                                                </th>
                                                                <th>name</th>
                                                                <th>email</th>
                                                                <th>description</th>
                                                                <th>date</th>
                                                                <th>status</th>
                                                                <th>price</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="tr-shadow">
                                                                <td>
                                                                    <label class="au-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="au-checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>Lori Lynch</td>
                                                                <td>
                                                                    <span class="block-email">lori@example.com</span>
                                                                </td>
                                                                <td class="desc">Samsung S8 Black</td>
                                                                <td>2018-09-27 02:12</td>
                                                                <td>
                                                                    <span class="status--process">Processed</span>
                                                                </td>
                                                                <td>$679.00</td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                            <i class="zmdi zmdi-mail-send"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="zmdi zmdi-edit"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="zmdi zmdi-delete"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="spacer"></tr>
                                                            <tr class="tr-shadow">
                                                                <td>
                                                                    <label class="au-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="au-checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>Lori Lynch</td>
                                                                <td>
                                                                    <span class="block-email">john@example.com</span>
                                                                </td>
                                                                <td class="desc">iPhone X 64Gb Grey</td>
                                                                <td>2018-09-29 05:57</td>
                                                                <td>
                                                                    <span class="status--process">Processed</span>
                                                                </td>
                                                                <td>$999.00</td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                            <i class="zmdi zmdi-mail-send"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="zmdi zmdi-edit"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="zmdi zmdi-delete"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="spacer"></tr>
                                                            <tr class="tr-shadow">
                                                                <td>
                                                                    <label class="au-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="au-checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>Lori Lynch</td>
                                                                <td>
                                                                    <span class="block-email">lyn@example.com</span>
                                                                </td>
                                                                <td class="desc">iPhone X 256Gb Black</td>
                                                                <td>2018-09-25 19:03</td>
                                                                <td>
                                                                    <span class="status--denied">Denied</span>
                                                                </td>
                                                                <td>$1199.00</td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                            <i class="zmdi zmdi-mail-send"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="zmdi zmdi-edit"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="zmdi zmdi-delete"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="spacer"></tr>
                                                            <tr class="tr-shadow">
                                                                <td>
                                                                    <label class="au-checkbox">
                                                                        <input type="checkbox">
                                                                        <span class="au-checkmark"></span>
                                                                    </label>
                                                                </td>
                                                                <td>Lori Lynch</td>
                                                                <td>
                                                                    <span class="block-email">doe@example.com</span>
                                                                </td>
                                                                <td class="desc">Camera C430W 4k</td>
                                                                <td>2018-09-24 19:10</td>
                                                                <td>
                                                                    <span class="status--process">Processed</span>
                                                                </td>
                                                                <td>$699.00</td>
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                                            <i class="zmdi zmdi-mail-send"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                            <i class="zmdi zmdi-edit"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <i class="zmdi zmdi-delete"></i>
                                                                        </button>
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                                            <i class="zmdi zmdi-more"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE -->
                                            </div>
                                        </div>
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>date</th>
                                                                <th>type</th>
                                                                <th>description</th>
                                                                <th>status</th>
                                                                <th>price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>2018-09-29 05:57</td>
                                                                <td>Mobile</td>
                                                                <td>iPhone X 64Gb Grey</td>
                                                                <td class="process">Processed</td>
                                                                <td>$999.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-28 01:22</td>
                                                                <td>Mobile</td>
                                                                <td>Samsung S8 Black</td>
                                                                <td class="process">Processed</td>
                                                                <td>$756.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-27 02:12</td>
                                                                <td>Game</td>
                                                                <td>Game Console Controller</td>
                                                                <td class="denied">Denied</td>
                                                                <td>$22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-26 23:06</td>
                                                                <td>Mobile</td>
                                                                <td>iPhone X 256Gb Black</td>
                                                                <td class="denied">Denied</td>
                                                                <td>$1199.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-25 19:03</td>
                                                                <td>Accessories</td>
                                                                <td>USB 3.0 Cable</td>
                                                                <td class="process">Processed</td>
                                                                <td>$10.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-29 05:57</td>
                                                                <td>Accesories</td>
                                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                                <td class="denied">Denied</td>
                                                                <td>$199.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-24 19:10</td>
                                                                <td>Camera</td>
                                                                <td>Camera C430W 4k</td>
                                                                <td class="process">Processed</td>
                                                                <td>$699.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2018-09-22 00:43</td>
                                                                <td>Computer</td>
                                                                <td>Macbook Pro Retina 2017</td>
                                                                <td class="process">Processed</td>
                                                                <td>$10.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
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

            


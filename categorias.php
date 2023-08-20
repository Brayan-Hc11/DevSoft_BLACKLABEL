<!--Linkiamos los metadatos-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Linkiamos las hojas de estilo que ha usar-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/ca.css">

<?php

class usuario
{
    public function categorias()
    {

        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>

            <!--Titulo del la página-->
            <title>Categorias en BlackLabel</title>

        </head>

        <header>
            <!--En el header podemos encontrar los iconos de servicio al cliente-->
                    <div class="container-hero">
                        <div class="container hero">
                            <div class="customer-support">
                            <a href="servicioCliente.php"><i class="fa-solid fa-headset"></i></a>
                                        
                                <div class="content-customer-support">
                                    <span class="text">Soporte al cliente</span>
                                    <span class="number">123-456-7890</span>
                                </div>
                            
                            </div>
            <!--Icono de la empresa y el icon de la etiqueta-->
                                    <div class="container-logo">
                                        <i class="fa-solid fa-tag"></i>
                                        <h1 class="logo"><a href="BlackLabel.php">BLacklabel</a></h1>
                                    </div>
            <!--Icono de incio sesión,lista de categorias y carrito de compras-->
                                    <div class="container-user">
                                        <a href="categorias.php"><i class="fa-solid fa-list"></i></>
                                        <a href="acceder.php"><i class="fa-solid fa-user"></i></a>
                                        <a href="carritoCompras.php"><i class="fa-solid fa-basket-shopping"></i></a>
                                        
                                        <div class="content-shopping-cart">
                                            <span class="text">carrito de compras</span>
                                            <span class="number">(0)</span>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </header>
            <!-------------------------------------------------------------------------CATALOGO DE CATEGORIAS----------------------------------------------------->
        <body>

            <!------------------------------------------------------------------------CONTENEDOR INICIAL------------------------------------------------------------>
            <div class="wrapper">

                <header class="header-mobile">
                    <h1 class="logo"><a href="blackLabel.php">blackLabel</a> </h1>
                    <button class="open-menu" id="open-menu">
                        <i class="bi bi-list"></i>
                    </button>
                </header>
            <!------------------------------------------------------------------------CONTENEDOR PRIMARIO---------------------------------------------------------->
                <aside>
                    <button class="close-menu" id="close-menu">
                        <i class="bi bi-x"></i>
                    </button>

                    <header>
                        <h1 class="logo"><a href="blackLabel.php">HOGAR</a></h1>
                    </header>
            <!------------------------------------------------------------------------CONTENEDOR DE NAVEGACIÓN---------------------------------------------------->
            <nav>
                <ul class="menu">
                    <li><button id="todos" class="boton-menu boton-categoria active"><i class="bi bi-hand-index-thumb-fill"></i> Todos los productos</button></li>
                    <li><button id="abrigos" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Abrigos</button></li>
                    <li><button id="camisetas" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Camisetas</button></li>
                    <li><button id="pantalones" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i> Pantalones</button> </li>
                    <li><a class="boton-menu boton-carrito" href="./carrito.php"><i class="bi bi-cart-fill"></i> Carrito <span id="numerito" class="numerito">0</span></a></li>
                </ul>
            </nav>
                <!------------------------------------------------------------------------FOOTER LATERAL------------------------------------------------------------------->
                    <footer><p class="texto-footer">© 2022 DEVSOFT</p></footer>
                </aside>
                <!------------------------------------------------------------------------CONTENEDOR SEGUNDARIO---------------------------------------------------------->
                <main>
                    <h2 class="titulo-principal" id="titulo-principal">Todos los productos</h2>
                    <div id="contenedor-productos" class="contenedor-productos">
                        <!-- Esto se va a rellenar con JS -->
                    </div>
                </main>
            </div>
            <!------------------------------------------------------------------------LINKIAMOS LAS HOJAS DE JS---------------------------------------------------------->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
            <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
            <script src="./js/main.js"></script>
            <script src="./js/menu.js"></script>

        </body>
        </html>';

    }
}

$final = new usuario();
$final->categorias();

?>


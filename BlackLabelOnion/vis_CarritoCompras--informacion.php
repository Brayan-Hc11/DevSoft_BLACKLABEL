<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="main.css">

<?php
Class iniCarritoComprasInformation{
    public function vistaCarritoCompras(){
        echo("
    <body>
        <div class='wrapper'>

        <header class='header-mobile'>
            <h1 class='logo'><a href='index.php'>blackLabel</a></h1>
            <button class='open-menu' id='open-menu'>
                <i class='bi bi-list'></i>
            </button>
        </header>

        <aside>
            <button class='close-menu' id='close-menu'>
                <i class='bi bi-x'></i>
            </button>

            <header>
                <h1 class='logo'></h1>
            </header>
                      
            <nav>
                <ul>
                    <li><a class='boton-menu boton-volver' href='#'><i class='bi bi-arrow-return-left'></i> Seguir comprando</a></li>
                    <li><a class='boton-menu boton-carrito active' href='#'><i class='bi bi-cart-fill'></i> Carrito</a></li>
                </ul>
            </nav>

            <footer>
                <p class='texto-footer'>© 2023 DEVSOFT</p>
            </footer>
        </aside>


        <main>
            <h2 class='titulo-principal'>Carrito</h2>
            <div class='contenedor-carrito'>
                <p id='carrito-vacio' class='carrito-vacio'>Tu carrito está vacío. <i class='bi bi-emoji-frown'></i></p>

                <div id='carrito-productos' class='carrito-productos disabled'>
                    <!-- Esto se va a completar con el JS -->
                </div>

                <div id='carrito-acciones' class='carrito-acciones disabled'>
                    
                    <div class='carrito-acciones-izquierda'>
                        <button id='carrito-acciones-vaciar' class='carrito-acciones-vaciar'>Vaciar carrito</button>
                    </div>

                    <div class='carrito-acciones-derecha'>
                        <div class='carrito-acciones-total'>
                            <p>Total:</p>
                            <p id='total'>$3000</p>
                        </div>
                        <button id='carrito-acciones-comprar' class='carrito-acciones-comprar'>Comprar ahora</button>
                    </div>
                </div>
                <p id='carrito-comprado' class='carrito-comprado disabled'>Muchas gracias por tu compra. <i class='bi bi-emoji-laughing'></i></p>

            </div>
        </main>
    </div>
</body>
     ");
    }
}
#finalizamos clase y metodo
$final = new iniCarritoComprasInformation();
    $final -> vistaCarritoCompras();
?>
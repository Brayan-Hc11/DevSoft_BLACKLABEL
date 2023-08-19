<link rel="stylesheet" href="main.css">

<!--linkiamos las hojas de estilos-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<title>Categorias</title>

<?php
class visCategorias{
    public function vistaCategorias(){
        #incluimos contenido del header 
        include("vis_Categorias--header.php");

        #Iniciamos  la capa media 
        echo("
        <body>
 
        <div class='wrappercategorias'>  
            <aside>
                <button class='close-menu' id='close-menu'>
                    <i class='bi bi-x'></i>
                </button>
    
                <header>
                    <h1 class='logo'><a class='hogar' href='index.php'>HOGAR</a></h1>
                </header>
  
        <nav>
            <ul class='menu'>
                <li><button id='todos' class='boton-menu boton-categoria active'><i class='bi bi-hand-index-thumb-fill'></i> Todos los productos</button></li>
                <li><button id='abrigos' class='boton-menu boton-categoria'><i class='bi bi-hand-index-thumb'></i> Abrigos</button></li>
                <li><button id='camisetas' class='boton-menu boton-categoria'><i class='bi bi-hand-index-thumb'></i> Camisetas</button></li>
                <li><button id='pantalones' class='boton-menu boton-categoria'><i class='bi bi-hand-index-thumb'></i> Pantalones</button> </li>
                <li><a class='boton-menu boton-carrito' href='vis_CarrtitoCompras.php'><i class='bi bi-cart-fill'></i> Carrito <span id='numerito' class='numerito'>0</span></a></li>
            </ul>
        </nav>
     
                <footer><p class='texto-footer'>© 2022 DEVSOFT</p></footer>
            </aside>
   
            <main>
                <h2 class='titulo-principal' id='titulo-principal'>Todos los productos</h2>
                <div id='contenedor-productos' class='contenedor-productos'>
                </div>
            </main>
        </div>
    </body>
        }
     ");
    }
}
#Finalizamos la clase y el metodo
$final = new visCategorias();
    $final -> vistaCategorias();
?>
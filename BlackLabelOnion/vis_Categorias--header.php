<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
<link rel="stylesheet" href="main.css">

<!--biblioteca de inconos boostrap-->
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
<script src="main.js"></script>
    <script src="menu.js"></script>
<?php 
Class visCategoriasHeader{
    public function vistaCategoriasHeader(){
        echo("
        <header>
            <div class='container-herocategorias'>
                <div class='container herocategorias'>
                    <div class='customer-support'>
                    <a href='for_cliente.php'><i class='fa-solid fa-headset'></i></a>
                                
                        <div class='content-customer-support'>
                            <span class='text'>Soporte al cliente</span>
                            <span class='number'>123-456-7890</span>
                        </div>
                    
                    </div>
    
                            <div class='container-logo'>
                                <i class='fa-solid fa-tag'></i>
                                <h1 class='logo'><a href='index.php'>BLacklabel</a></h1>
                            </div>

                            <div class='container-user'>
                                <a href='for_login.php'><i class='fa-solid fa-user'></i></a>
                                <a href='vis_CarritoCompras.php'><i class='fa-solid fa-basket-shopping'></i></a>
                                
                                <div class='content-shopping-cart'>
                                    <span class='text'>carrito de compras</span>
                                    <span class='number'>(0)</span>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </header>
        
        ");
    }
}
#Finalizamos la clase y el metodo 
$final = new visCategoriasHeader();
$final -> vistaCategoriasHeader();
?>
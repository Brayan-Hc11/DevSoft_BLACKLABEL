<!--LINKIAMOS LAS HOJAS DE ESTILO-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="main.css">
    
<!--Titulo de la página wed -->
    <title>BlackLabel</title>

<?php
class iniHeader{
    public function vistaHeader(){
echo("
<header class='header'>
<div class='header__menu container' background-image:>
    <a href='vis_Blog.php' class='header__logo'>
        <span class='material-symbols-outlined'>sell</span> BLACKLABEL</a>
       
    <nav class='header__navbar'>
         <ul>
            <li><a href='vis_productos.php'>Productos</a></li><!--Apartado de los productos-->
            <li><a href='for_cliente.php'><span class='material-symbols-outlined'>record_voice_over</span></a></li>
            <li><a href='vis_CarritoCompras.php'><span class='material-symbols-outlined'>shopping_cart</span></a></li>
            <li><a href='for_login.php'><span class='material-symbols-outlined'>account_circle</span></a></li>
         </ul>
    </nav>
</div>

<div class='header__medio container'>
    
    <h1>Bienvenido a BlackLabel</h1>
    <p><i>'Software es lo que Hacemos.'</i></p>
    <a href='vis_Blog.php' class='header__btn-1'>Sobre Nosotros</a>

</div>
    <img class='header__img' src='img_fondo_rasgado.png'>
</header><hr>
        ");
    }
}
#FInalizamos clase y metodo
$final = new iniHeader();
    $final -> vistaHeader();
?>
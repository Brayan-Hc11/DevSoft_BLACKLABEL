<!--LINKIAMOS LAS HOJAS DE ESTILO-->
    <link rel="stylesheet" href="main.css">
<!--Titulo de la página wed -->
    <title>BlackLabel</title>

<?php
#inicialiamos una clase y un metodo
class iniHeader{
    public function vistaHeader(){
        #inico del header de la capa principal index
echo("
<header class='header'>
<div class='header__menu container' background-image: url(img_fondo_blacklabel-min.jpg);>
    <a href='Cpa_mid-Blog.php' class='header__logo'>
        <span class='material-symbols-outlined'>sell</span> BLACKLABEL</a>
       
    <nav class='header__navbar'>
         <ul>
            <li><a href='Cpa_mid-productos.php'>Productos</a></li>
            <li><a href='for_cliente.php'><span class='material-symbols-outlined'>record_voice_over</span></a></li>
            <li><a href='vis_CarritoCompras.php'><span class='material-symbols-outlined'>shopping_cart</span></a></li>
            <li><a href='for_login.php'><span class='material-symbols-outlined'>account_circle</span></a></li>
         </ul>
    </nav>
</div>

<div class='header__medio container'>
    
    <h1>Bienvenido a BlackLabel</h1>
    <p><i>'Software es lo que Hacemos.'</i></p>
    <a href='Cpa_mid-Blog.php' class='header__btn-1'>Sobre Nosotros</a>

</div>
    <img class='header__img' src='img_fondo_rasgado-min.png'>
</header><hr>
        ");
    }
}
#FInalizamos clase y metodo
$final = new iniHeader();
    $final -> vistaHeader();
?>
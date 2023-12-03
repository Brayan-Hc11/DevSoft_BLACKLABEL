<!--LINKIAMOS LAS HOJAS DE ESTILO-->
    <link rel="stylesheet" href="CSS/main.css">
<!--Titulo de la página wed -->
    <title>BlackLabel</title>
    <link rel="icon" href="logo.ico">

<?php
#inicialiamos una clase y un metodo
class iniHeader{
    public function vistaHeader(){
        #inico del header de la capa principal index
echo("
<header class='header'>
<div class='header__menu container' style='background-image: url('IMG/img_fondo_blacklabel-min.jpg');'>
    <a href='Cpa_mid-Blog.php' class='header__logo'>
        <span class='material-symbols-outlined'>sell</span> BLACKLABEL</a>
       
    <nav class='header__navbar'>
        <ul>
            <li><a href='Cpa_mid-Blog.php'><i class='fa-solid fa-users'></i></a></li>
            <li><a href='Cpa_mid-productos.php'><i class='fa-solid fa-box-open'></i></a></li>
            <li><a href='for_cliente.php'><i class='fa-solid fa-headset'></i></a></li>
            <li><a href='for_login.php'><i class='fa-regular fa-circle-user'></i></a></li>
        
          <!--
            <li><a href='Cpa_mid-productos.php'>Nosotros</a></li>
            <li><a href='Cpa_mid-productos.php'>Productos</a></li>
            <li><a href='for_cliente.php'>Atención</a></li>
            <li><a href='for_login.php'>Login</a></li>
            -->
        </ul>
    </nav>
</div>

<div class='header__medio container'>
    
    <h1>Bienvenido a BlackLabel</h1>
    <p><i>'Software es lo que Hacemos.'</i></p>
    <!--<a href='Cpa_mid-Blog.php' class='header__btn-1'>Sobre Nosotros</a>-->

</div>
    <img class='header__img' src='IMG/img_fondo_rasgado-min.png'>
</header><hr>
        ");
    }
}
#FInalizamos clase y metodo
$final = new iniHeader();
    $final -> vistaHeader();
?>
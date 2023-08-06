<!--LINKIAMOS LAS HOJAS DE ESTILO-->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />



<?php
Echo("
<header class='header'>
<div class='header__menu container' background-image:>
    <a href='blackLabel.html' class='header__logo'>
        <span class='material-symbols-outlined'>sell</span> BlackLabel </a>
       
    <nav class='header__navbar'>
         <ul>
            <li><a href='vis_productos.php' target='_blank'>Productos</a></li><!--Apartado de los productos-->
            <li><a href='cliente.html'><span class='material-symbols-outlined'>record_voice_over</span></a></li>
            <li><a href='carrito.html'><span class='material-symbols-outlined'>shopping_cart</span></a></li>
            <li><a href='acceder.html'><span class='material-symbols-outlined'>account_circle</span></a></li>
         </ul>
    </nav>
</div>

<div class='header__medio container'>
    
    <h1>Bienvenido a BlackLabel</h1>
    <p><i>'Software es lo que Hacemos.'</i></p>
    <a href='nosotros.html' class='header__btn-1'>Sobre Nosotros</a>

</div>
    <img class='header__img' src='img_fondo_rasgado.png'>
</header><hr>
");


?>
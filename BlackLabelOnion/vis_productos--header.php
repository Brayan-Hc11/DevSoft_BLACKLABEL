<!--LINKIAMOS LAS HOJAS DE ESTILO-->
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>



<?php
Echo("
<header>

        <div class='productos'>

            <div class='productos__hero'>
                <div class='productos__customer--support'>
                    <a href='cliente.html'><i class='fa-solid fa-headset'></i></a>    
                    <div class='productos__content--customer--support'>
                        <span class='text'>Soporte al cliente</span>
                        <span class='productos--number'>123-456-7890</span>
                    </div>
                </div>

                <div class='productos__logo'>
                    <i class='fa-solid fa-tag'></i>
                    <h1 class=productos__logo--logo'><a href='blackLabel.html'>BLacklabel</a></h1>
                </div>

                <div class='productos__user'>
                    <a href='categorias.html'><i class='fa-solid fa-list'></i></a>
                    <a href='acceder.html'><i class='fa-solid fa-user'></i></a>
                    <a href='compras.html'><i class='fa-solid fa-basket-shopping'></i></a>
                    <div class='productos__content-shopping-cart'>
                        <span class='productos__text'>carrito de compras</span>
                        <span class='productos__number'>(0)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class='productos__navbar'>
            <nav class='productos__content--navbar container'>
                <i class='fa-solid fa-bars'></i>
                <ul class='productos__menu'>
                    <li><a href='#'>categoria 1</a></li>
                    <li><a href='#'>categoria 2</a></li>
                    <li><a href='#'>categoria 3</a></li>
                    <li><a href='#'>categoria 4</a></li>
                    <li><a href='#'>categoria 5</a></li>
                    <li><a href='#'>categoria 6</a></li>
                    <li><a href='#'>categoria 7</a></li>
                    <li><a href='#'>categoria 8</a></li>
                </ul>

                <form class='productos__search--form'>
                    <input type='search' placeholder='Buscar...'>
                    <button class='productos__btn-search'>
                        <i class='fa-solid fa-magnifying-glass'></i>
                    </button>
                </form>

            </nav>
        </div>
    </header>
");


?>
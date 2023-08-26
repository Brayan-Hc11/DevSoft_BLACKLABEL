<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
    <script src='jquery-3.2.1.js'></script>
    <script src="j-script.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
    <link rel="stylesheet" href="main.css">
    
    <title>Categorias</title>
</head>

<body>
<div class="Principal">
<?php
    include('Cpa_ini-Categorias--header.php')
    ?>
   <div class="wrap">
    <h1></h1>
    <div class="wrap__store-wrapper">
        <div class="wrap__store-wrapper--category_list">
            <a href="#" class="wrap__store-wrapper--category_list--Item " category="All">Todo</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Ordenadores">Ordenadores</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Laptos">Laptos</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Smartphones">Smartphones</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Monitores">Monitores</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Audifonos">Audifonos</a>
        </div>

<!--
        cambio de clases
        contenedor=almacen
        contenedor-items =almacen-items
        item= elment
        titulo-item =titulo-element
        img-item = img-element
        precio-item = precio-element
        boton-item = boton-element 

<section class="almacen">
    <div class="almacen-elements">
        
    <div class="element">
            <span class="titulo-element">box engasse</span>
                <img src="./img/boxengasse.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
    </div>
    <div class="element">
            <span class="titulo-element">English horse</span>
                <img src="./img/englishrose.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
    </div>
    <div class="element">
            <span class="titulo-element">Knokc nap</span>
                <img src="./img/knocknap.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">la night</span>
                <img src="./img/lanight.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">silver</span>
                <img src="./img/silverall.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">skin glam</span>
                <img src="./img/skinglam.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">mid mix </span>
                <img src="./img/middlesteel.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">sir blue</span>
                <img src="./img/sirblue.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">middlesteel</span>
                <img src="./img/middlesteel.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
        <div class="element">
            <span class="titulo-element">box engasse</span>
                <img src="./img/boxengasse.png" alt="" class="img-element">
                <span class="precio-element">$15.000</span>
            <button class="boton-element">agregar</button>
        </div>
    </div>

    <div class="carrito">
        <div class="header-carrito">
            <h2>tu carrito</h2>
        </div>

        <div class="carrito-items">
            <div class="carrito-item">
                <img src="./img/boxengasse.png" alt="" width="80px">
                <div class="carrritt-item-detalles">
                    <span class="carrito-item-titulo">box engasse</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled="disabled">
                        <i class="fa-solid fa-plus sumar-cantidad"></i>                      
                    </div>
                    <span class="carrito-item-precio">$15.000</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>

            <div class="carrito-item">
                <img src="./img/englishrose.png" alt="" width="80px">
                <div class="carrritt-item-detalles">
                    <span class="carrito-item-titulo">englishrose</span>
                    <div class="selector-cantidad">
                        <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="2" class="carrito-item-cantidad" disabled="disabled">
                        <i class="fa-solid fa-plus sumar-cantidad"></i>                      
                    </div>
                    <span class="carrito-item-precio">$30.000</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
            </div>
        </div>
        <div class="carrito-total">
            <div class="fila">
                <strong>tu total </strong>
                <span class="carrito-precio-total">$120.000</span>
            </div>
            <button class="btn-pagar">pagar <i class="fa-solid fa-bag-shopping"></i> </button>
        </div>
    </div>
</section>
-->
<section class="wrap__store-wrapper--products-list">

            <div class="wrap__store-wrapper--products-list--item" category="Laptos">
                <img src="./productos/img_laptop1.png" alt="">
                <a href="#">Laptop uno</a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Monitores">
                <div class="ca">
                <img src="./productos/img_monitor1.png" alt="">
              
                </div>
                <a href="#">Monitor uno</a>
                
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="./productos/img_celular1.png" alt="">
                <a href="#">telefono dos</a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="./productos/img_celular2.png" alt="">
                <a href="#">telefono uno</a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Ordenadores">
                <img src="./productos/img_ordenador1.png" alt="">
                <a href="#">Ordenador uno</a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Ordenadores">
                <img src="./productos/img_ordenador2.png" alt="">
                <a href="#">Ordenador dos</a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Laptos">
                <img src="./productos/img_laptop2.png" alt="">
                <a href="#">Laptop dos</a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Monitores">
                <img src="./productos/img_monitor2.png" alt="">
                <a href="#">monitor dos</a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Audifonos">
                <img src="./productos/img_audifonos1.png" alt="">
                <a href="#">audifono</a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Audifonos">
                <img src="./productos/img_audifonos2.png" alt="">
                <a href="#">audifono</a>
            </div>
        </section>
   
    </div>
    <h1></h1>
</div>
</div>
</body>
<?php include("Cpa_fin-productos--footer.php")?>
</html>

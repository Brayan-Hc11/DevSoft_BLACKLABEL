<!DOCTYPE html>
<html lang="es">
<head>
            <!--Metadatos web-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           
            <!--LINKIAMOS LAS HOJAS DE ESTILO-->
        <link rel="stylesheet" href="main.css">
            
            <!--Titulo de la página-->
    <title>Productos</title>

</head>
<body>
    <header>
        <div class='productos'>
            <div class='productos__hero'>
                <div class='productos__customer--support'>
                    <a href='for_cliente.php'><i class='fa-solid fa-headset'></i></a>    
                    <div class='productos__content--customer--support'>
                        <span class='text'></span>
                        <span class='productos--number'></span>
                    </div>
                </div>
                <div class='productos__logo'>
                    <h1 class='productos__logo--logo'>
                        <a href='index.php'><span class='material-symbols-outlined'>sell</span>Blacklabel</a>
                    </h1>
                </div>
                <div class='productos__user'>
                    <a href='Cpa_mid-Categorias_html.php'><i class='fa-solid fa-list'></i></a>
                    <a href='for_login.php'><i class='fa-solid fa-user'></i></a>
                    <a href='vis_CarritoCompras.php'><i class='fa-solid fa-basket-shopping'></i></a>
                    <div class='productos__content-shopping-cart'>
                        <span class='productos__text'></span>
                        <span class='productos__number'></span>
                    </div>
                </div>
            </div>
        </div>

        <div class='scrol'>
            <section class='slidersec'>
        
                <div class='container-slider'>
                    <div class='slider' id='slider'>
        
                        <div class='slider__section'><img src='img_slider1.png' class='slider__img'></div>
                        <div class='slider__section'><img src='img_slider2.png' class='slider__img'></div>
                        <div class='slider__section'><img src='img_slider3.png' class='slider__img'></div>
                        <div class='slider__section'><img src='img_slider4.png' class='slider__img'></div>
                        <div class='slider__section'><img src='img_galeria5.png' class='slider__img'></div>  

                </div>
        
                    <div class='slider__btn slider__btn--right' id='btn-right'>&#62;</div>
                    <div class='slider__btn slider__btn--left' id='btn-left'>&#60;</div>
            </div>
        </section>
        </div>
    </header>

        <!--Linkiamos los scripts del slider de los productos-->
    <script src="j-slider.js"></script>
    
        <!--biblioteca de inconos boostrap-->
    <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</body>
</html>
<!--Inicio del contenido en php-->
<?php
class inicioProd{
    public function vistaProd(){
    #Inico de la capa media
    echo("
    <main class='productos__medio'>
        <section class='productos__cual--features container '>
    
            <div class='card-feature'>
                <i class='fa-sharp fa-solid fa-plane-up'></i>    
                    <div class='features-content'>
                        <span>Envio gratuito a nivel mundial </span>
                        <p>pedido superior a 1150</p>
                    </div>
            </div>
    
            <div class='card-feature'>
                <i class='fa-solid fa-wallet'></i>
                <div class='features-content'>
                 <span>Contrareembolsos</span>
                <p>100% garantía devolución de dinero</p>
            </div>
    </div>
    
            <div class='card-feature'>
                <i class='fa-solid fa-gift'></i>
                <div class='features-content'>
                <span>Tarjeta regalo especial </span>
                <p>Ofrece bonos especiales con regalo</p>
            </div>
    </div>
    
            <div class='card-feature'>
                <i class='fa-solid fa-headset'></i>
                <div class='features-content'>
                <span>Servicio al cliente 24/7</span>
                <p>Llamanos 24/7 al 123-456-7890</p>
            </div>
    </div>
    
    </section>
    
    <section class='container top__categories'>
        <h1 class='heading-1'>Mejores categorias</h1>

        <div class='container-categories'>
    
            <div class='card-category category-element1'>
                <p>Elemento 1</p>
                <span>ver más</span>
            </div>
    
            <div class='card-category category-element2'>
                <p>Elemento 2</p>
                <span>ver más</span>
            </div>
            
            <div class='card-category category-element3'>
                <p>Elemento 3</p>
                <span>ver más</span>
            </div>
        </div>
    </section>

    
    <section class='container top-products'>
        <h1 class='heading-1'>Mejores productos</h1>

        <div class='container-products'>

        
            <div class='card-product'>
                <div class='container-img'>
                <a href='Prod_laptop1.php'><img src='./productos/img_laptop1.png'/></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='#'>Elemento #</a></h3>
                    <span class='add-cart'>
                        <i class='fa-solid fa-basket-shopping'></i>
                    </span>
                        <p class='price'>$4.60 <span>$5.30</span></p>
            </div>
        </div>
    
            <div class='card-product'>
                <div class='container-img'>
                <a href='#'><img src='./productos/img_monitor1.png' /></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='#'>Elemento #</a></h3>
                    <span class='add-cart'>
                        <i class='fa-solid fa-basket-shopping'></i>
                    </span>
                        <p class='price'>$4.60 <span>$5.30</span></p>
            </div>
        </div>

        
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='#'><img src='./productos/img_celular1.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='#'>Elemento #</a></h3>
            <span class='add-cart'>
                <i class='fa-solid fa-basket-shopping'></i>
            </span>
                <p class='price'>$4.60 <span>$5.30</span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='#'><img src='./productos/img_celular2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='#'>Elemento #</a></h3>
            <span class='add-cart'>
                <i class='fa-solid fa-basket-shopping'></i>
            </span>
                <p class='price'>$4.60 <span>$5.30</span></p>
    </div>
</div>


</div>    
    <section class='galleryg'>
    <img src='img_galeria1.png' alt='Gallery Img1'class='gallery-img-1'/>
    <img src='img_galeria2.png'alt='Gallery Img2'class='gallery-img-2'/>
    <img src='img_galeria3.png'alt='Gallery Img3'class='gallery-img-3'/>
    <img src='img_galeria4.png'alt='Gallery Img4'class='gallery-img-4'/>
    <img src='img_galeria5.png'alt='Gallery Img5'class='gallery-img-5'/>
    </section>
    
    <div class='container-products'>
    
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='#'><img src='./productos/img_ordenador1.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='#'>Elemento #</a></h3>
            <span class='add-cart'>
                <i class='fa-solid fa-basket-shopping'></i>
            </span>
                <p class='price'>$4.60 <span>$5.30</span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='#'><img src='./productos/img_ordenador2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='#'>Elemento #</a></h3>
            <span class='add-cart'>
                <i class='fa-solid fa-basket-shopping'></i>
            </span>
                <p class='price'>$4.60 <span>$5.30</span></p>
    </div>
</div>
    
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='#'><img src='./productos/img_audifonos2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='#'>Elemento #</a></h3>
            <span class='add-cart'>
                <i class='fa-solid fa-basket-shopping'></i>
            </span>
                <p class='price'>$4.60 <span>$5.30</span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='#'><img src='./productos/img_celular2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='#'>Elemento #</a></h3>
            <span class='add-cart'>
                <i class='fa-solid fa-basket-shopping'></i>
            </span>
                <p class='price'>$4.60 <span>$5.30</span></p>
    </div>
</div>



</div>
    </section>
    </main>
    ");  
    #Incluimos footer segundario 
        include("Cpa_fin-Blog--footer.php");
    }
}
#Finalizamos clase y metodo
$final = new inicioProd();
    $final -> vistaProd();
?>
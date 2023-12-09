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
    <link rel="Icon" href="logo.ico">
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
                </div>
            </div>
        </div>

        <div class='scrol'>
            <section class='slidersec'>
        
                <div class='container-slider'>
                    <div class='slider' id='slider'>
        
                        <div class='slider__section'><img src='IMG/img_slider1.png' class='slider__img'></div>
                        <div class='slider__section'><img src='IMG/img_slider2.png' class='slider__img'></div>
                        <div class='slider__section'><img src='IMG/img_slider3.png' class='slider__img'></div>
                        <div class='slider__section'><img src='IMG/img_slider4.png' class='slider__img'></div>
                        <div class='slider__section'><img src='IMG/img_galeria5.png' class='slider__img'></div>  

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
    
    <section class='container top-products'>
        <h1 class='heading-1'>Encuentra todos nuestros productos</h1>

        <div class='container-products'>
<!-------------------------------------------------------------------------------------------------------------------------->
            <div class='card-product'>
                <div class='container-img'>
                <a href='PROD/Prod_laptop1.php'><img src='IMG_PROD/img_laptop1.png'/></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='PROD/Prod_Laptop1.php'>Portátil Asus X415EA</a></h3>
                        <p class='price'>$ 298.591<span></span></p>
            </div>
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->    
            <div class='card-product'>
                <div class='container-img'>
                <a href='PROD/Prod_Monitores2.php'><img src='IMG_PROD/img_Pantalla2.png' /></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='PROD/Prod_Monitores2.php'>Monitor gamer Samsung</a></h3>
                    
                        <p class='price'>$ 583.178<span></span></p>
            </div>
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Smartphone1.PHP'><img src='IMG_PROD/img_Smarftphone1.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        
            </div>

        <h3><a href='PROD/Prod_Smartphone1.php'>Xiaomi Redmi 9A</a></h3>
          
                <p class='price'>$ 389.000<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Laptop2.php'><img src='IMG_PROD/img_laptop2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Laptop2.php'>Portátil Lenovo IdeaPad </a></h3>
          
                <p class='price'>$ 1.300.000<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Laptop5.php'><img src='IMG_PROD/img_Laptop5.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Laptop5.php'>Portátil gamer Asus TUF Gaming</a></h3>
          
                <p class='price'>$ 3.299.000 <span></span></p>
    </div>
</div>
</div>

<!-------------------------------------------------------------------------------------------------------------------------->
<div class='container-products'>
<!-------------------------------------------------------------------------------------------------------------------------->
            <div class='card-product'>
                <div class='container-img'>
                <a href='PROD/Prod_Laptop6.php'><img src='IMG_PROD/img_laptop6.png'/></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='PROD/Prod_Laptop6.php'>Laptop Hp 14-fq1051la</a></h3>
                    
                        <p class='price'>$ 1.299.000<span></span></p>
            </div>
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->    
            <div class='card-product'>
                <div class='container-img'>
                <a href='PROD/Prod_Monitores1'><img src='IMG_PROD/img_Pantalla1.png' /></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='PROD/Prod_Monitores1.php'>Monitor gamer curvo </a></h3>
                    
                        <p class='price'>$ 798.619<span></span></p>
            </div>
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Smartphone6.php'><img src='IMG_PROD/img_Smarftphone6.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Smartphone6.php'>Umidigi A11s Dual</a></h3>
          
                <p class='price'>$ 319.900<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Auriculares2.php'><img src='IMG_PROD/img_Auricular2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Auriculares2.php'>Audífonos Logitech</a></h3>
          
                <p class='price'>
                $ 579.900<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Tableta7.php'><img src='IMG_PROD/img_Tableta7.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Tableta7.php'>Tableta Inteligente Android</a></h3>
          
                <p class='price'>$ 298.591 <span></span></p>
    </div>
</div>
</div>

<section class='galleryg'>
    <img src='IMG/img_galeria1.png' alt='Gallery Img1'class='gallery-img-1'/>
    <img src='IMG/img_galeria2.png'alt='Gallery Img2'class='gallery-img-2'/>
    <img src='IMG/img_galeria3.png'alt='Gallery Img3'class='gallery-img-3'/>
    <img src='IMG/img_galeria4.png'alt='Gallery Img4'class='gallery-img-4'/>
    <img src='IMG/img_galeria5.png'alt='Gallery Img5'class='gallery-img-5'/>
    </section>
    
    <div class='container-products'>
    
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Ordenadores1.php'><img src='IMG_PROD/img_Ordenador1.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        
            </div>

        <h3><a href='PROD/Prod_Ordenadores1.php'>Torre Cpu Gamer</a></h3>
          
                <p class='price'>$ 1.282.500<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Ordenadores2.php'><img src='IMG_PROD/img_Ordenador2.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Ordenadores2.php'>Torre Cpu Gamer Ryzen</a></h3>
          
                <p class='price'>$ 1.949.900<span></span></p>
    </div>
</div>
    
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Auriculares5.php'><img src='IMG_PROD/img_Auricular5.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Auriculares5.php'>Audífonos inalámbricos JBL </a></h3>
          
                <p class='price'>$ 185.900<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Laptop8.php'><img src='IMG_PROD/img_Laptop8.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                    
            </div>

        <h3><a href='PROD/Prod_Laptop8.php'>Portátil Gamer Acer</a></h3>
          
                <p class='price'>$ 2.020.553<span></span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Smartphone8.php'><img src='IMG_PROD/img_Smarftphone8.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Smartphone8.php'>iPhone 7 32 GB plata</a></h3>
          
                <p class='price'>$ 1.789.000<span></span></p>
    </div>
</div>
</div>
<div class='container-products'>
<!-------------------------------------------------------------------------------------------------------------------------->
            <div class='card-product'>
                <div class='container-img'>
                <a href='PROD/Prod_Ordenadores7.php'><img src='IMG_PROD//img_Ordenador7.png'/></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='PROD/Prod_Ordenadores7.php'>Torre Cpu Intel Celeron</a></h3>
                    
                        <p class='price'>
                        $ 1.450.000<span></span></p>
            </div>
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->    
            <div class='card-product'>
                <div class='container-img'>
                <a href='PROD/Prod_laptop2.php'><img src='IMG_PROD/img_Smarftphone4.png' /></a> 

                    </div>
                        <div class='content-card-product'>
                            <div class='stars'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-regular fa-star'></i>
                    </div>
    
                <h3><a href='PROD/Prod_Smartphone4.php'>Smartphone Tecno Pop</a></h3>
                    
                        <p class='price'>$ 315.499<span></span></p>
            </div>
        </div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Auriculares6.php'><img src='IMG_PROD/img_Auricular6.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
                        <i class='fa-regular fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Auriculares6.php'>Udífonos in-ear gamer</a></h3>
          
                <p class='price'>$ 76.282<span>$60.200</span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Monitores8.php'><img src='IMG_PROD/img_Pantalla8.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Monitores8.php'>Monitor Gamer LG 27 Ultragear </a></h3>
          
                <p class='price'>$ 1.117.719<span>$1.100.600</span></p>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------------------->
    <div class='card-product'>
        <div class='container-img'>
        <a href='PROD/Prod_Auriculares7.php'><img src='IMG_PROD/img_Auricular7.png' /></a> 

            </div>
                <div class='content-card-product'>
                    <div class='stars'>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-solid fa-star'></i>
                        <i class='fa-regular fa-star'></i>
            </div>

        <h3><a href='PROD/Prod_Auriculares7.php'>Udífonos in-ear gamer inalámbricos</a></h3>
          
                <p class='price'>$ 76.282<span></span></p>
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
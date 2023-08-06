<!--LINKIAMOS LAS HOJAS DE ESTILO-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="main.css">

<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
<script src="slider.js"></script>

<?php
Echo("

<div class='scrol'>
    <section class='slidersec'>

        <div class='container-slider'>
            <div class='slider' id='slider'>

                <div class='slider__section'><img src='img_monitor.png' class='slider__img'></div>
                <div class='slider__section'><img src='img_mesaelectronica.png' class='slider__img'></div>
                <div class='slider__section'><img src='img_audifonos.jpg' class='slider__img'></div>
                <div class='slider__section'><img src='img_productos_tecnologicos.jpg' class='slider__img'></div>
                <div class='slider__section'><img src='img_martin.png' class='slider__img'></div>      
        </div>

            <div class='slider__btn slider__btn--right' id='btn-right'>&#62;</div>
            <div class='slider__btn slider__btn--left' id='btn-left'>&#60;</div>
    </div>
</section>




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

    <div class='container-options'>
        <span class='active'>Destacados</span>
        <span>Más recientes</span>
        <span>Mejores vendidos</span>
    </div>

    <div class='container-products'>


<div class='card-product'>
<div class='container-img'>
<a href='./Productos/individuales/vistaProducto.html'><img src='img_audifonos.jpg' /></a> 
<span class='discount'>-13%</span>

<div class='button-group'>

    <span><i class='fa-regular fa-eye'></i></span>
    <span><i class='fa-regular fa-heart'></i></span>
    <span><i class='fa-solid fa-code-compare'></i></span>

</div>

</div>
<div class='content-card-product'>
<div class='stars'>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-regular fa-star'></i>
</div>
<h3>Elemento #</h3>
<span class='add-cart'>
    <i class='fa-solid fa-basket-shopping'></i>
</span>
<p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>

<div class='card-product'>
<div class='container-img'>
<img src='img_audifonos.jpg'/>
<span class='discount'>-13%</span>

<div class='button-group'>

    <span><i class='fa-regular fa-eye'></i></span>
    <span><i class='fa-regular fa-heart'></i></span>
    <span><i class='fa-solid fa-code-compare'></i></span>

</div>
</div>
<div class='content-card-product'>
<div class='stars'>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-regular fa-star'></i>
</div>
<h3>Elemento #</h3>
<span class='add-cart'>
    <i class='fa-solid fa-basket-shopping'></i>
</span>
<p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>

<div class='card-product'>
<div class='container-img'>
<img src='img_audifonos.jpg'/>
<span class='discount'>-13%</span>
<div class='button-group'>

    <span><i class='fa-regular fa-eye'></i></span>
    <span><i class='fa-regular fa-heart'></i></span>
    <span><i class='fa-solid fa-code-compare'></i></span>

</div>

</div>
<div class='content-card-product'>
<div class='stars'>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-regular fa-star'></i>
</div>
<h3>Elemento #</h3>
<span class='add-cart'>
    <i class='fa-solid fa-basket-shopping'></i>
</span>
<p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>


<div class='card-product'>
<div class='container-img'>
<img src='img_audifonos.jpg' />
<span class='discount'>-13%</span>

<div class='button-group'>

    <span><i class='fa-regular fa-eye'></i></span>
    <span><i class='fa-regular fa-heart'></i></span>
    <span><i class='fa-solid fa-code-compare'></i></span>

</div>

</div>
<div class='content-card-product'>
<div class='stars'>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-solid fa-star'></i>
    <i class='fa-regular fa-star'></i>
</div>
<h3>Elemento #</h3>
<span class='add-cart'>
    <i class='fa-solid fa-basket-shopping'></i>
</span>
<p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>
</div>

<section class='gallery'>
<img src='img_alas.jpg' alt='Gallery Img1'class='gallery-img-1'/>
<img src='img_anas.jpg'alt='Gallery Img2'class='gallery-img-2'/>
<img src='img_daniel.jpg'alt='Gallery Img3'class='gallery-img-3'/>
<img src='img_domenico.jpg'alt='Gallery Img4'class='gallery-img-4'/>
<img src='img_martin.png'alt='Gallery Img5'class='gallery-img-5'/>
</section>

<div class='container-products'>

<div class='card-product'>
<div class='container-img'>
    <img src='img_audifonos.jpg'/>
    <span class='discount'>-13%</span>
<div class='button-group'>
    
        <span><i class='fa-regular fa-eye'></i></span>
        <span><i class='fa-regular fa-heart'></i></span>
        <span><i class='fa-solid fa-code-compare'></i></span>
    
    </div>

</div>
<div class='content-card-product'>
    <div class='stars'>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-regular fa-star'></i>
    </div>
    <h3>Elemento #</h3>
    <span class='add-cart'>
        <i class='fa-solid fa-basket-shopping'></i>
    </span>
    <p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>

<div class='card-product'>
<div class='container-img'>
    <img src='img_audifonos.jpg'/>
    <span class='discount'>-13%</span>
<div class='button-group'>
    
        <span><i class='fa-regular fa-eye'></i></span>
        <span><i class='fa-regular fa-heart'></i></span>
        <span><i class='fa-solid fa-code-compare'></i></span>
    
    </div>

</div>
<div class='content-card-product'>
    <div class='stars'>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-regular fa-star'></i>
    </div>
    <h3>Elemento #</h3>
    <span class='add-cart'>
        <i class='fa-solid fa-basket-shopping'></i>
    </span>
    <p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>

<div class='card-product'>
<div class='container-img'>
    <img src='img_audifonos.jpg'/>
    <span class='discount'>-13%</span>
<div class='button-group'>
    
        <span><i class='fa-regular fa-eye'></i></span>
        <span><i class='fa-regular fa-heart'></i></span>
        <span><i class='fa-solid fa-code-compare'></i></span>
    
    </div>

</div>
<div class='content-card-product'>
    <div class='stars'>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-regular fa-star'></i>
    </div>
    <h3>Elemento #</h3>
    <span class='add-cart'>
        <i class='fa-solid fa-basket-shopping'></i>
    </span>
    <p class='price'>$4.60 <span>$5.30</span></p>
</div>
</div>

<div class='card-product'>
<div class='container-img'>
    <img src='img_audifonos.jpg'/>
    <span class='discount'>-13%</span>
<div class='button-group'>
    
        <span><i class='fa-regular fa-eye'></i></span>
        <span><i class='fa-regular fa-heart'></i></span>
        <span><i class='fa-solid fa-code-compare'></i></span>
    
    </div>

</div>
<div class='content-card-product'>
    <div class='stars'>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-solid fa-star'></i>
        <i class='fa-regular fa-star'></i>
    </div>
    <h3>Elemento #</h3>
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
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!--linkiamos metadatos-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Linkiamos estilos para la pagina-->
    <link rel="stylesheet" href="main.css">

    <!--Titulo de la página-->
    <title>laptop uno</title>

</head>

<body>
<!--
    cambiamos de las clases
    header =    prod
-->

<main class="main-container">
  <header class="prod">
      
    <div class="prod__navigation">
      <img class="prod__menu" src="icon-menu.svg" alt="Menú">
      <a href="index.php" class="prod__menu--logo">BlackLabel</a>
      <!--Declaramos un navbar-->
      <nav class="navbar">
        <ul class="navbar__items">
          <li><a href="index.php" class="navbar__link">Hogar </a></li>
          <li><a href="Cpa_mid-productos.php" class="navbar__link">productos </a></li>
          <li><a href="#" class="navbar__link">Elemento # </a></li>
          <li><a href="#" class="navbar__link">Elemento # </a></li>
          <li><a href="#" class="navbar__link">Elemento # </a></li>
        </ul>
      </nav>
    </div>
      
      <!--Inicio modal navbar-->
      <div class="modal-navbar__background">
        <nav class="modal-navbar">
          <img class="modal-navbar__close-icon" src="icon-close.svg" alt="cerrar menu "><!--imagen de cierre-->
          <ul class="modal-navbar__items">
            <li><a href="index.php" class="modal-navbar__link">Hogar</a></li>
            <li><a href="Cpa_mid-productos.php" class="modal-navbar__link">Productos</a></li>
            <li><a href="#" class="modal-navbar__link">Women</a></li>
            <li><a href="#" class="modal-navbar__link">About</a></li>
            <li><a href="#" class="modal-navbar__link">Contact</a></li>
          </ul>
        </nav>
      </div>
      <!--final modal navbar-->

      <!--Iconos de carrito y el avatar del usuario-->
      <div class="prod__cart-avatar">
       
        <!--Icono del carrito con la notificación-->
        <div class="prod__cart">
          <div class="prod__cart--notification">0</div>
          <img src="icon-cart copy.svg" alt="Icono del carrito de compras"/>
        </div>
        <!--Icono del avatar del usuario-->
        <img class="prod__avatar" src="icono-avatar.png" alt="Icono del avatar del usuario"/>
      
      </div>
  </header>


<!--Iniciamos el contenido de la página principal-->
<section class="content">
  <!-------------------------------------------------------------Articulo de la galeria del producto------------------------------------------------------------------------->
  <article class="gallery">
  <!---- contenedor de la imagen-->

    <div class="gallery__image-container"><!--botones de izquierda a derecha-->
      <img src="icon-previous.svg" alt="previus" class="gallery__previus"><!--icono de izquierda o anterior-->
      <img src="icon-next.svg" alt="next" class="gallery__next"><!--icono de derecha o siguiente-->  
    </div>
  
  <!--Imagnes de miniaturas del producto-->
    <div class="gallery__thumnails">
      <img id="1" class="gallery__thumnail" src="image-product-1-thumbnail.jpg" alt="Miniatura">
      <img id="2" class="gallery__thumnail" src="imagenes/image-product-2-thumbnail.jpg" alt="Miniatura">
      <img id="3" class="gallery__thumnail" src="imagenes/image-product-3-thumbnail.jpg" alt="Miniatura">
      <img id="4" class="gallery__thumnail" src="imagenes/image-product-4-thumbnail.jpg" alt="Miniatura">
    </div>
  </article>

  <!-------------------------------------------------------------Articulo de la descricción del producto------------------------------------------------------------------------->
<article class="details">
  <!--titulos del  producto-->
  <h2 class="details__company">BlackLabel</h2>
  <h2 class="details__title">Fall Limited Edition Sneakers</h2>
  <!--descicción del producto-->
  <p class="details__description">
      These ofile sneakers are your perfect casual wear companion. Featuring a 
      durabler outer sole, they’ll withstand everything the weather can offer.
  <!--------------------------------------------------------Detalles de los precios-->
  <div class="details__prices">
    <!--precio con descuento-->
    <p class="details__now">$125.00
      <span class="details__discount">50%</span>
    </p>
    <!--precio sin descuento-->
    <p class="details__before">$ 250.000</p>
  </div>
<!-----------------------------------------------------botones de agregar al carrito-->
<div class="details__product-quantity">
  <!--Añadir o eliminar-->
  <div class="input">
    <!--icono de quitar-->
    <img   class="input__minus" src="icon-minus.svg" alt="eliminar">
    <!--Número de elementos en el carrito-->
    <input type="text" class="input__number" value="0">
    <!--icono de agregar-->
    <img   class="input__plus" src="icon-plus.svg" alt="Agragar">
  </div>
  <button class="details__button"><img src="icon-cart.svg"> Add to cart</button>
</div>
</article>
</section>

<!--Inicio cart modal-->
<div class="cart-modal">
  <p class="cart-modal__title">Cart</p>
  <div class="cart-modal__chekout-container">
    <!--detalles del producto-->
    <div class="cart-modal__details-container">
      <img class="cart-modal__image" src="../../imagenes/image-product-1-thumbnail.jpg" alt="producto">
      <!--descricción y precio-->
      <div>
        <p class="cart-modal__product">Autumn Limited Edition...</p><!--descricción -->
        <p class="cart-modal__price">$ 125.00 x3 <span>$ 375.00</span></p><!--precio -->
      </div>
      <!--Imagen de canasto de basura para eliminar-->
      <img class="cart-modal__delete" src="icon-delete.svg" alt="eliminar">
      </div>
        <button class="cart-modal__chekount">Chekout</button>
      </div>
</div>
<!--Fin cart modal-->

<!--inicio gallery modal-->
  <!-------------------------------------------------------------Articulo de la galeria del producto------------------------------------------------------------------------->
  <div class="modal-gallery__background">
    <article class="gallery">
      <div class="modal-gallery__close-container">
        <img class="modal-gallery__close" src="icon-close.svg" alt="icono de cerrar">
      </div>
      <!---- contenedor de la imagen-->
    
        <div class="modal-gallery__image-container"><!--botones de izquierda a derecha-->
          <img src="icon-previous.svg" alt="previus" class="modal-gallery__previus"><!--icono de izquierda o anterior-->
          <img src="icon-next.svg" alt="next" class="modal-gallery__next"><!--icono de derecha o siguiente-->
        </div>
    
      <!--Imagnes de miniaturas del producto-->
        <div class="modal-gallery__thumnails">
          <img id="m1" class="modal-gallery__thumnail" src="../../imagenes/image-product-1-thumbnail.jpg" alt="Miniatura">
          <img id="m2" class="modal-gallery__thumnail" src="../../imagenes/image-product-2-thumbnail.jpg" alt="Miniatura">
          <img id="m3" class="modal-gallery__thumnail" src="../../imagenes/image-product-3-thumbnail.jpg" alt="Miniatura">
          <img id="m4" class="modal-gallery__thumnail" src="../../imagenes/image-product-4-thumbnail.jpg" alt="Miniatura">
        </div>
      </article>
  </div>
<!--fin gallery modal-->
</main>
</body>
</html>
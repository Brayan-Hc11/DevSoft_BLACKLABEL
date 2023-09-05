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
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Smartphones">Smartphones</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Tabletas">Tabletas</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Laptops">Laptops</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Ordenadores">Ordenadores</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Smartwatches">Smartwatches</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Auriculares">Auriculares</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Altavoces">Altavoces</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Camaras">Camaras</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Consolas">Consolas</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Monitores">Monitores</a>
            <a href="#" class="wrap__store-wrapper--category_list--Item" category="Televisores">Televisores</a>
        </div>

        <section class="wrap__store-wrapper--products-list">
<!---------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------PRODUCTOS  SMARFTPHONES----------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone1.png" alt="">
                <a href="Prod_Smartphone1.php">Xiaomi Redmi 9A </a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone2.png" alt="">
                <a href="Prod_Smartphone2.php">  Xiaomi 12 </a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="./productos/img_Smarftphone3.png" alt="">
                <a href="Prod_Smartphone3.php">Umidigi A11 Pro Max</a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone4.png" alt="">
                <a href="Prod_Smartphone4.php">Smartphone Tecno Pop  </a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone5.png" alt="">
                <a href="Prod_Smartphone5.php">Doogee S98 </a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone6.png" alt="">
                <a href="Prod_Smartphone6.php">Umidigi A11s</a>
            </div>
            
            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone7.png" alt="">
                <a href="Prod_Smartphone7.php">Xiaomi Redmi Note 10</a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Smartphones">
                <img src="productos/img_Smarftphone8.png" alt="">
                <a href="Prod_Smartphone8.php">iPhone 7 32 GB plata</a>
            </div>
<!---------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------PRODUCTOS  TABLETAS--------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------->
            <div class="wrap__store-wrapper--products-list--item" category="Tabletas">
                <img src="productos/img_Tableta1.png" alt="">
                <a href="Prod_Tableta1.php">Tablet Samsung Galaxy</a>
            </div>

            <div class="wrap__store-wrapper--products-list--item" category="Audifonos">
                <img src="./productos/img_audifonos2.png" alt="">
                <a href="Prod_Tableta2.php">audifono</a>
            </div>
        </section>
   
    </div>
    <h1></h1>
</div>
</div>
</body>
<?php include("Cpa_fin-productos--footer.php")?>
</html>

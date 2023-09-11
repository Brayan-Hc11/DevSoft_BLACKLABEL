<!--Linkiamos la hoja de estilos-->
<link rel="stylesheet" href="main.css">

<!--Linkiamos la biblioteca de iconos-->
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<?php
#inciamos clase y metodo
class visBlogHeader{
    public function vistaBlogHeader(){
#iniciamos contenido del header
echo("
    <body class='Blog'>
    <header class='Blog__Header--Blog'>
        
        <div class='Blog__Menu contenedor'>
            <a href='index.php' class='Blog__Menu--Logo'><span class='material-symbols-outlined'>sell</span>BLACKLABEL</a>
            <input type='checkbox' id='Blog__Menu--menu'/>
            <label for='Blog__Menu--menu'>
                <img src='img_grafico-barras-min.png' alt='imagen' class='Blog__Menu--icono'>
            </label>

            <nav class='Blog__Menu--Navbar'
                <ul>
                    <li><a href='index.php'>Inicio</a></li>
                
                    <li><a href='Cpa_mid-productos.php'>Productos</a></li>
                    <li><a href='for_cliente.php'>Contacto</a></li>
                </ul>
            </nav>
        </div>
  
        <div class='Header__Content contenedor'>
            <div class='Header__Content--Text'>
                <h1>BLACKLABEL</h1>

                <p>
                ¡Bienvenidos a BlackLabel, tu destino definitivo para la última y más emocionante tecnología! 
                    En nuestra tienda virtual, nos enorgullece ofrecerte una amplia gama de productos de alta 
                        tecnología que están diseñados para elevar tu experiencia tecnológica a un nivel completamente nuevo.
                </p>
                <br/>
                <p>
                Desde los dispositivos más innovadores hasta los accesorios más elegantes, en BlackLabel 
                    nos esforzamos por proporcionarte productos que no solo sean funcionales, sino que también 
                        reflejen tu estilo de vida moderno y sofisticado. 
                </p>


            </div>
        </div>
    </header>
    </body>
        ");
    }
}
#finalizamos la clase y el metodo 
$final = new visBlogHeader();
    $final ->vistaBlogHeader();

?>
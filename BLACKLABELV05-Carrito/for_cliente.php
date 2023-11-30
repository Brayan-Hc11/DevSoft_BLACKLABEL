    <!--Linkimos las hojas de estilo y  uso de js-->
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
    <!--Linkimos las hojas de estilo y  uso de js-->
<link rel="stylesheet" href="main.css">
    <!--Titulo de la página-->
<title>Formulario de contacto</title>
<link rel="Icon" href="logo.ico">

<?php
class iniForCliente{
    public function visForcliente(){
        #inciamos la capa media 
        echo("
        <body>
<div class='container__formulario--login'>
    
<div class='contacto'>
        <h1 class='contacto__titulo'>Formulario de contacto </h1>
            <div class='contacto__contenido'>
                <div class='info '>
                    
                    <div class='col'>
                        <i class='icono fas fa-map-marker-alt'></i>
                        <p>Av. 26 de julio Nro. 8   ciudad - pais</p>
                    </div>
                   
                    <div class='col'>
                        <i class='icono fas fa-envelope'></i>
                        <p>consulta@correo.com</p>
                    </div>

                    <div class='col'>
                        <i class='icono fas fa-phone'></i>
                        <p>(01) 6262-2222 <br/> (01) 3343-543</p>
                    </div>

                    <div class='redes-s'>
                        <a href='#'><i class='fab fa-facebook-f'></i></a>
                        <a href='#'><i class='fa-brands fa-twitter'></i></a>
                        <a href='#'><i class='fab fa-instagram'></i></a>
                        <a href='index.php'><i class='fa-solid fa-house'></i></a>
                    </div>

                </div>
            
                <form action='' method='GET' class='cliente'>
                    <input type='text' name='nombre' placeholder='Nombre' id='nombre'>
                    <input type='text' name='correo' placeholder='Correo electronico' id='correo'>
                    <input type='text' name='asunto' placeholder='Asunto' id='asunto'>
                    <textarea name='mensaje' id='mensaje' placeholder='mensaje'></textarea>
                   
                    <button type='button'>Enviar</button>
                    <button type='button'>Atras</button>

                </form>
            </div>
</div>
</body>
        ");
    }
}
#finalizamos la clase y el metodo 
$final = new iniForCliente();
    $final ->visForcliente();

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Linkiamos hojas de estilos-->        
    <link rel="stylesheet" href="CSS/Formulario.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<?php

class usuario
{
    public function acceder()
    {


        echo '
        <!DOCTYPE html>
        <html lang="es">
            <head>

                <!--titulo de la pagina-->
                    <title>Registrate o inicio sesión</title>
            </head>

            <body>
                <div class="container">
                    <div class="form-box">
                        <div class="button-box">
                            <!--Botones de inicio de sesión y registrar-->
                            <div >
                                <button type="button" class="toggle-btn" ><a href="acceder.php">Inciar sesión</a></button>
                                <button type="button" class="toggle-btn1"><a href="registrar.php">Registrate</a></button>
                            </div>
                            <!--Iconos de redes sociale-->
                            <div class="redes-sociales">
                                <a href="blackLabel.php"><i class="fa-solid fa-tag" style="color: black;"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook" style="color: #0059ff;"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter" style="color: #00aeff;"></i></a>
                                <a href="#"><i class="fa-brands fa-google" style="color: #ff0000;"></i></a>
                            </div>
                            <!--Declaramos un formulario de inico de sesión-->
                            <form  id="Login" class="input-group">
                                <input type="text" class="input-field" placeholder="Nombre de usuario">
                                <input type="password" class="input-field" placeholder="Contraseña">
                                <input type="checkbox" class="check-box"><span>Recordar contraseña</span>
                                <button type="submit" class="submit-btn">Acceder</button>
                            </form>
                        </div>
                    </div>
                </div>
                <script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
            </body>
        </html>';

    }
}

$final = new usuario();
$final->acceder();

?>
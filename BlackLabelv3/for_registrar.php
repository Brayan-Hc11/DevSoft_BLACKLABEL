<!--Linkiamos hojas de estilos-->        
<link rel="stylesheet" href="main.css" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<title>Registrate </title>

<?php
class forRegistrate{
    public function visForRegistrate(){
        echo("
<body>
<div class='container__formulario--login'>
    <div class='form-boxregister'>
        <div class='button-box'>
            <!--botones de inicio de seción y registrar-->
            <div>
                <button type='button' class='toggle-btn1' onclick='Login()'><a href='for_login.php'>Inciar sesión</a></button>
                
            </div>
            <!--iconos de redes sociales-->
            <div class='redes-sociales'>
                <a href='index.php'><i class='fa-solid fa-tag' style='color: black;'></i></a>
                <a href='#'><i class='fa-brands fa-facebook' style='color: #0059ff;'></i></a>
                <a href='#'><i class='fa-brands fa-twitter' style='color: #00aeff;'></i></a>
                <a href='#'><i class='fa-brands fa-google' style='color: #ff0000;'></i></a>
            </div>
            <!--declaramos un formulario de registro de datos-->
            <form id='Registrar' class='input-group'>
                <input type='text' class='input-field' placeholder='Nombres'>
                <input type='text' class='input-field' placeholder='Apellidos'>
                <input type='number' class='input-field' placeholder='Documento'>
                <input type='email' class='input-field' placeholder='Correo electronico'>
                <input type='password' class='input-field' placeholder='Contraseña'>
                <input type='checkbox' class='check-box'><span class='contraseña'>Acepta terminos  y condiciones.</span>
                <button type='submit' class='submit-btn'>Registrar</button>
            </form>
        </div>
    </div>
</div>
</body>
");

    }
}
#Finalizamos la clase y el metodo 
$final = new forRegistrate();
    $final ->visForRegistrate();

    
?>
 <!--Linkiamos hojas de estilos-->        
<link rel="stylesheet" href="main.css" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<title>Inicia sesión</title>

<?php
Class forLogin{
    public function visForLogin(){
        echo("
<body>
<div class='container__formulario--login'>
    <div class='form-box'>
        <div class='button-box'>

            <div >
                <button type='button' class='toggle-btn1'><a href='for_registrar.php'>Registrate</a></button>
            </div>
            
            <div class='redes-sociales'>
                <a href='index.php'><i class='fa-solid fa-tag' style='color: black;'></i></a>
                <a href='#'><i class='fa-brands fa-facebook' style='color: #0059ff;'></i></a>
                <a href='#'><i class='fa-brands fa-twitter' style='color: #00aeff;'></i></a>
                <a href='#'><i class='fa-brands fa-google' style='color: #ff0000;'></i></a>
            </div>
           
            <form  id='Login' class='input-group'>
                <input type='text' class='input-field' placeholder='Correo electronico'>
                <input type='password' class='input-field' placeholder='Contraseña'>
                <input type='checkbox' class='check-box'><span class='contraseña'>Recordar contraseña</span>
                <button type='submit' class='submit-btn'>Acceder</button>
            </form>
        </div>
    </div>
</div>

</body>
");
    }
}
#Finalizamos la clase y el metodo
$final = new forLogin();
    $final ->visForLogin();
?>
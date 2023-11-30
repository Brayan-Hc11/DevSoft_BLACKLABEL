 <!--Linkiamos hojas de estilos-->        

<link rel="stylesheet" href="CSS/Formularios.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<title>Inicia sesión</title>
<link rel="Icon" href="logo.ico">

<body>
    <form  id='Login' class='input-group' method='post' action='neg_ingresar.php'>
        
    <h2>¡Ingresa ahora !</h2>
    <p> No tienes cuenta crea una <a href="for_registrar.php">¡Aquí!</a></p>

        <div class="input-wrapper">
            <input type='text' class='input-field' placeholder='Correo electronico' required name='correo'>
            <i class="fa-solid fa-envelope Formulario__Icono"></i>
        </div>

        <div class="input-wrapper">
            <input type='password' class='input-field' placeholder='Contraseña' required name='contrasena'>
            <i class="fa-solid fa-key Formulario__Icono"></i>
        </div>

        <input class='btn' type='submit'name='registrar' value='Ingresar' >    
    </form>

    
</body>
<!--Linkiamos hojas de estilos-->        
<link rel="stylesheet" href="CSS/Formularios.css" >
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
<title>Registrate </title>
<link rel="Icon" href="logo.ico">
<body>
<form action='neg_registrar.php' method='post'>
    <h2>¡Resgistrate ahora !</h2>
    <p>Inicia tu  secion <a href="for_login.php">¡Aquí!</a></p>

    <div class="input-wrapper">
    <input type='text' class='' placeholder='Nombres'  required name='nombre_usuario'>
        <i class="fa-solid fa-user Formulario__Icono"></i>
    </div>

    <div class="input-wrapper">
    <input type='text' class='' placeholder='Apellidos' required  name='apellido_usuario'>
        <i class="fa-solid fa-user-pen Formulario__Icono"></i>
    </div>

    <div class="input-wrapper">
        <input type='number' class='input-field' placeholder='Documento' required  name='documento'>
        <i class="fa-solid fa-id-card Formulario__Icono"'></i>
    </div>

    <div class="input-wrapper">
        <input type='email' class='' placeholder='Correo electronico' required  name='correo'>
        <i class="fa-solid fa-at Formulario__Icono"'></i>
    </div>

    <div class="input-wrapper">
        <input type='password' class='input-field' placeholder='Contraseña' required  name='contraseña'>
        <i class="fa-solid fa-lock Formulario__Icono"'></i>
    </div>

    <input class='btn' type='submit'name='registrar' value='Registrar' >    
</form>
</body>
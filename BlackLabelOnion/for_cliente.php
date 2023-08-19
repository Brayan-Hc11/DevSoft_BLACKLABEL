<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="_for--cliente.scss">

<title>Servicio al cliente</title>

<?php
class iniForCliente{
    public function visForcliente(){
        echo("

        <body>
            <header>
                <div class='container-hero'>
                    <div class='container hero'>
                        <div class='customer-support'>
                
                        </div>
        
                        <div class='container-logo'>
                            <i class='fa-solid fa-tag'></i>
                            <h1 class='logo'><a href='index.php'>BLacklabel</a></h1>
                        </div>
        
                        <div class='container-user'>
                            <a href='#'><i class='fa-solid fa-list'></i></a>
                            <a href='for_login.php'><i class='fa-solid fa-user'></i></a>
                        </div>
                    </div>
                </div>
        
            </header>
            <form class='form'>
                <h2>Contactanos</h2>
                <p type='Name'><input placeholder='Escribe tu nombre completo aquí'></input></p>
                <p type='Email'><input placeholder='Escribe tu correo aquí'></input></p>
                <p type='Message'><input placeholder='Como podemos ayudarte'></input></p>
                <button>Enviar Mensaje</button>
                <div class='div-form'>
                    <span class='fa fa-phone'>123-456-7890</span>
                    <span class='fa fa-envelope-o'>Email@compañia.com</span>
                </div>  
            </form>
        </body>
        ");
    }
}
#finalizamos la clase y el metodo 
$final = new iniForCliente();
    $final ->visForcliente();

?>
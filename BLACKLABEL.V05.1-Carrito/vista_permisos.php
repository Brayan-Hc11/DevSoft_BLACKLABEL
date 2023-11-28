<title>Selecciona tu Rol</title>
<link rel="Icon" href="logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing:border-box ;
    font-family: sans-serif;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url("img_fondo_blacklabel-min.jpg");
    background-image: cover ;
    background-position: center;
    background-repeat: no-repeat;
}
a{
    text-decoration: none;
    color: black;
}

/*Estilos iniciales */
.Roles{
padding: 2%;
}
.Roles:hover{
    cursor: pointer;
    transform: translateY(-10px);
    transition: all 1s ease;
}
.card{
    position: relative;
    width: 250px;
    height: 350px;
    border-radius: 10px;
    box-shadow: 2px 3px 5px rgba(73, 69, 52, 0.4);
    background-color: white;
}
.card .content{
    position: relative;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    text-align: center;
    padding: 20px;
    background:white;
}
.card .content .img img{
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
}
.card .content .fondo{
    position: absolute;
    width: 350px;
    height: 200px;
    background: linear-gradient(to right, #085078, #0c7ab6);
    transform: rotate(-35deg);
    top: -50px;
    left: -100px;
}
.card .content h4{
    text-transform: uppercase;
    font-size: 50px;
    color: #0c7ab6;
    margin-top: 1rem;
    margin-bottom: -5px;
}
.card .content h6{
    font-size: 30px;
    margin-bottom: 15px;
}
.card .content p{
    font-size: 15px;
}
/* Estilos en el titulo princpal*/
.Titulo__Principal{
    border: 2px solid white;
    color:white;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    display: flex;
    top: -300px;
    left: 470px;
    bottom: 0;
    right: 0;
    background-color: #0c7ab6;
}
</style>

<?php
session_start();
class usuario{
    public function ver(){
        include("conexion.php");
            $documento = $_SESSION["documento"];
            $sql = "SELECT * FROM permisos WHERE documento = '$documento'";

            Echo('
                
            ');
    
        if (!$result = $db->query($sql)){

            die ('Hay un error en la consulta o datos no encontrados [' . $db->error . ']');

        }while ($row = $result->fetch_assoc()){

            $rrol = stripslashes($row["id_rol"]);
            
            if ($rrol == "1"){
                //echo "<a href= 'vista_administrador.php'>vista administrador <a/><br/>";
                Echo(" 
                <a class='Roles'href= 'vista_administrador.php'> 
                <div class='card'>
                    
                    <div class='content'>
                        <span class='fondo'></span>
                        
                        <div class='img'>
                            <img src='IMG/img_IconoAdministrador.jpg'>
                        </div>

                        <h4>Rol</h4>
                        <h6>Administrador</h6>
                        <p>Puede ingresar como administrador de sistema.</p>         
                    </div>
                </div>
                </a>
                ");

                $_SESSION["admin"] = "1";
            }
    
            if ($rrol == "2"){
                //echo "<br/><a href= 'vista_usuario.php'>vista usuario <a/><br/>";
                Echo(" 
                <a class='Roles' href= 'USUARIO/Usuario__Productos.php'> 
                <div class='card'>
                    <div class='content'>
                        <span class='fondo'></span>
                        
                        <div class='img'>
                            <img src='IMG/img_IconoUsuarios.jpg'>
                        </div>

                        <h4>Rol</h4>
                        <h6>Usuario</h6>
                        <p>Puede ingresar como usuario de sistema.</p>         
                    </div>
                </div>
                </a>
                ");
                $_SESSION["usuario"] = "1";
            }
        }
    }
}
$final = new usuario();
    $final->ver();
?>

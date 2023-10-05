<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<style>


.title{

    font: caption;
    font-size: 25px;
    padding: 30px;
    text-align: center;
}

a{
    text-decoration: none;
    color: #000;
}

div{

    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    /*background-color: #F1F1F1;*/
    width: 150px;
    font: caption;
    border-radius: 15px;
    overflow: hidden;

}

div:before, div:after {

  content: "";
  z-index: -1;
  position: absolute;
  width: 50%;
  height: 100%;
  top: 0;
  left: -50%;
  background-color: #4741d7; /* color de fondo hover */
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;

}

div:after {

  left: 100%;

}

div:hover {

  color: #fff; /* color de fuente hover */

}

div:hover:before {

  left: 0;

}

div:hover:after {
    
  left: 50%;
}




.div-administrador{

    align-items:center;
    text-align:center;
    padding: 25px;
    margin-bottom: 30px;
    margin-top: 30px;
    position: relative;  
    top: 20%;      
    left: 45%;

}

.div-usuario{
    
    align-items:center;
    text-align:center;
    padding: 25px;
    margin-bottom: 30px;
    margin-top: 30px;
    position: relative;  
    top: 10%;      
    left: 45%;

}

.section-cerrar-sesion{

    align-items:center;
    text-align:center;
    padding: 15px;
    margin-bottom: 30px;
    margin-top: 30px;
    position: absolute;  
    top: 0%;      
    left: 90%;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    width: 125px;
    font: caption;
    border-radius: 15px;
    transition: background-color 1s linear;

}

.section-cerrar-sesion:hover{
   background-color: #3F51B5;
}




</style>

<?php

session_start();

class usuario{

    public function ver(){

        include("conexion.php");

            $documento = $_SESSION["documento"];
            $sql = "SELECT * FROM permisos WHERE documento = '$documento'";

            echo '<p class="title"> Seleccione su rol</p>';
    
        if (!$result = $db->query($sql)){

            die ('Hay un error en la consulta o datos no encontrados [' . $db->error . ']');

        }while ($row = $result->fetch_assoc()){

            $rrol = stripslashes($row["id_rol"]);
            
            if ($rrol == "1"){

                //echo "<a href= 'vista_administrador.php'>vista administrador <a/><br/>";

                echo '<div class="div-administrador">';
                echo '<a href= "vista_administrador.php"> <span class="material-symbols-outlined"> manage_accounts </span> Administrador <a/>';//span administrador
                echo '</div> ';

                $_SESSION["admin"] = "1";
            }
    
            if ($rrol == "2"){

                //echo "<br/><a href= 'vista_usuario.php'>vista usuario <a/><br/>";

                echo '<div class="div-usuario">';
                echo '<a href= "vista_usuario.php"> <span class="material-symbols-outlined"> person </span> Usuario <a/> <br/>';//span usuario
                echo '</div> ';

                $_SESSION["usuario"] = "1";
            }
            
        }

        

        echo "<br/><br/><br/>";

        echo '<section class="section-cerrar-sesion">';
        echo '<a href= "salir.php"> <span class="material-symbols-outlined"> logout </span> Cerrar sesion<a/>';// span cerrar sesion
        echo '</section>';



    }
}

$final = new usuario();
$final->ver();


?>
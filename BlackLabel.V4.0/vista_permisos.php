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
    background-color: #F1F1F1;
    width: 150px;

}


.div-administrador{

    align-items:center;
    text-align:center;
    padding: 25px;
    margin-bottom: 30px;
    margin-top: 30px;

}

.div-usuario{
    
    align-items:center;
    text-align:center;
    padding: 25px;
    margin-bottom: 30px;
    margin-top: 30px;

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

        

        echo '<a href= "salir.php"> <span class="material-symbols-outlined"> logout </span> Cerrar sesion<a/>';// span cerrar sesion
    }
}

$final = new usuario();
$final->ver();


?>
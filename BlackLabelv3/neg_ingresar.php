<?php

  session_start();

class usuario
{

    public function ingresar($correo,$contrasena)
    {

        include("conexion.php");

        $cont = "0";//creo un contador y lo inicializo en 0

        $sql = "SELECT * FROM usuarios WHERE correo='$correo'";//hago el select from desde la tabla con el documento

        if (!$result = $db->query($sql))
        {
            die('Hay un error corriendo en la consulta o los datos no se encontraron!!! [' . $db->error . ']');
        }

        while ($row = $result->fetch_assoc())
        {
            $ccontraseña = stripslashes($row["contraseña"]); //codigo que trae los campos de la tabla
            $ddocumento = stripslashes($row["documento"]); 
        }

        if (password_verify($contrasena, $ccontraseña))
        {
            $cont = "1";
        }

        if ($cont == "0")
        {

            echo "Usted no se encuentra registrado";

        }else
        {

            echo "Ha ingresado correctamente";
            $_SESSION["documento"]=$ddocumento;
            header("Location: vista_permisos.php");

        }
        
    }

}

$final = new usuario();
$final->ingresar($_POST["correo"],$_POST["contrasena"]);
?>
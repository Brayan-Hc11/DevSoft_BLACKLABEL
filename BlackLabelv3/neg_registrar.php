<?php
session_start();
class usuario {
    public function registrar($nombre_usuario,$apellido_usuario,$documento,$correo,$contraseña){
        include ('conexion.php');
        //Inicio auto-incremento por codigo
        $iid="0";//la variable id comienza en 0
        $sqlid = "SELECT * FROM usuarios";//selecciona todos los usuarios 
        if (!$resultid = $db->query($sqlid)){
                die ('Hay un error en la consulta o datos no encontrados [' . $db->error . ']');
            }while ($rowid = $resultid->fetch_assoc()){
                $iid = stripslashes($rowid["id_usuario"]);//cuenta todos los usuaios que hay sumandole 1
                $iid = $iid + 1;
            }
         //fin del autoincrement por codigo
    //inicio contador usuario
    $cont="0";//contador para los usuarios
    $sql = "SELECT * FROM usuarios WHERE documento='$documento'";//busca si el documento ingresado ya esta en la base de datos

    if (!$result = $db->query($sql)){
            die ('Hay un error en la consulta o datos no encontrados [' . $db->error . ']');
        }while ($row = $result->fetch_assoc()){
            $cont = $cont + 1;//si hay usuarios a la variable cont le suma 1
        }
//fin contador usuario
    //encripta contraseña con hash
    $password = password_hash($contraseña, PASSWORD_DEFAULT);

    //fin hash
        if ($cont == "0"){//si no se ha registrado hace 2 insert(1 a la tabla usuarios con los datos ingresados) y (otro a la tabla permisos con el documento y el 2 de usuario)
            mysqli_query($db,"INSERT INTO usuarios (id_usuario, documento, nombre_usuario, apellido_usuario, contraseña, correo, id_estado) VALUES ('$iid', '$documento','$nombre_usuario','$apellido_usuario','$password','$correo','1')") or die(mysqli_error($db)); 
            mysqli_query($db,"INSERT INTO permisos (id, documento, id_rol) VALUES ('NULL', '$documento','2')");
            echo "<p> Usted ha sido registrado correctamente </p> ";
            $_SESSION["documento"] = $documento;//activo la sesion con el documento
            header ("Location: vista_permisos.php");//mando al usuario a la vista de permisos
        }else {
            echo 'Usted ya ha sido registrado anteriormente';//no deja registrar si ya se ha registrado
            $_SESSION["documento"] = $documento;//activo la sesion con el documento
            header ("Location: for_login.php");//mando al usuario a login
        }
    }
}
$final = new usuario();
    $final->registrar($_POST["nombre_usuario"],$_POST["apellido_usuario"],$_POST["documento"],$_POST["correo"],$_POST["contraseña"]);
?>
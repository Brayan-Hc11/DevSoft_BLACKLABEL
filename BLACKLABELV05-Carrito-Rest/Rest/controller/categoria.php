<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $producto = new Producto();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        
        case "GetAll":
            $datos=$producto->get_producto();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$producto->get_producto_x_id($body["id_producto"]);
            echo json_encode("hola");
        break;

        case "Insert":
            $datos=$producto->insert_producto($body["nombre_producto"], $body["codigo_producto"]);
            echo json_encode("Insert correcto");
        break;

        case "Update":
            $datos=$producto->update_producto($body["id_producto"], $body
            ["codigo_producto"], $body["nombre_producto"], $body["id_categoria"], $body["documento_creador"], $body["precio_producto"], $body["id_estado"]);
            echo json_encode("Update correcto");
        break;

        case "Delete":
            $datos=$producto->delete_producto($body["id_producto"]);
            echo json_encode("Delete correcto");
        break;

        case "Eliminar":
            $datos=$producto->eliminar_producto($body["id_producto"]);
            echo json_encode("Eliminar correcto");
        break;
    }
?>
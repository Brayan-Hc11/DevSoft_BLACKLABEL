<?php
    class Producto extends Conectar{
        public function get_producto(){
            $conectar= parent::Conexion();
            parent::set_names();
                $sql = "SELECT * FROM productos WHERE id_estado=1";
                $sql = $conectar -> prepare($sql);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_producto_x_id($id_producto){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "SELECT * FROM productos WHERE id_estado=1 AND id_producto = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $id_producto);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_producto($nombre_producto, $codigo_producto){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "INSERT INTO productos (id_producto, codigo_producto, nombre_producto, id_categoria, documento_creador, precio_producto, id_estado) VALUES
                (?,NULL,?,?,?,?,'1')";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $nombre_producto);
                $sql -> bindParam(2, $codigo_producto);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_producto($id_producto, $codigo_producto, $nombre_producto, $id_categoria, $documento_creador, $precio_producto, $id_estado){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "UPDATE productos SET
                id_categoria = ?,
                precio_producto = ?
                WHERE
                id_producto = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $id_categoria);
                $sql -> bindParam(2, $precio_producto);
                $sql -> bindParam(3, $id_producto);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete_producto($id_producto){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "UPDATE productos SET
                id_estado = '2'
                WHERE
                id_producto = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $id_producto);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function eliminar_producto($id_producto){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "DELETE FROM  productos WHERE id_producto = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $id_producto);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
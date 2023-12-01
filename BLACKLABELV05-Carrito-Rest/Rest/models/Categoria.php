<?php
    class Categoria extends Conectar{
        public function get_categoria(){
            $conectar= parent::Conexion();
            parent::set_names();
                $sql = "SELECT * FROM categorias WHERE est=1";
                $sql = $conectar -> prepare($sql);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_categoria_x_id($cat_id){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "SELECT * FROM categorias WHERE est=1 AND cat_id = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $cat_id);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert_categoria($cat_nom, $cat_obs){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "INSERT INTO categorias (cat_id, cat_nom, cat_obs, est) VALUES
                (NULL,?,?,'1')";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $cat_nom);
                $sql -> bindParam(2, $cat_obs);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function update_categoria($cat_id, $cat_nom, $cat_obs, $est){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "UPDATE categorias SET
                cat_nom = ?,
                cat_obs = ?
                WHERE
                cat_id = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $cat_nom);
                $sql -> bindParam(2, $cat_obs);
                $sql -> bindParam(3, $cat_id);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function delete_categoria($cat_id){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "UPDATE categorias SET
                est = '0'
                WHERE
                cat_id = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $cat_id);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function eliminar_categoria($cat_id){
            $conectar = parent::Conexion();
            parent::set_names();
                $sql = "DELETE FROM  categorias WHERE cat_id = ?";
                $sql = $conectar -> prepare($sql);
                $sql -> bindParam(1, $cat_id);
                $sql -> execute();
            return $resultado = $sql -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
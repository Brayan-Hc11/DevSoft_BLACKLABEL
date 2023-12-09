<?php
include_once('vistasuperior.php');

// Verificar si se ha enviado el formulario de actualización
if(isset($_GET['actualizar'])) {
    include('conexion.php');

    $idp = $_GET['txtid'];
    $documento = $_GET['txtdocumento'];
    
    // Resto de tus campos...

    if ($documento != null && $nombre != null && $apellido != null && $correo != null && $id_estado != null) {
    
        // Evitar problemas de inyección SQL usando sentencias preparadas
        $sql2 = "UPDATE usuarios SET documento=?, nombre_usuario=?, apellido_usuario=?, correo=?, id_estado=? WHERE id_usuario=?";

        $stmt = mysqli_prepare($db, $sql2);

        mysqli_stmt_bind_param($stmt, 'ssssi', $documento, $nombre, $apellido, $correo, $id_estado, $idp);
        $resultado = mysqli_stmt_execute($stmt);

        // Verificar si la actualización fue exitosa
        if ($resultado) {
            echo "<script>alert('Se ha actualizado el usuario correctamente');</script>";
        } else {
            echo "<script>alert('Upps ha ocurrido un error al ejecutar la consulta: " . mysqli_error($db) . "');</script>";
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('¡Antes de continuar, verifica los campos!');</script>";
    }
}

?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">EDITAR USUARIOS</h2>
                    </div>
                </div>
            </div>
            <br>
            <div>
              <?php 
include('conexion.php');

// Ajusta la clave del array a 'id' en lugar de 'id_usuario'
$id = $_GET['id'];

// Utiliza una consulta preparada para mejorar la seguridad
$sql = "SELECT * FROM Usuarios WHERE id_usuario = ?";
$stmt = mysqli_prepare($db, $sql);

// Vincula el parámetro
mysqli_stmt_bind_param($stmt, 'i', $id);

// Ejecuta la consulta
mysqli_stmt_execute($stmt);

// Obtiene los resultados
$resultado = mysqli_stmt_get_result($stmt);

while ($fila = mysqli_fetch_assoc($resultado)) {  
    // Tu código para mostrar los datos
}
// Cierra la consulta preparada
mysqli_stmt_close($stmt);
?>

<div class="formulario">
                        <form action="" method="GET">

                            <input type="hidden" name="txtid" value="<?php echo $fila['id_usuario']?>">

                            <label for="">Documento usuario</label>
                            <input type="text" name="txtdocumento" required value="<?php echo $fila['documento']?>">
                            
                            <label for="">Nombre usuario</label>
                            <input type="text" name="txtnombre" required value="<?php echo $fila['nombre_usuario']?>">

                            <label for="">Apellido usuario</label>
                            <input type="text" name="txtapellido" required value="<?php echo $fila['apellido_usuario']?>">
                            
                            <label for="">Correo</label>
                            <input type="text" name="txtcorreo" required value="<?php echo $fila['correo']?>">

                            <label for="">Estado</label>
                            <input type="text" name="txtestado" required value="<?php echo $fila['id_estado']?>">

                            <label for=""></label>
                            <input type="submit" name="actualizar" value="actualizar un usuario">
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

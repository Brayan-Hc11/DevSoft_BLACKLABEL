<?php
include_once('vistasuperior.php');
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">AGREGAR PERMISOS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
    <?php
include('conexion.php');

$id_permiso = $_GET['txtidpermiso'] ?? null;
$documento = $_GET['txtdocumento'] ?? null;
$id_rol = $_GET['txtidrol'] ?? null;

// Verificar si el documento del creador existe en la tabla usuarios
$verificar_usuario = "SELECT * FROM usuarios WHERE documento = ?";
$stmt_verificar_usuario = mysqli_prepare($db, $verificar_usuario);
mysqli_stmt_bind_param($stmt_verificar_usuario, 's', $documento);
mysqli_stmt_execute($stmt_verificar_usuario);
$resultado_usuario = mysqli_stmt_get_result($stmt_verificar_usuario);

if (mysqli_num_rows($resultado_usuario) > 0 && $id_permiso != null && $documento != null && $id_rol != null) {
    // Evitar problemas de inyección SQL mediante sentencias preparadas
    $sql = 'INSERT INTO permisos(id, documento, id_rol) VALUES (?, ?, ?)';
    $stmt = mysqli_prepare($db, $sql);

    mysqli_stmt_bind_param($stmt, 'iss', $id_permiso, $documento, $id_rol);
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Se ha registrado un nuevo permiso en el sistema');</script>";
    } else {
        echo "<script>alert('Ha ocurrido un error al ejecutar la consulta: " . mysqli_error($db) . "');</script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('¡Antes de continuar, verifica los campos y asegúrate de que el documento exista en la tabla usuarios!');</script>";
}

mysqli_close($db);
?>

<div class="formulario">
    <form action="" method="GET">
        <label for="txtidpermiso">ID</label>
        <input type="number" name="txtidpermiso" required>
        
        <label for="txtdocumento">Documento</label>
        <input type="text" name="txtdocumento" required>

        <label for="txtidrol">ID Rol</label>
        <input type="number" name="txtidrol" required>
        
        <input type="submit" name="registrar" value="Registrar nuevo rol">
    </form>
</div>

<div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>TODOS LOS DERECHOS RESERVADOS</p>
                        <p>COPYRIGHT-©-2023-EMPRESA-DEVSOFT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- END PAGE CONTAINER-->
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
                        <h2 class="title-1">AGREGAR ROLES</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
<?php
include('conexion.php');

$Id_Rol = $_GET['txtidrol'] ?? null;
$Rol = $_GET['txtrol'] ?? null;

if ($Id_Rol != null && $Rol != null) {
    // Evita posibles problemas de inyección SQL usando sentencias preparadas
    $sql = 'INSERT INTO roles(id_rol, rol) VALUES (?, ?)';
    $stmt = mysqli_prepare($db, $sql);
    
    mysqli_stmt_bind_param($stmt, 'is', $Id_Rol, $Rol);
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Se ha registrado un nuevo rol en el sistema');</script>";
    } else {
        echo "<script>alert('Ha ocurrido un error al ejecutar la consulta: " . mysqli_error($db) . "');</script>";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('¡Antes de continuar, verifica los campos!');</script>";
}
mysqli_close($db);
?>

<div class="formulario">
    <form action="" method="GET">
        <label for="txtidrol">ID</label>
        <input type="number" name="txtidrol" required>
        
        <label for="txtrol">Rol</label>
        <input type="text" name="txtrol" required>
        
        <label for=""></label>
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
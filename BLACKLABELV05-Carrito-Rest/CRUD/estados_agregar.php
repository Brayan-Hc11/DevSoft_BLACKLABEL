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
                        <h2 class="title-1">AGREGAR ESTADOS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
<?php
include('conexion.php');

$Id_estado = $_GET['txtidestado'] ?? null;
$estado = $_GET['txtestado'] ?? null;

if ($Id_estado != null && $estado != null) {
    // Evita posibles problemas de inyección SQL usando sentencias preparadas
    $sql = 'INSERT INTO estados(id_estado, estado) VALUES (?, ?)';
    $stmt = mysqli_prepare($db, $sql);
    
    mysqli_stmt_bind_param($stmt, 'is', $Id_estado, $estado);
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Se ha registrado un nuevo estado en el sistema');</script>";
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
        <label for="txtidestado">ID</label>
        <input type="number" name="txtidestado" required>
        
        <label for="txtestado">Estado</label>
        <input type="text" name="txtestado" required>
        
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
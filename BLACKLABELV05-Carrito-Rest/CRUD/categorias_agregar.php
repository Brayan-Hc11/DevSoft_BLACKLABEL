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
                        <h2 class="title-1">AGREGAR CATEGORIAS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
    <?php
include('conexion.php');

$Id_categoria = $_GET['txtidcategoria'] ?? null;
$categoria = $_GET['txtcategoria'] ?? null;

if ($Id_categoria !== null && $categoria !== null) {
    // Evitar problemas de inyección SQL mediante sentencias preparadas
    $sql = 'INSERT INTO categorias(id_categoria, categoria) VALUES (?, ?)';
    $stmt = mysqli_prepare($db, $sql);
    
    mysqli_stmt_bind_param($stmt, 'is', $Id_categoria, $categoria);
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Se ha registrado una nueva categoría en el sistema');</script>";
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
        <label for="txtidcategoria">ID</label>
        <input type="number" name="txtidcategoria" required>
        
        <label for="txtcategoria">Categoría</label>
        <input type="text" name="txtcategoria" required>
        
        <input type="submit" name="registrar" value="Registrar nueva categoría">
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
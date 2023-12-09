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
                        <h2 class="title-1">AGREGAR USUARIOS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
<?php
include('conexion.php');

$codigo = $_GET['txtcodigo'] ?? null;
$nombre = $_GET['txtnombre'] ?? null;
$categoria = $_GET['txtcategoria'] ?? null;
$creador = $_GET['txtdocumento'] ?? null; 
$precio = $_GET['txtprecio'] ?? null;
$estado = $_GET['txtestado'] ?? null;

// Verificar si el documento del creador existe en la tabla usuarios
$verificar_usuario = "SELECT * FROM permisos WHERE documento = '$creador'";
$resultado_usuario = mysqli_query($db, $verificar_usuario);

if (mysqli_num_rows($resultado_usuario) > 0) {
    // El usuario existe, ahora puedes proceder con la inserción en productos
    $sql = 'INSERT INTO productos(codigo_producto, nombre_producto, id_categoria, documento_creador, precio_producto, id_estado) VALUES (?, ?, ?, ?, ?, ?)';
    $stmt = mysqli_prepare($db, $sql);

    mysqli_stmt_bind_param($stmt, 'sssssi', $codigo, $nombre, $categoria, $creador, $precio, $estado);
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Se ha registrado un nuevo producto en el sistema');</script>";
    } else {
        echo "<script>alert('Ha ocurrido un error al ejecutar la consulta: " . mysqli_error($db) . "');</script>";
    }
    
    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('¡Solo el creador puede ingresar productos verifica que tu documento se encuentra en la base!');</script>";
}

mysqli_close($db);
?>

<div class="formulario">
    <form action="" method="GET">
        <label for="txtcodigo">Codigo</label>
        <input type="text" name="txtcodigo" required>
        
        <label for="txtnombre">Nombre producto</label>
        <input type="text" name="txtnombre" required>

        <label for="txtcategoria">ID Categoria</label>
        <input type="text" name="txtcategoria" required>
        
        <label for="txtdocumento">Documento creador</label>
        <input type="text" name="txtdocumento" required>

        <label for="txtprecio">Precio</label>
        <input type="text" name="txtprecio" required>

        <label for="txtestado">Estado</label>
        <input type="text" name="txtestado" required>

        <input type="submit" name="registrar" value="Registrar nuevo producto">
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
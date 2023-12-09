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

$documento = $_GET['txtdocumento'] ?? null;
$nombre = $_GET['txtnombre']?? null;
$apellido = $_GET['txtapellido']?? null;
$correo = $_GET['txtcorreo']?? null;
$estado = $_GET['txtestado']?? null;

if ($documento != null && $nombre != null && $apellido != null && $correo != null && $estado != null) {
    // Evita posibles problemas de inyección SQL usando sentencias preparadas
    $sql = 'INSERT INTO usuarios(documento, nombre_usuario, apellido_usuario, correo, id_estado) VALUES (?, ?, ?, ?, ?)';
    $stmt = mysqli_prepare($db, $sql);

    mysqli_stmt_bind_param($stmt, 'ssssi', $documento, $nombre, $apellido, $correo, $estado);
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>alert('Usted ha registrado un usuario nuevo al sistema');</script>". mysqli_error($db);
    } else {
        echo "<script>alert('Upps ha ocurrido un error al ejecutar tu consulta ');</script> " . mysqli_error($db);
    }
    
    mysqli_stmt_close($stmt);
} else {
    echo "<script>alert('!Antes de continuar tu registro verifica los campos¡');</script>";
}
?>

<div class="formulario">
    <form action="" method="GET">
        <label for="">Documento usuario</label>
        <input type="text" name="txtdocumento" required>
        
        <label for="">Nombre usuario</label>
        <input type="text" name="txtnombre" required>

        <label for="">Apellido usuario</label>
        <input type="text" name="txtapellido" required>
        
        <label for="">Correo</label>
        <input type="text" name="txtcorreo" required>

        <label for="">Estado</label>
        <input type="text" name="txtestado" required>

        <label for=""></label>
        <input type="submit" name="registrar" value="Registrar nuevo usuario">
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
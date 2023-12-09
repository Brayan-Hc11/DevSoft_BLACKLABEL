<?php
include_once('vistasuperior.php');
include('conexion.php');
    $sql = "SELECT * FROM Usuarios";
    $resultado = mysqli_query($db,$sql);
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">GESTION DE USUARIOS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
    <a href="usuario_agregar.php" class="accion editar">agregar un nuevo usuario</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td><?php echo  $filas["id_usuario"] ?></td>
                    <td><?php echo  $filas["documento"] ?></td>
                    <td><?php echo  $filas["nombre_usuario"] ?></td>
                    <td><?php echo  $filas["apellido_usuario"] ?></td>
                    <td><?php echo  $filas["correo"] ?></td>
                    <td><?php echo  $filas["id_estado"] ?></td>
                    <td>
                        <a href="usuario_editar.php?id=<?php echo  $filas["id_usuario"] ?>" class="accion editar">Editar</a>
                        <a href="usuario_eliminar.php?id=<?php echo  $filas["id_usuario"] ?>" class="accion eliminar">Eliminar</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
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

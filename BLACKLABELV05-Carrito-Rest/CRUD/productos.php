<?php
include_once('vistasuperior.php');
include('conexion.php');
    $sql = "SELECT * FROM productos";
    $resultado = mysqli_query($db,$sql);
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">GESTION DE PRODUCTOS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
    <div>
    <a href="productos_agregar.php" class="accion editar">agregar un nuevo producto</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Creador</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td><?php echo  $filas["id_producto"] ?></td>
                    <td><?php echo  $filas["codigo_producto"] ?></td>
                    <td><?php echo  $filas["nombre_producto"] ?></td>
                    <td><?php echo  $filas["id_categoria"] ?></td>
                    <td><?php echo  $filas["documento_creador"] ?></td>
                    <td><?php echo  $filas["precio_producto"] ?></td>
                    <td><?php echo  $filas["id_estado"] ?></td>
                    <td>
                        <a href="#" class="accion editar">Editar</a>
                        <a href="#" class="accion eliminar">Eliminar</a>
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

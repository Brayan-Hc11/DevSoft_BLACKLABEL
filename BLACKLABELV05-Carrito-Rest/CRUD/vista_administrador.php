<?php
include_once('vistasuperior.php');
include('conexion.php');
//consulta tabla usuarios
$sql = "SELECT * FROM Usuarios";
$resultado = mysqli_query($db,$sql);
//consulta tabla roles
$sql_r = "SELECT * FROM roles";
$resultado_r = mysqli_query($db,$sql_r);
//consulta tabla productos
$sql_p = "SELECT * FROM productos";
$resultado_p = mysqli_query($db,$sql_p);
//consulta tabla permisos
$sql_pp = "SELECT * FROM permisos";
$resultado_pp = mysqli_query($db,$sql_pp);
//consulta tabla estados
$sql_e = "SELECT * FROM estados";
$resultado_e = mysqli_query($db,$sql_e);
//consulta tabla categorias
$sql_c = "SELECT * FROM categorias";
$resultado_c = mysqli_query($db,$sql_c);
?>
<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Vista general</h2>
            </div>
        </div><br>
    </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br>
    <h2 class="title-1 m-b-25">Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Estado</th>
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
                </tr>
            <?php }?>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <br>
    <h2 class="title-1 m-b-25">Roles</h2>
    <table>
    <thead>
            <tr>
                <th>ID</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado_r)){ ?>
                <tr>
                    <td><?php echo  $filas["id_rol"] ?></td>
                    <td><?php echo  $filas["rol"] ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br>
<h2 class="title-1 m-b-25">Productos</h2>
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
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado_p)){ ?>
                <tr>
                    <td><?php echo  $filas["id_producto"] ?></td>
                    <td><?php echo  $filas["codigo_producto"] ?></td>
                    <td><?php echo  $filas["nombre_producto"] ?></td>
                    <td><?php echo  $filas["id_categoria"] ?></td>
                    <td><?php echo  $filas["documento_creador"] ?></td>
                    <td><?php echo  $filas["precio_producto"] ?></td>
                    <td><?php echo  $filas["id_estado"] ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br>
<h2 class="title-1 m-b-25">permisos</h2>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>ID_Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado_pp)){ ?>
                <tr>
                    <td><?php echo  $filas["id"] ?></td>
                    <td><?php echo  $filas["documento"] ?></td>
                    <td><?php echo  $filas["id_rol"] ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br>
<h2 class="title-1 m-b-25">Estados</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado_e)){ ?>
                <tr>
                    <td><?php echo  $filas["id_estado"] ?></td>
                    <td><?php echo  $filas["estado"] ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br>
<h2 class="title-1 m-b-25">Categorias</h2>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php  while ($filas = mysqli_fetch_assoc($resultado_c)){ ?>
                <tr>
                    <td><?php echo  $filas["id_categoria"] ?></td>
                    <td><?php echo  $filas["categoria"] ?></td>

                </tr>
            <?php }?>
        </tbody>
    </table>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
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
</div>
<!-- Jquery JS-->
<script src="../ADMINISTRADOR/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../ADMINISTRADOR/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../ADMINISTRADOR/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../ADMINISTRADOR/vendor/slick/slick.min.js"></script>
<script src="../ADMINISTRADOR/vendor/wow/wow.min.js"></script>
<script src="../ADMINISTRADOR/vendor/animsition/animsition.min.js"></script>
<script src="../ADMINISTRADOR/vendor/select2/select2.min.js"></script>
<!-- Main JS-->
<script src="../ADMINISTRADOR/js/main.js"></script>
</body>
</html>
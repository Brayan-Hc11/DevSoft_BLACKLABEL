<?php
include_once('vistasuperior.php');
include('conexion.php');
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">ELIMINAR PRODUCTOS</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                    </div>
                </div>
            </div>
            <br>
<div>
<?php
$id = $_GET['id'];
$sql = "UPDATE productos SET id_estado=2 WHERE id_producto='".$id."'";
mysqli_query($db, $sql);

?>

<div class="row">
                <div class="col-md-12">
                    <h4>El producto se actualizo de estado</h4>
                    <div class="copyright">
                        <p>TODOS LOS DERECHOS RESERVADOS</p>
                        <p>COPYRIGHT © 2024 EMPRESA DEVSOFT</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- END PAGE CONTAINER-->
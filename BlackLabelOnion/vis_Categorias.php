<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
<link rel="stylesheet" href="main.css">



<title>Categorias</title>

<?php
class visCategorias{
    public function vistaCategorias(){
        include("vis_Categorias--header.php");
    }
}
#Finalizamos la clase y el metodo
$final = new visCategorias();
    $final -> vistaCategorias();
?>
<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
<link rel="stylesheet" href="main.css">



<title>Categorias</title>

<?php
class visCategorias{
    public function vistaCategorias(){
        #incluimos contenido del header 
        include("vis_Categorias--header.php");

        #Incluimos medio de la página
        include("vis_Categorias--informatcion.php");
        
    }
}
#Finalizamos la clase y el metodo
$final = new visCategorias();
    $final -> vistaCategorias();
?>
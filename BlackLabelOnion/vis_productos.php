<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
<link rel="stylesheet" href="main.css">

<?php
class inicioProd{
    public function vistaProd(){
        
/*incluimos la cabecera de esta pagina*/
    include("vis_productos--header.php");

    /*apartado de la información media*/
        include("vis_productos--informacion.php");
    
    /*apartado del footer*/
        include("vis_productos--footer.php");
    }
}
#Finalizamos clase y metodo
$final = new inicioProd();
    $final -> vistaProd();
?>
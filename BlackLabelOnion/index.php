<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
    <link rel="stylesheet" href="main.css">

<?php
 Class Inicio {
    public function vistaInicio(){

#apartado de header  
    include("ini_header.php");

#apartado section media de la información
    include("ini_informacion.php");

#Apartado del footer
    include("ini_footer.php");
    }
 }
#FInalizamos clase y metodo
 $final = new Inicio();
    $final -> vistaInicio();
?>
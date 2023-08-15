<!--LINKIAMOS LAS HOJAS DE ESTILOS-->
    <link rel="stylesheet" href="main.css">
<!--Titulo de la página principal-->
    <title>Carrito de compras </title>
<?php
Class inicioCarritoCompras{
    public function vistaCarritoCompras(){

    #Apartdo section  media de la información 
    include("vis_CarritoCompras--informacion.php");

    }
}
#Finalizamos clase y metodo
$final= new inicioCarritoCompras();
    $final -> vistaCarritoCompras();

?>
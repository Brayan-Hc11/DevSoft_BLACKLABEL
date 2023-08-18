<!--Linkiamos la hoja de estilos-->
<link rel="stylesheet" href="main.css">

<!--Titulo de la página-->
<title>Sobre nosotros </title>

<?php
#Inciamos clase y metodo
Class visBlog{
    public function vistaBlog(){
        #incluimos el header
            include("vis_Blog--header.php"); 
        #Iniciamos el contenido medio de la página
echo("
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ");

        #incluimos el footer
            Include("vis_Productos--footer.php");
    }
}
#fin de la clase y el metodo
$final = new visBlog();
    $final->vistaBlog();
?>
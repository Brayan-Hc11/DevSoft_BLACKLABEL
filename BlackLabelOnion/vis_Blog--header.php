<!--Linkiamos la hoja de estilos-->
<link rel="stylesheet" href="main.css">

<!--Linkiamos la biblioteca de iconos-->
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<?php
#inciamos clase y metodo
class visBlogHeader{
    public function vistaBlogHeader(){
        #iniciamos contenido del header
        echo("
        <header>
        <div class='PrincipalBlog'>
            <div class='PrincipalBlog__hero'>
                <div class='PrincipalBlog__logo'>
                   <h1 class=PrincipalBlog__logo--logo'>
                        <i class='fa-solid fa-tag'></i>
                        <a href='index.php'>BLacklabel</a>
                    </h1>
                </div>
        </div>
    </header>
        ");
    }
}
#finalizamos la clase y el metodo 
$final = new visBlogHeader();
    $final ->vistaBlogHeader();

?>
<!--LINKIAMOS LAS HOJAS DE ESTILO-->
    <link rel="stylesheet" href="main.css">

<?php
#inicialiamos una clase y un metodo
 Class Inicio {
    public function vistaInicio(){
        #Incluimos la capa del header 
    include("Cpa_ini-header.php");
#Inicio de la capa media
echo("
<section class='informacion'>
    <div class='informacion__content container'>

        <h1 class='informacion__titulo--primario'>¿Cómo Funciona BlackLabel?</h1>
            <p class='informacion__txt'>
                BlackLabel es una tienda online en donde se le ofrese la oportunidad de poder encontrar lo último en tecnologia, 
                los productos que desee o los productos que necesita a tan solo un click.
            </p>

            <div class='informacion__blog--content'>

            <div class='informacion__blog--descripccion'>
                <img src='img_numero-1-min.png'width='43' height='43' alt='icono del número uno'>
                
                    <h3 class='informacion__titulo--segundario'>Productos</h3>
                        <p class='informacion__txt--complementaria'>
                            En BlackLabel podrá visualizar y encontrar una gran variedad de categorias en las que se encuentrán extensas variedades 
                            de productos sobre tecnologia que lograrán adaptarse a sus necesidades y gustos.
                        </p>

</div><hr class='informacion__separador'>

            <div class='informacion__blog--descripccion'>
                <img src='img_numero-2-min.png'width='43' height='43' alt='icono del número dos'>
                
                    <h3 class='informacion__titulo--segundario'>Registro</h3>
                        <p class='informacion__txt--complementaria'>
                            En BlackLabel contamos con un sistema de registro de datos seguro y viable, con el cuál prodrá sentir la confianza de tener 
                            sus datos personales en la web, además de eso contamos con un sistema de inicio de sesión poco tedioso y más funcional.   
                        </p>
        
</div><hr class='informacion__separador'>

            <div class='informacion__blog--descripccion'>
                <img src='img_numero-3-min.png'width='43' height='43' alt='icono del número tres'>
                            
                    <h3 class='informacion__titulo--segundario'>Compra</h3>
                        <p class='informacion__txt--complementaria'>
                            En BlackLabel podrá agregar todos sus productos a un carrito y comprarlos en los momentos que más considere adecuados, además BlackLabel
                            no contará con un sistema de pago propio ya que contará con el sistema de pago de la empresa Microtech para más seguridad.
                        </p>
        
    </div>                        
</section>

<section class='informacion'>
    <div class='informacion__content container'>

        <h2 class='informacion__titulo--primario'>Beneficios de BlackLabel</h2>
            <p class='informacion__txt'>
                BlackLabel es una tienda online en donde se le ofrese la oportunidad de poder encontrar lo último en tecnologia, 
                los productos que desee o los productos que necesita a tan solo un click.
            </p>

    <div class='informacion__blog--content'>

        <div class='informacion__blog--descripccion'>
            <img src='img_pulgar-arriba-min.png'width='43' height='43' alt='beneficio uno'>
    
                <h3 class='informacion__titulo--segundario'>Diseño sencillo</h3>
                    <p class='informacion__txt--complementaria'>
                        BlackLabel cuenta con un diseño llamativo y minimalista con el fin de no saturar al usuario de detalles visuales. 
                    </p>

</div><hr class='informacion__separador'>


        <div class='informacion__blog--descripccion'>
            <img src='img_grafico-barras-min.png'width='43' height='43' alt='beneficio dos'>
                
                <h3 class='informacion__titulo--segundario'>Pagina intuitiva</h3>
                    <p class='informacion__txt--complementaria'>
                        BlackLabel es una pagina que resulta fácil de usar ya que cuenta con interfaces interactivas e intuitivas.
                    </p>

</div><hr class='informacion__separador'>

        <div class='informacion__blog--descripccion'>
            <img src='img_verificacion-min.png'width='43' height='43' alt='beneficio tres'>
    
                <h3 class='informacion__titulo--segundario'>Fácil manejo</h3>
                    <p class='informacion__txt--complementaria'>
                        BlackLabel es una pagina en la que podrá encontrar una alta facilidad a la hora de navegar por el sistema.
                    </p>
        </div>
    </div>
</div>
</section>
");
        #Incluimos la capa del footer
    include("Cpa_fin-productos--footer.php");
    }
 }
#FInalizamos clase y metodo
 $final = new Inicio();
    $final -> vistaInicio();
?>
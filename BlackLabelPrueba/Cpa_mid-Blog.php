<!--Linkiamos la hoja de estilos-->
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<!--Titulo de la página-->
<title>Sobre nosotros </title>

<?php
#Inciamos clase y metodo
Class visBlog{
    public function vistaBlog(){
        #incluimos el header
            include("Cpa_ini-Blog--header.php"); 
        #Iniciamos el contenido medio de la página
        echo("
       <body class='Blog'>
       <section class='About'>
       <div class='About__Content contenedor'>
           <div class='About__Content--1'>
               <h3>Diseños creativos</h3>
               <p>
            La tecnología está en constante evolución, y en BlackLabel, estamos comprometidos a mantenerte al día con 
                las tendencias más actuales. Navega por nuestra selección cuidadosamente curada y descubre las últimas tendencias 
                    en electrónica de consumo, domótica, entretenimiento y más. Ya sea que busques mejorar tu productividad, ampliar tus
                         posibilidades creativas o simplemente disfrutar de momentos de pura diversión, tenemos algo para cada entusiasta de 
                            la tecnología.
               </p>
               </br>
               <p>
            En BlackLabel, no solo ofrecemos productos, sino una experiencia completa. Navega por nuestro sitio de manera intuitiva, 
                obtén información detallada sobre cada artículo y encuentra recomendaciones personalizadas para encontrar exactamente lo 
                    que necesitas. Nuestro objetivo es brindarte un servicio excepcional desde el momento en que ingreses a nuestra tienda hasta 
                        que recibas tus productos en la puerta de tu casa.    
           </p>
           <br/>
           <p>
           Te invitamos a unirte a la comunidad de entusiastas de la tecnología de BlackLabel y a explorar un mundo de innovación y 
           posibilidades ilimitadas. ¡Tu búsqueda de los productos tecnológicos más elegantes y avanzados comienza aquí, en BlackLabel!
           </p>
           <a href='#' class='Header__Content--Enlace-1'>Saber más </a>
           </div>

           <div class=About__Content--2>
               <h3>Nuestro equipo</h3>
               <p>
               Nuestro equipo de expertos en tecnología busca constantemente los artículos más vanguardistas, desde teléfonos inteligentes 
                de última generación y portátiles ultrapotentes hasta dispositivos de realidad virtual y gadgets futuristas.
               </p>
               <br/>
               <p>
               En BlackLabel, nuestro equipo de desarrolladores es la columna vertebral de la innovación y la excelencia tecnológica
                que nos define. Compuesto por mentes creativas y apasionadas por la tecnología, cada miembro del equipo aporta una 
                    combinación única de habilidades y experiencia que nos permite ofrecer productos de vanguardia y soluciones tecnológicas 
                        de primer nivel. Permítenos presentarte a algunos de los talentosos individuos que conforman nuestro equipo de desarrolladores:
               </p>
                    <br/>
               
               <div class='About__Content--img'>
                   <img src='img_grafico-barras.png' alt='imagen'>
                       <div class='About__Content--Txt'>
                           <h4>Esteban Salcedo Perez</h4>
                           <p>Uno empleado</p>
                           <p>Dos empleado</p> 
                       </div>
               </div>

               <div class='About__Content--img'>
               <img src='img_grafico-barras.png' alt='imagen'>
                   <div class='About__Content--Txt'>
                       <h4>Brayan Andres Hernandez Colon</h4>
                       <p>Uno empleado</p>
                       <p>Dos empleado</p> 
                   </div>
               </div>

               <div class='About__Content--img'>
               <img src='img_grafico-barras.png' alt='imagen'>
                   <div class='About__Content--Txt'>
                       <h4>Julian David Rojas Saavedra</h4>
                       <p>Uno empleado</p>
                       <p>Dos empleado</p> 
                   </div>
               </div>

               <div class='About__Content--img'>
               <img src='img_grafico-barras.png' alt='imagen'>
                   <div class='About__Content--Txt'>
                       <h4>Jesus Layonel Cabezas Ordoñez</h4>
                       <p>Uno empleado</p>
                       <p>Dos empleado</p> 
                   </div>
               </div>  
               <p>
       Estos son solo algunos ejemplos de los talentosos profesionales que conforman nuestro equipo de 
       desarrolladores en BlackLabel. Juntos, trabajan en colaboración para transformar ideas en realidad, 
       superar los límites de la tecnología y brindar a nuestros clientes experiencias excepcionales que 
       superen sus expectativas.
       </p>
           </div> 
                         
       </div> 

       
   </section>
   
   
   <main class='Servicios'>
       
       <div class='Servicios--txt  contenedor'>
           <h2>Selecciona el servicio</h2>
           <p>
           En BlackLabel, estamos comprometidos en brindarte una amplia gama de servicios tecnológicos que complementan y
            enriquecen tu experiencia en el mundo digital. Nuestro objetivo es ser tu socio confiable en la búsqueda de soluciones 
            innovadoras y productos de alta calidad. Aquí tienes un vistazo a algunos de los servicios que ofrecemos:
           </p>
           <br/>
           <p>
           En BlackLabel, no solo estamos comprometidos con proporcionarte productos de alta calidad, sino también 
            con brindarte un conjunto completo de servicios que enriquezcan tu experiencia tecnológica. Estamos aquí 
                para hacer que tu viaje en el mundo digital sea emocionante, conveniente y excepcional.
           </p>
       </div>

       <div class='Servicios__Contenido contenedor'>
           <img src='img_servicios1.png' alt='Numero Uno'>
           <img src='img_servicios2.png' alt='Numero dos'>
           <img src='img_servicios3.png' alt='Numero tres'>
           <img src='img_servicios4.png' alt='Numero cuatro'>
       </div>       
   </main>
       </body>
        ");
        # footer segundario
        include('Cpa_fin-Blog--footer.php');

    }
}

#fin de la clase y el metodo
$final = new visBlog();
    $final->vistaBlog();
?>
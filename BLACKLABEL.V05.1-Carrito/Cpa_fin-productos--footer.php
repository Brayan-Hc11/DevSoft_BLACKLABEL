<!--LINKIAMOS LAS HOJAS DE ESTILO-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="CSS/main.css">

<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>

<?php
Class iniProdFooter{
    public function vistaProdFooter(){
        echo("
<footer class='footer__productos'>
    <div class='container footer__content'>
        <div class='footer__menu--prod'>

            <div class='contact-info'>
                <p class='title-footer'>Información de Contacto</p>
                <ul>
                    <li>
                        Dirección: 71 Pennington Lane Vernon Rockville, CT
                        06066
                    </li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>EmaiL: BLACKLABEL@support.com</li>
                </ul>
                <div class='social-icons'>
                    <span class='facebook'>
                        <i class='fa-brands fa-facebook-f'></i>
                    </span>
                    <span class='twitter'>
                        <i class='fa-brands fa-twitter'></i>
                    </span>
                    <span class='youtube'>
                        <i class='fa-brands fa-youtube'></i>
                    </span>
                    <span class='pinterest'>
                        <i class='fa-brands fa-pinterest-p'></i>
                    </span>
                    <span class='instagram'>
                        <i class='fa-brands fa-instagram'></i>
                    </span>
                </div>
            </div>


            <div class='newsletter'>
                <p class='title-footer'></p>

                <div class='content'>
                    <p>
  
                    </p>
                </div>
            </div>
        </div>

        <div class='copyright'>
            <p>
                Desarrollado por Devsof &copy; 2022
            </p>

        </div>
    </div>
</footer>
");
    }
}
#Finalizamos clase y metodo
$final = new iniProdFooter();
    $final -> vistaProdFooter();
?>
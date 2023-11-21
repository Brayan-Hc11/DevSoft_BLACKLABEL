








<script src="https://kit.fontawesome.com/b217920474.js" crossorigin="anonymous"></script>
<?php
#iniciamos una clase y un metodo

class visBlogFooter{
    public function vistaBlogFooter(){
        #iniciamos el contenido del footer
echo("<footer class='Footer__Contacto'>
<h2>Contactanos</h2>

<form>
    <div  class='Footer__Form--group'>
        <div>
            <input type='text' placeholder='Name' name='name' class='Footer__Form--Campo'>
            <br/>
            <input type='email' placeholder='Email' name='email' class='Footer__Form--Campo'>
        </div>
        <textarea name='message' cols='30' rows='2' placeholder='Message' class='Footer__Form--Campo'></textarea>
    </div>
    <input type='submit' value='Enviar' class='Header__Content--Enlace-1'>
</form>
</footer>

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

            <div class='information'>
                <p class='title-footer'>Información</p>
                <ul>
                    <li><a href='#'>Acerca de Nosotros</a></li>
                    <li><a href='#'>Información Delivery</a></li>
                    <li><a href='#'>Politicas de Privacidad</a></li>
                    <li><a href='#'>Términos y condiciones</a></li>
                    <li><a href='#'>Contactános</a></li>
                </ul>
            </div>

            <div class='my-account'>
                <p class='title-footer'>Mi cuenta</p>

                <ul>
                    <li><a href='#'>Mi cuenta</a></li>
                    <li><a href='#'>Historial de ordenes</a></li>
                    <li><a href='#'>Lista de deseos</a></li>
                    <li><a href='#'>Boletín</a></li>
                    <li><a href='#'>Reembolsos</a></li>
                </ul>
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
#finalizamos la clase y el metodo
$final = new visBlogFooter();
    $final ->vistaBlogFooter();
?>

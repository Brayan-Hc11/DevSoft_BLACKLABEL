<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet">

<?php

class usuario
{
    public function nosotros()
    {

    echo '
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Sobre Nosotros</title>
        </head>
        <body>
            <h1>Esta pagina se encuentra en servicio...</h1>
        </body>
    </html>';

    }
}

$final = new usuario();
$final->nosotros();

?>
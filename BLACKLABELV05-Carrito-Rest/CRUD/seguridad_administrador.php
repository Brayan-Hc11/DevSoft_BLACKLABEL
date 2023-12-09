<?php

session_start();

if ($_SESSION["admin"] != "1")
{
    header("Location: salir.php");
}

?>
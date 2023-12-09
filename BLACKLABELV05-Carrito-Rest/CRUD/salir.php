<?php

session_start();

$_SESSION["documento"] = "0";
$_SESSION["admin"] = "0";
$_SESSION["usuario"] = "0";

header("Location: ../for_registrar.php");

?>
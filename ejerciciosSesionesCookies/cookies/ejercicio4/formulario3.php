<?php
session_start();

if (
    isset($_POST["convivientes"]) && isset($_POST["aficiones"]) && isset($_POST["menú"])
    && isset($_SESSION["formulario"])
) {

    $array = $_SESSION["formulario"];
    $array = [
        ...$array,
        $_POST["convivientes"],
        $_POST["aficiones"],
        $_POST["menú"]
    ];
}
$lista = "<ul>";
foreach ($array as $key => $value) {
    $lista .= "<li>" . $value . "</li>";
}
$lista .= "</ul>";

echo $lista;

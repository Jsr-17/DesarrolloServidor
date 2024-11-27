<?php
session_start();

if (isset($_POST["nombre"]) && isset($_POST["pass"])) {
    $usuario = $_POST["nombre"];
    $nombre = $_POST["pass"];

    if ($usuario == "usuario" && $nombre == "1234") {
        $_SESSION["logeado"] = "Dentro";

        header("Location:peliculas.php");
    } else {

        header("Location:index.php");
        $_SESSION["incorrecta"] = "Contraseña incorrecta";
    }
}

<?php
session_start();

if ($_GET["nombreUsuario"] != "") {
    echo "Bienvenido " . (string) $_GET["nombreUsuario"];
} else {
    header("ContentType:text/html");
    header("Location:ejercicio1.php");
    print ("hola");

}
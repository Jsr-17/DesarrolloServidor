<?php
session_start();

if ($_GET["nombreUsuario"] != "") {
    echo "Bienvenido " . (string) $_GET["nombreUsuario"];
} else {
    header("Location:ejercicio1.php");
}
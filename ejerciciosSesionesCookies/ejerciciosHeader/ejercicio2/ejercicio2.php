<?php
session_start();

if ($_GET["nombreUsuario"] != "") {
    echo "Bienvenido " . (string) $_GET["nombreUsuario"];
} else {
    //En el location podemos meter parametros get 
    header("Location:ejercicio1.php?datos=No existen datos de usuario introduzca un valor ");

}
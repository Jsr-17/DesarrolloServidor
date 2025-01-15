<?php
//activa la sesion
session_start();
include "./model/GestorUsuario.php";
//Si existen los datos
if (isset($_POST["pass"]) && isset($_POST["email"])) {

    //Bucle qe reccorre el array y comprueba los datos de los usuarios registrados y los mete en el usuario o los redirecciona
    for ($i = 0; $i < count($_SESSION["arrayEmails"]); $i++) {
        if ($_POST["pass"] == $_SESSION["arrayEmails"][$i][1] && $_POST["email"] == $_SESSION["arrayEmails"][$i][0]) {
            echo "Bienvenido " . $_SESSION["arrayEmails"][$i][0];
            setcookie("Ultima visita", time());
            array_push($_SESSION["Activo"], $_SESSION["arrayEmails"][$i]);
        } else {
            header("Location:../views/login.php");
        }
    }

}
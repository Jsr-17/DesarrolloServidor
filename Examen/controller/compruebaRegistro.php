<?php
//librerias usadas para los usuarios
include "../model/Usuario.php";
include "../model/GestorUsuario.php";
session_start();
//inicio el array de la sesion si esta vacio

if (!isset($_SESSION["arrayEmails"])) {
    $_SESSION["arrayEmails"] = [];
}

//si existen datos de los formularios
if (isset($_POST["nombre"]) && isset($_POST["pass"]) && isset($_POST["email"])) {

    //Crea un objeto con los datos de los usuarios
    $usuario = new Usuario($_POST["nombre"], $_POST["pass"], $_POST["email"]);

    $gestor = new GestorUsuario();
    //Metodos de los objetos para el almacenamietno

    $gestor->almacenaUsuarios($usuario);

    $data = $gestor->buscaUsuario($usuario->getEmail());
    //guardo en el array de la sesion los datos y redirecciono

    $array = [$gestor->obtieneUsuarios()[0]->getEmail(), $gestor->obtieneUsuarios()[0]->getPass()];


    array_push($_SESSION["arrayEmails"], $array);




    header("Location: ../index.php");
}
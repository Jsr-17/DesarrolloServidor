<?php
$intentos = isset($_POST["intentos"]) ? $_POST["intentos"] : 4;

if (isset($_POST["usuario"]) && isset($_POST["pass"])) {

    $acceder = false;

    if ($_POST["usuario"] == "admin" && $_POST["pass"] == "1234") {
        $acceder = true;
        echo '<div> 
        bienvenido 
        <img src="./imagenes/acceso-permitido.jpg" alt="" srcset="">
  </div>';
        return;
    }
    echo '<div> 
    error   </div>';
    $intentos--;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($intentos == 0 && $acceder == false) {
        echo "Bloqueado";
        return;
    }
    ?>
    <form action="ejercicio2.php" method="post">
        <input type="hidden" name="intentos" value=<?= $intentos ?>>
        usuario: <input type="text" name="usuario">
        password:<input type="text" name="pass">
        <button type="submit">Enviar</button>
    </form>
    <?php

    ?>
</body>

</html>
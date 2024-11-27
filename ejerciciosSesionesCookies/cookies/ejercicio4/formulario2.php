<?php
session_start();

if (
    isset($_POST["nombre"]) && isset($_POST["apellidos"]) && isset($_POST["email"])
    && isset($_POST["url"]) && isset($_POST["sexo"])
) {


    $array = [
        $_POST["nombre"],
        $_POST["apellidos"],
        $_POST["email"],
        $_POST["url"],
        $_POST["sexo"]
    ];
    $_SESSION["formulario"] = $array;
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
    <form action="formulario3.php" class="form-group container" method="POST">
        <h3 class="text-center mb-3">Formulario</h3>

        <div class=" d-flex justify-content-center my-2">
            <p class="mx-2 text-center ">Introduzca convivientes</p>
            <input type="text" name="convivientes" class="form-control-md ">
        </div>

        <div class="d-flex justify-content-center  my-2">
            <p class="mx-2 text-center">Introduzca el aficiones</p>
            <input type="text" name="aficiones" class="form-control-md">
        </div>
        <div class="d-flex justify-content-center  my-2">
            <p class="mx-2 text-center">Introduzca el menú</p>

            <input type="text" name="menú">
        </div>
        <div class="d-flex justify-content-center my-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</body>

</html>
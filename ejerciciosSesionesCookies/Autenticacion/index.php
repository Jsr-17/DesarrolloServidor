<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h3 class="text-center my-2">Inicio de sesión</h3>
    <form action="login.php" method="POST" class="d-flex justify-content-center">
        <div class="my-3">
            <p>Escriba su nombre <input type="text" name="nombre"></p>
            <p>Escriba su contraseña <input type="text" name="pass"></p>
            <button type="submit" class="btn btn-outline-dark">Enviar</button>
        </div>
    </form>
    <div class="d-flex justify-content-center">
        <?php
        if (isset($_SESSION["incorrecta"])) {
            echo "credenciales incorrectas";
        }

        ?>
    </div>
</body>

</html>
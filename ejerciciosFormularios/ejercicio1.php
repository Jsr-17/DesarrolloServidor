<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row">
            <form action="ejercicio1.php" method="get">
                Nombre: <input type="text" name="nombre" class="mx-2" required>
                Edad:<input type="text" name="edad" class="mx-2" required>
                <button type="submit" class="m-2 btn btn-dark">Enviar Get</button>
            </form>
        </div>

        <div class="row ms-5">
            <form action="ejercicio1.php" method="post">
                Nombre: <input type="text" class="mx-2" name="nombre" required>
                Edad: <input type="text" class="mx-2" name="edad" required>
                <button type="submit" class="m-2 btn btn-dark">Enviar Post</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <?php
        if (isset($_GET['nombre']) && isset($_GET['edad'])) {

            echo "<p>" . $_GET['nombre'] . " has iniciado sesion  " . $_GET['edad'] . "</p>";
        }
        if (isset($_POST['nombre']) && isset($_POST['edad'])) {
            echo "<p>" . $_POST['nombre'] . " has iniciado sesion  " . $_POST['edad'] . "</p>";
        }
        ?>
    </div>


</body>

</html>
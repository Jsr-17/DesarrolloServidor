<?php
session_start();
print_r($_SESSION["arrayEmails"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=".././controller/compruebaInicio.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="introduzca email" id="email" required name="email">
        <label for="pass">pass</label>
        <input type="password" placeholder="introduzca password" id="pass" required name="pass">
        <button type="submit">Iniciar sesion</button>

    </form>

</body>

</html>
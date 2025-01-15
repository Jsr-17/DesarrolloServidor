<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=".././controller/compruebaRegistro.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="introduzca nombre" id="nombre" required name="nombre">
        <label for="pass">Pass</label>
        <input type="password" placeholder="introduzca password" id="pass" required name="pass">
        <label for="email">Email</label>
        <input type="email" placeholder="introduzca password" id="email" required name="email">
        <button type="submit">Crear Cuenta</button>

    </form>

</body>

</html>
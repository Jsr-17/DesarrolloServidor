<?php
session_start();
if ($_SESSION["logeado"] == "Dentro") {
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    </head>
    
    <body>
        <h1 class="text-center">Listado de peliculas</h1>
        <div class="container d-flex justify-content-center">
            <ul class="list-group my-2">
                <li class="list-group-item">Spiderman</li>
                <li class="list-group-item">Pokemon</li>
                <li class="list-group-item">Arcane</li>
            </ul>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="my-2">
                <p><a href="series.php">Ir a series</a></p>
                <p><a href="logout.php">Log out</a></p>
    
            </div>
        </div>
    
    </body>
    
    </html>';
    echo $_SESSION["logeado"];
} else {
    echo "necesitas estar logeado para ver este contenido";

}
?>
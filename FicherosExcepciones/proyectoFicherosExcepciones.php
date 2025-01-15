<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center my-3 flex-column">
        <h1>Gestion de inventarios</h1>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <button id="add" class="mx-1 btn btn-dark">Agregar Producto</button>
            <button id="show" class="mx-1 btn btn-dark">Listar Producto</button>
            <button id="update" class="mx-1 btn btn-dark">Actualizar Producto</button>
            <button id="delete" class="mx-1 btn btn-dark">Eliminar Producto</button>
        </div>
        <div id="form">

        </div>
        <div id="container"></div>
    </div>
    <script src="app.js"></script>
</body>

</html>
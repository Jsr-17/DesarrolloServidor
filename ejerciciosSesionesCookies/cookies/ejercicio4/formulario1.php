<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="formulario2.php" class="form-group container" method="POST">
        <h3 class="text-center mb-3">Formulario</h3>

        <div class=" d-flex justify-content-center my-2">
            <p class="mx-2 text-center ">Introduzca el Nombre</p>
            <input type="text" name="nombre" class="form-control-md ">
        </div>

        <div class="d-flex justify-content-center  my-2">
            <p class="mx-2 text-center">Introduzca el Apellido</p>
            <input type="text" name="apellidos" class="form-control-md">
        </div>
        <div class="d-flex justify-content-center  my-2">
            <p class="mx-2 text-center">Introduzca el Email</p>

            <input type="email" name="email">
        </div>
        <div class="d-flex justify-content-center  my-2">
            <p class="mx-2 text-center">Introduzca el url</p>
            <input type="text" name="url">
        </div>
        <div class="d-flex justify-content-center  my-2">
            <div>
                <h6>Eliga su sexo</h6>
                <div>
                    <label for="Mujer">Mujer</label>
                    <input type="radio" name="sexo" value="mujer" id="Mujer">
                </div>
                <div>
                    <label for="Hombre">Hombre</label>
                    <input type="radio" name="sexo" value="hombre" id="Hombre">
                </div>
                <div>
                    <label for="Otro">Otro</label>
                    <input type="radio" name="sexo" value="otro" id="Otro">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center my-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

</body>

</html>
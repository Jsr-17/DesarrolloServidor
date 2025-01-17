<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h1>Bienvenido la aplicacion</h1>

        <div>
            <button id="btn_recibir">Visualizar datos</button>
            <button id="btn_asignatura">Calcular estadisticas por asignatura</button>
            <button id="btn_register">Registrar Datos</button>
        </div>
        <div id="formContainer">

        </div>
        <div id="data"></div>


    </div>

    <script>
        const btn_register = document.querySelector("#btn_register");
        const containerForm = document.querySelector("#formContainer");
        const btn_asignatura = document.querySelector("#btn_asignatura");

        btn_register.addEventListener("click", () => containerForm.innerHTML = `
        
        <form action="./controllers/registro.php" method="post" class=" my-2 d-flex justify-content-center align-items-center flex-column">
            Nombre<input name="nombre" type="text">
            ID<input name="id" type="text">
            Asignatura<input name="asignatura" type="text">
            Nota<input name="nota" type="text">
            Examen<input name="examen" type="text">
            <button type="submit" class="my-2">Enviar</button>
        </form>
        `)
        btn_asignatura.addEventListener("click", () => containerForm.innerHTML = `
        
        <form action="./controllers/calcularDatos.php" method="post" class=" my-2 d-flex justify-content-center align-items-center flex-column">
>
            Asignatura<input name="asignatura" type="text">

            <button type="submit" class="my-2">Enviar</button>
        </form>
        `)
        btn_recibir.addEventListener("click", () => {

            containerForm.innerHTML = `
        
        <form action="./controllers/visualizarDatos.php" method="post" class=" my-2 d-flex justify-content-center align-items-center flex-column">
>

            <button type="submit" class="my-2">ir a</button>
        </form>
        `


        })
    </script>

</body>

</html>
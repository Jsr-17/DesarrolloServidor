<?php
if (isset($_POST['seleccionados'])) {
    $array = $_POST['seleccionados'];
}


$resultados = [];



// Definir los productos en un array con su nombre, precio y imagen.
// Hemos duplicado algunos productos para completar las 25 casillas del tablero.
$productos = [
    ["nombre" => "Televisor", "precio" => 500, "imagen" => "tv.jpg", "seleccionado" => false],
    ["nombre" => "Portátil", "precio" => 800, "imagen" => "laptop.jpg", "seleccionado" => false],
    ["nombre" => "Cafetera", "precio" => 120, "imagen" => "cafetera.jpg", "seleccionado" => false],
    ["nombre" => "Aspiradora", "precio" => 150, "imagen" => "aspiradora.jpg", "seleccionado" => false],
    ["nombre" => "Smartphone", "precio" => 600, "imagen" => "smartphone.jpg", "seleccionado" => false],
    ["nombre" => "Bicicleta", "precio" => 1000, "imagen" => "bicicleta.jpg", "seleccionado" => false],
    ["nombre" => "Auriculares", "precio" => 200, "imagen" => "auriculares.jpg", "seleccionado" => false],
    ["nombre" => "Monitor", "precio" => 300, "imagen" => "monitor.jpg", "seleccionado" => false],
    ["nombre" => "Teclado", "precio" => 50, "imagen" => "teclado.jpg", "seleccionado" => false],
    ["nombre" => "Ratón", "precio" => 30, "imagen" => "raton.jpg", "seleccionado" => false],
    ["nombre" => "Tablet", "precio" => 400, "imagen" => "tablet.jpg", "seleccionado" => false],
    ["nombre" => "Impresora", "precio" => 250, "imagen" => "impresora.jpg", "seleccionado" => false,],
    ["nombre" => "Altavoz", "precio" => 150, "imagen" => "altavoz.jpg", "seleccionado" => false],
    ["nombre" => "Cámara", "precio" => 700, "imagen" => "camara.jpg", "seleccionado" => false],
    ["nombre" => "Frigorífico", "precio" => 900, "imagen" => "frigorifico.jpg", "seleccionado" => false],
    ["nombre" => "Lavadora", "precio" => 800, "imagen" => "lavadora.jpg", "seleccionado" => false],
    ["nombre" => "Microondas", "precio" => 200, "imagen" => "microondas.jpg", "seleccionado" => false],
    ["nombre" => "Ventilador", "precio" => 100, "imagen" => "ventilador.jpg", "seleccionado" => false],
    ["nombre" => "Cámara de Video", "precio" => 750, "imagen" => "camara_video.jpg", "seleccionado" => false],
    ["nombre" => "Smartwatch", "precio" => 300, "imagen" => "smartwatch.jpg", "seleccionado" => false],
    ["nombre" => "Gafas VR", "precio" => 500, "imagen" => "gafas_vr.jpg", "seleccionado" => false],
    ["nombre" => "Consola", "precio" => 450, "imagen" => "consola.jpg", "seleccionado" => false],
    ["nombre" => "Robot Aspirador", "precio" => 600, "imagen" => "robot_aspirador.jpg", "seleccionado" => false],
    ["nombre" => "Libro Electrónico", "precio" => 120, "imagen" => "libro_electronico.jpg", "seleccionado" => false],
    ["nombre" => "Proyector", "precio" => 350, "imagen" => "proyector.jpg", "seleccionado" => false],
];


// Inicializar un array de productos seleccionados
if (!isset($_POST['seleccionados'])) {
    $seleccionados = array_fill(0, count($productos), false); // Inicialmente, todos a false (ninguno seleccionado)
    $resultados = [];
} else {
    // Recuperar el array de productos seleccionados después de una selección
    $seleccionados = $_POST['seleccionados'];
}

// Verificar si se ha seleccionado un producto (a través de su índice en el array)
if (isset($_POST['seleccionar'])) {
    $indice_seleccionado = $_POST['seleccionar']; // Índice del producto seleccionado
    $seleccionados[$indice_seleccionado] = true; // Marcar ese producto como seleccionado
}
if (isset($_POST["precio"]) || isset($_POST["index"])) {
    for ($i = 0; $i < count($_POST["precio"]); $i++) {
        $precio[$_POST["index"][$i]] = $_POST["precio"][$i];
    }
}
if (isset($_POST["resultados"])) {
    print_r($_POST["resultados"]);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>El Precio Justo</title>
    <style>
        .tablero {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            /* Cinco columnas en el tablero */
            gap: 10px;
            /* Espacio entre las casillas */
            margin: 20px;
        }

        .producto {
            text-align: center;
            border: 2px solid #ccc;
            padding: 10px;
            background-color: white;
            box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            transition: transform 0.2s ease-in-out;
        }

        .producto:hover {
            transform: scale(1.05);
        }

        .producto img {
            width: 100px;
            height: 100px;
        }

        button {
            padding: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>El Precio Justo</h1>

    <form action="tablero2.php" method="post">
        <!-- Enviamos el array de productos seleccionados como campos ocultos -->
        <?php foreach ($seleccionados as $i => $seleccionado) { ?>
            <input type="hidden" name="seleccionados[]" value="<?= $seleccionado ? 1 : 0; ?>">

        <?php }  ?>

        <div class="tablero">
            <?php foreach ($productos as $index => $producto) { ?>
                <div class="producto">
                    <?php if ($seleccionados[$index]) {

                    ?>
                        <input type="hidden" name="precio[]" value="<?= $productos[$index]["precio"] ?>">
                        <input type="hidden" name="index[]" value="<?= $index ?>">
                        <!-- Si el producto ya ha sido seleccionado, mostramos la imagen del producto -->
                        <img src="<?= $producto['imagen']; ?>" alt="<?= $producto['nombre']; ?>">
                        <p><?= $producto['nombre']; ?></p>

                    <?php } else { ?>
                        <!-- Si el producto no ha sido seleccionado, mostramos la imagen con la ? -->
                        <img src="imagenes/interrogacion.png" alt="¿?">
                        <button type="submit" name="seleccionar" value="<?= $index; ?>">Seleccionar</button>

                    <?php }
                    ?>
                </div>
            <?php } ?>
        </div>

        <div>


            jugador1: <input type="number" name="jugador1">
            jugador2: <input type="number" name="jugador2">
            <button type="submit">enviar</button>

            <pre>
                <?php
                if (isset($precio)) {

                    print_r($precio);
                }
                if (isset($_POST["jugador1"]) &&  isset($_POST["jugador2"])) {
                    $precio1 = $_POST["jugador1"];
                    $precio2 = $_POST["jugador2"];
                    if ($precio1 == $precio2 && $precio1 == (int)$precio[count($precio) - 1]) {
                        $resultados[count($precio) - 1] = "empate";
                    } else if ($precio1 <= $precio[count($precio) - 1] && $precio2 > $precio[count($precio) - 1]) {
                        $resultados[count($precio) - 1] = "gana j1";
                    } else if ($precio2 <= $precio[count($precio) - 1] && $precio1 > $precio[count($precio) - 1]) {
                        $resultados[count($precio) - 1] = "gana j2";
                    } else if ((int)$precio[count($precio) - 1] - (int) $precio1  <  (int)$precio[count($precio) - 1] - (int)$precio2) {
                        $resultados[count($precio) - 1] = "gana j1";
                    } else if ((int)$precio[count($precio) - 1] - (int)$precio2 <  (int)$precio[count($precio) - 1] - (int)$precio1) {
                        $resultados[count($precio) - 1] = "gana j2";
                    }

                    print_r($resultados);
                }

                ?>
            </pre>
            <?php
            foreach ($resultados as $key => $value) { ?>
                <input type="hidden" name="resultados[]" value="<?= $value ?>">
            <?php }  ?>




        </div>
    </form>
</body>

</html>
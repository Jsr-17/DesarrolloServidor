<?php
$productos = isset($_POST["productos"]) ? $_POST["productos"] : [["nombre" => "cerezas", "cantidad" => 12, "imagen" => "./imagenes/cerezas.jpg"]];
$contador = isset($_POST["contador"]) ? $_POST["contador"] : 0;

if (isset($_POST["nombreProducto"]) && isset($_POST["cantidad"]) && isset($_POST["imagenProducto"])) {


    $nombre = (string) $_POST["nombreProducto"];
    $cantidad = (int) $_POST["cantidad"];
    $imagen = (string) $_POST["imagenProducto"];


    $nuevosProductos = ["nombre" => $nombre, "cantidad" => $cantidad, "imagen" => "./imagenes/" . $imagen];
    $productos[$contador] = $nuevosProductos;
    $contador++;
}





/*


Ejercicio 1: Gestión de Inventario (2 puntos)
Archivo: ejercicio1.php
Problema:
1. Desarrolla un sistema para gestionar el inventario de una tienda, para ello declara un array
asociativo que contenga los nombres de los productos, la cantidad en stock y el nombre de la
imagen del producto.
2. Muestra en pantalla cada producto con su nombre, cantidad en stock e imagen
correspondiente.
3. Permite al usuario añadir un nuevo producto al inventario mediante un formulario que
incluya nombre, cantidad y el nombre de la imagen.
4. Muestra el inventario actualizado cada vez que se añaden nuevos productos, es decir,
producto, cantidad e imagen del producto.

*/




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="ejercicio1.php" method="post">
        <input type="hidden" name="contador" value='<?= $contador ?>'>
        <?php

        for ($i = 0; $i < count($productos); $i++) {
            echo ' <input type="hidden" name="productos[]" value=' . $productos[$i] . '>';
            echo ' <input type="hidden" name="productos[]" value=' . $productos[$i] . '>';
            echo ' <input type="hidden" name="productos[]" value=' . $productos[$i] . '>';


        }
        ?>

        Nombre producto: <input type="text" name="nombreProducto">
        Cantidad: <input type="text" name="cantidad">
        Nombre imagen: <input type="text" name="imagenProducto">
        <button type="submit">Enviar producto</button>
    </form>

    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Imagen</td>
            </tr>
        </thead>
        <tbody><?php
        for ($i = 0; $i < count($productos); $i++) {
            echo "
               <tr>
               <td>" . $productos[$i]["nombre"] . "</td>
               <td>" . $productos[$i]["cantidad"] . "</td>
               <td>  <img src=" . $productos[$i]["imagen"] . " height='100px' alt=" . $productos[$i]["imagen"] . ">
               </td>

               </tr>
   ";
        }


        ?>
        </tbody>
    </table>


</body>

</html>
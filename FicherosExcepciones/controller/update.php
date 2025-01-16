<?php
include "../model/InventoryModel.php";

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    isset($_POST["name"]) ? $name = $_POST["name"] : $name = "";
    isset($_POST["cantidad"]) ? $cantidad = (int) $_POST["cantidad"] : $cantidad = "";
    isset($_POST["precio"]) ? $precio = (int) $_POST["precio"] : $precio = "";

    $archivo = "../data/inventory.csv";

    $array = [];

    try {
        $flujo = fopen($archivo, "r");

        while (($datos = fgetcsv($flujo, 1000, ",")) !== FALSE) {
            $array = [...$array, $datos];
        }
        fclose($flujo);
    } catch (Throwable $th) {
        throw $th;
    }

    $arrayObjetos = [];

    for ($i = 1; $i < count($array); $i++) {
        $arrayObjetos = [...$arrayObjetos, $objeto = new InventoryModel($array[$i][0], (string)$array[$i][1], (int)$array[$i][2], (int)$array[$i][3])];
    }

    for ($i = 0; $i < count($arrayObjetos); $i++) {
        if ($arrayObjetos[$i]->getId() == $id) {
            $elegida = $arrayObjetos[$i];
            $posicion = $i + 1;
        }
    }

    if ($name != "") {
        $elegida->setNombre($name);
    }
    if ($cantidad != "") {
        $elegida->setCantidad($cantidad);
    }
    if ($precio != "") {
        $elegida->setPrecio($precio);
    }

    $linea = $elegida->getId() . "," . $elegida->getNombre() . "," . $elegida->getCantidad() . "," . $elegida->getPrecio() . PHP_EOL;

    try {
        $flujo = fopen($archivo, 'r');
        $archivoArray = [];

        while (!feof($flujo)) {
            $archivoArray = [...$archivoArray, fgets($flujo)];
        }
        $archivoArray[$posicion] = $linea;
        fclose($flujo);
    } catch (Throwable $th) {
        throw $th;
    }

    try {
        $flujo = fopen($archivo, 'w');

        foreach ($archivoArray as $key => $value) {
            fwrite($flujo, $value);
        }

        fclose($flujo);
    } catch (Throwable $th) {
        throw $th;
    }
}

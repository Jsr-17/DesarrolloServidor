<?php
ini_set("display_errors", 1);

include "../model/InventoryModel.php";

if (isset($_POST["name"]) && isset($_POST["quantity"]) && isset($_POST["id"]) && isset($_POST["prize"])) {
    $newProduct = new InventoryModel($_POST["id"], $_POST["name"], $_POST["quantity"], $_POST["prize"]);
    $archivo = "../data/inventory.csv";

    if (!is_file($archivo)) {
        try {
            touch("../data/inventory.csv");
            $flujo = fopen($archivo, "wb+");

            fwrite($flujo, "ID,Nombre,Cantidad,Precio" . PHP_EOL);
            fclose($flujo);

            $flujo = fopen($archivo, "ab+");

            fwrite($flujo, $newProduct->getId() . "," . $newProduct->getNombre() . "," . $newProduct->getCantidad() . "," . $newProduct->getPrecio() . PHP_EOL);
            fclose($flujo);
        } catch (Exception $th) {
            throw $th;
        }
    } else {
        try {

            $flujo = fopen($archivo, "ab+");
            $array = [];
            while (($datos = fgetcsv($flujo, 1000, ",")) !== FALSE) {
                $array = [...$array, $datos];
            }
            fclose($flujo);
            $arrayObjetos = [];
            for ($i = 1; $i < count($array); $i++) {
                $arrayObjetos = [...$arrayObjetos, $objeto = new InventoryModel($array[$i][0], $array[$i][1], $array[$i][2], $array[$i][3])];
            }

            for ($i = 0; $i < count($arrayObjetos); $i++) {
                if ($arrayObjetos[$i]->getId() == $newProduct->getId()) {
                    $repetido = $arrayObjetos[$i];
                    $lineaSustituir = $i + 1;
                    break;
                }
            }

            if (isset($repetido)) {
                $archivoArray = [];
                $repetido->setCantidad($repetido->getCantidad() + $newProduct->getCantidad());
                $linea = $repetido->getId() . "," . $repetido->getNombre() . "," . $repetido->getCantidad() . "," . $repetido->getPrecio() . PHP_EOL;
                $flujo = fopen($archivo, 'r');
                while (!feof($flujo)) {
                    array_push($archivoArray, fgets($flujo));
                }

                fclose($flujo);
                $archivoArray[$lineaSustituir] = $linea;
                $flujo = fopen($archivo, 'w');

                try {
                    foreach ($archivoArray as $key => $value) {
                        fwrite($flujo, $value, 10000);
                    }
                } catch (Exception $e) {
                    echo "error";
                }
                fclose($flujo);

                print_r($archivoArray);
            } else {

                $flujo = fopen($archivo, "ab+");
                fwrite($flujo, $newProduct->getId() . "," . $newProduct->getNombre() . "," . $newProduct->getCantidad() . "," . $newProduct->getPrecio() . PHP_EOL);
                fclose($flujo);
            }
        } catch (Exception $th) {
            throw $th;
        }
    }
}

//header("Location:../index.php");

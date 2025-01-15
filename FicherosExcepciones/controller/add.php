<?php


include "../model/inventoryModel.php";

if (isset($_POST["name"]) && isset($_POST["quantity"]) && isset($_POST["id"]) && isset($_POST["prize"])) {
    $newProduct = new InventoryModel($_POST["id"], $_POST["name"], $_POST["quantity"], $_POST["prize"]);
    $archivo = "../data/inventory.csv";

    if (!is_file($archivo)) {
        try {
            touch("../data/inventory.csv");
            $flujo = fopen($archivo, "wb+");

            fwrite($flujo, "ID,Nombre,Cantidad,Precio");
            fclose($flujo);

            $flujo = fopen($archivo, "ab+");

            fwrite($flujo,  $newProduct->getId() . "," . $newProduct->getNombre() . "," . $newProduct->getCantidad() . "," . $newProduct->getPrecio() . PHP_EOL);
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
            //fwrite($flujo, "\n" . $newProduct->getId() . "," . $newProduct->getNombre() . "," . $newProduct->getCantidad() . "," . $newProduct->getPrecio());
            fclose($flujo);
            $arrayObjetos = [];
            for ($i = 1; $i < count($array); $i++) {
                $arrayObjetos = [...$arrayObjetos, $objeto = new InventoryModel($array[$i][0], $array[$i][1], $array[$i][2], $array[$i][3])];
            }

            for ($i = 0; $i < count($arrayObjetos); $i++) {
                if ($arrayObjetos[$i]->getId() == $newProduct->getId()) {
                    $repetido = $arrayObjetos[$i];
                    $lineaSustituir = $i + 1;
                    print_r($lineaSustituir);
                    break;
                }
            }

            if (isset($repetido)) {
                $lineas = file($archivo);
                $repetido->setCantidad($repetido->getCantidad() + $newProduct->getCantidad());
                $lineas[$lineaSustituir] = $repetido->getId() . "," . $repetido->getNombre() . "," . $repetido->getCantidad() . "," . $repetido->getPrecio();
                $flujo = fopen($archivo, 'w');
                foreach ($lineas as $linea) {
                    fwrite($flujo, $linea . PHP_EOL);
                }

                // Cerrar el archivo
                fclose($flujo);
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

header("Location:../index.php");

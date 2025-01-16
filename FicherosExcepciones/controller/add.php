<?php

include "../model/InventoryModel.php";

//registra la peticion post con los valores de los formularios

if (isset($_POST["name"]) && isset($_POST["quantity"]) && isset($_POST["id"]) && isset($_POST["prize"])) {
    //Creo un objeto con los datos que recibo del post de los formularios
    $newProduct = new InventoryModel($_POST["id"], $_POST["name"], $_POST["quantity"], $_POST["prize"]);
    //ruta en la que se deberia encontrar el archivo
    $archivo = "../data/inventory.csv";

    //En el caso de que no exista el archivo 
    if (!is_file($archivo)) {
        try {
            //se crea el archivo en la ruta definida con la extension csv
            touch("../data/inventory.csv");
            //abrimos un flujo de datos con escritura y lectura
            $flujo = fopen($archivo, "wb+");
            //Escribimos la línea indice la cual se encarga de añadir los datos  
            fwrite($flujo, "ID,Nombre,Cantidad,Precio" . PHP_EOL);
            //Se cierra el flujo de datos 
            fclose($flujo);
            // lo reabro
            $flujo = fopen($archivo, "ab+");
            //escribo en el archivo los datos que contiene el nuevo producto
            fwrite($flujo, $newProduct->getId() . "," . $newProduct->getNombre() . "," . $newProduct->getCantidad() . "," . $newProduct->getPrecio() . PHP_EOL);
            //cierra el flujo de datos
            fclose($flujo);
        } catch (Exception $th) {
            throw $th;
        }
        //En el caso de que exista el archivo
    } else {
        try {
            //Abrimos el flujo de datos del archivo en modo escritura y lectura
            $flujo = fopen($archivo, "ab+");

            //defino un array vacío
            $array = [];

            //mientras que haya datos leo los datos y los guardo en un array
            while (($datos = fgetcsv($flujo, 1000, ",")) !== FALSE) {
                $array = [...$array, $datos];
            }
            //cierro el flujo de datos 
            fclose($flujo);
            //defino una nueva variable contenedora que sera la que contenga todos los objetos 
            $arrayObjetos = [];
            //itero sobre cada uno de los datos del array creando dinamicamente objetos con ellos y almacenandolos dentro del array de objetos
            for ($i = 1; $i < count($array); $i++) {
                $arrayObjetos = [...$arrayObjetos, $objeto = new InventoryModel($array[$i][0], $array[$i][1], $array[$i][2], $array[$i][3])];
            }
            //Itero sobre el array de onjetos
            for ($i = 0; $i < count($arrayObjetos); $i++) {
                //busco coincidencias por el elemento Get
                if ($arrayObjetos[$i]->getId() == $newProduct->getId()) {
                    //guardo el valor del producto repetido en una variable
                    $repetido = $arrayObjetos[$i];
                    //Guardo en una variable el valor de la linea donde la encuentro
                    $lineaSustituir = $i + 1;
                    //evito que se siga ejecutando el bucle
                    break;
                }
            }
            //en el caso de que haya una coincidencia y encuentre un dato repetido
            if (isset($repetido)) {
                //creo un nuevo array
                $archivoArray = [];
                //Modifico el valor del elemento repetido
                $repetido->setCantidad($repetido->getCantidad() + $newProduct->getCantidad());
                //creo la linea que va a ser introducida en el archivo excel
                $linea = $repetido->getId() . "," . $repetido->getNombre() . "," . $repetido->getCantidad() . "," . $repetido->getPrecio() . PHP_EOL;
                //abro la linea de flujo con el objetivo de almacenar los datos del archivo en memoria
                $flujo = fopen($archivo, 'r');
                //recorro los datos del archivo guardando cada una de las lineas en el array hasta que llega al final del archivo
                while (!feof($flujo)) {
                    array_push($archivoArray, fgets($flujo));
                }
                //cierra el flujo de los datos del archivo
                fclose($flujo);
                //en el array de los archivos sustituyo la linea que he preparado antes con los datos de la cantidad aumentada 
                $archivoArray[$lineaSustituir] = $linea;
                //vuelvo a abrir el flujo de datos del archivo esta vez con permisos de escritura
                $flujo = fopen($archivo, 'w');

                try {
                    //Escribo dentro del archivo cada dato dentro del flujo
                    foreach ($archivoArray as $key => $value) {
                        fwrite($flujo, $value, 10000);
                    }
                } catch (Exception $e) {
                    echo "error";
                }
                //ciera el flujo de datos 
                fclose($flujo);
            } else {
                //en el caso de que no exita el dato se crea un archivo de lectura y escritura desde el final
                $flujo = fopen($archivo, "ab+");
                //Se introduce los datos dentro del archivo
                fwrite($flujo, $newProduct->getId() . "," . $newProduct->getNombre() . "," . $newProduct->getCantidad() . "," . $newProduct->getPrecio() . PHP_EOL);
                fclose($flujo);
            }
        } catch (Exception $th) {
            throw $th;
        }
    }
}
//Cuando se finaliza la logica de escritura , lectura etc de los archivos vuelve a la vista principal
header("Location:../index.html");

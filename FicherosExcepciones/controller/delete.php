<?php
include "../model/InventoryModel.php";
$archivo = "../data/inventory.csv";
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if (is_file($archivo)) {
        try {
            //Abrimos el flujo de datos del archivo en modo  lectura
            $flujo = fopen($archivo, "r");

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
            //recorro en busqueda de una id en los elementos del array
            foreach ($arrayObjetos as $key => $value) {
                if ($value->getId() == $id) {
                    unset($arrayObjetos[$key]);
                }
            }
            //declaro una variable de ayuda 
            $almacenTemporal = [];
            //Recorro el array de objetos asignando esos valores en un nuevo array 
            foreach ($arrayObjetos as $key => $value) {
                $almacenTemporal[$key][0] = $value->getId();
                $almacenTemporal[$key][1] = $value->getNombre();
                $almacenTemporal[$key][2] = $value->getCantidad();
                $almacenTemporal[$key][3] = $value->getPrecio();
            }
            //uno ambos arrays
            $arrayFinal = [$array[0], ...$almacenTemporal];

            try {
                $flujo = fopen($archivo, "w");
                //recorro el array 
                foreach ($arrayFinal as $linea) {
                    //une cada parte del array en un string 
                    $lineaCsv = implode(',', $linea);

                    //escribe las lineas en el archivo
                    fwrite($flujo, $lineaCsv . PHP_EOL);
                }

                fclose($flujo);
            } catch (Throwable $th) {
                throw $th;
            }
        } catch (Throwable $th) {
            throw $th;
        }
    }
}

header("Location:../index.html");

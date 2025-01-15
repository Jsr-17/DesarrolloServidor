<?php
$archivo = "./archivos/ficheroPrueba";
$data = "Saludo esto sera escrito al inicio";
$data2 = " y esto sera escrito al final";

if (is_file($archivo)) {
    $prueba1 = fopen($archivo, "rb+");


    fwrite($prueba1, $data);

    fclose($prueba1);


    $prueba1 = fopen($archivo, "ab+");

    fwrite($prueba1, $data2);

    fclose($prueba1);

    $prueba1 = fopen($archivo, "rb+");

    while (!feof($prueba1)) {
        $str = fgets($prueba1);
        echo $str;
    }

    fclose($prueba1);


}

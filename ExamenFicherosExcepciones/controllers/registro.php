<?php
ini_set("display_errors", 1);

include "../model/FormModelData.php";
$nombre = (string) $_POST["nombre"];
$id = (int) $_POST["id"];
$examen = (string) $_POST["examen"];
$nota = (int) $_POST["nota"];
$asignatura = (string) $_POST["asignatura"];

$archivo = "../data/resultados.csv";

if (!file($archivo)) {
    touch($archivo);
    try {
        $flujo = fopen($archivo, "w");
        fwrite($flujo, "ID;Nombre;Asignatura;Examen;Nota" . PHP_EOL);
        fclose($flujo);
    } catch (\Throwable $th) {
        throw $th;
    }

} else {
    $archivo = "../data/resultados.csv";

    $alumno = new FormModelData($id, $asignatura, $examen, $nota, $nombre);

    $datos = [];
    try {
        $flujo = fopen($archivo, "r");

        while (($data = fgetcsv($flujo, 1000, ";")) !== FALSE) {
            $datos = [...$datos, $data];
        }
        fclose($flujo);
    } catch (\Throwable $th) {
        throw $th;
    }

    try {
        $linea = $alumno->getId() . ";" . $alumno->getNombre() . ";" . $alumno->getAsignatura() . ";" . $alumno->getExamen() . ";" . $alumno->getNota() . PHP_EOL;

        $flujo = fopen($archivo, "ab+");

        fwrite($flujo, $linea);
        fclose($flujo);
    } catch (\Throwable $th) {
        throw $th;
    }


}


header("Location: ../index.php");
